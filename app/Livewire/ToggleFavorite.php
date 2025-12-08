<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;

class ToggleFavorite extends Component
{
    public $restaurantId;
    public $isFavorited = false;

    public function mount($restaurantId)
    {
        $this->restaurantId = $restaurantId;
        $this->checkIfFavorited();
    }

    public function checkIfFavorited()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->isFavorited = $user->favoriteRestaurants()->where('restaurant_id', $this->restaurantId)->exists();
        } else {
            $this->isFavorited = false;
        }
    }

    public function toggleFavorite()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if ($this->isFavorited) {
            $user->favoriteRestaurants()->detach($this->restaurantId);
            $this->isFavorited = false;
            $this->dispatch('show-toast', message: 'Removed from favorites', type: 'error');
        } else {
            $user->favoriteRestaurants()->attach($this->restaurantId);
            $this->isFavorited = true;
            $this->dispatch('show-toast', message: 'Added to favorites', type: 'success');
        }
    }

    public function render()
    {
        return view('livewire.toggle-favorite');
    }
}