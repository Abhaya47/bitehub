<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\LocationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class Profile extends Component
{
    use WithPagination;

    public $activeTab = 'reviews';
    public $position;

    protected $paginationTheme = 'tailwind';

    public function mount(Request $request)
    {
        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;

        // Reset pagination when switching tabs
        $this->resetPage('reviews');
        $this->resetPage('favorites');
    }

    public function deleteReview($reviewId)
    {
        $user = Auth::user();
        $review = $user->review()->find($reviewId);

        if ($review) {
            $review->delete();

            session()->flash('message', 'Review deleted successfully.');
        }
    }

    public function removeFavorite($restaurantId)
    {
        $user = Auth::user();
        $user->favoriteRestaurants()->detach($restaurantId);

        session()->flash('message', 'Restaurant removed from favorites.');
    }

    public function render()
    {
        $user = Auth::user();

        // Paginate reviews - 4 per page
        $reviews = $user->review()
            ->with('restaurant')
            ->latest()
            ->paginate(4, ['*'], 'reviews');

        // Paginate favorites - 3 per page
        $favorites = $user->favoriteRestaurants()
            ->with(['ratingInfo', 'offers'])
            ->paginate(3, ['*'], 'favorites');

        return view('livewire.profile', [
            'user' => $user,
            'reviews' => $reviews,
            'favorites' => $favorites,
            'position' => $this->position,
        ]);
    }
}
