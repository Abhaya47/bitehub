<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class LatestReviews extends Component
{

    public $reviews;

    public function mount($reviews){
//        $this->reviews = collect($reviews);
        dd($reviews[0]['rating']);

        foreach($reviews as $review){
        }
//        dd($reviews);

        return $this->reviews;
    }


    public function render()
    {
        return view('livewire.description_components.latest_reviews');
    }
}
