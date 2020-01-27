<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use PDF;
use DB;

class coursesController extends Controller
{
    //

    public function index(){
      return view('courses');
    }

    public function showCS1(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCS1')->with('courses',$courses);
    }

     public function showCS2(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCS2')->with('courses',$courses);
    }

     public function showCS3(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCS3')->with('courses',$courses);
    }

     public function showTE1(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseTE1')->with('courses',$courses);
    }

    public function showTE2(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseTE2')->with('courses',$courses);
    }

    public function showTE3(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseTE3')->with('courses',$courses);
    }

    public function showTE4(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseTE4')->with('courses',$courses);
    }

    public function showESC1(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseESC1')->with('courses',$courses);
    }

    public function showESC2(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseESC2')->with('courses',$courses);
    }

    public function showESC3(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseESC3')->with('courses',$courses);
    }

    public function showCEIT1(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCEIT1')->with('courses',$courses);
    }

     public function showCEIT2(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCEIT2')->with('courses',$courses);
    }

     public function showCEIT3(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCEIT3')->with('courses',$courses);
    }

     public function showCEIT4(){
        $courses=courses::where('program',$_GET['rid'])->sortable()->paginate(20);
      return view('courseCEIT4')->with('courses',$courses);
    }

    public function CS1PDF(){
       
        $pdf = PDF::loadView('courseCS1pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CS1 Courses.pdf');
    }

    public function CS2PDF(){
       
        $pdf = PDF::loadView('courseCS2pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CS2 Courses.pdf');
    }

    public function CS3PDF(){
       
        $pdf = PDF::loadView('courseCS3pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CS3 Courses.pdf');
    }

    public function TE1PDF(){
       
        $pdf = PDF::loadView('courseTE1pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('TE1 Courses.pdf');
    }

    public function TE2PDF(){
       
        $pdf = PDF::loadView('courseTE2pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('TE2 Courses.pdf');
    }

    public function TE3PDF(){
       
        $pdf = PDF::loadView('courseTE3pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('TE3 Courses.pdf');
    }

    public function TE4PDF(){
       
        $pdf = PDF::loadView('courseTE4pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('TE4 Courses.pdf');
    }

    public function ESC1PDF(){
       
        $pdf = PDF::loadView('courseESC1pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ESC1 Courses.pdf');
    }

     public function ESC2PDF(){
       
        $pdf = PDF::loadView('courseESC2pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ESC2 Courses.pdf');
    }

     public function ESC3PDF(){
       
        $pdf = PDF::loadView('courseESC3pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ESC3 Courses.pdf');
    }

     public function CEIT1PDF(){
       
        $pdf = PDF::loadView('courseCEIT1pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CEIT1 Courses.pdf');
    }

    public function CEIT2PDF(){
       
        $pdf = PDF::loadView('courseCEIT2pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CEIT2 Courses.pdf');
    }

    public function CEIT3PDF(){
       
        $pdf = PDF::loadView('courseCEIT3pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CEIT3 Courses.pdf');
    }

    public function CEIT4PDF(){
       
        $pdf = PDF::loadView('courseCEIT4pdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CEIT4 Courses.pdf');
    }

    public function add(Request $request){
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
