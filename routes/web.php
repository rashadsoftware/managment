<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AuthController@index')->name('auth.index');
Route::get('/forgot-password', 'AuthController@forgot')->name('auth.forgot');
Route::get('/recover-password', 'AuthController@recover')->name('auth.recover');

Route::prefix('profile')->group(function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
});