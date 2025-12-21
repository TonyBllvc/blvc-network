<?php

use Illuminate\Support\Facades\Route;

// Laravel begins from the top and begins to match the routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/black', function () {
    $black_list = [
        ["name" => "Black", "skill" => 75, "id" => 1],
        ["name" => "John", "skill" => 35, "id" => 2]
    ];

    return view('black.index', ["greeting" => "hello", "black" => $black_list]);
});

Route::get('/black/create', function () {
    return view('black.create');
});

Route::get('/black/{id}', function ($id) {
   
    return view('black.show', ["id" => $id]);
});

