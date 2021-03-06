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

Route::get('/attendance_report/sortClass/{courseValue}/{fullCourse}', 'ReportController@sortClass')->name('sortClass');

Route::get('/attendance_report_tests', 'ReportController@showattendance_all_tests')->name('report_tests');

Route::get('/attendance_report_tests/absentees/{courseValue}/{fullCourse}', 'ReportController@AbsenteeTest')->name('report_testsAbsentees');

Route::get('/attendance_report_tests/present/{courseValue}/{fullCourse}', 'ReportController@PresentTest')->name('report_testsPresent');
Route::get('/attendance_report_ue', 'ReportController@showattendance_all_ue')->name('report_ue');
    Route::get('/attendance_report_ue/absentees/{courseValue}/{fullCourse}', 'ReportController@AbsenteeUe')->name('report_UeAbsentees');
    Route::get('/attendance_report_ue/present/{courseValue}/{fullCourse}', 'ReportController@PresentUe')->name('report_UePresent');

    Route::post('/autocompleteProgram/fetch', 'ReportController@AutoComplete')->name('autocomplete.prog');
    Route::post('/autocompleteNamePer_course/fetch', 'ReportController@AutoCompleteName')->name('autocomplete.name');
Route::get('/', 'HomeController@index')->name('first');


Route::get('/check_user_availability', 'ReportController@checkUser')->name('check_user');

Route::get('/check_course_list', 'ReportController@checkCourse')->name('check_course');


Route::get('/checkDegree_course_list', 'ReportController@checkDegreeCourses')->name('checkDegreeCourses');

Route::get('/approval', 'reservationsController@showReservations')->name('approval');

// Route::get('/edit', 'usersystemController@showedit')->name('edit');


Route::post('/u_course1','examsController@updateexam')->name('u_course1');

Route::post('/addtest','testsController@updatetest')->name('addtest');

Route::get('/add temporary_timetable','temp_timetablesController@insert')->name('inserttemp_timetables');

Route::post('/addstaffCSE','USERINFOController@addstaffCSE')->name('addstaffCSE');

Route::get('manage/instructors-ETE','lecturesController@index')->name('lecturers');

Route::get('manage/instructors-CSE','lecturesController@indexCSE')->name('lecturers1');

Route::get('/course_instructors','lecturesController@CSEindex')->name('lecturers21');

Route::get('/mytests','testsController@mytest')->name('mytest');

