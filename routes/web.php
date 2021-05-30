<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/homepage', function() {
// 	return view('home');
// });


// Route::get('/login', function() {
// 	return view('login');

// });

// Route::get('/hi', [FirstController::class, 'sayHello']);


Route::get('/calculator', function() {
    return view('calculator');
});

Route::post('/calculator', [FirstController::class, 'addNumbers']);
