<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

// Laravel begins from the top and begins to match the routes

Route::get('/', function () {
    return view('welcome');
});

// The name property allows us to name the route for easier referencing later in the views(for cases of where and when a change of URL is made in the future)
Route::get('/black', [PeopleController::class, 'index'])->name('black.index'); 

Route::get('/black/create', [PeopleController::class, 'create'])->name('black.create');

// Route::get('/black/{id}', [PeopleController::class, 'show'])->name('black.show'); 
// OR (wildcard instance variable must be same as parameter variable in controller method)
Route::get('/black/{people}', [PeopleController::class, 'show'])->name('black.show');

Route::post('/black', [PeopleController::class, 'store'])->name('black.store');

// Route::delete('/black/{id}', [PeopleController::class, 'destroy'])->name('black.destroy');
// OR (wildcard instance variable must be same as parameter variable in controller method)
Route::delete('/black/{people}', [PeopleController::class, 'destroy'])->name('black.destroy');


// Route::get('/black', function () {
//     $black_list = [
//         ["name" => "Black", "skill" => 75, "id" => 1],
//         ["name" => "John", "skill" => 35, "id" => 2]
//     ];

//     return view('black.index', ["greeting" => "hello", "black" => $black_list]);
// });

// Route::get('/black/create', function () {
//     return view('black.create');
// });

// Route::get('/black/{id}', function ($id) {
   
//     return view('black.show', ["id" => $id]);
// });

