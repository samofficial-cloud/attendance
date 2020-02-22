<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendar;
use DB;

class calendarsController extends Controller
{
    //

    public function index(){
        $status="Class Cancellation";

    	$events=calendar::where('status','Holiday')->orWhere('status',$status)->get();
        return view('events')->with('events',$events);
    }


    public function addevent(Request $request){
    	$Date = $request->input('Date');
    	$date  = strtotime($Date);
         $day   = date('j',$date);
         $month = date('n',$date);
         $year  = date('Y',$date);

         $event=calendar::where('Date',$day)->where('Month',$month)->where('Year',$year)->first();
         if($event->status=="Holiday" or $event->status=="Class Cancellation"){
            return redirect()->back()
                    ->with('errors', 'Cannot Add This Event Because This Date has Already Being Assigned an Event ');
         }
         else{
         $event->status=$request->input('status');
         $event->FromTime=$request->input('fromTime');
         $event->ToTime=$request->input('toTime');
         $event->save();
    return redirect()->back()
                    ->with('success', 'Event Added successfully');


}

    }

     public function edit(Request $request){
     $id =$request->get('id');
     $event = calendar::find($id);

    
    $event->status= $request->get('event');
    $event->FromTime= $request->get('fromTime');
    $event->ToTime= $request->get('toTime');
    

    $event->save();
    return redirect()->back()
                    ->with('success', 'Event Details updated successfully');

    

   }


    

}
