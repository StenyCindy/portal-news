<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portalnews', function () {
    return view('portalnews', ['title' => "Portal News"]);
});

Route::get('/entertainment', function () {
    return view('entertainment', ['title' => "Entertainment"]);
});

Route::get('/sports', function () {
    return view('sports', ['title' => "Sports"]);
});

Route::get('/food', function () {
    return view('food', ['title' => "Food"]);
});

Route::get('/health', function () {
    return view('health', ['title' => "Health"]);
});