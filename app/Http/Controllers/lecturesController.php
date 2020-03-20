<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\lecturer;
use PDF;
use DB;
use App\userinfo;
use App\courses;

class lecturesController extends Controller
{
    //

    public function index(){
    	$instructors1=lecturer::where('dept','ETE')->where('flag','1')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
    $instructors11=lecturer::where('dept','ETE')->where('flag','0')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
    	return view('instructors')->with('instructors1',$instructors1)->with('instructors11',$instructors11);
    }

    public function indexCSE(){
      $instructors1=lecturer::where('dept','CSE')->where('flag','1')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
       $instructors11=lecturer::where('dept','CSE')->where('flag','0')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
      return view('instructorsCSE')->with('instructors1',$instructors1)->with('instructors11',$instructors11);
    }

    public function CSEindex(){
      $instructors12=lecturer::where('dept','ETE')->where('flag','1')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
      $instructors21=lecturer::where('dept','CSE')->where('flag','1')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
    return view('CSEInstructors')->with('instructors21',$instructors21)->with('instructors12',$instructors12);

    }

    public function ETEPDF(){
       
        $pdf = PDF::loadView('ETE_instructorspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ETE Teaching Staff.pdf');
    }

    public function CSEPDF(){
       
        $pdf = PDF::loadView('CSE_instructorspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CSE Teaching Staff.pdf');
    }

    public function edit(Request $request){
   	 $id =$request->get('id');
   	 $instructor = lecturer::find($id);
    $instructor->course_name=$request->get('course_name');
   	$instructor->instructor= $request->get('instructor');
    $instructor->Instructor_2= $request->get('instructor2');
    $instructor->Instructor_3= $request->get('instructor3');
    $instructor->Instructor_4= $request->get('instructor4');
    $instructor->Instructor_5= $request->get('instructor5');
    $instructor->Tutorial_Assistant= $request->get('TA');
   	$instructor->technical_staff= $request->get('technical_staff');
    $instructor->Technical_staff_2= $request->get('technical_staff2');
  
    $instructor->semester= $request->get('semester');
   	$instructor->save();
    return redirect()->back()
                    ->with('success', 'Details updated successfully');

   	

   }

   public function add(Request $request){
     $course = $request->get('course');
     $courseid =lecturer::where('course',$course)->get();
     if(count($courseid)>0){
      return redirect()->back()
                    ->with('errors', 'Cannot Add Instructor(s) Because This Course Already Exists');
     }
     else{

     $instructor =  $request->get('instructor');
     $instructor2 =  $request->get('instructor2');
     $instructor3 =  $request->get('instructor3');
     $instructor4 =  $request->get('instructor4');
     $instructor5 =  $request->get('instructor5');
     $TA =  $request->get('TA');
      $technical_staff = $request->get('technical_staff');
       $technical_staff2 = $request->get('technical_staff2');
      $course = $request->get('course');
    $course_name = $request->get('course_name');
    $dept = $request->get('dept');
    $semester = $request->get('semester');
   
   
    


    $data=array("course"=>$course,"course_name"=>$course_name,"instructor"=>$instructor,"Instructor_2"=>$instructor2,"Instructor_3"=>$instructor3,"Instructor_4"=>$instructor4,"Instructor_5"=>$instructor5,"Tutorial_Assistant"=>$TA,"technical_staff"=>$technical_staff,"Technical_staff_2"=>$technical_staff2,"semester"=>$semester, "dept"=>$dept, "academic_year"=>'2019/2020', "flag"=>'1' );
DB::table('lecturers')->insert($data);


   return redirect()->back()
                    ->with('success', 'Details added successfully');

   }
}
    public function DeleteLecturer($id)
  {
    $lecturer = lecturer::find($id);

    $lecturer->flag='0';

    $lecturer->save();
    
    
      return redirect()->back()
                  ->with('success', 'Details Deleted Successfully');
  }

  public function activate(Request $request){
     $id =$request->get('id');
     $instructor = lecturer::find($id);

    $instructor->instructor= $request->get('instructor');
    $instructor->Instructor_2= $request->get('instructor2');
    $instructor->Instructor_3= $request->get('instructor3');
    $instructor->Instructor_4= $request->get('instructor4');
    $instructor->Instructor_5= $request->get('instructor5');
    $instructor->Tutorial_Assistant= $request->get('TA');
    $instructor->technical_staff= $request->get('technical_staff');
    $instructor->Technical_staff_2= $request->get('technical_staff2');
    $instructor->semester= $request->get('semester');
    $instructor->flag='1';
    $instructor->save();
    return redirect()->back()
                    ->with('success', 'Details updated successfully');

    

   }

    function course(Request $request){

     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = courses::select('course_name')->where('course', 'LIKE', "%{$query}%")->value('course_name');
      if(count($data)!=0){
     
      
       $output = $data;
     
      echo $output;
     }
     
   }
 }

   function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output .= '
       <li id="list">'.$row->name.'</li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
     else{
      echo "0";
     }

   }
 }

  function fetch1(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list1">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

  function fetch2(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list2">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

  function fetch3(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list3">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

  function fetch4(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list4">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

  function fetch5(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list5">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

 function fetch6(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list6">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }

 function fetch7(Request $request)
    {
 
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::where('name', 'LIKE', "%{$query}%")->where('TITLE','staff')->get();
      if(count($data)!=0){
      $output2 = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
      foreach($data as $row)
      {
       $output2 .= '
       <li id="list7">'.$row->name.'</li>
       ';
      }
      $output2 .= '</ul>';
      echo $output2;
     }
     else{
      echo "0";
     }

   }
 
 }
}
