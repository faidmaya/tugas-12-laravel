<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/welcome', function (Request $request) {
    $nama = $request->first_name . ' ' . $request->last_name;
    return view('welcome', compact('nama'));
});
