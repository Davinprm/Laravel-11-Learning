<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Davin Permana', 'email' => 'davinpermana64@gmail.com']);
});