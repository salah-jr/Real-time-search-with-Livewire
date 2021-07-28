<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('users.index');
});

Auth::routes();

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('home');
