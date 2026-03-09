<?php

namespace App\Services;

use App\Models\Rating;
use App\Models\Restaurant;
use App\Models\Review;

class RatingService
{
    public function calculateRating(Review $review): void
    {
        if ($review->parent_id !== null) {
            return;
        }

        $restaurantId = $review->restaurant_id;
        
        // Get the average rating for top-level reviews (not replies)
        $average = round(Review::where('restaurant_id', $restaurantId)
            ->whereNull('parent_id')
            ->average('rating'), 1);
            
        // Count each star type for top-level reviews
        $counts = Review::where('restaurant_id', $restaurantId)
            ->whereNull('parent_id')
            ->selectRaw('rating, count(*) as count')
            ->groupBy('rating')
            ->pluck('count', 'rating');

        Rating::updateOrCreate(
            ['restaurant_id' => $restaurantId],
            [
                'rating' => $average ?: 0,
                'one_star' => $counts->get(1, 0),
                'two_star' => $counts->get(2, 0),
                'three_star' => $counts->get(3, 0),
                'four_star' => $counts->get(4, 0),
                'five_star' => $counts->get(5, 0),
            ]
        );
    }

    public function createRating(Restaurant $restaurant): void
    {
        Rating::query()->create([
            'rating' => 0,
            'restaurant_id' => $restaurant->id,
        ]);
    }


}
