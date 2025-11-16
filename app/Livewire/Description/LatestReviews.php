<?php

namespace App\Livewire\Description;

use Livewire\Component;

class LatestReviews extends Component
{

    public $reviews;

    public function mount($reviews){
        $this->reviews = collect($reviews);
        return $this->reviews;
    }


    public function render()
    {
        return view('livewire.description_components.latest_reviews');
    }
}
