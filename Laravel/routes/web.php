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

Route::get('index', function () {
    return view('index');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('projects', function () {
    return view('projects');
});
Route::get('resume', function () {
    return view('resume');
});