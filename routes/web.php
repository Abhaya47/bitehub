<?php

use App\Livewire\Login;
use App\Livewire\Landing;
use App\Livewire\HomePage;
use App\Livewire\Register;
use App\Livewire\Description;
use App\Livewire\ResetPassword;
use App\Livewire\ForgotPassword;
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
