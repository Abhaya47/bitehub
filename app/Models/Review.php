<?php

namespace App\Models;

use App\Observers\ReviewObserver;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([ReviewObserver::class])]
class Review extends Model
{
    //
    protected $table = 'reviews';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
       'user_id',
        'restaurant_id',
        'review',
        'rating',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'user_id'=>'integer',
        'restaurant_id'=>'integer',
        'review'=>'string',
        'rating'=>'float',
        'created_at'=>'datetime',
        'updated_at'=>'datetime',
    ];


    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
}

    /*
     * Serialize date
     */
    /**
     * @param DateTimeInterface $date
     * @return string
     */
    protected  function serializeDate(DateTimeInterface $date): string{
        return $date->format('Y-m-d H:i:s');
    }
}
