<?php

namespace App\Services;

use App\Models\Rating;
use App\Models\Restaurant;
use App\Models\Review;

class RatingService
{
    public function calculateRating(Review $review):void
    {
        $average=round(Review::query()->where('restaurant_id',$review->restaurant_id)->average('rating'),1);
        Rating::query()->updateOrCreate(
            ['restaurant_id'=>$review->restaurant_id],
            ['rating'=>$average],
        );
    }

    public function createRating(Restaurant $restaurant):void{
        Rating::query()->create([
            'rating'=>0,
            'restaurant_id'=>$restaurant->id,
        ]);
    }
}
