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
    public $averageRating;
    public $totalReviews;

    public function mount(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
        $this->reviews = $restaurant->reviews()->with('user')->latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.description');
    }
}
