<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SupplementsController;

// common routes
// index - show all
// create - show create form
// store - save new
// edit - show edit form
// update - update existing
// destroy - delete existing
// show - show single

//all
Route::get('/', [ListingController::class, 'index']);
// Show create form
Route::get('/listing/create', [ListingController::class, 'create']);
//Store Data
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');
// Edit form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update Data
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete Data
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
//single
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//store new user
Route::post('/users', [UserController::class, 'store']);
//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
//log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

