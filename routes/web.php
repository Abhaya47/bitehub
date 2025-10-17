<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
