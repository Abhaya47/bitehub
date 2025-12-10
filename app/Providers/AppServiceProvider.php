<?php

namespace App\Providers;

use App\Models\Notice;
use App\Observers\NoticeObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(\App\Services\NotificationService::class);
    }

    public function boot(): void
    {
        Notice::observe(NoticeObserver::class);
    }
}
