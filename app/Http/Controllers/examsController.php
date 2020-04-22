<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\exam;
use DB;

class examsController extends Controller
{
    //
    public function index(){
    	// $courses=courses::select('courses.program','exams.course','exams.fromTime','exams.venue')
    	// ->join('exams','exams.course','=','courses.course')
    	// ->where('courses.program','ESC1')
    	// ->get();


    	// $exams=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','courses.program','exams.fromTime')
    	// ->join('calendars','calendars.Week','=','exams.Week')
    	// ->join('courses','courses.course','=','exams.course')
    	// ->where('calendars.Week','Wk16')
    	// //->where('calendars.day','Monday')
    	// //->where('exams.day','Monday')
    	// ->where('exams.venue','B106')
    	// //->where('exams.fromTime','07:30')
    	//  //->where('courses.program','ESC2')
    	// ->get();

    	// $exams1=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime')
     //  ->join('calendars','calendars.Week','=','exams.Week')
     //  ->where('calendars.Week','Wk16')
     //  ->where('calendars.Day','Monday')
     //  ->where('exams.day','Monday')
     //  ->where('exams.venue','B106')
     //  ->get();


     //  $exams2 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime')
     //  ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
     //   ->where ('courses.program' ,'ESC2')
     //   ->where('exams.day','Monday')
     //   ->get();

    	//return $exams2;

    	// $courses=exam::select('exams.course','courses.program')
    	//  ->join('courses','courses.course','=','exams.course')
    	//  ->where('courses.program','ESC2')
    	//  ->get();

    	return view('ExamTimetable2');
    }


    public function updateexam (Request $request){
    $exams = exam::find($request['id']);

     $exams->venue = $request['Venue'];
      $exams->day = $request['Day'];
    $exams->course = $request['courseid'];
    $exams->fromTime = $request['fromTime'];
     $exams->toTime= $request['toTime'];
    //$exams->Week = $request['Week'];

 if ( $exams->save()) {

   return redirect()->back()
                    ->with('success', 'Timetable updated successfully');
                }

                else{
                     return redirect()->back()
                    ->with('Whoops!', 'Something went wrong');
                }

    }

     

}
