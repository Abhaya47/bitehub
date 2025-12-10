<?php

namespace App\Livewire;

use App\Services\NotificationService;
use Livewire\Component;
use Livewire\Attributes\Reactive;
use Illuminate\Support\Facades\Auth;

class NotificationPanel extends Component
{
    public $notifications = [];
    public $unreadCount = 0;
    public $isOpen = false;
    
    protected NotificationService $notificationService;

    public function boot(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function mount(): void
    {
        $this->loadNotifications();
    }

    public function loadNotifications(): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $this->notifications = $this->notificationService->getRecentNotifications($user, 10);
        $this->unreadCount = $this->notificationService->getUnreadCount($user);
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
            $this->loadNotifications();
        }
    }

    public function markAllAsRead(): void
    {
        $user = Auth::user();
        if (!$user) {
            return;
        }

        $this->notificationService->markAllAsRead($user);
        $this->loadNotifications();
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
            $this->loadNotifications();
        }
    }

    public function togglePanel(): void
    {
        $this->isOpen = !$this->isOpen;
        
        if ($this->isOpen) {
            $this->loadNotifications();
        }
    }

    public function closePanel(): void
    {
        $this->isOpen = false;
    }

    public function refreshNotifications(): void
    {
        $this->loadNotifications();
    }

    public function render()
    {
        return view('livewire.notification-panel');
    }
}
