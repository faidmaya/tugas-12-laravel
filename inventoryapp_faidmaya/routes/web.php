<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [FormController::class, 'index']);
Route::post('/welcome', [FormController::class, 'welcome']);
