<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create sample restaurants
        \App\Models\Restaurant::create([
            'name' => 'Aambo Momo',
            'address' => 'Jhamsikhel, Lalitpur',
            'pan_number' => 123456789,
            'established_date' => '2020-01-01',
            'owner_id' => 1,
        ]);

        \App\Models\Restaurant::create([
            'name' => 'Jamuna Sekuwa',
            'address' => 'Kalanki, Kathmandu',
            'pan_number' => 987654321,
            'established_date' => '2019-05-15',
            'owner_id' => 1,
        ]);

        // Create sample reviews
        \App\Models\Review::create([
            'user_id' => 1,
            'restaurant_id' => 1,
            'review' => 'Great food and service!',
            'rating' => 4.9,
        ]);

        \App\Models\Review::create([
            'user_id' => 1,
            'restaurant_id' => 2,
            'review' => 'Amazing sekuwa, highly recommended!',
            'rating' => 4.2,
        ]);
    }
}
