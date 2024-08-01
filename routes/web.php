<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect('/profile');
});

Route::get('/profile', [ProfileController::class, 'show']);

