<?php

namespace App\Livewire\Home;

use App\Models\Restaurant;
use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;


#[Layout('layouts.app')]
class HomePage extends Component
{
    public string $name;
    public $position;
    public $selectedTagId = null;

    public function mount(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $this->name = Auth::user()->name;
        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    #[On('tag-selected')]
    public function handleTagSelected($tagId)
    {
        $this->selectedTagId = ($this->selectedTagId == $tagId) ? null : $tagId;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landing');
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $restaurants = Restaurant::query()
            ->with(['offers' => function ($query) {
                $query->active();
            }])
            ->leftJoin('ratings', 'restaurants.id', '=', 'ratings.restaurant_id')
            ->select('restaurants.*', 'ratings.rating')
            ->when($this->selectedTagId, function ($query) {
                $query->whereHas('tags', function ($q) {
                    $q->where('tag_id', $this->selectedTagId);
                });
            })
            ->orderBy('ratings.rating', 'desc')
            ->limit(7)
            ->get();

        return view('livewire.home_components.home-page', [
            'restaurants' => $restaurants
        ]);
    }
}
