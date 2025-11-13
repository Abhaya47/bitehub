<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Stevebauman\Location\Request;
use Stevebauman\Location\Facades\Location;

#[Layout('layouts.app')]
class Description extends Component
{
    public $restaurant;
    public $reviews;
    public $averageRating;
    public $totalReviews;
    public $position;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant->loadCount('reviews')
            ->load(['reviews' => function ($query) {
                $query->with('user')->latest()->take(4);
            }]);
        $this->totalReviews = $restaurant->reviews_count;
        $this->reviews = $this->restaurant->reviews;
    }

    public function render()
    {
        return view('livewire.description');
    }
}
