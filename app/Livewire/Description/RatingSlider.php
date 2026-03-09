<?php

namespace App\Livewire\Description;

use App\Models\Rating;
use App\Models\Review;
use Livewire\Attributes\On;
use Livewire\Component;

class RatingSlider extends Component
{
    public $restaurantId;

    public function mount($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    #[On('review-submitted')]
    public function refreshRating()
    {
        // This will trigger a re-render and re-calculation of computed properties
    }

    public function getReviewsProperty()
    {
        return Review::where('restaurant_id', $this->restaurantId)->get();
    }

    public function getRatingStatsProperty()
    {
        $reviews = $this->reviews;
        $count = $reviews->count();
        
        $stats = [
            'count' => $count,
            'five' => $reviews->filter(fn ($r) => $r->rating >= 4.5)->count(),
            'four' => $reviews->filter(fn ($r) => $r->rating >= 3.5 && $r->rating < 4.5)->count(),
            'three' => $reviews->filter(fn ($r) => $r->rating >= 2.5 && $r->rating < 3.5)->count(),
            'two' => $reviews->filter(fn ($r) => $r->rating >= 1.5 && $r->rating < 2.5)->count(),
            'one' => $reviews->filter(fn ($r) => $r->rating < 1.5)->count(),
        ];

        $rating = Rating::where('restaurant_id', $this->restaurantId)->first();
        $stats['averageRating'] = $rating ? $rating->rating : 0;

        return $stats;
    }

    public function render()
    {
        $stats = $this->ratingStats;
        
        return view('livewire.description_components.rating-slider', [
            'averageRating' => $stats['averageRating'],
            'count' => $stats['count'],
            'five' => $stats['five'],
            'four' => $stats['four'],
            'three' => $stats['three'],
            'two' => $stats['two'],
            'one' => $stats['one'],
        ]);
    }
}
