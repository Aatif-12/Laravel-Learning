<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('userForm', 'userForm');
Route::post('/addUser', [UserController::class, 'addUser']);
// Route::post('/addNew', [NewController::class, 'addNew']);

Route::view('about', 'about')->middleware('check1');

Route::get('users', [UserController::class, 'users']);
