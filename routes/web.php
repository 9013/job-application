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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', 'MainController@index');
Route::get('/main', 'MainController@successlogin');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/main/successlogin', 'MainController@successlogin');
Route::get('/main/logout', 'MainController@logout');

Route::post('/insert', 'CreatesController@index');
Route::get('/update/{id}', 'MainController@update');
Route::post('/edit/{id}', 'MainController@edit');
Route::get('/delete/{id}', 'MainController@delete');
Route::get('/read/{id}', 'MainController@read');