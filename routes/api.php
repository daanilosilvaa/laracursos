<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CourseApiController,
    CategoryApiController,
    MeApiController,
    AboutApiController,
};


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/about', [AboutApiController::class, 'index']);
Route::get('/home', [MeApiController::class, 'index']);
Route::get('/category', [CategoryApiController::class, 'index']);

Route::get('/courses', [CourseApiController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
