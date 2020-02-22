<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use PDF;
use DB;
use Auth;
use App\program;

class coursesController extends Controller
{
    //

    public function index(){
      return view('courses');
    }

    public function indexcoursee(){
      return view('CourseeWelcome');
    }

    public function showCourses(){
      if(Auth::user()->DEFAULTDEPTID==32 and Auth::user()->HoD==1){
        if($_GET['rid']=='TE1'or $_GET['rid']=='TE2' or $_GET['rid']=='TE3' or $_GET['rid']=='TE4' or $_GET['rid']=='EE1' OR $_GET['rid']=='EE2' or $_GET['rid']=='EE3' or $_GET['rid']=='EE4' or $_GET['rid']=='ESC1' or $_GET['rid']=='ESC2' or $_GET['rid']=='ESC3'){
          $courses=courses::where('program',$_GET['rid'])->get();
         $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
         return view('courseCS1')->with('courses',$courses)->with('full',$full);
        }
        else{
          $message='You do not have permission to view this page.';
          return $message;
        }
      }
      elseif(Auth::user()->DEFAULTDEPTID==31 and Auth::user()->HoD==1){
        if($_GET['rid']=='CS1(in)'or $_GET['rid']=='CS2(in)' or $_GET['rid']=='CS3(in)' or $_GET['rid']=='CS1(with)' or $_GET['rid']=='CS2(with)' OR $_GET['rid']=='CS3(with)' or $_GET['rid']=='CEIT1' or $_GET['rid']=='CEIT2' or $_GET['rid']=='CEIT3' or $_GET['rid']=='CEIT4' or $_GET['rid']=='BIT1'or $_GET['rid']=='BIT2' or $_GET['rid']=='BIT3' or $_GET['rid']=='CS(Cert)' or $_GET['rid']=='CS1(Dipl.)' or $_GET['rid']=='CS2(Dipl.)'){
          $courses=courses::where('program',$_GET['rid'])->get();
         $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
         return view('courseCS1')->with('courses',$courses)->with('full',$full);
        }
        else{
          $message='You do not have permission to view this page.';
          return $message;
        }
      }
      elseif(Auth::user()->principal==1){
        $courses=courses::where('program',$_GET['rid'])->get();
         $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
         return view('courseCS1')->with('courses',$courses)->with('full',$full);
      }
      else{
        $message='You do not have permission to view this page.';
          return $message;
      }
      
    }

    public function Courseshow(){
        $courses=courses::where('program',$_GET['rid'])->get();
         $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
      return view('coursee')->with('courses',$courses)->with('full',$full);
    }

     

    public function CS1PDF(){
       
        $pdf = PDF::loadView('courseCS1pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CS1 Courses.pdf');
    }

    

    public function add(Request $request){
      $course = $request->get('course');
      $program = $request->get('program');
      $coursess=courses::where('course',$course)->where('program',$program)->get();
      if(count($coursess)>0){
        return redirect()->back()
                    ->with('errors', 'Cannot Add Course Because This Course Already Exists');
      }


else{
      $program = $request->get('program');
      $course = $request->get('course');
    $course_name = $request->get('course_name');
    $credit = $request->get('credit');
    $semester = $request->get('semester');
    $criteria = $request->get('criteria');
    $lectures_no = $request->get('lecture_no');
    


    $data=array("course"=>$course,"course_name"=>$course_name,"program"=>$program,"credit"=>$credit, "criteria"=>$criteria,"semester"=>$semester, "lectures_no"=>$lectures_no );
DB::table('courses')->insert($data);


   return redirect()->back()
                    ->with('success', 'Course Details added successfully');

   }
 }

   public function edit(Request $request){
     $id =$request->get('id');
     $courses = courses::find($id);

    $courses->course= $request->get('course');
    $courses->course_name= $request->get('course_name');
    $courses->credit= $request->get('credit');
    $courses->criteria= $request->get('criteria');
    $courses->semester= $request->get('semester');
    $courses->lectures_no= $request->get('lecture_no');

    $courses->save();
    return redirect()->back()
                    ->with('success', 'Course Details updated successfully');

    

   }

   public function DeleteCourse($id)
  {
    $course = courses::find($id);

    $course->delete();
    
    
      return redirect()->back()
                  ->with('success', 'Course Deleted Successfully');
  }
}
