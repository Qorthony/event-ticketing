<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/event', [EventsController::class,'show'])->name('home');
Route::get('/event/orderHistory', [EventsController::class, 'orderHistory']);
Route::get('/event/payment/{order}', [EventsController::class, 'showPayment']);
Route::post('/event/payment/{order}', [EventsController::class, 'uploadPayment']);
Route::get('/event/{event}', [EventsController::class,'detail']);
Route::post('/event/{event}/order', [EventsController::class, 'order']);

Route::get('/creator', [CreatorController::class, 'index'])->middleware('creator');
Route::get('/creator/first', [CreatorController::class, 'first'])->middleware('not.creator');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->to('admin/login');
    });

    Route::get('/login', [LoginController::class, 'index'])->middleware('guest.admin');

    Route::post('/login', [LoginController::class, 'login'])->middleware('guest.admin')->name('admin.login');

    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth.admin');

    Route::prefix('event')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('admin.event.index');
        Route::post('/store', [EventController::class, 'store'])->name('admin.event.store');
        Route::get('/pesanan', [EventController::class, 'pesanan']);
        Route::post('/pesanan/{payment}/terima', [EventController::class, 'terimaPayment']);
        Route::post('/pesanan/{payment}/tolak', [EventController::class, 'tolakPayment']);
        Route::delete('/{event}', [EventController::class, 'destroy'])->name('admin.event.destroy');
        Route::put('/{event}', [EventController::class, 'update']);
    });
});




