<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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



}
