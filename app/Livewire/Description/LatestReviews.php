<?php

namespace App\Livewire\Description;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class LatestReviews extends Component
{
    public $restaurantId;
    public $sortBy = 'newest';
    public $replyingTo = null;
    public $replyText = '';

    public function mount($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    #[On('review-submitted')]
    public function refreshReviews()
    {
        // This will trigger a re-render
    }

    public function toggleHelpful($reviewId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $review = Review::findOrFail($reviewId);

        if ($review->helpfulUsers()->where('user_id', $userId)->exists()) {
            $review->helpfulUsers()->detach($userId);
            $review->decrement('helpful_count');
            
            $this->dispatch('notify', [
                'type' => 'info',
                'message' => 'Helpful mark removed.'
            ]);
        } else {
            $review->helpfulUsers()->attach($userId);
            $review->increment('helpful_count');
            
            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Marked as helpful!'
            ]);
        }
    }

    public function setReplyingTo($reviewId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $this->replyingTo = ($this->replyingTo === $reviewId) ? null : $reviewId;
        $this->replyText = '';
    }

    public function submitReply($parentId)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->validate([
            'replyText' => 'required|min:5|max:1000',
        ]);

        Review::create([
            'user_id' => Auth::id(),
            'restaurant_id' => $this->restaurantId,
            'review' => $this->replyText,
            'parent_id' => $parentId,
            'rating' => 0, // Replies don't usually have ratings
        ]);

        $this->replyingTo = null;
        $this->replyText = '';
        
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Reply posted successfully!'
        ]);
    }

    public function getReviewsProperty()
    {
        $query = Review::where('restaurant_id', $this->restaurantId)
            ->whereNull('parent_id')
            ->with(['user', 'replies.user', 'helpfulUsers' => function($q) {
                $q->where('user_id', Auth::id());
            }]);

        if ($this->sortBy === 'highest') {
            $query->orderBy('rating', 'desc');
        } else {
            $query->latest();
        }

        return $query->get();
    }

    public function render()
    {
        return view('livewire.description_components.latest_reviews', [
            'reviews' => $this->reviews
        ]);
    }
}
