<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/rooms', function () {
    return view('rooms');
});


// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/email', 'EmailController@create');
// Route::post('/email', 'EmailController@sendEmail')->name("send.email");

Route::get('/contact', [ContactController::class,'index']);
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

// Route::get('/booking', [BookingController::class,'index']);
// Route::post('/booking', [BookingController::class,'store'])->name('booking.store');

Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');


