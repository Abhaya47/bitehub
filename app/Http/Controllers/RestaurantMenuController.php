<?php

namespace App\Http\Controllers;

use App\Models\RestaurantMenu;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RestaurantMenuController extends Controller
{
    public function __invoke(RestaurantMenu $menu): Response|StreamedResponse
    {
        abort_unless($menu->file_path, 404);

        $disk = Storage::disk('public')->exists($menu->file_path)
            ? 'public'
            : (Storage::disk('private')->exists($menu->file_path) ? 'private' : null);

        abort_unless($disk, 404);

        $extension = pathinfo($menu->file_path, PATHINFO_EXTENSION);
        $downloadName = trim($menu->title ?: 'menu') . ($extension ? ".{$extension}" : '');

        return Storage::disk($disk)->response($menu->file_path, $downloadName);
    }
}


