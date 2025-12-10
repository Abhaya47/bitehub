<?php

namespace Database\Seeders;

use App\Models\Notice;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function run(): void
    {
        // Get admin user
        $admin = User::where('role', 'admin')->first();
        
        if (!$admin) {
            $this->command->warn('No admin user found. Skipping notice seeding.');
            return;
        }

        // Create sample notices
        $notices = [
            [
                'title' => 'Welcome to BiteHub!',
                'message' => 'Thank you for joining our platform. Explore amazing restaurants and food options near you.',
                'target_role' => 'user',
                'type' => 'notice',
                'is_published' => true,
            ],
            [
                'title' => 'New Features Available',
                'message' => 'We have added new features to help restaurant owners manage their listings more effectively.',
                'target_role' => 'owner',
                'type' => 'announcement',
                'is_published' => true,
            ],
            [
                'title' => 'System Maintenance',
                'message' => 'Scheduled maintenance will occur tonight from 2 AM to 4 AM. Services may be temporarily unavailable.',
                'target_role' => 'admin',
                'type' => 'maintenance',
                'is_published' => true,
            ],
            [
                'title' => 'Special Offer Launch',
                'message' => 'Exciting new offers are now available for users. Check out the latest deals from your favorite restaurants!',
                'target_role' => 'user',
                'type' => 'alert',
                'is_published' => true,
            ],
        ];

        foreach ($notices as $noticeData) {
            $noticeData['created_by'] = $admin->id;
            $notice = Notice::updateOrCreate(
                ['title' => $noticeData['title'], 'created_by' => $admin->id],
                $noticeData
            );
            
            // Distribute notifications if published and not already distributed
            if ($notice->is_published && $notice->notificationReads()->count() === 0) {
                $this->notificationService->distributeNotice($notice);
            }
            
            $this->command->info("Created notice: {$notice->title}");
        }
    }
}
