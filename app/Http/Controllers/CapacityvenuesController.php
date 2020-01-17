<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\capacityvenue;
use DB;


class CapacityvenuesController extends Controller
{
    //

   public function index(){
   	return view('venuecapacity');
   }

   public function edit(Request $request){
   	 $id =$request->get('id');
   	 $venue = capacityvenue::find($id);

   	$venue->Capacity= $request->get('capacity');
   	$venue->Criteria= $request->get('criteria');
   	$venue->save();
    return redirect()->back()
                    ->with('success', 'Details updated successfully');

   	

   }

   public function add(Request $request){
     $venue =  $request->get('Venue');
      $capacity = $request->get('capacity');
    $criteria = $request->get('criteria');
    


    $data=array("Venue"=>$venue,"Criteria"=>$criteria,"Capacity"=>$capacity);
DB::table('capacityvenues')->insert($data);


   return redirect()->back()
                    ->with('success', 'Details added successfully');

   }

   
}
