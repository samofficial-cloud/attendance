<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\test;

use DB;

use Auth;

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

    $check=test::where('type',$type)->where('course',$course)->get();

    if(count($check)!=0){
      return redirect()->back()
                    ->with('errors', 'Cannot Add Test Details Because The Specified Test No. Already Exists For The Specified Course');
    }
    else{
    $data=array("name"=>$name,"venue"=>$venue,"date"=>$date,"course"=>$course,"fromTime"=>$fromTime,"toTime"=>$toTime,"type"=>$type,"flag"=>1);
DB::table('tests')->insert($data);


   return redirect()->back()
                    ->with('success', 'Test added successfully');
                
}

    }

    public function mytest(){
      $mytest=test::where('name', Auth::user()->name)->where('flag',1)->whereDate('date', '>=', date('Y-m-d'))->orderBy('course','asc')->get();

      $mytestA=test::where('name', Auth::user()->name)->where('flag',1)->whereDate('date', '<', date('Y-m-d'))->orderBy('course','asc')->get();

      return view('mytest')->with('mytest',$mytest)->with('mytestA',$mytestA);
    }


    public function canceltest($id)
  {
    $test = test::find($id);
    // return view('admin.edit', compact('users'));

    $test->flag='0';
    $test->save();
    
       return redirect()->back()
                  ->with('success', 'Test Successfully Deleted.');
  }

  public function edit(Request $request){
    $id=$request->get('idA');
    $test=test::find($id);
    $test->name = $request->get('name');
    $test->venue = $request->get('Venue');
    $test->date = $request->get('Date');
    $test->course = $request->get('courseid');
    $test->fromTime = $request->get('fromTime');
    $test->toTime= $request->get('toTime');
    $test->type = $request->get('type');

    $test->save();
    return redirect()->back()
                  ->with('success', 'Test Details Updated Successfully');

  }
}
