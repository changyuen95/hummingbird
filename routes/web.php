<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/tours-by-type', function () {
    return view('tours-by-type');
});

Route::get('/tours-by-type/{name}', function () {
    return view('tours-detail');
});

Route::get('/our-services', function () {
    return view('our-services');
});

Route::get('/private-tour', function () {
    return view('bespoke');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/tnc', function () {
    return view('tnc');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::post('/enquiry-form', [TourController::class, 'enquiryForm'])->name('enquiry-form');

Route::get('/get-tours', [TourController::class, 'getToursAjax'])->name('get-tour');

