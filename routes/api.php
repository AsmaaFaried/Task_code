<?php

use App\Http\Controllers\Apis\AuthController;
use App\Http\Controllers\Apis\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/register',[AuthController::class,'register'])->name('register');

Route::post('/login',[AuthController::class,'login'])->name('api.login');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth:sanctum');
