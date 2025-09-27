<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Before Login
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', fn()=>response()->json(['message'=>'Please Login'], 401))->name('login');

// After Login
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});

// Task Manager:After Login
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/task/list', [TaskController::class, 'taskList']);
    Route::post('/task/create', [TaskController::class, 'taskCreate']);
    Route::post('/task/update/{id}', [TaskController::class, 'taskUpdate']);
    Route::post('/task/delete/{id}', [TaskController::class, 'taskDelete']);
    Route::get('/task/summary', [TaskController::class, 'taskSummary']);
});
