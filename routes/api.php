<?php

use App\Http\Controllers\api\v1\HomeController;
use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', HomeController::class);

// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

});
