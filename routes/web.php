<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home.index');

Route::resource('jobs', JobController::class)->names('jobs');

Route::view('/contact', 'contact')->name('contact.index');

//* Auth
Route::get('/register', [RegisteredUserController::class, 'create'])->name('auth.create.register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('auth.store.register');


Route::get('/login', [LoginUserController::class, 'create'])->name('auth.create.login');
Route::post('/login', [LoginUserController::class, 'store'])->name('auth.store.login');
Route::post('/logout', [LoginUserController::class, 'destroy'])->name('auth.logout');






























/*
* first way of doing the routes

// Index
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

// Create
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

// Show to show a single job page
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

// Store For creating new job
Route::post('/jobs', [JobController::class, 'store'])->name("jobs.store");

// Edit the Job
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name("jobs.edit");

// Update the Job
Route::patch('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

// Destroy the Job
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
*/


/*
*second way of doing the routes
// Route::controller(JobController::class)->group(function () {
//     // Index
//     Route::get('/jobs', 'index')->name('jobs.index');
//     // Create
//     Route::get('/jobs/create', 'create')->name('jobs.create');
//     // Show to show a single job page
//     Route::get('/jobs/{job}', 'show')->name('jobs.show');
//     // Store For creating new job
//     Route::post('/jobs', 'store')->name("jobs.store");
//     // Edit the Job
//     Route::get('/jobs/{job}/edit', 'edit')->name("jobs.edit");
//     // Update the Job
//     Route::patch('/jobs/{job}', 'update')->name('jobs.update');
//     // Destroy the Job
//     Route::delete('/jobs/{job}', 'destroy')->name('jobs.destroy');
// });
*/
