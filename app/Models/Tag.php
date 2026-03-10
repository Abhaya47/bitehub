<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    //
    protected $table = 'tags';

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

    public function restaurants(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class, 'restaurant_tags', 'tag_id', 'restaurant_id');
    }
}
