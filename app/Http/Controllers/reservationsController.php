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


}
