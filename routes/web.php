<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Welcome route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Only after login
Route::middleware('auth')->group(function () {
    // Profile routes - accessible only to authenticated users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Todo routes - accessible only to authenticated users
    Route::get('/todo', [TodoController::class, 'index']);
    Route::get('/todo/sort/priority', [TodoController::class, 'sortByPriority']);
    Route::get('/todo/sort/deadline', [TodoController::class, 'sortByDeadline']);
    Route::get('/todo/sort/status', [TodoController::class, 'sortByStatus']);
});

// Profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile.edit');

// create

// Form submission route
Route::get('/todo/create', [TodoController::class, 'create'])->middleware('auth');
// Handle form submission
Route::post('/todo', [TodoController::class, 'store'])->middleware('auth');

// Logout route
Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

require __DIR__.'/auth.php';
