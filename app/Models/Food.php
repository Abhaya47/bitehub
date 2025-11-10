<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
    protected $table = 'foods';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'food_tag_id',
        'restaurant_id',
    ];

    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'food_tag_id' => 'integer',
        'restaurant_id' => 'integer',
    ];
}
