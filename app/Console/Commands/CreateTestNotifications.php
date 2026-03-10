<?php

namespace App\Console\Commands;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Console\Command;

class CreateTestNotifications extends Command
{
    protected $signature = 'notifications:test';

    protected $description = 'Create test notifications for development';

    public function handle()
    {
        // Get all users with 'customer' role
        $customers = User::where('role', 'customer')->get();

        if ($customers->isEmpty()) {
            $this->error('No customers found!');

            return 1;
        }

        $messages = [
            [
                'title' => 'New Restaurant Alert!',
                'message' => 'A new Italian restaurant has opened near your location.',
            ],
            [
                'title' => 'Review Your Experience',
                'message' => 'How was your recent visit to Burger Palace? Leave a review!',
            ],
            [
                'title' => 'Special Weekend Offer',
                'message' => 'Get 20% off on all restaurants this weekend. Use code: WEEKEND20',
            ],
            [
                'title' => 'Order Delivered Successfully',
                'message' => 'Your recent order from Pizza Express has been delivered. Enjoy!',
            ],
            [
                'title' => 'Profile Update',
                'message' => 'Your profile has been successfully updated.',
            ],
            [
                'title' => 'New Menu Items',
                'message' => 'Your favorite restaurant has added new items to their menu.',
            ],
            [
                'title' => 'Loyalty Points Earned',
                'message' => 'You earned 50 loyalty points from your last order.',
            ],
            [
                'title' => 'Event Reminder',
                'message' => 'Don\'t forget about the food festival happening this weekend!',
            ],
        ];

        foreach ($messages as $index => $data) {
            $notice = Notice::create([
                'title' => $data['title'],
                'message' => $data['message'],
                'target_role' => 'customer',
                'type' => 'notice',
                'is_published' => true,
                'created_by' => 1,
            ]);

            // Distribute to all customers
            foreach ($customers as $customer) {
                $customer->notificationReads()->create([
                    'notice_id' => $notice->id,
                    'is_read' => $index < 3,
                ]);
            }
        }

        $totalNotifications = $customers->first()->notificationReads()->count();
        $unreadNotifications = $customers->first()->notificationReads()->where('is_read', false)->count();

        $this->info('Test notifications created successfully!');
        $this->info('Total notifications per customer: '.$totalNotifications);
        $this->info('Unread notifications: '.$unreadNotifications);

        return 0;
    }
}
