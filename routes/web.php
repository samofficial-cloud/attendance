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


Route::get('/approval', 'reservationsController@showReservations')->name('approval');


Route::get('/timetable', function () {
     return View ('timetable');

});

 Route::get('/approval/changestatus/{id}', 'reservationsController@changestatus')->name('changestatus');


Route::get('/approvalb/changestatus/{id}', 'reservationsController@changestatusb')->name('changestatusb');


Route::get('/approvalc/changestatus/{id}', 'reservationsController@changestatusc')->name('changestatusc');


Route::get('/venue', function () {
     return View ('venue');

});

Route::get('/form', function () {
     return View ('form');

});

Route::post('create','reservationsController@insert');


Route::get('/edit', function () {
     return View ('edit');

});

Route::get('/change_password', function () {
     return View ('change_password');

});




Route::get('/report', function () {
     return View ('report');

});

Route::get('/profile', function () {
     return View ('profile');

});

Route::get('/reservation', function () {
     return View ('reservation');

});

Route::get('/programme', function () {
     return View ('programme');

});



Route::get('/room', 'timetablesController@index');

// Route::get('/reservation', 'reservationsController@index');

Route::get('/calendar', 'calendarsController@index');


});
