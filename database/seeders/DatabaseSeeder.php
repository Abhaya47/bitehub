<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\FoodTag;
use App\Models\Message;
use App\Models\Offer;
use App\Models\Rating;
use App\Models\Restaurant;
use App\Models\RestaurantMenu;
use App\Models\RestaurantTag;
use App\Models\Review;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $owner = User::create([
            'name' => 'Restaurant Owner',
            'email' => 'owner@bitehub.com',
            'password' => bcrypt('password'),
            'role' => 'owner',
            'email_verified_at' => now(),
        ]);

        $customer = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            'email_verified_at' => now(),
        ]);

        $customer2 = User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            'email_verified_at' => now(),
        ]);

        $customer3 = User::create([
            'name' => 'Mike Johnson',
            'email' => 'mike@example.com',
            'password' => bcrypt('password'),
            'role' => 'customer',
            'email_verified_at' => now(),
        ]);

        $restaurants = [
            [
                'name' => 'Aambo Momo',
                'address' => 'Jhamsikhel, Lalitpur',
                'pan_number' => 123456789,
                'established_date' => '2020-01-01',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'Jamuna Sekuwa',
                'address' => 'Kalanki, Kathmandu',
                'pan_number' => 987654321,
                'established_date' => '2019-05-15',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'Bhotewadi Kitchen',
                'address' => 'Thamel, Kathmandu',
                'pan_number' => 456123789,
                'established_date' => '2021-03-20',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'Momo House',
                'address' => 'Paknajol, Kathmandu',
                'pan_number' => 789456123,
                'established_date' => '2018-08-10',
                'owner_id' => $owner->id,
            ],
            [
                'name' => 'Newa Chulo',
                'address' => 'Patan Dhoka, Lalitpur',
                'pan_number' => 321654987,
                'established_date' => '2017-11-25',
                'owner_id' => $owner->id,
            ],
        ];

        $createdRestaurants = [];
        foreach ($restaurants as $restaurantData) {
            $restaurant = Restaurant::create($restaurantData);
            $createdRestaurants[] = $restaurant;

            Rating::create([
                'restaurant_id' => $restaurant->id,
                'rating' => rand(35, 50) / 10,
            ]);
        }

        $tags = [
            ['name' => 'Momo', 'description' => 'Specializing in dumplings'],
            ['name' => 'Sekuwa', 'description' => 'Grilled meat specialties'],
            ['name' => 'Nepali', 'description' => 'Traditional Nepali cuisine'],
            ['name' => 'Chinese', 'description' => 'Chinese food'],
            ['name' => 'Fast Food', 'description' => 'Quick bites'],
            ['name' => 'Vegetarian', 'description' => 'Veg-friendly options'],
            ['name' => 'Halal', 'description' => 'Halal certified'],
            ['name' => 'Pizza', 'description' => 'Italian pizzas'],
            ['name' => 'Burgers', 'description' => 'American burgers'],
            ['name' => 'Coffee', 'description' => 'Cafes and coffee shops'],
        ];

        $createdTags = [];
        foreach ($tags as $tagData) {
            $tag = Tag::create($tagData);
            $createdTags[] = $tag;
        }

        foreach ($createdRestaurants as $index => $restaurant) {
            $numTags = rand(2, 4);
            $shuffledTags = $createdTags;
            shuffle($shuffledTags);
            $selectedTags = array_slice($shuffledTags, 0, $numTags);

            foreach ($selectedTags as $tag) {
                RestaurantTag::create([
                    'tag_id' => $tag->id,
                    'restaurant_id' => $restaurant->id,
                ]);
            }

            RestaurantMenu::create([
                'restaurant_id' => $restaurant->id,
                'title' => 'Main Menu',
                'page_count' => 1,
                'file_path' => 'menus/menu_'.$restaurant->id.'.pdf',
            ]);

            if ($index % 2 === 0) {
                Offer::create([
                    'restaurant_id' => $restaurant->id,
                    'title' => 'Grand Opening Special',
                    'description' => 'Get 20% off on your first order',
                    'start_at' => now(),
                    'end_at' => now()->addMonths(2),
                    'discount_type' => 'percentage',
                    'discount_value' => 20.00,
                ]);
            }

            if ($index % 3 === 0) {
                Offer::create([
                    'restaurant_id' => $restaurant->id,
                    'title' => 'Weekend Deal',
                    'description' => 'Flat Rs. 200 off on orders above Rs. 1000',
                    'start_at' => now(),
                    'end_at' => now()->addMonths(1),
                    'start_time' => '12:00:00',
                    'end_time' => '23:00:00',
                    'discount_type' => 'fixed',
                    'discount_value' => 200.00,
                ]);
            }
        }

        $foods = [
            ['name' => 'Buff Momo', 'restaurant_id' => 1],
            ['name' => 'Chicken Momo', 'restaurant_id' => 1],
            ['name' => 'Veg Momo', 'restaurant_id' => 1],
            ['name' => 'Fried Momo', 'restaurant_id' => 1],
            ['name' => 'Buff Sekuwa', 'restaurant_id' => 2],
            ['name' => 'Chicken Sekuwa', 'restaurant_id' => 2],
            ['name' => 'Mix Sekuwa', 'restaurant_id' => 2],
            ['name' => 'Dal Bhat', 'restaurant_id' => 3],
            ['name' => 'Thali Set', 'restaurant_id' => 3],
            ['name' => 'Chicken Fry', 'restaurant_id' => 3],
            ['name' => 'Steam Momo', 'restaurant_id' => 4],
            ['name' => 'Jhol Momo', 'restaurant_id' => 4],
            ['name' => 'Chatamari', 'restaurant_id' => 5],
            ['name' => 'Sel Roti', 'restaurant_id' => 5],
        ];

        $createdFoods = [];
        foreach ($foods as $foodData) {
            $food = Food::create($foodData);
            $createdFoods[] = $food;
        }

        $foodTags = [
            ['name' => 'Spicy', 'description' => 'Hot and spicy'],
            ['name' => 'Non-Veg', 'description' => 'Contains meat'],
            ['name' => 'Veg', 'description' => 'Vegetarian'],
            ['name' => 'Popular', 'description' => 'Customer favorite'],
            ['name' => 'Special', 'description' => 'Chef special'],
        ];

        $createdFoodTags = [];
        foreach ($foodTags as $tagData) {
            $tag = FoodTag::create($tagData);
            $createdFoodTags[] = $tag;
        }

        foreach ($createdFoods as $food) {
            $numTags = rand(1, 3);
            $shuffledTags = $createdFoodTags;
            shuffle($shuffledTags);
            $selectedTags = array_slice($shuffledTags, 0, $numTags);

            foreach ($selectedTags as $tag) {
                DB::table('food_foodtags')->insert([
                    'tag_id' => $tag->id,
                    'food_id' => $food->id,
                ]);
            }
        }

        $reviews = [
            ['user_id' => $customer->id, 'restaurant_id' => 1, 'review' => 'Great food and service!', 'rating' => 4.9],
            ['user_id' => $customer->id, 'restaurant_id' => 1, 'review' => 'Delicious momos, will come again!', 'rating' => 5.0],
            ['user_id' => $customer2->id, 'restaurant_id' => 1, 'review' => 'Best momos in town!', 'rating' => 4.7],
            ['user_id' => $customer->id, 'restaurant_id' => 2, 'review' => 'Amazing sekuwa, highly recommended!', 'rating' => 4.2],
            ['user_id' => $customer2->id, 'restaurant_id' => 2, 'review' => 'Good place for Nepali cuisine!', 'rating' => 4.0],
            ['user_id' => $customer3->id, 'restaurant_id' => 2, 'review' => 'Great ambiance and food!', 'rating' => 4.5],
            ['user_id' => $customer->id, 'restaurant_id' => 3, 'review' => 'Authentic Nepali taste!', 'rating' => 4.8],
            ['user_id' => $customer2->id, 'restaurant_id' => 3, 'review' => 'Love the dal bhat!', 'rating' => 4.6],
            ['user_id' => $customer->id, 'restaurant_id' => 4, 'review' => 'Quick service and tasty food!', 'rating' => 4.3],
            ['user_id' => $customer3->id, 'restaurant_id' => 5, 'review' => 'Traditional Newari food is amazing!', 'rating' => 4.9],
        ];

        foreach ($reviews as $reviewData) {
            Review::create($reviewData);
        }

        Message::create([
            'user_id' => $customer->id,
            'restaurant_id' => 1,
            'message' => 'Do you deliver to Baneshwor?',
        ]);

        Message::create([
            'user_id' => $customer2->id,
            'restaurant_id' => 2,
            'message' => 'What are your opening hours?',
        ]);

        Message::create([
            'user_id' => $owner->id,
            'restaurant_id' => 1,
            'message' => 'Yes, we deliver to Baneshwor!',
        ]);
    }
}
