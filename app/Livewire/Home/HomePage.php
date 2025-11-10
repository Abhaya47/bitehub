<?php

namespace App\Livewire\Home;

use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]
class HomePage extends Component
{
    public $restaurants;
    public string $name;

    public function mount()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $this->name=Auth::user()->name;
        $this->restaurants = Restaurant::with('reviews')->get()->map(function ($restaurant) {
            $restaurant->averageRating = $restaurant->reviews->count() > 0
                ? round($restaurant->reviews->avg('rating'), 1)
                : 0;
            $restaurant->totalReviews = $restaurant->reviews->count();
            return $restaurant;
        });
    }

    public function render()
    {
        return view('livewire.home-page');
    }

}
