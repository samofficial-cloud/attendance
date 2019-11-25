<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\reservation;

class reservationsController extends Controller
{
    //
 //     public function index(){

 //     $state = reservation::select('Time','rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->get();
 //     return $state;
 // }


public function showReservations(){


      return view('tmaster');
}

public function changestatus($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));
    $reservations->delete();
    
    
      return redirect()->route('approval');
    
    


  }


public function changestatusb($id)
  {
    $reservations = reservation::find($id);
    // return view('admin.edit', compact('users'));
    $reservations->rstatus= '-1';
    
    if ($reservations->save()) {
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
    
    if ($reservations->save()) {
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
echo "Record inserted successfully.<br/>";
echo '<a href = "/venue">Click Here</a> to go back.';
}


}
