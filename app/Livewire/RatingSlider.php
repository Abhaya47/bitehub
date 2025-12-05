<?php

namespace App\Livewire;

use App\Models\Rating;
use Livewire\Component;

class RatingSlider extends Component
{
    public $ratings;
    public $averageRating;
    public $five;
    public $four;
    public $three;
    public $two;
    public $one;
    public $count;

    function has_decimal($num)
    {
        return is_float($num + 0) && floor($num) != $num;
    }

    public function mount($restaurantId)
    {
        $rating = Rating::where('restaurant_id', $restaurantId)->first();

        if (!$rating) {
            $this->averageRating = 0;
            $this->five = 0;
            $this->four = 0;
            $this->three = 0;
            $this->two = 0;
            $this->one = 0;
            $this->count = 0;
            return;
        }

        $this->averageRating = $rating->rating;
        $this->five = $rating->five_star;
        $this->four = $rating->four_star;
        $this->three = $rating->three_star;
        $this->two = $rating->two_star;
        $this->one = $rating->one_star;

        $this->count =
            $this->five +
            $this->four +
            $this->three +
            $this->two +
            $this->one;
    }

    public function render()
    {
        return view('livewire.rating-slider');
    }
}
