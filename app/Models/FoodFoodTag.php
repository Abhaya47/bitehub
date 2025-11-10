<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodFoodTag extends Model
{
    //
    protected $table = 'food_foodtag';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
    ];
}
