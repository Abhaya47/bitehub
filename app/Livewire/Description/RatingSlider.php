<?php

namespace App\Livewire\Description;

use App\Models\Rating;
use App\Models\Review;
use Livewire\Component;

class RatingSlider extends Component
{
    public $ratings;

    public $averageRating;

    public $five = 0;

    public $four = 0;

    public $three = 0;

    public $two = 0;

    public $one = 0;

    public $count = 0;

    public function has_decimal($num)
    {
        return is_float($num + 0) && floor($num) != $num;
    }

    public function mount($restaurantId)
    {
        $this->ratings = Rating::query()->where('restaurant_id', $restaurantId)->get();

        $reviews = Review::where('restaurant_id', $restaurantId)->get();
        $this->count = $reviews->count();

        $this->five = $reviews->filter(fn ($r) => $r->rating >= 4.5)->count();
        $this->four = $reviews->filter(fn ($r) => $r->rating >= 3.5 && $r->rating < 4.5)->count();
        $this->three = $reviews->filter(fn ($r) => $r->rating >= 2.5 && $r->rating < 3.5)->count();
        $this->two = $reviews->filter(fn ($r) => $r->rating >= 1.5 && $r->rating < 2.5)->count();
        $this->one = $reviews->filter(fn ($r) => $r->rating < 1.5)->count();

        if ($this->ratings->isNotEmpty()) {
            $this->averageRating = $this->ratings[0]['rating'];
        } else {
            $this->averageRating = 0;
        }
    }

    public function render()
    {
        return view('livewire.description_components.rating-slider');
    }
}
