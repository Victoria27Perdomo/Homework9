<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('index');
});

Route::get('/agejo', function () {
    return view('agejo');
});

Route::get('/himegyaru', function () {
    return view('himegyaru');
});

Route::get('/ganguro', function () {
    return view('ganguro');
});

Route::get('/tsuyome', function () {
    return view('tsuyome');
});

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
