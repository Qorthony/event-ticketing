<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

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

Route::get('/', [LoginController::class, 'loginForm']);
Route::get('/register', [LoginController::class, 'registerForm']);
Route::get('/event', [EventsController::class,'show']);
Route::get('/event/orderHistory', [EventsController::class, 'orderHistory']);
Route::get('/event/{id}', [EventsController::class,'detail']);
Route::get('/event/{id}/payment', [EventsController::class, 'showPayment']);
