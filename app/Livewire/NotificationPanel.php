<?php

namespace App\Livewire;

use App\Services\NotificationService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class NotificationPanel extends Component
{
    use WithPagination;

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
        if (! $user) {
            return;
        }

        $this->unreadCount = $this->notificationService->getUnreadCount($user);
    }

    public function markAsRead($notificationId): void
    {
        $user = Auth::user();
        if (! $user) {
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
        if (! $user) {
            return;
        }

        $this->notificationService->markAllAsRead($user);
        $this->loadNotifications();
    }

    public function deleteNotification($notificationId): void
    {
        $user = Auth::user();
        if (! $user) {
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
        $this->isOpen = ! $this->isOpen;

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

    public function getNotificationsProperty()
    {
        $user = Auth::user();
        if (! $user) {
            return collect();
        }

        return $user->notificationReads()
            ->with('notice')
            ->latest()
            ->take(5)
            ->get();
    }

    public function getTotalNotificationsProperty()
    {
        $user = Auth::user();
        if (! $user) {
            return 0;
        }

        return $user->notificationReads()->count();
    }

    public function render()
    {
        return view('livewire.notification-panel', [
            'notifications' => $this->notifications,
            'totalNotifications' => $this->totalNotifications,
        ]);
    }
}
