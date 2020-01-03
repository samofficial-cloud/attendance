<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\test;

use DB;

class testsController extends Controller
{
    //


    public function updatetest (Request $request){

    $name = $request['name'];
     $venue = $request['Venue'];
      $date = $request['Date'];
    $course = $request['courseid'];
    $fromTime = $request['fromTime'];
     $toTime= $request['toTime'];
    $type = $request['type'];


    $data=array("name"=>$name,"venue"=>$venue,"date"=>$date,"course"=>$course,"fromTime"=>$fromTime,"toTime"=>$toTime,"type"=>$type);
DB::table('tests')->insert($data);


   return redirect()->back()
                    ->with('success', 'Test added successfully');
                


    }


    public function canceltest($id)
  {
    $test = test::find($id);
    // return view('admin.edit', compact('users'));

    $test->delete();
    
    
       return redirect()->back()
                  ->with('success', 'Test Successfully Deleted.');
  }
}
