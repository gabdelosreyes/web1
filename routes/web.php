<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(2);
    return Inertia::render('Home', ['name'=> 'Gab']);
});
// Route::inertia('/','Home', ['name'=> 'Gab']); // Much cleaner route

