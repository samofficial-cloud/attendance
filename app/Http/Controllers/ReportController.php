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


    if ($request->get('category')== 1) {
      //echo "All students";
      $data = DB::table('attendance_all')->where('course', $course)->get();
      return View('attendance_report')->with('data',$data);
    } else{
//echo one student or one Lecturer
      $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->count('status');
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->orderBy('id', 'desc')->limit(1)->value('name');
      $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->get();

      if (strtoupper($request->get('course_id'))=='CS 321') {
        $percentage=round($CountSingle*100/30);
      } elseif (strtoupper($request->get('course_id'))=='CS 342') {
        $percentage=round($CountSingle*100/40);
      } else {
        $percentage=round($CountSingle*100/60);
      }
      return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
    }






  }

}
