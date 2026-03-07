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
    public $averageRating = 0;
    public $totalReviews = 0;
    public $position;
    public $menus;
    public $offers;

    public $ratingCounts = [
        5 => 0,
        4 => 0,
        3 => 0,
        2 => 0,
        1 => 0
    ];

    public function mount(Request $request, Restaurant $restaurant)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->restaurant = $restaurant->loadCount('reviews')
            ->load([
                'reviews' => function ($query) {
                    $query->with('user')->latest();
                },
                'menus' => function ($query) {
                    $query->orderBy('order', 'asc');
                },
                'offers' => function ($query) {
                    $query->active();
                }
            ]);

        $this->totalReviews = $this->restaurant->reviews_count;
        $this->reviews = $this->restaurant->reviews;
        
        if ($this->totalReviews > 0) {
            $this->averageRating = round($this->reviews->avg('rating'), 1);
            
            // Calculate exact counts for each rating
            foreach($this->reviews as $review) {
                $roundedRating = (int)round($review->rating);
                if (isset($this->ratingCounts[$roundedRating])) {
                    $this->ratingCounts[$roundedRating]++;
                }
            }
        } else {
            // Fallback to the Rating model if no reviews yet (might be legacy or seeded data)
            $this->averageRating = $restaurant->rating->rating ?? 0;
        }

        $this->menus = $this->restaurant->menus ?? collect();
        $this->offers = $this->restaurant->offers;

        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function render()
    {
        return view('livewire.description');
    }
}
