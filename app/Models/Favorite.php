<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    protected $table = 'favorites';

    protected $fillable = [
        'user_id',
        'restaurant_id',
    ];

    /**
     * Get the user who favorited the restaurant.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the restaurant that was favorited.
     */
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }
}
