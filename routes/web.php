<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Jobs\TranslateJob;

Route::get('test',function(){

    $job = Job::first();
TranslateJob::dispatch($job);
});
Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::resource('jobs',JobController::class);
// Auth
Route::get('/register',[RegistrationController::class,'create']);
Route::post('/register',[RegistrationController::class,'store']);
Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LoginController::class,'destroy']);
// Index

Route::get('/jobs', [JobController::class, 'index']);

// // Create
Route::get('/jobs/create', [JobController::class, 'create']);


// // Show
Route::get('/jobs/{job}', [JobController::class, 'show']);

// // Store
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// // Edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('can:edit,job');



// // Update
Route::patch('/jobs/{job}', [JobController::class, 'update']);

// // Destory
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

