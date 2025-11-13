<?php

namespace App\Livewire;

use Livewire\Component;

class RatingSlider extends Component
{

    public array $stars=[];

    public function mount($reviews){
        dd($reviews[0]['rating']);
    }

    public function render()
    {
        return view('livewire.description_components.rating-slider');
    }
}
