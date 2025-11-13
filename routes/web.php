<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ResetPassword;
use App\Livewire\Home\HomePage;
use App\Livewire\Landing;
use App\Livewire\Description;
use App\Http\Controllers\LocationController;

use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

Route::middleware(['web'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
Route::get('/home', HomePage::class)->name('home');
Route::get('/forgot-password', ForgotPassword::class)
    ->middleware('guest')
    ->name('password.email');
Route::get('/reset-password/{token}', ResetPassword::class)
    ->middleware('guest')
    ->name('password.reset');

Route::get('/description/{restaurant}', Description::class)
    ->name('description');



Route::get('/location', [LocationController::class, 'index']);
