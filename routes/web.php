<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CacheController;

// Cache
Route::get('getCache/', [CacheController::class, 'fetchCache']);



Route::get('/pagi', [CrudController::class, 'pagination']);


// CRUD

// Create
Route::get('/create', function() {
    return view('dataForm');
});
Route::post('/create', [CrudController::class, 'create']);

// Read
// Route::get('/read{id}', function(){
//     return view('read');
// });

// cache
Route::get('/read/{id}',  [CrudController::class, 'read']);

// Update
Route::get('/edit', function() {
    return view('edit');
});

// Route::get('/edit/{email}', [CrudController::class, 'fetchForUpdate']);
Route::post('/edit', [CrudController::class, 'fetchForUpdate']);

// Route::get('update', function() {
//     return view('update');
// });
Route::post('/update', [CrudController::class, 'update']);

// Delete
Route::get('/delete/{id}', [CrudController::class, 'delete']);