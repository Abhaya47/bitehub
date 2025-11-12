<?php

namespace App\Observers;

use App\Models\Rating;
use App\Models\Restaurant;
use App\Models\Review;
use App\Services\RatingService;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


class RestaurantObserver
{

    public function __construct(readonly RatingService $ratingService){}

    /**
     * Handle the Restaurant "created" event.
     */
    public function created(Restaurant $restaurant): void
    {
        //
        $this->ratingService->createRating($restaurant);
    }

    /**
     * Handle the Restaurant "updated" event.
     */
    public function updated(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "deleted" event.
     */
    public function deleted(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "restored" event.
     */
    public function restored(Restaurant $restaurant): void
    {
        //
    }

    /**
     * Handle the Restaurant "force deleted" event.
     */
    public function forceDeleted(Restaurant $restaurant): void
    {
        //
    }
}
