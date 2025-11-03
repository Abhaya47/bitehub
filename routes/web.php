<?php

use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Landing;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

Route::middleware(['web'])->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});
Route::get('/home', HomePage::class)->name('home');

