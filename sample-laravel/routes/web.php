<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

// Route::get('users', [
//     UserController::class, 'index'
// ]);

Route::get('/registers', function () {
    return view('register');    
})->name('registers');

Route::post('/validates', [
    RegisterController::class, 'checkValidate'
])->name('validates');

Route::get('/users', [
    RegisterController::class, 'showTableUser'
])->name('users');
