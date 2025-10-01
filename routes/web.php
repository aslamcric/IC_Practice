<?php

use App\Http\Controllers\MailSendingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/weather', [WeatherController::class, 'WeatherPage']);


// ------------------
// // Class 32 Rabbil Hasan
// Route::post('createUser', [UserController::class, 'createUser']);
// // Route::post('loginUser', [UserController::class, 'loginUser']);

// Route::post('/createRole', [UserController::class, 'createRole']);
// Route::post('/createPermission', [UserController::class, 'createPermission']);
// Route::post('/assignPermissionToRole', [UserController::class, 'assignPermissionToRole']);
// Route::post('/assignRoleToUser', [UserController::class, 'assignRoleToUser']);
// Route::post('/login', [UserController::class, 'login']);


// // Blog
// Route::get('/readBlog', [PostController::class, 'readBlog'])->middleware('auth','permission:read-blog');
// Route::post('/createBlog', [PostController::class, 'createBlog'])->middleware('auth','permission:create-blog');
// Route::post('/deleteBlog/{id}', [PostController::class, 'deleteBlog'])->middleware('auth','permission:delete-blog');
// Route::post('/updateBlog/{id}', [PostController::class, 'updateBlog'])->middleware('auth','permission:edit-blog');

// // Postman Documentation for class 32
// // https://documenter.getpostman.com/view/48825060/2sB3QFRCrF

// ----------------------------


// class 33
Route::get('/test', function () {
    return view('email.WelcomeMailTemplate');
});

Route::get('/sendEmail', [MailSendingController::class, 'sendEmail']);
