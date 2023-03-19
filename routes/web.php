<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});
Route::get('/Yellow', function () {
    return view('Yellow');
});
Route::get('/Ma_Page_test', function () {
    return view('newPage');
});

Route::get('/Ma_Page_test', 'HomeT')
