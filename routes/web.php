<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplementsController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;

// common routes
// index - show all
// show - show single
// create - show create form
// store - save new
// edit - show edit form
// update - update existing
// destroy - delete existing

//all
Route::get('/', [ListingController::class, 'index']);
// Show create form
Route::get('/listing/create', [ListingController::class, 'create']);
//Store Data
Route::post('/listing', [ListingController::class, 'store']);






//single
Route::get('/listing/{listing}', [ListingController::class, 'show']);