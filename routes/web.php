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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Auth::routes();


Route::post('/login/custom', [
  'uses' => 'LoginController@login',
   'as' => 'login.custom'
]);






Route::group(['middleware' => 'auth'], function(){


Route::get('/attendance_report', 'ReportController@showattendance_all')->name('report');

Route::get('/attendance_report_tests', 'ReportController@showattendance_all_tests')->name('report_tests');

Route::get('/attendance_report_ue', 'ReportController@showattendance_all_ue')->name('report_ue');


Route::get('/', 'HomeController@index')->name('first');


Route::get('/approval', 'reservationsController@showReservations')->name('approval');

// Route::get('/edit', 'usersystemController@showedit')->name('edit');


Route::post('/u_course1','examsController@updateexam')->name('u_course1');

Route::post('/addtest','testsController@updatetest')->name('addtest');

Route::get('/instructors-ETE','lecturesController@index')->name('lecturers');

Route::get('/instructors-CSE','lecturesController@indexCSE')->name('lecturers1');


Route::get('/timetable', function () {
     return View ('timetable');
});

Route::get('/mytests', function () {
     return View ('mytest');
});


Route::get('/test', function () {
     return View ('test');

});


Route::get('/examupdate', function () {
     return View ('ExamTimetableManagement');

});

Route::get('/exam', function () {
     return View ('ExamTimetable');

});

Route::get('/examwelcome', function () {
     return View ('ExamWelcome');

});



Route::get('/join', 'coursesController@index');

Route::get('/examcourse', 'examsController@index')->name('examcourse');

Route::get('/update', 'timetablesController@showUpdateTimetable');

Route::get('/Update2', 'timetablesController@showUpdateTimetable2')->name('update2');

Route::get('/TimetableManagement', 'timetablesController@TimetableManagement')->name('TimetableManagement');

Route::get('/VenueCapacity', 'CapacityvenuesController@index');

Route::view('/ue_and_test_report', 'ue_and_test_report');

Route::get('/myreservations', 'reservationsController@myreservations')->name('myreservations');



Route::get('/mytests/cancel/{id}', 'testsController@canceltest')->name('canceltest');

 Route::get('/approval/changestatus', 'reservationsController@changestatus')->name('changestatus');

Route::get('/approvald/changestatus/{id}', 'reservationsController@changestatusd')->name('changestatusd');

Route::get('/approvalb/changestatus/{id}', 'reservationsController@changestatusb')->name('changestatusb');


Route::get('/approvalc/changestatus/{id}', 'reservationsController@changestatusc')->name('changestatusc');

Route::get('/approvale/changestatus/{id}', 'reservationsController@DeleteRequest')->name('DeleteRequest');

Route::get('/venue', 'reservationsController@venue')->name('venue');

Route::get('/venues/edit', 'CapacityvenuesController@edit')->name('editvenue');

Route::get('/venues/add', 'CapacityvenuesController@add')->name('newcapacity');

Route::get('/instructors/edit', 'lecturesController@edit')->name('editinstructor');

Route::get('/instructors/add', 'lecturesController@add')->name('newinstructor');





Route::get('/form', function () {
     return View ('form');

});

Route::post('create','reservationsController@insert');
Route::post('/edit1/{id}','usersystemController@update');
Route::post('/changepassword','usersystemController@changePassword');

Route::post('/u_course','timetablesController@updatecourse')->name('u_course');

// Route::post('/ucourse2/{id}','timetablesController@ucourse2')->name('ucourse2');


Route::get('/edit', 'usersystemController@edit')->name('edit');





Route::get('/change_password', function () {
     return View ('change_password');

});





Route::get('/report', function () {
     return View ('report');

});

Route::get('/profile', function () {
     return View ('profile');

});

// Route::get('/reservation', function () {
//      return View ('reservation');

// });

Route::get('/programme', function () {
     return View ('programme');

});

Route::get('/form2', function () {
     return View ('form2');

});

Route::get('/conflicts', function () {
     return View ('conflicts');

});


Route::get('/LectureConflicts', function () {
     return View ('LectureCollision');

});

Route::get('generate-pdf','ReportController@classPDF')->name('classpdf');

Route::get('generate-timetable-pdf','timetablesController@programPDF')->name('programpdf');

Route::get('generate-timetable1-pdf','timetablesController@roomPDF')->name('roompdf');

Route::get('generate-pdf1','ReportController@testPDF')->name('testpdf');

Route::get('generate-testpdf','ReportController@testallPDF')->name('testallpdf');

Route::get('generate-test-invalidpdf','ReportController@testinvalidPDF')->name('testinvalidpdf');

Route::get('generate-UEpdf','ReportController@UEPDF')->name('UEpdf');

Route::get('generate-UE-Allpdf','ReportController@UEAllPDF')->name('UEAllpdf');

Route::get('generate-ETE-pdf','lecturesController@ETEPDF')->name('ETEpdf');

Route::get('generate-CSE-pdf','lecturesController@CSEPDF')->name('CSEpdf');



Route::get('/reservation', 'reservationsController@show');

Route::get('/courses', 'coursesController@index');

Route::get('/room', 'timetablesController@index');

Route::get('/Password','usersystemController@showPassword');

Route::get('/calendar', 'calendarsController@index');
Route::get('/email', 'calendarsController@email');


});
