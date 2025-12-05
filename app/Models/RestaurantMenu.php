<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class RestaurantMenu extends Model
{
    protected $fillable = [
        'restaurant_id',
        'title',
        'page_count',
        'file_path',
        'preview_path',
    ];

    protected $casts = [
        'page_count' => 'integer',
    ];

    protected $appends = [
        'file_url',
        'preview_url',
    ];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function getFileUrlAttribute(): ?string
    {
        return $this->file_path
            ? Storage::disk('public')->url($this->file_path)
            : null;
    }

    public function getPreviewUrlAttribute(): ?string
    {
        return $this->preview_path
            ? Storage::disk('public')->url($this->preview_path)
            : null;
    }
}

