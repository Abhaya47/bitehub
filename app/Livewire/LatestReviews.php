<?php

namespace App\Livewire;

use App\Models\Restaurant;
use App\Models\Review;
use App\Models\User;
use Livewire\Component;

class LatestReviews extends Component
{

    public $reviews;


    public function mount($reviews): \Illuminate\Support\Collection
    {

        $user= Review::with('user')->find($reviews[0]['id']);
        $reviews[0]['user'] = "potato";
        $this->reviews = collect($reviews);
        return $this->reviews;
    }

    public function render()
    {
        return view('livewire.description_components.latest_reviews');
    }
}
