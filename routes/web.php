<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

sleep(1);

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->except('index');