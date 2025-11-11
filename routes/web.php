<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::view('/','home');
Route::view('/contact', 'contact');

// resource route
Route::resource('jobs', JobController::class);

// auth
Route::get('/register',[RegisterUserController::class, 'create']);
Route::post('/register',[RegisterUserController::class, 'store']);

Route::get('/login', [LoginUserController::class,'create']);
Route::post('/login', [LoginUserController::class,'store']);
