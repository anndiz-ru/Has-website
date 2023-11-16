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

Route::get('/', function () {
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/production', function () {
    return view('production');
});
Route::get('/qa', function () {
    return view('qa');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/contacts', function () {
    return view('contacts');
});
