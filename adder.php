<?php

use App\Models\Restaurant;
use App\Services\RatingService;

// Bootstrap Laravel
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Your code
$ratingService = app(RatingService::class);

$restaurants = Restaurant::all();

foreach ($restaurants as $restaurant) {
    $ratingService->createRating($restaurant);
}

echo "Ratings added successfully!\n";
