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
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id');
    }

}
