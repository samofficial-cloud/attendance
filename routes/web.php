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

Route::get('/system_settings', 'configController@changeConfiguration')->name('change_config');

Route::get('/system_settings/changePercentage', 'configController@changePercentage')->name('change_percentage');

Route::get('/system_settings/changeScanningValidityPeriod', 'configController@changeScanningValidityPeriod')->name('change_validity_period');


Route::get('/system_settings/change_academic_year', 'configController@changeAcademicYear')->name('change_academic_year');

Route::get('/system_settings/change_title', 'configController@changeTitle')->name('change_title');

Route::get('/attendance_report/sortClass/{courseValue}', 'ReportController@sortClass')->name('sortClass');

Route::get('/attendance_report_tests', 'ReportController@showattendance_all_tests')->name('report_tests');

Route::get('/attendance_report_tests/absentees/{courseValue}', 'ReportController@AbsenteeTest')->name('report_testsAbsentees');

Route::get('/attendance_report_tests/present/{courseValue}', 'ReportController@PresentTest')->name('report_testsPresent');
Route::get('/attendance_report_ue', 'ReportController@showattendance_all_ue')->name('report_ue');
    Route::get('/attendance_report_ue/absentees/{courseValue}', 'ReportController@AbsenteeUe')->name('report_UeAbsentees');
    Route::get('/attendance_report_ue/present/{courseValue}', 'ReportController@PresentUe')->name('report_UePresent');

    Route::post('/autocompleteProgram/fetch', 'ReportController@AutoComplete')->name('autocomplete.prog');
    Route::post('/autocompleteName/fetch', 'ReportController@AutoCompleteName')->name('autocomplete.name');
Route::get('/', 'HomeController@index')->name('first');


Route::get('/check_user_availability', 'ReportController@checkUser')->name('check_user');

Route::get('/check_course_list', 'ReportController@checkCourse')->name('check_course');


Route::get('/checkDegree_course_list', 'ReportController@checkDegreeCourses')->name('checkDegreeCourses');

Route::get('/approval', 'reservationsController@showReservations')->name('approval');

// Route::get('/edit', 'usersystemController@showedit')->name('edit');


Route::post('/u_course1','examsController@updateexam')->name('u_course1');

Route::post('/addtest','testsController@updatetest')->name('addtest');

Route::post('/addstaffCSE','USERINFOController@addstaffCSE')->name('addstaffCSE');

Route::get('/instructors-ETE','lecturesController@index')->name('lecturers');

Route::get('/instructors-CSE','lecturesController@indexCSE')->name('lecturers1');

Route::get('/CSE-instructors','lecturesController@CSEindex')->name('lecturers21');


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

Route::get('/Up', function () {
     return View ('Students');

});

Route::get('/studentsList', function () {
     return View ('studentsList');

});

Route::get('/studentsList2', function () {
     return View ('studentsList2');

});

Route::get('/join', 'coursesController@index');

Route::get('/examcourse', 'examsController@index')->name('examcourse');

Route::get('/update', 'timetablesController@showUpdateTimetable')->name('update');

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

Route::get('/instructors/delete/{id}', 'lecturesController@DeleteLecturer')->name('DeleteLecturer');

Route::get('/courses/add', 'coursesController@add')->name('newcourses');

Route::get('/courses/edit', 'coursesController@edit')->name('editcourse');

Route::get('/courses/delete/{id}', 'coursesController@DeleteCourse')->name('DeleteCourse');

Route::get('/students/add', 'USERINFOController@add')->name('newstudents');

Route::get('/students/delete/{USERID}', 'USERINFOController@DeactivateStudent')->name('DeactivateStudent');

Route::get('/students/activate', 'USERINFOController@activate')->name('ActivateStudent');

Route::get('/SearchStudents', 'USERINFOController@showStudents')->name('then');

Route::get('/students/edit', 'USERINFOController@edit')->name('editstudent');

Route::post('/UpdateTimetable/notify', 'timetablesController@notifyAll')->name('notifyAll');

Route::get('/VenueCapacity/delete/{id}', 'CapacityvenuesController@DeleteVenue')->name('DeleteVenue');

Route::get('/staffs', 'USERINFOController@staff');

Route::get('/events/edit', 'calendarsController@edit')->name('editevents');


Route::get('/form', function () {
     return View ('form');

});



Route::post('create','reservationsController@insert');
Route::post('/edit1/{id}','usersystemController@update');
Route::post('/changepassword','usersystemController@changePassword');

Route::post('/u_course','timetablesController@updatecourse')->name('u_course');

// Route::post('/ucourse2/{id}','timetablesController@ucourse2')->name('ucourse2');


Route::get('/edit', 'usersystemController@edit')->name('edit');

Route::get('/addevent', 'calendarsController@addevent')->name('addevent');







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


Route::get('students','USERINFOController@index');

Route::get('managestudents','USERINFOController@managestudents');

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

Route::get('generate-Course-pdf','coursesController@CS1PDF')->name('CS1pdf');

Route::get('generate-CSE-Staff-pdf','USERINFOController@staffCSEPDF')->name('staffCSEpdf');

Route::get('generate-ETE-Staff-pdf','USERINFOController@staffETEPDF')->name('staffETEpdf');


Route::get('/reservation', 'reservationsController@show');

Route::get('/courses', 'coursesController@index');

Route::get('/coursee', 'coursesController@indexcoursee');

Route::get('/Showcourses', 'coursesController@showCourses');

Route::get('/courses/show', 'coursesController@Courseshow');

Route::get('/coursesCS2', 'coursesController@showCS2');

Route::get('/coursesCS3', 'coursesController@showCS3');

Route::get('/coursesTE1', 'coursesController@showTE1');

Route::get('/coursesTE2', 'coursesController@showTE2');

Route::get('/coursesTE3', 'coursesController@showTE3');

Route::get('/coursesTE4', 'coursesController@showTE4');

Route::get('/coursesESC1', 'coursesController@showESC1');

Route::get('/coursesESC2', 'coursesController@showESC2');

Route::get('/coursesESC3', 'coursesController@showESC3');

Route::get('/coursesCEIT1', 'coursesController@showCEIT1');

Route::get('/coursesCEIT2', 'coursesController@showCEIT2');

Route::get('/coursesCEIT3', 'coursesController@showCEIT3');

Route::get('/coursesCEIT4', 'coursesController@showCEIT4');

Route::get('/editstudentsList', 'USERINFOController@showStudentList');

Route::get('generate-Students-PDF','USERINFOController@studentsPDF')->name('studentspdf');


Route::get('/room', 'timetablesController@index');

Route::get('/Password','usersystemController@showPassword');

Route::get('/events', 'calendarsController@index');
Route::get('/email', 'calendarsController@email');


});
