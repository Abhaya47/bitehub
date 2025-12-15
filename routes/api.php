<?php

use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['web'])->get('/getUserData', function () {
    $id = auth()->id();
    $data=[
        'id' => $id,
        "signature" => hash_hmac('sha256', $id, env('APP_KEY'))
    ];
    return response()->json($data);
});
Route::post('/sendMessage', [ChatController::class, 'sendMessage']);
Route::post('/receiveMessage', [ChatController::class, 'receiveMessage']);
