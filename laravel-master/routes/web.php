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
//echo "manik";exit;
Route::get('/', function () {
    return view('welcome');
});


Route::resource('category', 'CategoriController');

Route::resource('product','ProductController');