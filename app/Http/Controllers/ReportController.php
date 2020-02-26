<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller

{
  public function showattendance_all(Request $request) {
        $dataSingle="";
        $data="";
      $instructor_data="";
      $instructor2_data="";
      $instructor3_data="";
      $instructor4_data="";
      $instructor5_data="";
      $Tutorial_Assistant_data="";
      $technical_staff_data="";
      $Technical_Staff_2_data="";
      $Technical_Staff_3_data="";

    $today=date('Y-m-d');
    $semday1='2019-11-04';

    $course=strtoupper($request->get('course_id'));

    $reg_no=$request->get('reg_no');

    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');

    $lectures_no = DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('lectures_no');

    $instructor=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor IS NOT NULL")->value('instructor');
      $instructor_2=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_2 IS NOT NULL")->value('instructor_2');
      $instructor_3=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_3 IS NOT NULL")->value('instructor_3');
      $instructor_4=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_4 IS NOT NULL")->value('instructor_4');
      $instructor_5=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_5 IS NOT NULL")->value('instructor_5');
      $Tutorial_Assistant=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Tutorial_Assistant IS NOT NULL")->value('Tutorial_Assistant');
      $technical_staff=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND technical_staff IS NOT NULL")->value('technical_staff');
      $Technical_Staff_2=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Technical_Staff_2 IS NOT NULL")->value('Technical_Staff_2');
      $Technical_Staff_3=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Technical_Staff_3 IS NOT NULL")->value('Technical_Staff_3');

      $instructor_reg=DB::table('attendance')->where('name', $instructor)->value('reg_no');
      $instructor2_reg=DB::table('attendance')->where('name', $instructor_2)->value('reg_no');
      $instructor3_reg=DB::table('attendance')->where('name', $instructor_3)->value('reg_no');
      $instructor4_reg=DB::table('attendance')->where('name', $instructor_4)->value('reg_no');
      $instructor5_reg=DB::table('attendance')->where('name', $instructor_5)->value('reg_no');
      $Tutorial_Assistant_reg=DB::table('attendance')->where('name', $Tutorial_Assistant)->value('reg_no');
      $technical_staff_reg=DB::table('attendance')->where('name', $technical_staff)->value('reg_no');
      $Technical_Staff_2_reg=DB::table('attendance')->where('name', $Technical_Staff_2)->value('reg_no');
      $Technical_Staff_3_reg=DB::table('attendance')->where('name', $Technical_Staff_3)->value('reg_no');



    if ($request->get('category')== 1) {

      //Echo "All students";
    $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);

      foreach ($all as $val) {
        $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
        $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?,?,?',$values);
        array_multisort($all_students);
      }

      return View('attendance_report')->with('all_students',$all_students)->with('course_name',$course_name);




    }elseif ($request->get('category')== 2) {
      //echo one lecturer
      if ($request->get('checkbox')=='all cases') {

          if($instructor!=NULL){

              $instructor_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor_data=NULL;
          }


          if($instructor_2!=NULL){

              $instructor2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_2],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor2_data=NULL;
          }


          if($instructor_3!=NULL){

              $instructor3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_3],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor3_data=NULL;
          }

          if($instructor_4!=NULL){

              $instructor4_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_4],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor4_data=NULL;
          }

          if($instructor_5!=NULL){

              $instructor5_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_5],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor5_data=NULL;
          }

          if($Tutorial_Assistant!=NULL){

              $Tutorial_Assistant_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Tutorial_Assistant],['position', '=','TUT'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Tutorial_Assistant_data=NULL;
          }

          if($technical_staff!=NULL){

              $technical_staff_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$technical_staff],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $technical_staff_data=NULL;
          }

          if($Technical_Staff_2!=NULL){

              $Technical_Staff_2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_2],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Technical_Staff_2_data=NULL;
          }

          if($Technical_Staff_3!=NULL){

              $Technical_Staff_3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_3],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Technical_Staff_3_data=NULL;
          }


      return View('attendance_report')->with('instructor',$instructor)->with('instructor_2',$instructor_2)->with('instructor_3',$instructor_3)->with('instructor_4',$instructor_4)->with('instructor_5',$instructor_5)->with('Tutorial_Assistant',$Tutorial_Assistant)->with('technical_staff',$technical_staff)->with('$Technical_Staff_2',$Technical_Staff_2)->with('$Technical_Staff_3',$Technical_Staff_3)->with('instructor_reg',$instructor_reg)->with('instructor2_reg',$instructor2_reg)->with('instructor3_reg',$instructor3_reg)->with('instructor4_reg',$instructor4_reg)->with('instructor5_reg',$instructor5_reg)->with('Tutorial_Assistant_reg',$Tutorial_Assistant_reg)->with('technical_staff_reg',$technical_staff_reg)->with('Technical_Staff_2_reg',$Technical_Staff_2_reg)->with('Technical_Staff_3_reg',$Technical_Staff_3_reg)->with('instructor_data',$instructor_data)->with('instructor2_data',$instructor2_data)->with('instructor3_data',$instructor3_data)->with('instructor4_data',$instructor4_data)->with('instructor5_data',$instructor5_data)->with('Tutorial_Assistant_data',$Tutorial_Assistant_data)->with('technical_staff_data',$technical_staff_data)->with('Technical_Staff_2_data',$Technical_Staff_2_data)->with('Technical_Staff_3_data',$Technical_Staff_3_data)->with('course_name',$course_name);
      }
      elseif($request->get('selection')=='One course') {
        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

        $values2=[$course,$today,$semday1];
        $tempH= DB::select('EXEC extra_countH ?,?,?',$values2);
        $tempC= DB::select('EXEC extra_countC ?,?,?',$values2);

      foreach ($tempH as $val) {
        $extraH=$val->TotalRecords;
      }

      foreach ($tempC as $val) {
        $extraC=$val->TotalRecords;
      }

      $percentage=round(($CountSingle+$extraH+$extraC)*100/$lectures_no);

      return View('attendance_report2')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name);


      }
      //echo one lecturer all courses
       else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$reg_no]);
       // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
       $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
       $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
       foreach ($all as $val) {
         $values=[$reg_no,$val->courseId,$val->lectures_no,$today,$semday1];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?,?,?',$values);
       }

       return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no);
