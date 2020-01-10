<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller

{
  public function showattendance_all(Request $request) {
    $dataSingle="";
    $data="";
    $course=strtoupper($request->get('course_id'));

    $reg_no=$request->get('reg_no');

$lectures_no = DB::table('courses')->where([['course', '=', $course]])->value('lectures_no');

    if ($request->get('category')== 1) {
      //echo "All students";
      $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();

      foreach ($all as $val) {
        $values=[$course,$val->reg_no,$val->lectures_no];
        $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?',$values);
      }
      return View('attendance_report')->with('all_students',$all_students);



    }elseif ($request->get('category')== 2) {
      //echo one lecturer
      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff'],['category', '=','CLASS']])->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name);
      }
      elseif($request->get('selection')=='One course') {
        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->get();


      $percentage=round($CountSingle*100/$lectures_no);

        return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      }
      //echo one lecturer all courses
       else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$reg_no]);
       // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
       $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('name');
       foreach ($all as $val) {
         $values=[$reg_no,$val->courseId,$val->lectures_no];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?',$values);
       }
       return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
// dd($all_courses);


        // $data = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->get();
        // $name = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->limit(1)->value('name');
        // return View('attendance_report')->with('data',$data)->with('name',$name);
      }


    }else {

      //echo one student

      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name);
      }

      elseif($request->get('selection')=='One course') {

        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->get();


          $percentage=round($CountSingle*100/$lectures_no);

        return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        // return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      } else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$reg_no]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('name');
        foreach ($all as $val) {
          $values=[$reg_no,$val->courseId,$val->lectures_no];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?',$values);
        }
        return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
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

    $reg_no=$request->get('reg_no');


    if ($request->get('category')== 1) {
      //echo "All students";
      $all_test = DB::table('attendance')->where([['courseId', '=', $course],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('test_report_all')->with('all_test',$all_test);



    }else {

      //echo one student

      if($request->get('checkbox')=='all cases' AND $request->get('selection')=='All courses'){


        $checkbox_all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


        return View('test_report_invalid')->with('checkbox_all_courses',$checkbox_all_courses)->with('name',$name)->with('reg_no',$reg_no);
      }elseif($request->get('checkbox')=='all cases') {
        $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      return View('test_report_invalid')->with('dataSingle_all',$dataSingle_all)->with('name',$name);

    }

      elseif($request->get('selection')=='One course') {

        $data = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('test_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name);


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
          $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

          return View('test_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no);
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

    $reg_no=$request->get('reg_no');


    if ($request->get('category')== 1) {
      //echo "All students";
      $all_test = DB::table('attendance_ue')->where([['courseId', '=', $course],['validity', '=', 'VALID'],['title', '=','student']])->get();
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('ue_report_all')->with('all_test',$all_test);



    }else {

      //echo one student

      if($request->get('selection')=='One course') {

        $data = DB::table('attendance_ue')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('ue_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name);


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();
          $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        return View('ue_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no);
    // dd($all);

        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }

  }

}
