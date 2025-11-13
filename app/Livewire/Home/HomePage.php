<?php

namespace App\Livewire\Home;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
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

        //For local testing
        if ($ip == '127.0.0.1' || $ip == '::1') {
            $ip = '124.41.204.2'; // Kathmandu, Nepal
        }

        // Get location from IP
        $response = Http::get("http://ip-api.com/json/{$ip}");
        $data = $response->json();
        $cityName = $data['city'] ?? 'Unknown';

        $this->position = (object) ['cityName' => $cityName];
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
