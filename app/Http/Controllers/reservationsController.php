<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\reservation;
use App\timetable;
use App\User;
use App\Notifications\ApprovalStatus;
use App\Notifications\DeclineStatus;
use App\Notifications\PendingStatus;
use Auth;

     



class reservationsController extends Controller
{
    //
 
public function venue(){


      return view('venue');
}

public function showReservations(){


      return view('tmaster');
}

public function myreservations(){


      return view('myreservations');
}




public function changestatus($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));
    $name=$reservations->Name;

    $venue=$reservations->Venue;
    $date=$reservations->Date;
    $month=$reservations->Month;
    $year=$reservations->Year;
    $day=$reservations->Day;
    $time=$reservations->fromTime;

      $user=User::where('name',$name)->first();
      $user->notify(new DeclineStatus($venue, $date, $month, $year, $day, $time));

    $reservations->delete();
    
    
       return redirect()->route('approval')
                  ->with('success', 'Request Successfully Declined');
    
    

  }

  public function changestatusd($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));

    $reservations->delete();
    
    
       return redirect()->route('myreservations')
                  ->with('success', 'Request Successfully Deleted.');
  }


public function changestatusb($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));
    $reservations->rstatus= '-1';

    $name=$reservations->Name;
    $venue=$reservations->Venue;
    $date=$reservations->Date;
    $month=$reservations->Month;
    $year=$reservations->Year;
    $day=$reservations->Day;
    
    if ($reservations->save()) {
      $user=User::where('name',$name)->first();
      $user->notify(new PendingStatus($venue, $date,$month,$year,$day));
       return redirect()->route('approval')
                  ->with('success', 'Request has been Changed Successfully.');
    }
    else{
      return redirect(route('changestatusb'));
    }


  }


  public function changestatusc($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));
    $reservations->rstatus= '1';
    $name=$reservations->Name;
    $venue=$reservations->Venue;
    $date=$reservations->Date;
    $month=$reservations->Month;
    $year=$reservations->Year;
    $day=$reservations->Day;
    if ($reservations->save()) {
       $user=User::where('name',$name)->first();
      $user->notify(new ApprovalStatus($venue, $date,$month,$year,$day));
      
      return redirect()->route('approval')
                  ->with('success', 'Request Successfully Approved.');
    }
    else{
      return redirect(route('changestatusc'));
    }


  }


  public function DeleteRequest($id)
  {
    $reservations = reservation::find($id);

    $reservations->delete();
    
    
      return redirect()->route('approval')
                  ->with('success', 'Request Deleted Successfully.');
  }


   public function index()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function insert(Request $request){
$Venue = $request->input('Venue');
$Day = $request->input('Day');
$Month = $request->input('Month');
$Year = $request->input('Year');
$Week = $request->input('wid');
$Name=$request->input('Name');
$Reason = $request->input('Reason');
$fromTime = $request->input('fromTime');
$toTime = $request->input('toTime');
$Date =$request->input('Date');
$Remarks = $request->input('remark');
$Capacity = $request->input('capacity');
$rstatus = '-1';
$data=array('Venue'=>$Venue,"Day"=>$Day,"Month"=>$Month,"Year"=>$Year,"Week"=>$Week,"Name"=>$Name,"Reason"=>$Reason,"fromTime"=>$fromTime,"toTime"=>$toTime,"Date"=>$Date,"rstatus"=>$rstatus, "Capacity"=>$Capacity,"Remarks"=>$Remarks);
DB::table('reservations')->insert($data);
 return redirect()->back()->with('success', 'Request Submitted Successfully');
}



  public function show(){

    $timetable = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','07:00')->get();
 $timetable1 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','08:00')->get();
 $timetable2 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','09:00')->get();
 $timetable3 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','10:00')->get();
 $timetable4 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','11:00')->get();
 $timetable5 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','12:00')->get();
 $timetable6 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','13:00')->get();
 $timetable7 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','14:00')->get();
 $timetable8 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','15:00')->get();
 $timetable9 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','16:00')->get();
 $timetable10 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','17:00')->get();
 $timetable11 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','18:00')->get();
 $timetable12 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','19:00')->get();

 $timetableA2 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','07:00')->get();
 $timetable21 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','08:00')->get();
 $timetable22 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','09:00')->get();
 $timetable23 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','10:00')->get();
 $timetable24 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','11:00')->get();
 $timetable25 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','12:00')->get();
 $timetable26 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','13:00')->get();
 $timetable27 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','14:00')->get();
 $timetable28 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','15:00')->get();
 $timetable29 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','16:00')->get();
 $timetable210 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','17:00')->get();
 $timetable211 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','18:00')->get();
 $timetable212 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','19:00')->get();

 $timetableA3 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','07:00')->get();
 $timetable31 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','08:00')->get();
 $timetable32 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','09:00')->get();
 $timetable33 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','10:00')->get();
 $timetable34 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','11:00')->get();
 $timetable35 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','12:00')->get();
 $timetable36 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','13:00')->get();
 $timetable37 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','14:00')->get();
 $timetable38 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','15:00')->get();
 $timetable39 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','16:00')->get();
 $timetable310 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','17:00')->get();
 $timetable311 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','18:00')->get();
 $timetable312 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','19:00')->get();

 $timetableA4 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','07:00')->get();
 $timetable41 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','08:00')->get();
 $timetable42 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','09:00')->get();
 $timetable43 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','10:00')->get();
 $timetable44 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','11:00')->get();
 $timetable45 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','12:00')->get();
 $timetable46 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','13:00')->get();
 $timetable47 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','14:00')->get();
 $timetable48 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','15:00')->get();
 $timetable49 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','16:00')->get();
 $timetable410 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','17:00')->get();
 $timetable411 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','18:00')->get();
 $timetable412 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','19:00')->get();

 $timetableA5 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','07:00')->get();
 $timetable51 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','08:00')->get();
 $timetable52 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','09:00')->get();
 $timetable53 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','10:00')->get();
 $timetable54 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','11:00')->get();
 $timetable55 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','12:00')->get();
 $timetable56 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','13:00')->get();
 $timetable57 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','14:00')->get();
 $timetable58 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','15:00')->get();
 $timetable59 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','16:00')->get();
 $timetable510 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','17:00')->get();
 $timetable511 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','18:00')->get();
 $timetable512 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','19:00')->get();



 $state = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','07:00')->get();
 $state1 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','08:00')->get();
 $state2 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','09:00')->get();
 $state3 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','10:00')->get();
 $state4 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','11:00')->get();
 $state5 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','12:00')->get();
 $state6 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','13:00')->get();
 $state7 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','14:00')->get();
 $state8 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','15:00')->get();
 $state9 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','16:00')->get();
 $state10 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','17:00')->get();
 $state11 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','18:00')->get();
 $state12 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','19:00')->get();

$stateA2 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','07:00')->get();
$state21 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','08:00')->get();
$state22 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','09:00')->get();
$state23 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','10:00')->get();
$state24 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','11:00')->get();
$state25 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','12:00')->get();
$state26 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','13:00')->get();
$state27 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','14:00')->get();
$state28 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','15:00')->get();
$state29 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','16:00')->get();
$state210 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','17:00')->get();
$state211 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','18:00')->get();
$state212 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','19:00')->get();

$stateA3 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','07:00')->get();
$state31 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','08:00')->get();
$state32 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','09:00')->get();
$state33 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','10:00')->get();
$state34 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','11:00')->get();
$state35 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','12:00')->get();
$state36 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','13:00')->get();
$state37 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','14:00')->get();
$state38 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','15:00')->get();
$state39 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','16:00')->get();
$state310 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','17:00')->get();
$state311 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','18:00')->get();
$state312 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','19:00')->get();

$stateA4 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','07:00')->get();
$state41 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','08:00')->get();
$state42 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','09:00')->get();
$state43 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','10:00')->get();
$state44 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','11:00')->get();
$state45 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','12:00')->get();
$state46 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','13:00')->get();
$state47 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','14:00')->get();
$state48 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','15:00')->get();
$state49 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','16:00')->get();
$state410 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','17:00')->get();
$state411 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','18:00')->get();
$state412 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','19:00')->get();

$stateA5 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','07:00')->get();
$state51 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','08:00')->get();
$state52 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','09:00')->get();
$state53 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','10:00')->get();
$state54 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','11:00')->get();
$state55 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','12:00')->get();
$state56 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','13:00')->get();
$state57 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','14:00')->get();
$state58 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','15:00')->get();
$state59 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','16:00')->get();
$state510 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','17:00')->get();
$state511 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','18:00')->get();
$state512 = reservation::select('rstatus','toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','19:00')->get();

$next=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','07:00')->value('course');
$next1=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','08:00')->value('course');
$next2=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','09:00')->value('course');
$next3=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','10:00')->value('course');
$next4=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','11:00')->value('course');
$next5=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','12:00')->value('course');
$next6=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','13:00')->value('course');
$next7=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','14:00')->value('course');
$next8=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','15:00')->value('course');
$next9=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','16:00')->value('course');
$next10=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','17:00')->value('course');
$next11=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','18:00')->value('course');
$next12=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','19:00')->value('course');

$nextA2=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','07:00')->value('course');
$next21=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','08:00')->value('course');
$next22=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','09:00')->value('course');
$next23=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','10:00')->value('course');
$next24=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','11:00')->value('course');
$next25=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','12:00')->value('course');
$next26=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','13:00')->value('course');
$next27=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','14:00')->value('course');
$next28=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','15:00')->value('course');
$next29=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','16:00')->value('course');
$next210=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','17:00')->value('course');
$next211=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','18:00')->value('course');
$next212=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','19:00')->value('course');

$nextA3=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','07:00')->value('course');
$next31=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','08:00')->value('course');
$next32=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','09:00')->value('course');
$next33=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','10:00')->value('course');
$next34=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','11:00')->value('course');
$next35=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','12:00')->value('course');
$next36=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','13:00')->value('course');
$next37=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','14:00')->value('course');
$next38=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','15:00')->value('course');
$next39=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','16:00')->value('course');
$next310=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','17:00')->value('course');
$next311=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','18:00')->value('course');
$next312=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','19:00')->value('course');

$nextA4=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','07:00')->value('course');
$next41=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','08:00')->value('course');
$next42=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','09:00')->value('course');
$next43=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','10:00')->value('course');
$next44=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','11:00')->value('course');
$next45=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','12:00')->value('course');
$next46=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','13:00')->value('course');
$next47=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','14:00')->value('course');
$next48=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','15:00')->value('course');
$next49=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','16:00')->value('course');
$next410=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','17:00')->value('course');
$next411=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','18:00')->value('course');
$next412=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','19:00')->value('course');

$nextA5=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','07:00')->value('course');
$next51=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','08:00')->value('course');
$next52=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','09:00')->value('course');
$next53=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','10:00')->value('course');
$next54=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','11:00')->value('course');
$next55=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','12:00')->value('course');
$next56=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','13:00')->value('course');
$next57=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','14:00')->value('course');
$next58=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','15:00')->value('course');
$next59=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','16:00')->value('course');
$next510=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','17:00')->value('course');
$next511=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','18:00')->value('course');
$next512=timetable::select('course')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','19:00')->value('course');



$statex = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','07:00')->value('toTime');
$statex1 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','08:00')->value('toTime');
$statex2 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','09:00')->value('toTime');
$statex3 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','10:00')->value('toTime');
$statex4 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','11:00')->value('toTime');
$statex5 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','12:00')->value('toTime');
$statex6 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','13:00')->value('toTime');
$statex7 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','14:00')->value('toTime');
$statex8 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','15:00')->value('toTime');
$statex9 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','16:00')->value('toTime');
$statex10 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','17:00')->value('toTime');
$statex11 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','18:00')->value('toTime');
$statex12 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','19:00')->value('toTime');

$statexA2 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','07:00')->value('toTime');
$statex21 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','08:00')->value('toTime');
$statex22 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','09:00')->value('toTime');
$statex23 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','10:00')->value('toTime');
$statex24 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','11:00')->value('toTime');
$statex25 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','12:00')->value('toTime');
$statex26 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','13:00')->value('toTime');
$statex27 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','14:00')->value('toTime');
$statex28 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','15:00')->value('toTime');
$statex29 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','16:00')->value('toTime');
$statex210 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','17:00')->value('toTime');
$statex211 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','18:00')->value('toTime');
$statex212 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','19:00')->value('toTime');

$statexA3 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','07:00')->value('toTime');
$statex31 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','08:00')->value('toTime');
$statex32 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','09:00')->value('toTime');
$statex33 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','10:00')->value('toTime');
$statex34 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','11:00')->value('toTime');
$statex35 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','12:00')->value('toTime');
$statex36 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','13:00')->value('toTime');
$statex37 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','14:00')->value('toTime');
$statex38 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','15:00')->value('toTime');
$statex39 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','16:00')->value('toTime');
$statex310 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','17:00')->value('toTime');
$statex311 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','18:00')->value('toTime');
$statex312 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','19:00')->value('toTime');

$statexA4 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','07:00')->value('toTime');
$statex41 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','08:00')->value('toTime');
$statex42 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','09:00')->value('toTime');
$statex43 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','10:00')->value('toTime');
$statex44 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','11:00')->value('toTime');
$statex45 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','12:00')->value('toTime');
$statex46 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','13:00')->value('toTime');
$statex47 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','14:00')->value('toTime');
$statex48 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','15:00')->value('toTime');
$statex49 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','16:00')->value('toTime');
$statex410 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','17:00')->value('toTime');
$statex411 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','18:00')->value('toTime');
$statex412 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','19:00')->value('toTime');

$statexA5 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','07:00')->value('toTime');
$statex51 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','08:00')->value('toTime');
$statex52 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','09:00')->value('toTime');
$statex53 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','10:00')->value('toTime');
$statex54 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','11:00')->value('toTime');
$statex55 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','12:00')->value('toTime');
$statex56 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','13:00')->value('toTime');
$statex57 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','14:00')->value('toTime');
$statex58 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','15:00')->value('toTime');
$statex59 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','16:00')->value('toTime');
$statex510 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','17:00')->value('toTime');
$statex511 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','18:00')->value('toTime');
$statex512 = reservation::select('toTime')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','19:00')->value('toTime');


$nexts = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','07:00')->value('rstatus');
$nexts1 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','08:00')->value('rstatus');
$nexts2 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','09:00')->value('rstatus');
$nexts3 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','10:00')->value('rstatus');
$nexts4 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','11:00')->value('rstatus');
$nexts5 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','12:00')->value('rstatus');
$nexts6 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','13:00')->value('rstatus');
$nexts7 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','14:00')->value('rstatus');
$nexts8 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','15:00')->value('rstatus');
$nexts9 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','16:00')->value('rstatus');
$nexts10 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','17:00')->value('rstatus');
$nexts11 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','18:00')->value('rstatus');
$nexts12 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','19:00')->value('rstatus');

$nextsA2 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','07:00')->value('rstatus');
$nexts21 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','08:00')->value('rstatus');
$nexts22 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','09:00')->value('rstatus');
$nexts23 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','10:00')->value('rstatus');
$nexts24 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','11:00')->value('rstatus');
$nexts25 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','12:00')->value('rstatus');
$nexts26 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','13:00')->value('rstatus');
$nexts27 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','14:00')->value('rstatus');
$nexts28 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','15:00')->value('rstatus');
$nexts29 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','16:00')->value('rstatus');
$nexts210 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','17:00')->value('rstatus');
$nexts211 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','18:00')->value('rstatus');
$nexts212 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','19:00')->value('rstatus');

$nextsA3 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','07:00')->value('rstatus');
$nexts31 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','08:00')->value('rstatus');
$nexts32 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','09:00')->value('rstatus');
$nexts33 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','10:00')->value('rstatus');
$nexts34 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','11:00')->value('rstatus');
$nexts35 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','12:00')->value('rstatus');
$nexts36 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','13:00')->value('rstatus');
$nexts37 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','14:00')->value('rstatus');
$nexts38 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','15:00')->value('rstatus');
$nexts39 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','16:00')->value('rstatus');
$nexts310 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','17:00')->value('rstatus');
$nexts311 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','18:00')->value('rstatus');
$nexts312 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','19:00')->value('rstatus');

$nextsA4 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','07:00')->value('rstatus');
$nexts41 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','08:00')->value('rstatus');
$nexts42 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','09:00')->value('rstatus');
$nexts43 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','10:00')->value('rstatus');
$nexts44 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','11:00')->value('rstatus');
$nexts45 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','12:00')->value('rstatus');
$nexts46 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','13:00')->value('rstatus');
$nexts47 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','14:00')->value('rstatus');
$nexts48 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','15:00')->value('rstatus');
$nexts49 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','16:00')->value('rstatus');
$nexts410 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','17:00')->value('rstatus');
$nexts411 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','18:00')->value('rstatus');
$nexts412 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','19:00')->value('rstatus');

$nextsA5 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','07:00')->value('rstatus');
$nexts51 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','08:00')->value('rstatus');
$nexts52 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','09:00')->value('rstatus');
$nexts53 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','10:00')->value('rstatus');
$nexts54 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','11:00')->value('rstatus');
$nexts55 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','12:00')->value('rstatus');
$nexts56 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','13:00')->value('rstatus');
$nexts57 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','14:00')->value('rstatus');
$nexts58 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','15:00')->value('rstatus');
$nexts59 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','16:00')->value('rstatus');
$nexts510 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','17:00')->value('rstatus');
$nexts511 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','18:00')->value('rstatus');
$nexts512 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','19:00')->value('rstatus');





 return View('reservation')->with('timetable',$timetable)->with('timetable1',$timetable1)->with('timetable2',$timetable2)->with('timetable3',$timetable3)->with('timetable4',$timetable4)->with('timetable5',$timetable5)->with('timetable6',$timetable6)->with('timetable7',$timetable7)->with('timetable8',$timetable8)->with('timetable9',$timetable9)->with('timetable10',$timetable10)->with('timetable11',$timetable11)->with('timetable12',$timetable12)->with('timetableA2',$timetableA2)->with('timetable21',$timetable21)->with('timetable22',$timetable22)->with('timetable23',$timetable23)->with('timetable24',$timetable24)->with('timetable25',$timetable25)->with('timetable26',$timetable26)->with('timetable27',$timetable27)->with('timetable28',$timetable28)->with('timetable29',$timetable29)->with('timetable210',$timetable210)->with('timetable211',$timetable211)->with('timetable212',$timetable212)->with('timetableA3',$timetableA3)->with('timetable31',$timetable31)->with('timetable32',$timetable32)->with('timetable33',$timetable33)->with('timetable34',$timetable34)->with('timetable35',$timetable35)->with('timetable36',$timetable36)->with('timetable37',$timetable37)->with('timetable38',$timetable38)->with('timetable39',$timetable39)->with('timetable310',$timetable310)->with('timetable311',$timetable311)->with('timetable312',$timetable312)->with('timetableA4',$timetableA4)->with('timetable41',$timetable41)->with('timetable42',$timetable42)->with('timetable43',$timetable43)->with('timetable44',$timetable44)->with('timetable45',$timetable45)->with('timetable46',$timetable46)->with('timetable47',$timetable47)->with('timetable48',$timetable48)->with('timetable49',$timetable49)->with('timetable410',$timetable410)->with('timetable411',$timetable411)->with('timetable412',$timetable412)->with('timetableA5',$timetableA5)->with('timetable51',$timetable51)->with('timetable52',$timetable52)->with('timetable53',$timetable53)->with('timetable54',$timetable54)->with('timetable55',$timetable55)->with('timetable56',$timetable56)->with('timetable57',$timetable57)->with('timetable58',$timetable58)->with('timetable59',$timetable59)->with('timetable510',$timetable510)->with('timetable511',$timetable511)->with('timetable512',$timetable512)->with('state',$state)->with('state1',$state1)->with('state2',$state2)->with('state3',$state3)->with('state4',$state4)->with('state5',$state5)->with('state6',$state6)->with('state7',$state7)->with('state8',$state8)->with('state9',$state9)->with('state10',$state10)->with('state11',$state11)->with('state12',$state12)->with('stateA2',$stateA2)->with('state21',$state21)->with('state22',$state22)->with('state23',$state23)->with('state24',$state24)->with('state25',$state25)->with('state26',$state26)->with('state27',$state27)->with('state28',$state28)->with('state29',$state29)->with('state210',$state210)->with('state211',$state211)->with('state212',$state212)->with('stateA3',$stateA3)->with('state31',$state31)->with('state32',$state32)->with('state33',$state33)->with('state34',$state34)->with('state35',$state35)->with('state36',$state36)->with('state37',$state37)->with('state38',$state38)->with('state39',$state39)->with('state310',$state310)->with('state311',$state311)->with('state312',$state312)->with('stateA4',$stateA4)->with('state41',$state41)->with('state42',$state42)->with('state43',$state43)->with('state44',$state44)->with('state45',$state45)->with('state46',$state46)->with('state47',$state47)->with('state48',$state48)->with('state49',$state49)->with('state410',$state410)->with('state411',$state411)->with('state412',$state412)->with('stateA5',$stateA5)->with('state51',$state51)->with('state52',$state52)->with('state53',$state53)->with('state54',$state54)->with('state55',$state55)->with('state56',$state56)->with('state57',$state57)->with('state58',$state58)->with('state59',$state59)->with('state510',$state510)->with('state511',$state511)->with('state512',$state512)->with('next',$next)->with('next1',$next1)->with('next2',$next2)->with('next3',$next3)->with('next4',$next4)->with('next5',$next5)->with('next6',$next6)->with('next7',$next7)->with('next8',$next8)->with('next9',$next9)->with('next10',$next10)->with('next11',$next11)->with('next12',$next12)->with('nextA2',$nextA2)->with('next21',$next21)->with('next22',$next22)->with('next23',$next23)->with('next24',$next24)->with('next25',$next25)->with('next26',$next26)->with('next27',$next27)->with('next28',$next28)->with('next29',$next29)->with('next210',$next210)->with('next211',$next211)->with('next212',$next212)->with('nextA3',$nextA3)->with('next31',$next31)->with('next32',$next32)->with('next33',$next33)->with('next34',$next34)->with('next35',$next35)->with('next36',$next36)->with('next37',$next37)->with('next38',$next38)->with('next39',$next39)->with('next310',$next310)->with('next311',$next311)->with('next312',$next312)->with('nextA4',$nextA4)->with('next41',$next41)->with('next42',$next42)->with('next43',$next43)->with('next44',$next44)->with('next45',$next45)->with('next46',$next46)->with('next47',$next47)->with('next48',$next48)->with('next49',$next49)->with('next410',$next410)->with('next411',$next411)->with('next412',$next412)->with('nextA5',$nextA5)->with('next51',$next51)->with('next52',$next52)->with('next53',$next53)->with('next54',$next54)->with('next55',$next55)->with('next56',$next56)->with('next57',$next57)->with('next58',$next58)->with('next59',$next59)->with('next510',$next510)->with('next511',$next511)->with('next512',$next512)->with('statex',$statex)->with('statex1',$statex1)->with('statex2',$statex2)->with('statex3',$statex3)->with('statex4',$statex4)->with('statex5',$statex5)->with('statex6',$statex6)->with('statex7',$statex7)->with('statex8',$statex8)->with('statex9',$statex9)->with('statex10',$statex10)->with('statex11',$statex11)->with('statex12',$statex12)->with('statexA2',$statexA2)->with('statex21',$statex21)->with('statex22',$statex22)->with('statex23',$statex23)->with('statex24',$statex24)->with('statex25',$statex25)->with('statex26',$statex26)->with('statex27',$statex27)->with('statex28',$statex28)->with('statex29',$statex29)->with('statex210',$statex210)->with('statex211',$statex211)->with('statex212',$statex212)->with('statexA3',$statexA3)->with('statex31',$statex31)->with('statex32',$statex32)->with('statex33',$statex33)->with('statex34',$statex34)->with('statex35',$statex35)->with('statex36',$statex36)->with('statex37',$statex37)->with('statex38',$statex38)->with('statex39',$statex39)->with('statex310',$statex310)->with('statex311',$statex311)->with('statex312',$statex312)->with('statexA4',$statexA4)->with('statex41',$statex41)->with('statex42',$statex42)->with('statex43',$statex43)->with('statex44',$statex44)->with('statex45',$statex45)->with('statex46',$statex46)->with('statex47',$statex47)->with('statex48',$statex48)->with('statex49',$statex49)->with('statex410',$statex410)->with('statex411',$statex411)->with('statex412',$statex412)->with('statexA5',$statexA5)->with('statex51',$statex51)->with('statex52',$statex52)->with('statex53',$statex53)->with('statex54',$statex54)->with('statex55',$statex55)->with('statex56',$statex56)->with('statex57',$statex57)->with('statex58',$statex58)->with('statex59',$statex59)->with('statex510',$statex510)->with('state5x11',$statex511)->with('statex512',$statex512)->with('nexts',$nexts)->with('nexts1',$nexts1)->with('nexts2',$nexts2)->with('nexts3',$nexts3)->with('nexts4',$nexts4)->with('nexts5',$nexts5)->with('nexts6',$nexts6)->with('nexts7',$nexts7)->with('nexts8',$nexts8)->with('nexts9',$nexts9)->with('nexts10',$nexts10)->with('nexts11',$nexts11)->with('nexts12',$nexts12)->with('nextsA2',$nextsA2)->with('nexts21',$nexts21)->with('nexts22',$nexts22)->with('nexts23',$nexts23)->with('nexts24',$nexts24)->with('nexts25',$nexts25)->with('nexts26',$nexts26)->with('nexts27',$nexts27)->with('nexts28',$nexts28)->with('nexts29',$nexts29)->with('nexts210',$nexts210)->with('nexts211',$nexts211)->with('nexts212',$nexts212)->with('nextsA3',$nextsA3)->with('nexts31',$nexts31)->with('nexts32',$nexts32)->with('nexts33',$nexts33)->with('nexts34',$nexts34)->with('nexts35',$nexts35)->with('nexts36',$nexts36)->with('nexts37',$nexts37)->with('nexts38',$nexts38)->with('nexts39',$nexts39)->with('nexts310',$nexts310)->with('nexts311',$nexts311)->with('nexts312',$nexts312)->with('nextsA4',$nextsA4)->with('nexts41',$nexts41)->with('nexts42',$nexts42)->with('nexts43',$nexts43)->with('nexts44',$nexts44)->with('nexts45',$nexts45)->with('nexts46',$nexts46)->with('nexts47',$nexts47)->with('nexts48',$nexts48)->with('nexts49',$nexts49)->with('nexts410',$nexts410)->with('nexts411',$nexts411)->with('nexts412',$nexts412)->with('nextsA5',$nextsA5)->with('nexts51',$nexts51)->with('nexts52',$nexts52)->with('nexts53',$nexts53)->with('nexts54',$nexts54)->with('nexts55',$nexts55)->with('nexts56',$nexts56)->with('nexts57',$nexts57)->with('nexts58',$nexts58)->with('nexts59',$nexts59)->with('nexts510',$nexts510)->with('nexts511',$nexts511)->with('nexts512',$nexts512);

  }


}
