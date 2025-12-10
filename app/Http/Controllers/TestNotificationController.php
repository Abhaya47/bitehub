<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestNotificationController extends Controller
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function createTestNotice(Request $request)
    {
        $user = Auth::user();
        
        if (!$user || $user->role !== 'admin') {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Create a test notice
        $notice = $this->notificationService->createNotice([
            'created_by' => $user->id,
            'title' => 'Test Notification',
            'message' => 'This is a test notification to verify the system is working correctly.',
            'target_role' => 'user',
            'type' => 'notice',
            'is_published' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Test notification created successfully',
            'notice_id' => $notice->id,
        ]);
    }
}