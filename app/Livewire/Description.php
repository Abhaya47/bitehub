<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use App\Models\Restaurant;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Description extends Component
{
    public $restaurant;
    public $reviews;
    public $latestReviews;
    public $averageRating;
    public $totalReviews;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;

        // Load reviews with user relationship
        $this->reviews = $restaurant->reviews()->with('user')->get();

        // Load latest reviews globally (most recent 4 reviews)
        $this->latestReviews = Review::with('user', 'restaurant')->latest()->take(4)->get();

        // Calculate average rating and total reviews
        // $this->totalReviews = $this->reviews->count();
        // $this->averageRating = $this->totalReviews > 0
        //     ? round($this->reviews->avg('rating'), 1)
        //     : 0;
    }

    public function render()
    {
        return view('livewire.description');
    }
}
