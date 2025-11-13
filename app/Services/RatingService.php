<?php

namespace App\Services;

use App\Models\Rating;
use App\Models\Restaurant;
use App\Models\Review;

class RatingService
{
    public function calculateRating(Review $review): void
    {
         $column="";
        $average = round(Review::query()->where('restaurant_id', $review->restaurant_id)->average('rating'), 1);
        switch ($review->rating) {
            case 1:
                $column = "one_star";
                break;
            case 2:
                $column = "two_star";
                break;
            case 3:
                $column = "three_star";
                break;
            case 4:
                $column = "four_star";
                break;
            case 5:
                $column = "five_star";
                break;
        }
        $rating=Rating::query()->updateOrCreate(
            ['restaurant_id' => $review->restaurant_id],
            ['rating' => $average],
        );
        $rating->increment($column);
        $rating->save();
    }

    public function createRating(Restaurant $restaurant): void
    {
        Rating::query()->create([
            'rating' => 0,
            'restaurant_id' => $restaurant->id,
        ]);
    }


}
