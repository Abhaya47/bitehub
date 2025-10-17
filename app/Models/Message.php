<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    use HasFactory;

    protected $table = 'messages';
    protected array $foreignKey = ['restaurantId','userId'];

    protected array $dates = ['createdAt', 'updatedAt'];

    protected $primaryKey = ['id'];

    protected $fillable = [
        'id',
        'message',
        'user_id',
        'restaurant_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'message' => 'string',
        'user_id' => 'integer',
        'restaurant_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function restaurant(){
        return $this->belongsTo(Restaurant::class,'restaurant_id','id');
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
