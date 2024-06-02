<?php

use App\Http\Controllers\HaloController;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/halo', function () {
//     // return view('coba.halo');

// });

Route::get('/halo',[
// Suggested code may be subject to a license. Learn more: ~LicenseLog:1741657355.
    HaloController::class,'index'
]);

// Route::get('/todo',function(){
//     return view('todo.app');
// });

// Suggested code may be subject to a license. Learn more: ~LicenseLog:1071676659.
Route::get('/todo',[
    TodoController::class,'index'
]);

Route::post('/todo',[
    TodoController::class, 'store'
]);


