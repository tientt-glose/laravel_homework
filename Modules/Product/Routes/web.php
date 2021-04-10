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

// Route::prefix('product')->group(function() {
//     Route::get('/', 'ProductController@index');
// });

//todo: neu nhu viet cai nay trong prefix product thi sao
Route::resource('products', 'ProductController');
