<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use App\Models\Restaurant;
use Livewire\Attributes\Layout;
use Stevebauman\Location\Request;
use Stevebauman\Location\Facades\Location;

#[Layout('layouts.app')]
class Description extends Component
{
    public $restaurant;
    public $reviews;
    public $latestReviews;
    public $averageRating;
    public $totalReviews;
    public $position;

    public function mount(Restaurant $restaurant)
    {

        // Load reviews with user relationship
        $this->reviews = $this->$restaurant->reviews()->with('user')->get();

        // Load latest reviews globally (most recent 4 reviews)
        $this->latestReviews = Review::with('user', 'restaurant')->latest()->take(4)->get();

        // Calculate average rating and total reviews
        // $this->totalReviews = $this->reviews->count();
        // $this->averageRating = $this->totalReviews > 0
        //     ? round($this->reviews->avg('rating'), 1)
        //     : 0;

        $ip = Request()->ip();

        // For local testing
        if ($ip == '127.0.0.1' || $ip == '::1') {
            $ip = '103.1.92.0'; // Kathmandu, Nepal
        }

        $this->$position = Location::get($ip);
    }

    public function render()
    {
        return view('livewire.description');
    }
}
