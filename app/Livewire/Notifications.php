<?php

namespace App\Livewire;

use App\Services\NotificationService;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Notifications extends Component
{
    use WithPagination;

    protected NotificationService $notificationService;

    public function boot(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function markAsRead($notificationId): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $notificationRead = $user->notificationReads()->find($notificationId);
        if ($notificationRead) {
            $this->notificationService->markAsRead($notificationRead);
        }
    }

    public function markAllAsRead(): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $this->notificationService->markAllAsRead($user);
    }

    public function deleteNotification($notificationId): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $notificationRead = $user->notificationReads()->find($notificationId);
        if ($notificationRead) {
            $this->notificationService->deleteNotification($notificationRead);
        }
    }

    public function render()
    {
        $user = Auth::user();
        if (!$user) {
            return view('livewire.notifications', ['notifications' => collect()]);
        }

        $notifications = $user->notificationReads()
            ->with('notice')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('livewire.notifications', [
            'notifications' => $notifications,
        ]);
    }
}
