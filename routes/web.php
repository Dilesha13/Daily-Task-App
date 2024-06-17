<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', function () {
    return view('task');
});
Route::get('/about',[Frontendcontroller::class,'indexaboutus']);
Route::post('/saveTask',[TaskController::class,'store']);