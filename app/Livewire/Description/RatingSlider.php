<?php

namespace App\Livewire\Description;

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

    function has_decimal($num) {
        return is_float($num + 0) && floor($num) != $num;
    }

    public function mount($restaurantId){
        $this->ratings=Rating::query()->where('restaurant_id',$restaurantId)->get();
        foreach($this->ratings as $rating){
            $this->five=$rating["five_star"];
            $this->four=$rating["four_star"];
            $this->three=$rating["three_star"];
            $this->two=$rating["two_star"];
            $this->one=$rating["one_star"];
        }
        $this->count=$this->five+$this->four+$this->three+$this->two+$this->one;
        $this->averageRating=$this->ratings[0]['rating'];
    }

    public function render()
    {
        return view('livewire.description_components.rating-slider');
    }
}
