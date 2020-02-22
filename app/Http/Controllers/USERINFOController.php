<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userinfo;
use App\department;
use PDF;
use DB;
use Hash;
use Auth;
Use App\program;

class USERINFOController extends Controller
{
    //
    public function index(){
    	return view('students');
    }

    public function managestudents(){
      return view('studentsWelcome');
    }

    public function showStudentList(){
      if(Auth::user()->DEFAULTDEPTID==32 and Auth::user()->HoD==1){
        if($_GET['rid']=='TE1'or $_GET['rid']=='TE2' or $_GET['rid']=='TE3' or $_GET['rid']=='TE4' or $_GET['rid']=='EE1' OR $_GET['rid']=='EE2' or $_GET['rid']=='EE3' or $_GET['rid']=='EE4' or $_GET['rid']=='ESC1' or $_GET['rid']=='ESC2' or $_GET['rid']=='ESC3'){
    	$deptId=department::select('DEPTID')->where('DEPTNAME',$_GET['rid'])->value('DEPTID');
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->get();
        $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->get();
        $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','DESC')->first();
        $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
      return view('editstudents')->with('students',$students)->with('students2',$students2)->with('badgeno',$badgeno)->with('full',$full);
    }
     else{
          $message='You do not have permission to view this page.';
          return $message;
        }
      }
      elseif(Auth::user()->DEFAULTDEPTID==31 and Auth::user()->HoD==1){
       if($_GET['rid']=='CS1(in)'or $_GET['rid']=='CS2(in)' or $_GET['rid']=='CS3(in)' or $_GET['rid']=='CS1(with)' or $_GET['rid']=='CS2(with)' OR $_GET['rid']=='CS3(with)' or $_GET['rid']=='CEIT1' or $_GET['rid']=='CEIT2' or $_GET['rid']=='CEIT3' or $_GET['rid']=='CEIT4' or $_GET['rid']=='BIT1'or $_GET['rid']=='BIT2' or $_GET['rid']=='BIT3' or $_GET['rid']=='CS(Cert)' or $_GET['rid']=='CS1(Dipl.)' or $_GET['rid']=='CS2(Dipl.)'){
            $deptId=department::select('DEPTID')->where('DEPTNAME',$_GET['rid'])->value('DEPTID');
            $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->get();
            $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->get();
            $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','DESC')->first();
            $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
          return view('editstudents')->with('students',$students)->with('students2',$students2)->with('badgeno',$badgeno)->with('full',$full);
        }
         else{
          $message='You do not have permission to view this page.';
          return $message;
        }
      }
      elseif(Auth::user()->principal==1){
        $deptId=department::select('DEPTID')->where('DEPTNAME',$_GET['rid'])->value('DEPTID');
            $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->get();
            $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->get();
            $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','DESC')->first();
            $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
          return view('editstudents')->with('students',$students)->with('students2',$students2)->with('badgeno',$badgeno)->with('full',$full);
        }
        else{
        $message='You do not have permission to view this page.';
          return $message;
      }
    }

     public function studentsPDF(){
       
        $pdf = PDF::loadView('studentspdf');
  
        return $pdf->stream('STUDENTS LIST.pdf');
    }


    public function staffCSEPDF(){
       
        $pdf = PDF::loadView('staffCSEpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CSE STAFF LIST.pdf');
    }

    public function staffETEPDF(){
       
        $pdf = PDF::loadView('staffETEpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ETE STAFF LIST.pdf');
    }

//     public function add(Request $request){
//       $regNo = $request->get('regNo');
//       $reg=userinfo::where('SSN',$regNo)->get();
//       $dept=userinfo::select('DEFAULTDEPTID')->where('SSN',$regNo)->value('DEFAULTDEPTID');
//       if(count($reg)>0){
//         $prog=department::select('DEPTNAME')->where('DEPTID',$dept)->value('DEPTNAME');
//         return redirect()->back()
//                     ->with('errors', 'Cannot Add This Student Because This Student Already Exists In ')
//                     ->with('prog',$prog);
//       }
//       else{
//         $regNo = $request->get('regNo');
//       $name = $request->get('name');
//     $gender = $request->get('Gender');
//     $badgeno=$request->get('badgeno');
//     $fees=$request->get('Fees');
//     $verificationmethod=$request->get('verificationmethod');


//     $deptId = department::select('DEPTID')->where('DEPTNAME',$request->get('program'))->value('DEPTID');


//     $data=array("SSN"=>$regNo,"name"=>$name,"GENDER"=>$gender,"DEFAULTDEPTID"=>$deptId,"BADGENUMBER"=>$badgeno, "VERIFICATIONMETHOD"=>$verificationmethod, "Fees_Status"=>$fees,"flag"=>'1');
// DB::table('USERINFO')->insert($data);


//    return redirect()->back()
//                     ->with('success', 'Student Details added successfully');
//                   }

//    }

   public function DeactivateStudent($USERID)
  {
    $student = userinfo::find($USERID);

    $student->flag='0';
    
    $student->save();
      return redirect()->back()
                  ->with('success', 'Student Deactivated Successfully');
  }

  public function edit(Request $request){
     $id =$request->get('id');
     $student = userinfo::find($id);

    $student->SSN= $request->get('regNo');
    $student->name= $request->get('name');
    $student->GENDER= $request->get('Gender');
    $student->Fees_Status= $request->get('Fees');
    

    $student->save();
    return redirect()->back()
                    ->with('success', 'Student Details updated successfully');

    

   }

   public function activate(Request $request){
     $id =$request->get('id');
     $student = userinfo::find($id);

    $student->SSN= $request->get('regNo');
    $student->name= $request->get('name');
    $student->GENDER= $request->get('Gender');
    $student->Fees_Status= $request->get('Fees');
    $student->DEFAULTDEPTID=$request->get('dprogram');
    $student->flag='1';

    $student->save();
    return redirect()->back()
                    ->with('success', 'Student Activated successfully');

    

   }


   public function insertpassword(){
    $msg="done";
    $userPassword=bcrypt("@camis");
    $affected = DB::table('USERINFO')->update(array('LoginPassword' =>$userPassword));
    return $msg;
   }

   public function staff(){
    $staffCSE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','31')->orderBy('NAME','asc')->get();
    $staffETE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','32')->orderBy('NAME','asc')->get();
    return view ('staffs')->with('staffCSE',$staffCSE)->with('staffETE',$staffETE);
   }

   public function editstaffCSE(){
    $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','DESC')->first();
     $staffCSE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','31')->orderBy('NAME','asc')->get();
     return view ('editstaffCSE')->with('badgeno',$badgeno)->with('staffCSE',$staffCSE);
   }

//    public function addstaffCSE (Request $request){

//     $name = $request['name'];
//     $SSN=$request['SSN'];
//     $phone_number = $request['phone_number'];
//       $email = $request['email'];
//     $GENDER = $request['Gender'];
//     $BADGENUMBER = $request['badgeno'];
//      $DEFAULTDEPTID= $request['deptid'];
//     $VERIFICATIONMETHOD = $request['verificationmethod'];
//     $TITLE='staff';
//     $MINZU='TANZANIA';


//     $data=array("SSN"=>$SSN,"name"=>$name,"phone_number"=>$phone_number,"email"=>$email,"GENDER"=>$GENDER,"BADGENUMBER"=>$BADGENUMBER,"VERIFICATIONMETHOD"=>$VERIFICATIONMETHOD,"TITLE"=>$TITLE, "MINZU"=>$MINZU);
// DB::table('USERINFO')->insert($data);


//    return redirect()->back()
//                     ->with('success', 'Test added successfully');
                


//     }

}
