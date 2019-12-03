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


<<<<<<< HEAD

Route::get('/', 'HomeController@index')->name('first');
=======
Route::group(['middleware' => 'auth'], function(){
>>>>>>> e79b11e8d38ab05fc51f5a61d25a55a67ba5a056

Route::get('/attendance_report', 'ReportController@showattendance_all')->name('report');

Route::get('/', 'HomeController@index')->name('first');


Route::get('/approval', 'reservationsController@showReservations')->name('approval');

// Route::get('/edit', 'usersystemController@showedit')->name('edit');


Route::get('/timetable', function () {
     return View ('timetable');
});

<<<<<<< HEAD
Route::get('/test', function () {
     return View ('test');

});



Route::get('/update', 'timetablesController@showUpdateTimetable');

Route::get('/TimetableManagement', 'timetablesController@TimetableManagement');

Route::get('/VenueCapacity', 'CapacityvenuesController@index');

Route::get('/myreservations', 'reservationsController@myreservations')->name('myreservations');
=======

>>>>>>> e79b11e8d38ab05fc51f5a61d25a55a67ba5a056

 Route::get('/approval/changestatus/{id}', 'reservationsController@changestatus')->name('changestatus');

Route::get('/approvald/changestatus/{id}', 'reservationsController@changestatusd')->name('changestatusd');

Route::get('/approvalb/changestatus/{id}', 'reservationsController@changestatusb')->name('changestatusb');


Route::get('/approvalc/changestatus/{id}', 'reservationsController@changestatusc')->name('changestatusc');

Route::get('/venue', 'reservationsController@venue')->name('venue');


<<<<<<< HEAD
=======
Route::get('/venue', function () {
     return View ('venue');
});
>>>>>>> e79b11e8d38ab05fc51f5a61d25a55a67ba5a056

Route::get('/form', function () {
     return View ('form');

});

Route::post('create','reservationsController@insert');
Route::post('/edit1/{id}','usersystemController@update');
Route::post('/changepassword','usersystemController@changePassword');
Route::post('/u_course','timetablesController@updatecourse')->name('u_course');


Route::get('/edit', 'usersystemController@edit')->name('edit');

<<<<<<< HEAD
=======


Route::get('/change_password', function () {
     return View ('change_password');

});
>>>>>>> e79b11e8d38ab05fc51f5a61d25a55a67ba5a056





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
