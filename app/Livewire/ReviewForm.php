<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use App\Models\Restaurant;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

#[Layout('layouts.app')]

class ReviewForm extends Component
{
    use WithFileUploads;

    #[Validate('required|integer|min:1|max:5')]
    public $rating = 4;

    #[Validate('required|string|max:50')]
    public $headline = '';

    #[Validate('required|string|max:255')]
    public $review = '';

    public $images = [];

    public $restaurant_id;
    public $successMessage = '';
    public $errorMessage = '';
    public $imagePreviews = [];

    public function mount($restaurant_id = null)
    {
        $this->restaurant_id = $restaurant_id;
    }

    public function updatedImages()
    {
        $this->imagePreviews = [];
        foreach ($this->images as $image) {
            $this->imagePreviews[] = $image->temporaryUrl();
        }
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
        $this->updatedImages();
    }

    public function submit()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            $this->errorMessage = 'You must be logged in to submit a review.';
            return;
        }

        // Custom validation for array items
        $this->validate([
            'rating' => 'required|integer|min:1|max:5',
            'headline' => 'required|string|max:50',
            'review' => 'required|string|max:255',
            'images' => 'array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Check if restaurant exists
            $restaurant = Restaurant::find($this->restaurant_id);
            if (!$restaurant) {
                $this->errorMessage = 'Restaurant not found.';
                return;
            }

            // Check if user has already reviewed this restaurant
            $existingReview = Review::where('user_id', Auth::id())
                ->where('restaurant_id', $this->restaurant_id)
                ->first();

            if ($existingReview) {
                $this->errorMessage = 'You have already reviewed this restaurant.';
                return;
            }

            // Process images
            $imagePaths = [];
            if (!empty($this->images)) {
                foreach ($this->images as $image) {
                    $path = $image->store('review-images', 'public');
                    $imagePaths[] = $path;
                }
            }

            // Create new review
            Review::create([
                'user_id' => Auth::id(),
                'restaurant_id' => $this->restaurant_id,
                'rating' => $this->rating,
                'headline' => $this->headline,
                'review' => $this->review,
                'file_path' => $imagePaths,
            ]);

            $this->successMessage = 'Your review has been submitted successfully!';

            // Reset form
            $this->reset(['rating', 'headline', 'review', 'images', 'imagePreviews', 'errorMessage']);
            $this->rating = 4; // Reset to default rating

            // Dispatch event to refresh reviews list
            $this->dispatch('reviewSubmitted');
        } catch (\Exception $e) {
            $this->errorMessage = 'Failed to submit review. Please try again.';
            Log::error('Review submission failed: ' . $e->getMessage());
        }
    }

    public function clearMessages()
    {
        $this->successMessage = '';
        $this->errorMessage = '';
    }

    public function render()
    {
        return view('livewire.review-form');
    }
}
