<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\CrudController;


// CRUD

// Create
Route::get('/create', function() {
    return view('dataForm');
});
Route::post('/create', [CrudController::class, 'create']);

// Read
Route::get('/read', function(){
    return view('read');
});
Route::post('/read/',  [CrudController::class, 'read']);

// Update
// Route::get('/edit', function() {
//     return view('edit');
// });

Route::get('/edit/{email}', [CrudController::class, 'fetchForUpdate']);
Route::post('/edit/{email}', [CrudController::class, 'fetchForUpdate']);

Route::get('update', function() {
    return view('update');
});
Route::post('update', [CrudController::class, 'update']);

// Delete
Route::get('/delete/{id}', [CrudController::class, 'delete']);