<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use App\Http\Controllers\PathController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);

Route::get('/user-register', [UserController::class, 'user_register']);

Route::get('/about-us', [PathController::class, 'about_us']);

Route::get('/blog', [PathController::class, 'blog']);

Route::post('/storeUserData', [UserController::class, 'store']);
