<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestNotificationController;

// Test route for creating notifications (remove in production)
Route::get('/test-notification', [TestNotificationController::class, 'createTestNotice'])
    ->name('test.notification')
    ->middleware('auth');