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

// Route::get('/edit', 'usersystemController@showedit')->name('edit');


Route::get('/timetable', function () {
     return View ('timetable');

});

Route::get('/test', function () {
     return View ('test');

});



Route::get('/update', 'timetablesController@showUpdateTimetable');

Route::get('/TimetableManagement', 'timetablesController@TimetableManagement');

Route::get('/VenueCapacity', 'CapacityvenuesController@index');

Route::get('/myreservations', 'reservationsController@myreservations')->name('myreservations');

 Route::get('/approval/changestatus/{id}', 'reservationsController@changestatus')->name('changestatus');

Route::get('/approvald/changestatus/{id}', 'reservationsController@changestatusd')->name('changestatusd');

Route::get('/approvalb/changestatus/{id}', 'reservationsController@changestatusb')->name('changestatusb');


Route::get('/approvalc/changestatus/{id}', 'reservationsController@changestatusc')->name('changestatusc');

Route::get('/venue', 'reservationsController@venue')->name('venue');



Route::get('/form', function () {
     return View ('form');

});

Route::post('create','reservationsController@insert');
Route::post('/edit1/{id}','usersystemController@update');
Route::post('/changepassword','usersystemController@changePassword');
Route::post('/u_course','timetablesController@updatecourse')->name('u_course');


Route::get('/edit', 'usersystemController@edit')->name('edit');





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

Route::get('/form2', function () {
     return View ('form2');

});






Route::get('/room', 'timetablesController@index');

Route::get('/Password','usersystemController@showPassword');

Route::get('/calendar', 'calendarsController@index');
Route::get('/email', 'calendarsController@email');


});
