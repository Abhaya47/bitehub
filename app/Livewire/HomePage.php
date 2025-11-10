<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Livewire\Attributes\Layout;


#[Layout('layouts.app')]
class HomePage extends Component
{
    public $restaurants;

    public function mount()
    {
        // Fetch all restaurants with their reviews for rating calculation
        $this->restaurants = Restaurant::with('reviews')->get()->map(function ($restaurant) {
            $restaurant->averageRating = $restaurant->reviews->count() > 0
                ? round($restaurant->reviews->avg('rating'), 1)
                : 0;
            $restaurant->totalReviews = $restaurant->reviews->count();
            return $restaurant;
        });
        
        
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
