<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\carry_optional_student;
use DB;

class carry_optional_studentController extends Controller
{
    //
    public function addstudents(Request $request){
    	$totalrows=$request->get('totalrows');
    	$j=2;

    	for($i=0; $i<$totalrows; $i++){
        $regNo=$request->get('regNo'.$j);
        $j++;
    	$name=$request->get('Name'.$j);
    	$j++; 
        $courseid=$request->get('courseid'.$j);
        $j++;
        $category=$request->get('Reason'.$j);
        $j= $j+2;

        $validate=carry_optional_student::where('name',$name)->where('course',$courseid)->get();
        if(count($validate)!=0){
        	return redirect()->back()
                    ->with('errors', "Cannot add '$name' because already exists in '$courseid'.");
        }
else{
$data=array('name' =>$name,'reg_no'=>$regNo,'course'=>$courseid, 'category'=>$category);
DB::table('carry_optional_students')->insert($data);
}
                }

 return redirect()->back()
                    ->with('success', 'Students added successfully');
    }

    public function editstudents(Request $request){
        $id=$request->get('id');
        $student=carry_optional_student::find($id);
        $student->course=$request->get('courseid');
        $student->category=$request->get('category');
        $student->save();
        return redirect()->back()
                ->with('success','Student details edited successfully');
    }

    public function deletestudents($id){
        $student=carry_optional_student::find($id);
         $student->delete();
          return redirect()->back()
                ->with('success','Student deleted successfully');
    }
}
