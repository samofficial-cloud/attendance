<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\lecturer;
use PDF;
use DB;

class lecturesController extends Controller
{
    //

    public function index(){
    	$instructors1=lecturer::where('dept','ETE')->sortable()->paginate(100);
    
    	return view('instructors')->with('instructors1',$instructors1);

    }

    public function indexCSE(){
     
      $instructors2=lecturer::where('dept','CSE')->sortable()->paginate(50);
      return view('instructorsCSE')->with('instructors2',$instructors2);

    }

    public function ETEPDF(){
       
        $pdf = PDF::loadView('ETE_instructorspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ETE Instructors.pdf');
    }

    public function CSEPDF(){
       
        $pdf = PDF::loadView('CSE_instructorspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CSE Instructors.pdf');
    }

    public function edit(Request $request){
   	 $id =$request->get('id');
   	 $instructor = lecturer::find($id);

   	$instructor->instructor= $request->get('instructor');
   	$instructor->technical_staff= $request->get('technical_staff');
   	$instructor->save();
    return redirect()->back()
                    ->with('success', 'Details updated successfully');

   	

   }

   public function add(Request $request){
     $instructor =  $request->get('instructor');
      $course = $request->get('course');
    $course_name = $request->get('course_name');
    $dept = $request->get('dept');
    $semester = $request->get('semester');
    $technical_staff = $request->get('technical_staff');
    $course_type = $request->get('course_type');
    


    $data=array("course"=>$course,"course_name"=>$course_name,"instructor"=>$instructor,"technical_staff"=>$technical_staff, "course_type"=>$course_type,"semester"=>$semester, "dept"=>$dept );
DB::table('lecturers')->insert($data);


   return redirect()->back()
                    ->with('success', 'Details added successfully');

   }

    public function DeleteLecturer($id)
  {
    $lecturer = lecturer::find($id);

    $lecturer->delete();
    
    
      return redirect()->back()
                  ->with('success', 'Details Deleted Successfully');
  }
}
