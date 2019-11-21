<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller

{
  public function showattendance_all(Request $request) {
    $dataSingle="";
    $data="";
    $course=$request->get('course_id');
    $reg_no=$request->get('reg_no');
    $week_no=$request->get('week_no');
    $week_no_2=$request->get('week_no_2');

    if ($request->get('category')== 1) {
      //echo "All students";
      $data = DB::table('attendance_all')->where('course', $course)->whereBetween('week', [$week_no,$week_no_2])->get();
      return View('attendance_report')->with('data',$data);
    } else{
//echo one student or one Lecturer
      $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->whereBetween('week', [$week_no,$week_no_2])->sum('status');
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->whereBetween('week', [$week_no,$week_no_2])->orderBy('id', 'desc')->limit(1)->value('name');
      $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->whereBetween('week', [$week_no,$week_no_2])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      $course_name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->whereBetween('week', [$week_no,$week_no_2])->orderBy('id', 'desc')->limit(1)->value('courseId');
      $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no]])->whereBetween('week', [$week_no,$week_no_2])->get();

      if ($request->get('course_id')=='cs 321') {
        $percentage=round($CountSingle*100/30);
      } elseif ($request->get('course_id')=='cs 321') {
        $percentage=round($CountSingle*100/40);
      } else {
        $percentage=round($CountSingle*100/60);
      }
      return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('course_name',$course_name)->with('name',$name);
    }






  }

}