// dd($all_courses);


        // $data = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->get();
        // $name = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->limit(1)->value('name');
        // return View('attendance_report')->with('data',$data)->with('name',$name);
      }


    }else {

      //echo one student

      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
      $dataSingle_all = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name);
      }

      elseif($request->get('selection')=='One course') {

        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();


$values3=[$course,$today,$semday1];
$tempH2= DB::select('EXEC extra_countH ?,?,?',$values3);
$tempC2= DB::select('EXEC extra_countC ?,?,?',$values3);

foreach ($tempH2 as $val) {
$extraH2=$val->TotalRecords;
}

foreach ($tempC2 as $val) {
$extraC2=$val->TotalRecords;
}


          $percentage=round(($CountSingle+$extraH2+$extraC2)*100/$lectures_no);

        return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name);
        // return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      } else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$reg_no]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
        foreach ($all as $val) {
          $values3=[$reg_no,$val->courseId,$val->lectures_no,$today,$semday1];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?,?,?',$values3);
        }
        // dd($all_courses);
        return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no);
// dd($all);

        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }

  }


  public function showattendance_all_tests (Request $request){

    $dataSingle="";
    $data="";
    $course=strtoupper($request->get('course_id'));
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $reg_no=$request->get('reg_no');


    if ($request->get('category')== 1) {
      //echo "All students";
      $all_test = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

      $date = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('test_report_all')->with('all_test',$all_test)->with('all_test2',$all_test2)->with('all_test3',$all_test3)->with('date',$date)->with('date2',$date2)->with('date3',$date3)->with('course_name',$course_name);



    }else {

      //echo one student

      if($request->get('checkbox')=='all cases' AND $request->get('selection')=='All courses'){


        $checkbox_all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


        return View('test_report_invalid')->with('checkbox_all_courses',$checkbox_all_courses)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name);
      }elseif($request->get('checkbox')=='all cases') {
        $dataSingle_all = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      return View('test_report_invalid')->with('dataSingle_all',$dataSingle_all)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name);

    }

      elseif($request->get('selection')=='One course') {

        $data = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('test_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name);


      } else {

          //echo one student all courses

          // $all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 1']])->get();
          // $all_courses2 = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 2']])->get();
          // $all_courses3 = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 3']])->get();

          $all_courses = DB::select('EXEC getAllCoursesTest1 ?',[$reg_no]);
          $all_courses2 = DB::select('EXEC getAllCoursesTest2 ?',[$reg_no]);
          $all_courses3 = DB::select('EXEC getAllCoursesTest3 ?',[$reg_no]);

          $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

          return View('test_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no)->with('all_courses2',$all_courses2)->with('all_courses3',$all_courses3);
    // dd($all);


        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }



  }


  public function showattendance_all_ue (Request $request){

    $dataSingle="";
    $data="";
    $course=strtoupper($request->get('course_id'));
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $reg_no=$request->get('reg_no');


    if ($request->get('category')== 1) {
      //echo "All students";
      $all_test = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $date = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $FromTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
      $ToTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('ue_report_all')->with('all_test',$all_test)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('course_name',$course_name);



    }else {

      //echo one student

      if($request->get('checkbox')=='all cases') {

        $date=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      return View('ue_report_invalid')->with('reg_no',$reg_no)->with('name',$name)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('validity',$validity)->with('course_name',$course_name);

    }else if($request->get('selection')=='One course') {

        $data = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $date=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['validity', '=', 'VALID']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('ue_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('validity',$validity)->with('course_name',$course_name);


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->get();
          $all_courses_names = DB::select('EXEC getAllCoursesUe ?',[$reg_no]);

          $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        return View('ue_report')->with('all_courses',$all_courses)->with('all_courses_names',$all_courses_names)->with('name',$name)->with('reg_no',$reg_no);
    // dd($all);

        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }

  }



   public function classPDF(){

        $pdf = PDF::loadView('classpdf');

        return $pdf->stream('class attendance.pdf');
    }

    public function testPDF(){

        $pdf = PDF::loadView('testpdf');

        return $pdf->stream('Test attendance.pdf');
    }

    public function testallPDF(){

        $pdf = PDF::loadView('testallpdf');

        return $pdf->stream('Test All attendance.pdf');
    }

    public function testinvalidPDF(){

        $pdf = PDF::loadView('testinvalidpdf');

        return $pdf->stream('Test Invalid attendance.pdf');
    }

    public function UEPDF(){

        $pdf = PDF::loadView('UEpdf');

        return $pdf->stream('UE attendance.pdf');
    }

    public function UEAllPDF(){

        $pdf = PDF::loadView('UEAllpdf');

        return $pdf->stream('UE All attendance.pdf');
    }

}
