<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\supplementswebController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/supplements', [supplementswebController::class, 'saveItem'])->name('saveItem');	

