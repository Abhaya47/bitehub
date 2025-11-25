<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    //Mass assignable attributes
    protected $fillable = [
        'restaurant_id',
        'title',
        'description',
        'start_time',
        'end_time',
        'start_at',
        'end_at',
        'discount_type',
        'discount_value',
        'availed_count',
    ];

    //Relationships
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    //Scope for active offers
    public function scopeActive($query)
    {
        return $query->where('start_at', '<=', now())
            ->where('end_at', '>=', now());
    }
}
