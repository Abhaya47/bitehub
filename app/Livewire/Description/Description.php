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
    public $menus;
    public $offers;

    public $count = 0;
    public $five = 0;
    public $four = 0;
    public $three = 0;
    public $two = 0;
    public $one = 0;

    public function mount(Request $request, Restaurant $restaurant)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->restaurant = $restaurant->loadCount('reviews')
            ->load([
                'reviews' => function ($query) {
                    $query->with('user')->latest()->take(4);
                },
                'menus' => function ($query) {
                    $query->orderBy('order', 'asc');
                },
            ]);
        $this->totalReviews = $restaurant->reviews_count;
        $this->reviews = $this->restaurant->reviews;
        $this->menus = $this->restaurant->menus ?? collect();
        $this->offers = $this->restaurant->offers()->get();

        // Calculate counts of each rating
        $this->count = $this->reviews->count();
        $this->five = $this->reviews->where('rating', 5)->count();
        $this->four = $this->reviews->where('rating', 4)->count();
        $this->three = $this->reviews->where('rating', 3)->count();
        $this->two = $this->reviews->where('rating', 2)->count();
        $this->one = $this->reviews->where('rating', 1)->count();

        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function render()
    {
        return view('livewire.description');
    }
}
