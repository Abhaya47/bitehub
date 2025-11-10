<?php

namespace App\Observers;

use App\Models\Rating;
use App\Models\Review;
use App\Models\User;
use App\Services\RatingService;
use Illuminate\Support\Facades\Auth;
use function Filament\authorize;

class ReviewObserver
{

    public function __construct(readonly RatingService $ratingService){}

    /**
     * Handle the Review "created" event.
     */
    public function created(Review $review): void
    {
        $this->ratingService->calculateRating($review);
    }

    /**
     * Handle the Review "updated" event.
     */
    public function updated(Review $review): void
    {
        //
        $this->ratingService->calculateRating($review);
    }

    /**
     * Handle the Review "deleted" event.
     */
    public function deleted(Review $review): void
    {
        //
        $this->ratingService->calculateRating($review);
    }

    /**
     * Handle the Review "restored" event.
     */
    public function restored(Review $review): void
    {
        //
        $this->ratingService->calculateRating($review);
    }

    /**
     * Handle the Review "force deleted" event.
     */
    public function forceDeleted(Review $review): void
    {
        //
        $this->ratingService->calculateRating($review);
    }
}
