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


Route::post('/login/custom', [
  'uses' => 'LoginController@login',
   'as' => 'login.custom'
]);


Route::get('/', 'HomeController@index')->name('first');

//Route::get('/', 'HomeController@index')->name('first');

Route::group(['middleware' => 'auth'], function(){

Route::get('/timetable', function () {
     return View ('timetable');

});

Route::get('/venue', function () {
     return View ('venue');

});

Route::get('/report', function () {
     return View ('report');

});

});
