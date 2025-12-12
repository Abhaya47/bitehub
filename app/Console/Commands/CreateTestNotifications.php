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
        $user = User::find(1);
        
        if (!$user) {
            $this->error('User not found!');
            return 1;
        }

        // Mark existing published notices as unread for testing
        $notices = Notice::where('is_published', true)->where('target_role', 'user')->get();
        foreach ($notices as $notice) {
            $exists = $user->notificationReads()->where('notice_id', $notice->id)->exists();
            if (!$exists) {
                $user->notificationReads()->create([
                    'notice_id' => $notice->id,
                    'is_read' => false,
                ]);
            }
        }
        
        // Create additional test notifications
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
                'target_role' => 'user',
                'type' => 'notice',
                'is_published' => true,
                'created_by' => 1, // Admin user ID
            ]);
            
            $user->notificationReads()->create([
                'notice_id' => $notice->id,
                'is_read' => $index < 3, // Mark first 3 as read
            ]);
        }
        
        $this->info('Test notifications created successfully!');
        $this->info('Total notifications for user: ' . $user->notificationReads()->count());
        $this->info('Unread notifications: ' . $user->notificationReads()->where('is_read', false)->count());
        
        return 0;
    }
}
