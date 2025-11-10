<?php

use App\Models\Review;
use App\Services\RatingService;

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$ratingService = app(RatingService::class);

$reviews = Review::all();

foreach ($reviews as $review) {
    $ratingService->calculateRating($review);
}

echo "✅ Ratings recalculated for all reviews.\n";
