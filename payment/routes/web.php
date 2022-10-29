<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'stripe']);
Route::post ( '/', [HomeController::class,'call'] );
