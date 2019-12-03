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
      $data = DB::table('attendance_all')->where([['course', '=', $course],['title', '=','student']])->get();
      return View('attendance_report')->with('data',$data);

    }elseif ($request->get('category')== 2) {
      //echo one lecturer
      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff']])->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name);
      }
      elseif($request->get('selection')=='One course') {
        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->get();

        if (strtoupper($request->get('course_id'))=='CS 321') {
          $percentage=round($CountSingle*100/30);
        } elseif (strtoupper($request->get('course_id'))=='CS 342') {
          $percentage=round($CountSingle*100/40);
        } else {
          $percentage=round($CountSingle*100/60);
        }
        return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      }
      //echo lecturer all courses
       else {
        $data = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->get();
        $name = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->limit(1)->value('name');
        return View('attendance_report')->with('data',$data)->with('name',$name);
      }


    }else {

      //echo one student

      if ($request->get('checkbox')=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student']])->get();
      return View('attendance_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name);
      }

      elseif($request->get('selection')=='One course') {

        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();

        if (strtoupper($request->get('course_id'))=='CS 321') {
          $percentage=round($CountSingle*100/30);
        } elseif (strtoupper($request->get('course_id'))=='CS 342') {
          $percentage=round($CountSingle*100/40);
        } else {
          $percentage=round($CountSingle*100/60);
        }
        return View('attendance_report')->with('dataSingle',$dataSingle)->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);


      } else {
        $data = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        return View('attendance_report')->with('data',$data)->with('name',$name);
      }

    }

  }

}
