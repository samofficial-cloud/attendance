<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timetable;
use PDF;

class timetablesController extends Controller
{
    //
    public function index(){
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


    public function roomPDF(){
       
        $pdf = PDF::loadView('roompdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('Room.pdf');
    }


    public function programPDF(){
       
        $pdf = PDF::loadView('programpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('Program.pdf');
    }










  }



