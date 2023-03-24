<?php

use App\Http\Controllers\api\v1\HomeController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', HomeController::class);

// public routes

// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {

});
