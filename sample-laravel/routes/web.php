<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class)->only(['index', 'create', 'store']);
