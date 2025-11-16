<?php

namespace App\Livewire\Home;

use App\Models\Restaurant;
use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('layouts.app')]
class HomePage extends Component
{
    public $restaurants;
    public string $name;
    public $position;

    public function mount(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->name = Auth::user()->name;
        $ip = $request->ip();
        $this->restaurants = Restaurant::query()->join('ratings', 'restaurants.id', '=', 'ratings.restaurant_id')->select('restaurants.*', 'ratings.rating')->orderBy('ratings.rating', 'desc')->limit(7)->get();

        $this->position = LocationService::getLocationFromIP($ip);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('livewire.home_components.home-page');
    }
}
