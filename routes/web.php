<?php

use App\Livewire\Login;
use App\Livewire\Landing;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class)->name('landing');

Route::get('/home', HomePage::class)->name('home');

Route::get('/login', Login::class)->name('login');
