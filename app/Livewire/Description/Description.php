<?php

namespace App\Livewire\Description;

use App\Models\Restaurant;
use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Description extends Component
{
    public $restaurant;
    public $reviews;
    public $averageRating;
    public $totalReviews;
    public $position;

    public function mount(Request $request, Restaurant $restaurant)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->restaurant = $restaurant->loadCount('reviews')
            ->load(['reviews' => function ($query) {
                $query->with('user')->latest()->take(4);
            }]);
        $this->totalReviews = $restaurant->reviews_count;
        $this->reviews = $this->restaurant->reviews;

        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function render()
    {
        return view('livewire.description');
    }
}
