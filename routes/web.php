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

Auth::routes();

Route::get('/', 'RDController@index');

Route::get('rd/extend-expire-date', 'RDController@extendExpireDate');

Route::get('rd/need-or-not', 'RDController@needOrNot');


Route::get('rd/searchpage', 'RDController@searchIndex');

Route::get('rd/search', 'RDController@searching');
Route::resource('rd', 'RDController');


