<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\RestaurantMenuController;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Description\Description;
use App\Livewire\Home\HomePage;
use App\Livewire\Landing;
use App\Livewire\ProfileSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');
Route::middleware(['web'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::get('/forgot-password', ForgotPassword::class)
    ->middleware('guest')
    ->name('password.email');
Route::get('/reset-password/{token}', ResetPassword::class)
    ->middleware('guest')
    ->name('password.reset');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login');
})->name('logout');

Route::get('/menus/{menu}/view', RestaurantMenuController::class)
    ->name('menus.view');

Route::get('/description/{restaurant}', Description::class)
    ->name('description');

Route::get('/profile-settings', ProfileSettings::class)->name('profile.settings');


Route::get('/home', HomePage::class)->name('home');

Route::get('/location', [LocationController::class, 'index']);
