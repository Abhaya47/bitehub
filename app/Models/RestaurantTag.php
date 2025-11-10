<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantTag extends Model
{
    //

    protected $table = 'restaurant_tags';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'tag_id',
        'restaurant_id',
    ];

    protected $casts = [
        'tag_id' => 'string',
        'restaurant_id' => 'string'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    public function tag(){
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
