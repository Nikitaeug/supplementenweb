<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplementsController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;

//tests

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//all
Route::get('/', [ListingController::class, 'index']);
//single
Route::get('/listing/{listing}', [ListingController::class, 'show']);


