<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Description extends Component
{
    public $restaurant;
    public $reviews;
    public $averageRating ;
    public $totalReviews;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;

        // Load reviews with user relationship
        $this->reviews = $restaurant->reviews()->with('user')->get();

        // // Calculate average rating and total reviews
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
