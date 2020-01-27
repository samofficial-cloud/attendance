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
    $course=strtoupper($request->get('course_id'));

    $reg_no=$request->get('reg_no');

    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');

    $lectures_no = DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('lectures_no');

    if ($request->get('category')== 1) {

      //echo "All students";
      $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();

      foreach ($all as $val) {
        $values=[$course,$val->reg_no,$val->lectures_no];
        $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?',$values);
        array_multisort($all_students);
      }
      return View('attendance_report')->with('all_students',$all_students)->with('course_name',$course_name);





    }elseif ($request->get('category')== 2) {
      //echo one lecturer
      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
      $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
      $dataSingle_all = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name);
      }
      elseif($request->get('selection')=='One course') {
        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();


      $percentage=round($CountSingle*100/$lectures_no);

        return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name);


      }
      //echo one lecturer all courses
       else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$reg_no]);
       // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
       $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('name');
       $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('reg_no');
       foreach ($all as $val) {
         $values=[$reg_no,$val->courseId,$val->lectures_no];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?',$values);
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

        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();


          $percentage=round($CountSingle*100/$lectures_no);

        return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name);
        // return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      } else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$reg_no]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['category', '=','CLASS']])->limit(1)->value('reg_no');
        foreach ($all as $val) {
          $values=[$reg_no,$val->courseId,$val->lectures_no];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?',$values);
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
      $all_test = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

      $date = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
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

        $data = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

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

          $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

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
      $all_test = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $date = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $FromTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
      $ToTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

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

        $data = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $date=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('ue_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('validity',$validity)->with('course_name',$course_name);


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();
          $all_courses_names = DB::select('EXEC getAllCoursesUe ?',[$reg_no]);

          $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

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
