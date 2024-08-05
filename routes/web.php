<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegistrationController;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs',JobController::class);
// Auth
Route::get('/register',[RegistrationController::class,'create']);
Route::get('/login',[RegistrationController::class,'index']);
// Index

// Route::get('/jobs', [JobController::class, 'index']);

// // Create
// Route::get('/jobs/create', [JobController::class, 'create']);


// // Show
// Route::get('/jobs/{job}', [JobController::class, 'show']);

// // Store
// Route::post('/jobs', [JobController::class, 'store']);

// // Edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);



// // Update
// Route::patch('/jobs/{job}', [JobController::class, 'update']);

// // Destory
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

