<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\timetable;
use App\reservation;
use PDF;
use App\User;
use App\Notifications\UpdateCollision;

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
         $today=date('j');
         $tmonth=date('n');
         $tyear=date('Y');
    $timetables = timetable::find($request['id']);
    $id=$request['id'];
    $course=$request['courseid'];
    $criteria=$request['Reason'];
    $venue=$timetables->venue;

    if(is_null($request['courseid'])){
    $timetables->course =NULL;    
    $timetables->criteria =NULL;

    if ($timetables->save()) {

   return redirect()->back()
                    ->with('success', 'Timetable updated successfully');
                }

                else{
                     return redirect()->back()
                    ->with('Whoops!', 'Something went wrong');
                }


            }

else{
$reservations=reservation::where('fromTime','<=',$timetables->fromTime)->where('toTime','>=',$timetables->toTime)->where('Year','>=',$tyear)->where('Month','>=',$tmonth)->where('Date','>=',$today)->where('Day','=',$timetables->day)->get();

if(count($reservations)!=0){
    
    
    return view('updateTimetableCollisions')->with('reservations',$reservations)->with('venue',$venue)->with('id',$id)->with('course',$course)->with('criteria',$criteria);
              
}
elseif (count($reservations)==0) {
    # code...
 
    $timetables->course = $request['courseid'];
    $timetables->criteria = $request['Reason'];


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

    }


    public function roomPDF(){
       
        $pdf = PDF::loadView('roompdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('Room.pdf');
    }


    public function programPDF(){
       
        $pdf = PDF::loadView('programpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('Program.pdf');
    }


    public function notifyAll(Request $request){
        $today=date('j');
         $tmonth=date('n');
         $tyear=date('Y');
     $timetables = timetable::find($request['id']);
        $reservations=reservation::where('fromTime','<=',$timetables->fromTime)->where('toTime','>=',$timetables->toTime)->where('Year','>=',$tyear)->where('Month','>=',$tmonth)->where('Date','>=',$today)->where('Day','=',$timetables->day)->get();
    
         foreach ($reservations as $reservations) {
             # code...
             $name=$reservations->Name;
             $ReservationDate=$reservations->Reservation_date;
             $venue=$reservations->Venue;
             $date=$reservations->Date;
             $month=$reservations->Month;
             $year=$reservations->Year;
             $day=$reservations->Day;
             $time=$reservations->fromTime;
             $user=User::where('name',$name)->first();
             $user->notify(new UpdateCollision($venue, $date,$month,$year,$day, $name,$ReservationDate));

             $reservations->delete();
         }

         
         $venue= $timetables->venue;

          if(is_null($request['courseid'])){
    $timetables->course =NULL;    
    $timetables->criteria =NULL;
}
    else{
    $timetables->course = $request['courseid'];
    $timetables->criteria = $request['Reason'];
}

        if ( $timetables->save()) {
        return redirect('/TimetableManagement');
                  
              }
        


    }










  }



