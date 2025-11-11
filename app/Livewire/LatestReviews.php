<?php

namespace App\Livewire;

use App\Models\Restaurant;
use Livewire\Component;

class LatestReviews extends Component
{

    public $restaurant;

    public function mount(Restaurant $restaurant){
         $this->restaurant= Restaurant::with(['reviews' => function($query){
            $query->orderBy('created_at', 'desc');
        }])->find($restaurant->id);
         return $this->restaurant;
    }

    public function render()
    {
        return view('livewire.description_components.latest_reviews');
    }
}
