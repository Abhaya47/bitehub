<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodTag extends Model
{
    //
    protected $table = 'food_tags';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'description' => 'string',
    ];
}
