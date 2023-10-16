<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Front End Controller */

Route::controller(LandingPageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/event', 'event')->name('event');
    Route::get('/event_detail/{id}', 'event_detail')->name('event_detail');
    Route::get('/service', 'service')->name('service');
    Route::get('/service/{id}', 'service_detail')->name('service.detail');

    Route::get('/training', 'training')->name('training');
    Route::get('/coaching', 'coaching')->name('coaching');
});
