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
          $this->restaurants=Restaurant::query()->join('ratings', 'restaurants.id', '=', 'ratings.restaurant_id')->select('restaurants.*','ratings.rating')->orderBy('ratings.rating','desc')->limit(7)->get();
            return $this->restaurants;
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('livewire.home-page');
    }

}
