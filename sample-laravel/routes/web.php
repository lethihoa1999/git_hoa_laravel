<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::get('users', [
    UserController::class, 'index'
]);

Route::get('register', function () {
    return view('register');    
});

Route::post('register_validate', [
    RegisterController::class, 'valid'
])->name('regis');

Route::get('user', [
    RegisterController::class, 'show_table'
])->name('user');
