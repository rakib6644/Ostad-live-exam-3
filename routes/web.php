<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function (Request $request) {
    $name = $request->query('name');
    $email = $request->query('email');

    Session::put('name', $name);

    // session(['name' => $name, 'email' => $email]);
    Log::info("Name: {$name} and email: {$email}");

    return response()->json([
        "status" => "success",
        "message" => "User info stored in session and logged."
    ], 201);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
