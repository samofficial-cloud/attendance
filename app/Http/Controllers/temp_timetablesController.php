<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\temp_timetable;
use DB;

class temp_timetablesController extends Controller
{
    //

    public function index(){
   $previous_temp= temp_timetable::whereDate('date','<',date('Y-m-d'))->get();
   $next_temp=temp_timetable::whereDate('date','>=',date('Y-m-d'))->get();
    	return view('temp_timetable')->with('previous_temp',$previous_temp)->with('next_temp',$next_temp);
    }


    public function insert (Request $request){

    $name = $request['name'];
    $venue = $request['Venue'];
    $date = $request['Date'];
    $course = $request['courseid'];
    $fromTime = $request['fromTime'];
    $toTime= $request['toTime'];
    $type = $request['type'];

   $check=temp_timetable::where('date',$date)->where('course',$course)->where('fromTime',$fromTime)->get();

   if(count($check)!=0){
      return redirect()->back()
                    ->with('errors', 'Cannot Add Details Because The Specified Course Already Exists');
    }
    else{
    $data=array("name"=>$name,"venue"=>$venue,"date"=>$date,"course"=>$course,"fromTime"=>$fromTime,"toTime"=>$toTime,"category"=>$type);
DB::table('temp_timetables')->insert($data);


   return redirect()->back()
                    ->with('success', 'Details added successfully');
                
}

    }

    public function edit(Request $request){
    $id=$request->get('idA');
    $temp=temp_timetable::find($id);
    $temp->name = $request->get('name');
    $temp->venue = $request->get('Venue');
    $temp->date = $request->get('Date');
    $temp->course = $request->get('courseid');
    $temp->fromTime = $request->get('fromTime');
    $temp->toTime= $request->get('toTime');
    $temp->category = $request->get('type');

    $temp->save();
    return redirect()->back()
                  ->with('success', 'Details Updated Successfully');

  }

   public function canceltemp($id){
    $temp = temp_timetable::find($id);
   
    $temp->delete();
       return redirect()->back()
                  ->with('success', 'Details Deleted Successfully .');
  }
}
