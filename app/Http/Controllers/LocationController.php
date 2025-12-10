<?php

namespace App\Http\Controllers;

use App\Services\LocationService;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected LocationService $locationService;

    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    public function index(Request $request)
    {
        // This would typically return location data or location selection interface
        // For now, return a simple response
        return response()->json([
            'message' => 'Location endpoint working',
            'current_location' => $this->locationService->getCurrentLocation(),
        ]);
    }
}