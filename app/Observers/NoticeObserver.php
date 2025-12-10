<?php

namespace App\Observers;

use App\Models\Notice;
use App\Services\NotificationService;

class NoticeObserver
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function created(Notice $notice): void
    {
        if ($notice->is_published) {
            $this->notificationService->distributeNotice($notice);
        }
    }

    public function updated(Notice $notice): void
    {
        $wasPublished = $notice->getOriginal('is_published');
        $isPublished = $notice->is_published;

        if (!$wasPublished && $isPublished) {
            $this->notificationService->distributeNotice($notice);
        } elseif ($wasPublished && !$isPublished) {
            $this->notificationService->revokeNotice($notice);
        }
    }

    public function deleted(Notice $notice): void
    {
        $this->notificationService->revokeNotice($notice);
    }
}