Route::get('/timetable', function () {
     return View ('timetable');
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

Route::get('/newtimetable', function () {
     return View ('newtimetable');

});

Route::get('/timetablemenu', function () {
     return View ('timetablemenu');

});

Route::get('/room2', function () {
     return View ('room_revised');

});

Route::get('manage/optionalstudent', function () {
     return View ('optionalstudent');
});

Route::get('/menukey', function () {
     return View ('menukey');

});

Route::get('/studentsList', function () {
     return View ('studentsList');

});

Route::get('/studentsList2', function () {
     return View ('studentsList2');

});

Route::get('/generalReports', function () {
     return View ('generalReports');
});

Route::get('manage/users', function () {
     return View ('usermanagement');
});

Route::get('manage/getnewuser', function () {
        return View::make('newuser');
    });
Route::get('manage/addoption', function () {
        return View::make('addoptionstudents');
    });
Route::get('manage/viewoptionstudent', function () {
        return View::make('viewoptionstudent');
    });

Route::get('gettimetable', function () {
        return View::make('room_revised');
    });

Route::get('gettimetable2', function () {
        return View::make('programme_revised');
    });

Route::get('manage/getactivateuser', array('as' => 'getactivateuser', 'uses' => 'USERINFOController@activateuserview'));

Route::get('manage/getedituser', array('as' => 'getedituser', 'uses' => 'USERINFOController@edituserview'));

Route::get('manage/getdeactivateuser', array('as' => 'getdeactivateuser', 'uses' => 'USERINFOController@deleteuserview'));

Route::get('/join', 'coursesController@index');

Route::get('/examcourse', 'examsController@index')->name('examcourse');

Route::get('/update', 'timetablesController@showUpdateTimetable')->name('update');

Route::get('/Update2', 'timetablesController@showUpdateTimetable2')->name('update2');

Route::get('/TimetableManagement', 'timetablesController@TimetableManagement')->name('TimetableManagement');

Route::get('/VenueCapacity', 'CapacityvenuesController@index');

Route::get('/temporary_timetable', 'temp_timetablesController@index');
Route::get('/temporary_timetable/edit', 'temp_timetablesController@edit')->name('edittemp');


Route::view('/ue_and_test_report', 'ue_and_test_report');

Route::get('/myreservations', 'reservationsController@myreservations')->name('myreservations');



Route::get('/mytests/cancel/{id}', 'testsController@canceltest')->name('canceltest');

Route::get('/temporary_timetable/delete/{id}','temp_timetablesController@canceltemp')->name('canceltemp');

 Route::get('/approval/changestatus', 'reservationsController@changestatus')->name('changestatus');

Route::get('/approvald/changestatus/{id}', 'reservationsController@changestatusd')->name('changestatusd');

Route::get('/approvalb/changestatus/{id}', 'reservationsController@changestatusb')->name('changestatusb');


Route::get('/approvalc/changestatus/{id}', 'reservationsController@changestatusc')->name('changestatusc');

// Route::get('/approvale/changestatus/{id}', 'reservationsController@DeleteRequest')->name('DeleteRequest');

Route::get('/venue', 'reservationsController@venue')->name('venue');
Route::get('/notification/{id}', 'reservationsController@ShowSystemNotifications')->name('ShowSystemNotifications');

Route::get('/venues/edit', 'CapacityvenuesController@edit')->name('editvenue');

Route::get('/venues/add', 'CapacityvenuesController@add')->name('newcapacity');

Route::get('/instructors/edit', 'lecturesController@edit')->name('editinstructor');

Route::get('/instructors/activate', 'lecturesController@activate')->name('activateinstructor');

Route::get('/instructors/add', 'lecturesController@add')->name('newinstructor');

Route::get('/instructors/delete/{id}', 'lecturesController@DeleteLecturer')->name('DeleteLecturer');

Route::get('/courses/add', 'coursesController@add')->name('newcourses');

Route::get('/courses/edit', 'coursesController@edit')->name('editcourse');

Route::get('/courses/delete/{id}', 'coursesController@DeleteCourse')->name('DeleteCourse');

Route::get('/students/add', 'USERINFOController@add')->name('newstudents');

Route::get('/optionstudents/add', 'carry_optional_studentController@addstudents')->name('optionstudentsadd');
Route::get('/optionstudents/edit', 'carry_optional_studentController@editstudents')->name('optionstudentsedit');

Route::get('/optionstudents/delete/{id}', 'carry_optional_studentController@deletestudents')->name('optionstudentsdelete');

Route::get('/students/delete/{USERID}', 'USERINFOController@DeactivateStudent')->name('DeactivateStudent');

Route::get('/students/activate', 'USERINFOController@activatestudent')->name('ActivateStudent');

Route::get('/staff/activate/{id}', 'USERINFOController@activatestaff')->name('ActivateStaff');

Route::get('/SearchStudents', 'USERINFOController@showStudents')->name('then');

Route::get('/students/edit', 'USERINFOController@edit')->name('editstudent');

Route::post('/UpdateTimetable/notify', 'timetablesController@notifyAll')->name('notifyAll');

Route::get('/VenueCapacity/delete/{id}', 'CapacityvenuesController@DeleteVenue')->name('DeleteVenue');

Route::get('/staffs', 'USERINFOController@staff');

Route::get('/events/edit', 'calendarsController@edit')->name('editevents');

Route::get('/mytests/edit', 'testsController@edit')->name('edittests');

Route::post('/autocomplete/fetch', 'lecturesController@fetch')->name('autocomplete.fetch');

Route::post('/autocomplete/fetch1', 'lecturesController@fetch1')->name('autocomplete.fetch1');

Route::post('/autocomplete/fetch2', 'lecturesController@fetch2')->name('autocomplete.fetch2');

Route::post('/autocomplete/fetch3', 'lecturesController@fetch3')->name('autocomplete.fetch3');

Route::post('/autocomplete/fetch4', 'lecturesController@fetch4')->name('autocomplete.fetch4');

Route::post('/autocomplete/fetch5', 'lecturesController@fetch5')->name('autocomplete.fetch5');

Route::post('/autocomplete/fetch6', 'lecturesController@fetch6')->name('autocomplete.fetch6');

Route::post('/autocomplete/fetch7', 'lecturesController@fetch7')->name('autocomplete.fetch7');

Route::post('/autocomplete/course', 'lecturesController@course')->name('autocomplete.course');

Route::post('/autocompleteCourse', 'ReportController@autoCompleteCourse')->name('autocompleteCourse');

Route::post('/autocomplete_name_all_students', 'ReportController@AutoCompleteNameAllStudents')->name('autocomplete.allStudent_names');

    Route::post('/autocomplete_name_all_staff', 'ReportController@AutoCompleteNameAllStaff')->name('autocomplete.allStaff_names');

    Route::post('/autocomplete_staff_names', 'ReportController@AutoCompleteStaffNames')->name('autocomplete.staff_names');

    Route::post('/autocomplete/student', 'USERINFOController@fetchstudent')->name('autocomplete.student');

Route::get('/form', function () {
     return View ('form');

});



Route::post('create','reservationsController@insert');
Route::get('/edit1','usersystemController@update');
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

Route::get('addoptionstudents', function () {
     return View ('addoptionstudents');

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

// Route::get('newuser','USERINFOController@newuser');

Route::get('deactivateuser','USERINFOController@deleteuserview');

Route::get('activateuser','USERINFOController@activateuserview');

Route::post('newuser/add','USERINFOController@adduser')->name('addnewuser');

Route::get('managestudents','USERINFOController@managestudents');

Route::get('generate-pdf','ReportController@classPDF')->name('classpdf');

Route::get('generate-pdf2','ReportController@classPDF2')->name('classpdf2');

Route::get('generate-pdf3','ReportController@classPDF3')->name('classpdf3');

Route::get('generate-timetable-pdf','timetablesController@programPDF')->name('programpdf');

Route::get('generate-timetable1-pdf','timetablesController@roomPDF')->name('roompdf');

Route::get('generate-pdf1','ReportController@testPDF')->name('testpdf');

Route::get('generate-testpdf','ReportController@testallPDF')->name('testallpdf');

Route::get('generate-test-absentpdf','ReportController@testall2PDF')->name('testall2pdf');

Route::get('generate-test-presentpdf','ReportController@testall3PDF')->name('testall3pdf');

Route::get('generate-test-all-pdf','ReportController@testinvalidPDF')->name('testinvalidpdf');

Route::get('generate-UEpdf','ReportController@UEPDF')->name('UEpdf');

Route::get('generate-UE-reportpdf','ReportController@ue_reportPDF')->name('ue_reportPDF');

Route::get('generate-UE-Allpdf','ReportController@UEAllPDF')->name('UEAllpdf');

Route::get('generate-UE-AllStudentpdf','ReportController@ue_report_allPDF')->name('ue_report_allpdf');

Route::get('generate-UE-Absent-Studentpdf','ReportController@ue_report_all2PDF')->name('ue_report_all2pdf');

Route::get('generate-UE-Present-Studentpdf','ReportController@ue_report_all3PDF')->name('ue_report_all3pdf');

Route::get('generate-ETE-pdf','lecturesController@ETEPDF')->name('ETEpdf');

Route::get('generate-CSE-pdf','lecturesController@CSEPDF')->name('CSEpdf');

Route::get('generate-Course-pdf','coursesController@CS1PDF')->name('CS1pdf');

Route::get('generate-CSE-Staff-pdf','USERINFOController@staffCSEPDF')->name('staffCSEpdf');

Route::get('generate-ETE-Staff-pdf','USERINFOController@staffETEPDF')->name('staffETEpdf');

Route::get('events-pdf','calendarsController@eventsPDF')->name('eventspdf');


Route::get('/reservation', 'reservationsController@show');

Route::get('manage/courses', 'coursesController@index');

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

Route::get('generate-General-Students-PDF','USERINFOController@GeneralstudentsPDF')->name('Generalstudentspdf');

Route::get('generate-General-Staff-PDF','USERINFOController@GeneralstaffPDF')->name('Generalstaffpdf');

Route::get('generate-General-Events-PDF','calendarsController@GeneraleventsPDF')->name('Generaleventspdf');

Route::get('generate-General-Course-PDF','coursesController@GeneralcoursePDF')->name('Generalcoursepdf');

Route::get('generate-Students/courses-PDF','USERINFOController@studentsCoursesPDF')->name('studentscoursespdf');

Route::get('generate-Inactive-Students-PDF','USERINFOController@inactivestudentsPDF')->name('inactivestudentspdf');

Route::get('generate-reservations-PDF','reservationsController@reservationsPDF')->name('reservationspdf');


Route::get('/room', 'timetablesController@index');

Route::get('/Password','usersystemController@showPassword');

Route::get('/events', 'calendarsController@index');
Route::get('/email', 'calendarsController@email');


});
