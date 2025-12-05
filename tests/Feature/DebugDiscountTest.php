<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Restaurant;
use App\Models\Offer;
use Carbon\Carbon;

class DebugDiscountTest extends TestCase
{
    public function test_debug_offers()
    {
        $restaurant = Restaurant::where('name', 'like', '%Alpine Praise%')->first();

        if (!$restaurant) {
            echo "\nRestaurant not found!\n";
            return;
        }

        echo "\nRestaurant: " . $restaurant->name . " (ID: " . $restaurant->id . ")\n";

        $offers = Offer::where('restaurant_id', $restaurant->id)->get();
        echo "Total Offers: " . $offers->count() . "\n";

        foreach ($offers as $offer) {
            echo "Offer ID: " . $offer->id . "\n";
            echo "  Start: " . $offer->start_at . "\n";
            echo "  End:   " . $offer->end_at . "\n";
            echo "  Now:   " . now() . "\n";

            $isActive = $offer->start_at <= now() && $offer->end_at >= now();
            echo "  Is Active (PHP check): " . ($isActive ? 'YES' : 'NO') . "\n";
        }

        $activeOffers = $restaurant->offers()->active()->get();
        echo "Active Offers (Scope): " . $activeOffers->count() . "\n";

        if ($activeOffers->count() > 0) {
            echo "Max Discount: " . $activeOffers->max('discount_value') . "\n";
        }
    }
}
