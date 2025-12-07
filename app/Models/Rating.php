<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    public $tableName = "ratings";

    public $timestamps = false;

    protected $fillable = [
        'rating',
        'restaurant_id',
        'five_star',
        'four_star',
        'three_star',
        'two_star',
        'one_star',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

}
