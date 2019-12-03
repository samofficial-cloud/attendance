<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\reservation;
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
    $time=$reservations->Time;

      $user=User::where('name',$name)->first();
      $user->notify(new DeclineStatus($venue, $date, $month, $year, $day, $time));

    $reservations->delete();
    
    
      return redirect()->route('approval');
    
    


  }

  public function changestatusd($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));

    $reservations->delete();
    
    
      return redirect()->route('myreservations');
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
      return redirect()->route('approval');
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
      
      return redirect()->route('approval');
    }
    else{
      return redirect(route('changestatusc'));
    }


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
$Time = $request->input('Time');
$Date =$request->input('Date');
$Remarks = $request->input('remark');
$Capacity = $request->input('capacity');
$rstatus = '-1';
$data=array('Venue'=>$Venue,"Day"=>$Day,"Month"=>$Month,"Year"=>$Year,"Week"=>$Week,"Name"=>$Name,"Reason"=>$Reason,"Time"=>$Time,"Date"=>$Date,"rstatus"=>$rstatus, "Capacity"=>$Capacity,"Remarks"=>$Remarks);
DB::table('reservations')->insert($data);
return redirect()->route('venue');
}


}
