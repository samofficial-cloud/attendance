<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timetable;

class timetablesController extends Controller
{
    //
    public function index(){

    	
    	// $timetables = timetable::select('course')->where('time', '16:00-17:00')->where('day', 'Monday')->value('course');

    	//$timetabled = timetable::select('course')->where('venue', 'B106')->where('day','Monday')->get();
    	//$timetablee = timetable::where('venue', 'B106')->get();
    	//$timetablee = timetable::select('course','venue')->where('program', $_GET['rid'])->where('time','16:00-17:00')->where('day','Monday')->value('course');

    	// $timetab = timetable::select('time','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Monday')->get();



    	//return $timetablede[0][11]->course;


    	return view('room');
    }


    public function showUpdateTimetable(){
        return view('UpdateTimetable');
    }

    public function showUpdateTimetable2(){
        return view('UpdateTimetable2');
    }

     public function TimetableManagement(){
        return view('UpdateTimetable1');
    }



    public function updatecourse (Request $request){
    $timetables = timetable::find($request['id']);

    if(is_null($request['courseid'])){
    $timetables->course =NULL;    
    $timetables->criteria =NULL;
}
    else{
    $timetables->course = $request['courseid'];
    $timetables->criteria = $request['Reason'];
}

 if ( $timetables->save()) {

   return redirect()->back()
                    ->with('success', 'Timetable updated successfully');
                }

                else{
                     return redirect()->back()
                    ->with('Whoops!', 'Something went wrong');
                }

    }









  }



