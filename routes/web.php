<?php

use App\Livewire\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/login', Login::class)->name('login');