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

    $room=capacityvenue::where('Venue',$venue)->where('Criteria',$criteria)->get();

    if(count($room)>0){
      return redirect()->back()
                    ->with('errors', 'Cannot Add Venue Because This Venue Already Exists for the Specified Criteria');
    }
    else{

    $data=array("Venue"=>$venue,"Criteria"=>$criteria,"Capacity"=>$capacity);
DB::table('capacityvenues')->insert($data);


   return redirect()->back()
                    ->with('success', 'Details added successfully');

   }
 }


  public function DeleteVenue($id)
  {
    $venues = capacityvenue::find($id);

    $venues->delete();
    
    
      return redirect()->back()
                  ->with('success', 'Venue Deleted Successfully');
  }

   
}
