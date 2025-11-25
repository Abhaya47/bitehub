<?php

namespace App\Models;

use App\Observers\RestaurantObserver;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy([RestaurantObserver::class])]
class Restaurant extends Model
{
    //

    protected $table = 'restaurants';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'address',
        'pan_number',
        'established_date',
        'owner_id'
    ];

    //    protected $hidden = [
    //        'pan_number'
    //    ];

    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'pan_number' => 'integer',
        'established_date' => 'date',
        'owner_id' => 'integer',
    ];

    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'owner_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'restaurant_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class, 'restaurant_id');
    }

    public function tags(): HasMany
    {
        return $this->hasMany(RestaurantTag::class, 'restaurant_id');
    }

    public function menus(): HasMany
    {
        return $this->hasMany(RestaurantMenu::class);
    }

    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class, 'restaurant_id');
    }


    //serialize data
    /**
     * @param DateTimeInterface $date
     * @return string
     */
    protected  function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d');
    }
}
