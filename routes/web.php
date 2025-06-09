<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todo/sort/priority', [TodoController::class, 'sortByPriority']);
Route::get('/todo/sort/deadline', [TodoController::class, 'sortByDeadline']);
Route::get('/todo/sort/status', [TodoController::class, 'sortByStatus']);