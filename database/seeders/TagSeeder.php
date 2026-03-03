<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\RestaurantTag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the main food category tags
        $tags = [
            ['name' => 'Non-Veg', 'description' => 'Non-vegetarian food items'],
            ['name' => 'Veg', 'description' => 'Vegetarian food items'],
            ['name' => 'Bakery', 'description' => 'Bakery items and desserts'],
            ['name' => 'Liquors', 'description' => 'Alcoholic beverages']
        ];

        $createdTags = [];
        foreach ($tags as $tagData) {
            $tag = Tag::create($tagData);
            $createdTags[$tagData['name']] = $tag;
        }

        // Associate tags with existing restaurants
        $restaurants = [4, 5, 6, 7]; // Actual restaurant IDs in the database

        foreach ($restaurants as $restaurantId) {
            foreach ($createdTags as $tag) {
                RestaurantTag::create([
                    'tag_id' => $tag->id,
                    'restaurant_id' => $restaurantId
                ]);
            }
        }
    }
}