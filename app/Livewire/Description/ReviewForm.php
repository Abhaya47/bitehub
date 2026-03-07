<?php

namespace App\Livewire\Description;

use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ReviewForm extends Component
{
    use WithFileUploads;

    public $restaurantId;
    public $rating = 5;
    public $review = '';
    public $images = [];
    public $isOpen = false;

    protected $listeners = ['openReviewForm' => 'open'];

    protected $rules = [
        'rating' => 'required|numeric|min:1|max:5',
        'review' => 'required|string|min:10',
        'images.*' => 'nullable|image|max:5120', // 5MB Max
    ];

    public function mount($restaurantId)
    {
        $this->restaurantId = $restaurantId;
    }

    public function open()
    {
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
        $this->reset(['rating', 'review', 'images']);
    }

    public function setRating($value)
    {
        $this->rating = $value;
    }

    public function submit()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->validate();

        $imagePaths = [];
        if ($this->images) {
            foreach ($this->images as $image) {
                $imagePaths[] = $image->store('reviews', 'public');
            }
        }

        Review::create([
            'user_id' => Auth::id(),
            'restaurant_id' => $this->restaurantId,
            'rating' => $this->rating,
            'review' => $this->review,
            'file_path' => $imagePaths,
        ]);

        $this->close();
        $this->dispatch('review-submitted');
        
        // Use a sweetalert or browser event for success
        $this->dispatch('notify', [
            'type' => 'success',
            'message' => 'Your review has been submitted successfully!'
        ]);
    }

    public function render()
    {
        return view('livewire.description_components.review-form');
    }
}
