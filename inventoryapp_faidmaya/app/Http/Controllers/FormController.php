<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;

        return view('welcome', compact('first_name', 'last_name'));
    }
}
