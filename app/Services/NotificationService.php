<?php

namespace App\Services;

use App\Models\Notice;
use App\Models\NotificationRead;
use App\Models\User;
use Illuminate\Support\Collection;

class NotificationService
{
    public function createNotice(array $data): Notice
    {
        $notice = Notice::create($data);

        if ($notice->is_published) {
            $this->distributeNotice($notice);
        }

        return $notice;
    }

    public function updateNotice(Notice $notice, array $data): Notice
    {
        $wasPublished = $notice->is_published;

        $notice->update($data);

        if (! $wasPublished && $notice->is_published) {
            $this->distributeNotice($notice);
        } elseif ($wasPublished && ! $notice->is_published) {
            $this->revokeNotice($notice);
        }

        return $notice;
    }

    public function distributeNotice(Notice $notice): void
    {
        $users = $this->getUsersByRole($notice->target_role);

        foreach ($users as $user) {
            $existingRead = NotificationRead::where('user_id', $user->id)
                ->where('notice_id', $notice->id)
                ->first();

            if (! $existingRead) {
                NotificationRead::create([
                    'user_id' => $user->id,
                    'notice_id' => $notice->id,
                    'is_read' => false,
                ]);
            }
        }
    }

    public function revokeNotice(Notice $notice): void
    {
        $notice->notificationReads()->delete();
    }

    public function createDirectNotification(User $user, string $title, string $message, string $type = 'general'): Notice
    {
        $notice = Notice::create([
            'created_by' => auth()->id(),
            'title' => $title,
            'message' => $message,
            'target_role' => $user->role,
            'type' => $type,
            'is_published' => true,
        ]);

        NotificationRead::create([
            'user_id' => $user->id,
            'notice_id' => $notice->id,
            'is_read' => false,
        ]);

        return $notice;
    }

    public function markAsRead(NotificationRead $notificationRead): void
    {
        $notificationRead->markAsRead();
    }

    public function markAllAsRead(User $user): int
    {
        return $user->notificationReads()->where('is_read', false)->update([
            'is_read' => true,
            'read_at' => now(),
        ]);
    }

    public function getUnreadCount(User $user): int
    {
        return $user->notificationReads()->where('is_read', false)->count();
    }

    public function getRecentNotifications(User $user, int $limit = 10): Collection
    {
        return $user->notificationReads()
            ->with('notice')
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getPaginatedNotifications(User $user, int $perPage = 20)
    {
        return $user->notificationReads()
            ->with('notice')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    private function getUsersByRole(string $role): Collection
    {
        return User::where('role', $role)->get();
    }

    public function deleteNotification(NotificationRead $notificationRead): void
    {
        $notificationRead->delete();
    }

    public function clearAllNotifications(User $user): int
    {
        return $user->notificationReads()->delete();
    }
}
