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

Route::get('/', 'PostController@index');
Route::group(['prefix' => 'post', 'as' => 'post.'], function() {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/complete', 'PostController@complete')->name('complete');

    Route::post('/', 'PostController@store')->name('store');

});
