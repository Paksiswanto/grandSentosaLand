<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DashboardController;

Route::get('/',[DashboardController::class, 'index'])->name('home');
Route::get('login',function(){
    return view('login');
});
Route::get('dashboard',[DashboardController::class, 'home'])->name('welcome');
Route::resource('photo',PhotoController::class);
Route::post('login',[DashboardController::class, 'login'])->name('login');
