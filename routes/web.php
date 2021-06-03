<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\DataFormController;


// // CREATE
// Route::get('/create', function() {
//     return view('create');
// });
// Route::post('/create', [FirstController::class, 'create']);

// // READ
// Route::get('/read', function() {
//     return view('read');
// });
// Route::post('/read', [FirstController::class, 'read']);

// // UPDATE
// Route::get('/update', function() {
//     return view('update');
// });
// Route::post('/update', [FirstController::class, 'update']);


// CRUD

// create operation
Route::get('/create', function() {
    return view('dataForm');
});

Route::post('/create', [DataFormController::class, 'create']);