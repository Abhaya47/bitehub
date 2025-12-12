<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Services\LocationService;
use App\Services\NotificationService;
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

    protected NotificationService $notificationService;

    public function boot(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function mount(Request $request)
    {
        $ip = $request->ip();
        $this->position = LocationService::getLocationFromIP($ip);
        
        // Handle tab from URL parameter
        if ($request->has('tab') && in_array($request->get('tab'), ['reviews', 'favorites', 'notifications'])) {
            $this->activeTab = $request->get('tab');
        }
    }

    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;

        // Reset pagination when switching tabs
        $this->resetPage('reviews');
        $this->resetPage('favorites');
        $this->resetPage('notifications');
    }

    public function markAsRead($notificationId): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $notificationRead = $user->notificationReads()->find($notificationId);
        if ($notificationRead) {
            $this->notificationService->markAsRead($notificationRead);
        }
    }

    public function markAllAsRead(): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $this->notificationService->markAllAsRead($user);
        session()->flash('message', 'All notifications marked as read.');
    }

    public function deleteNotification($notificationId): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $notificationRead = $user->notificationReads()->find($notificationId);
        if ($notificationRead) {
            $this->notificationService->deleteNotification($notificationRead);
            session()->flash('message', 'Notification deleted successfully.');
        }
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

        // Paginate notifications - 5 per page
        $notifications = $user->notificationReads()
            ->with('notice')
            ->orderBy('created_at', 'desc')
            ->paginate(5, ['*'], 'notifications');

        return view('livewire.profile', [
            'user' => $user,
            'reviews' => $reviews,
            'favorites' => $favorites,
            'notifications' => $notifications,
            'position' => $this->position,
        ]);
    }
}
