<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Register
Route::get('/register', function () {
    return view('register');
});

// Welcome (hasil submit register)
Route::post('/welcome', function (Request $request) {
    $nama = $request->first_name . ' ' . $request->last_name;
    return view('welcome', compact('nama'));
});

// ================================
// Category CRUD (Tugas 15)
// ================================
Route::resource('categories', CategoryController::class);
