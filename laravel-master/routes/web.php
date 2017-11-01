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

Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);

Route::post('order-post', ['as'=>'order-post','uses'=>'HomeController@orderPost']);
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 
// Order Routes
Route::get('/admin', [
    'uses' => 'OrderController@getAllOrders',
    'as' => 'admin'
]);


Route::post('/pay/{product}', [
    'uses' => 'OrderController@postPayWithStripe',
    'as' => 'pay'
]);
 
Route::post('/store', [
    'uses' => 'OrderController@postPayWithStripe',
    'as' => 'store' 
]);

Route::get('/buy', [
    'uses' => 'ProductController@buy',
    'as' => 'buy'
]);