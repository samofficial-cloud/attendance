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
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->orderBy('name','asc')->get();
        $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->orderBy('name','asc')->get();
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
            $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->orderBy('name','asc')->get();
            $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->orderBy('name','asc')->get();
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
            $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->orderBy('name','asc')->get();
            $students2=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->orderBy('name','asc')->get();
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
       if($_GET['feescheckbox']=='true'){
        $pdf = PDF::loadView('studentspdf')->setPaper('a4', 'landscape');
      }
      else{
        $pdf = PDF::loadView('studentspdf');
      }
  
        return $pdf->stream('STUDENTS LIST.pdf');
    }

    public function GeneralstudentsPDF(){
       if($_GET['studentcheckbox']=='true'){
        $pdf = PDF::loadView('generalstudentspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('STUDENTS LIST.pdf');
      }
      else{
        $pdf = PDF::loadView('generalstudentspdf');
        return $pdf->stream('STUDENTS LIST.pdf');
      }
    }

    public function GeneralstaffPDF(){
       
        $pdf = PDF::loadView('generalstaffpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('STAFF LIST.pdf');
    }

    public function studentscoursesPDF(){
       if($_GET['feescheckbox']=='true'){
        $pdf = PDF::loadView('students2pdf')->setPaper('a4', 'landscape');
      }
      else{
       $pdf = PDF::loadView('students2pdf'); 
      }
  
        return $pdf->stream('STUDENTS LIST.pdf');
    }

    public function inactivestudentsPDF(){
       
        $pdf = PDF::loadView('inactiveStudentspdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('INACTIVE STUDENTS LIST.pdf');
    }


    public function staffCSEPDF(){
       
        $pdf = PDF::loadView('staffCSEpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('CSE STAFF LIST.pdf');
    }

    public function staffETEPDF(){
       
        $pdf = PDF::loadView('staffETEpdf')->setPaper('a4', 'landscape');
  
        return $pdf->stream('ETE STAFF LIST.pdf');
    }

    public function newuser(){
      $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','desc')->first();
      return view('newuser')->with('badgeno',$badgeno);
    }

    public function edituserview(Request $request ){
      $title=$request->get('title');
      $dept=$request->get('dept');
      $studentdepartment=$request->get('studentdepartment');

      if($studentdepartment=='CSE'){
        $program=$request->get('csedprogram');
      }
      elseif ($studentdepartment=='ETE') {
         $program=$request->get('etedprogram');
      }

      if($title=='staff'){
      $initial=department::select('DEPTNAME')->where('DEPTID',$dept)->value('DEPTNAME');
      $full=program::select('full')->where('initial',$initial)->value('full');
      $staff=userinfo::where('TITLE',$title)->where('DEFAULTDEPTID',$dept)->where('flag','1')->orderBy('name','asc')->get();
      return view('editusers')->with('staff',$staff)->with('full',$full)->with('title',$title);
      }
      elseif ($title=='student') {
    $initial=department::select('DEPTNAME')->where('DEPTID',$program)->value('DEPTNAME');
    $full=program::select('full')->where('initial',$initial)->value('full');
    $student=userinfo::where('TITLE',$title)->where('DEFAULTDEPTID',$program)->where('flag','1')->orderBy('name','asc')->get();
    return view('editusers')->with('student',$student)->with('full',$full)->with('title',$title); 
      }
      
    }

     public function deleteuserview(){
     $staff=userinfo::join('DEPARTMENTS','USERINFO.DEFAULTDEPTID','=','DEPARTMENTS.DEPTID')->where('TITLE','staff')->where('flag',1)->orderBy('name','asc')->get();
     $student=userinfo::join('DEPARTMENTS','USERINFO.DEFAULTDEPTID','=','DEPARTMENTS.DEPTID')->where('TITLE','student')->where('flag',1)->orderBy('name','asc')->get();
     return \View::make('deactivateuser')->with('staff',$staff)->with('student',$student);
    }

    public function activateuserview(){
     $staff=userinfo::join('DEPARTMENTS','USERINFO.DEFAULTDEPTID','=','DEPARTMENTS.DEPTID')->where('TITLE','staff')->where('flag',0)->orderBy('name','asc')->get();
     $student=userinfo::join('DEPARTMENTS','USERINFO.DEFAULTDEPTID','=','DEPARTMENTS.DEPTID')->where('TITLE','student')->where('flag',0)->orderBy('name','asc')->get();
     return \View::make('activateusers')->with('staff',$staff)->with('student',$student);
    }

    public function activatestaff($id){
    
    $staff = userinfo::find($id);
    

    $staff->flag='1';
    $staff->reasons=NULL;
    $staff->remarks=NULL;

    $staff->save();
    return redirect()->back()
                    ->with('success', 'Staff Activated successfully');

    }

    public function adduser(Request $request){
      $title=$request->get('title');
      $password=bcrypt("@camis");

      if($title=='staff'){
        $staff=userinfo::where('SSN',$request->get('staffID'))->get();
        if(count($staff)>0){
           return redirect()->back()
                    ->with('errors', 'Cannot Add This Staff Because This Staff Already Exists');
      }
      else{
        $name=$request->get('Name');
        $SSN=$request->get('staffID');
        $GENDER=$request->get('gender');
        $DEFAULTDEPTID=$request->get('department');
        $email=$request->get('email');
        $phone_number=$request->get('phoneNumber');
       $BADGENUMBER=$request->get('BADGENUMBER');
       $role=$request->get('role');

       if($role=='staff'){
$data=array('name' =>$name,'TITLE'=>$title,'SSN'=>$SSN, 'GENDER'=>$GENDER, 'BADGENUMBER'=>$BADGENUMBER, 'DEFAULTDEPTID'=>$DEFAULTDEPTID,'email'=>$email,'phone_number'=>$phone_number,'flag'=>1,'VERIFICATIONMETHOD'=>1,'ATT'=>1,'INLATE'=>0,'OUTEARLY'=>0, 'OVERTIME'=>1,'SEP'=>1,'HOLIDAY'=>1,'MINZU'=>TANZANIA,'LUNCHDURATION'=>1, 'privilege'=>0,'inheritDeptSch'=>1, 'inheritDeptSchClass'=>1,'AutoSChPlan'=>1,'MinAutoSchInterval'=>24,'RegisterOT'=>1,'InheritDeptRule'=>0,'EMPRIVILEGE'=>0,'staff'=>1,'principal'=>0,'HoD'=>0,'Timetable_Master'=>0,'password'=>$password);
}

elseif($role=='principal'){
  $data=array('name' =>$name,'TITLE'=>$title,'SSN'=>$SSN, 'GENDER'=>$GENDER, 'BADGENUMBER'=>$BADGENUMBER, 'DEFAULTDEPTID'=>$DEFAULTDEPTID,'email'=>$email,'phone_number'=>$phone_number,'flag'=>1,'VERIFICATIONMETHOD'=>1,'ATT'=>1,'INLATE'=>0,'OUTEARLY'=>0, 'OVERTIME'=>1,'SEP'=>1,'HOLIDAY'=>1,'MINZU'=>TANZANIA,'LUNCHDURATION'=>1, 'privilege'=>0,'inheritDeptSch'=>1, 'inheritDeptSchClass'=>1,'AutoSChPlan'=>1,'MinAutoSchInterval'=>24,'RegisterOT'=>1,'InheritDeptRule'=>0,'EMPRIVILEGE'=>0,'staff'=>0,'principal'=>1,'HoD'=>0,'Timetable_Master'=>0,'password'=>$password);
}

elseif($role=='HoD'){
  $data=array('name' =>$name,'TITLE'=>$title,'SSN'=>$SSN, 'GENDER'=>$GENDER, 'BADGENUMBER'=>$BADGENUMBER, 'DEFAULTDEPTID'=>$DEFAULTDEPTID,'email'=>$email,'phone_number'=>$phone_number,'flag'=>1,'VERIFICATIONMETHOD'=>1,'ATT'=>1,'INLATE'=>0,'OUTEARLY'=>0, 'OVERTIME'=>1,'SEP'=>1,'HOLIDAY'=>1,'MINZU'=>TANZANIA,'LUNCHDURATION'=>1, 'privilege'=>0,'inheritDeptSch'=>1, 'inheritDeptSchClass'=>1,'AutoSChPlan'=>1,'MinAutoSchInterval'=>24,'RegisterOT'=>1,'InheritDeptRule'=>0,'EMPRIVILEGE'=>0,'staff'=>0,'principal'=>0,'HoD'=>1,'Timetable_Master'=>0,'password'=>$password);
}

elseif($role=='tmaster'){
  $data=array('name' =>$name,'TITLE'=>$title,'SSN'=>$SSN, 'GENDER'=>$GENDER, 'BADGENUMBER'=>$BADGENUMBER, 'DEFAULTDEPTID'=>$DEFAULTDEPTID,'email'=>$email,'phone_number'=>$phone_number,'flag'=>1,'VERIFICATIONMETHOD'=>1,'ATT'=>1,'INLATE'=>0,'OUTEARLY'=>0, 'OVERTIME'=>1,'SEP'=>1,'HOLIDAY'=>1,'MINZU'=>TANZANIA,'LUNCHDURATION'=>1, 'privilege'=>0,'inheritDeptSch'=>1, 'inheritDeptSchClass'=>1,'AutoSChPlan'=>1,'MinAutoSchInterval'=>24,'RegisterOT'=>1,'InheritDeptRule'=>0,'EMPRIVILEGE'=>0,'staff'=>0,'principal'=>0,'HoD'=>0,'Timetable_Master'=>1,'password'=>$password);
}

        DB::table('USERINFO')->insert($data);


      return redirect()->back()
                    ->with('success', 'Staff added successfully');


      }

      }

      elseif($title=='student'){
        $student=userinfo::where('SSN',$request->get('regNo'))->get();
        if(count($student)>0){
           return redirect()->back()
                    ->with('errors', 'Cannot Add This Student Because This Student Already Exists');
      }
      else{
        $name=$request->get('Name');
        $SSN=$request->get('regNo');
        $GENDER=$request->get('gender');
        $email=$request->get('email');
        $phone_number=$request->get('phoneNumber');
       $BADGENUMBER=$request->get('BADGENUMBER');
       $Fees_Status=$request->get('Fees_Status');
       $studentdepartment=$request->get('studentdepartment');
       if($Fees_Status=='PAID'){
       $Fees_Duration=$request->get('Fees_Duration');
     }
     else{
      $Fees_Duration=NULL;
     }

     if($studentdepartment=='CSE'){
      $DEFAULTDEPTID=$request->get('csedprogram');
     }
     elseif($studentdepartment=='ETE'){
      $DEFAULTDEPTID=$request->get('etedprogram');
     }
     else{
      return redirect()->back()
                    ->with('errors', 'Degree Program for the student has not been captured, please repeat again');
     }


       $data=array('name' =>$name,'TITLE'=>$title, 'BADGENUMBER'=>$BADGENUMBER,'SSN'=>$SSN, 'GENDER'=>$GENDER, 'DEFAULTDEPTID'=>$DEFAULTDEPTID,'email'=>$email,'phone_number'=>$phone_number,'flag'=>1,'VERIFICATIONMETHOD'=>1,'ATT'=>1,'INLATE'=>0,'OUTEARLY'=>0, 'OVERTIME'=>1,'SEP'=>1,'HOLIDAY'=>1,'MINZU'=>TANZANIA,'LUNCHDURATION'=>1, 'privilege'=>0,'inheritDeptSch'=>1, 'inheritDeptSchClass'=>1,'AutoSChPlan'=>1,'MinAutoSchInterval'=>24,'RegisterOT'=>1,'InheritDeptRule'=>0,'EMPRIVILEGE'=>0,'staff'=>0,'principal'=>0,'HoD'=>0,'Timetable_Master'=>0,'Fees_Status'=>$Fees_Status,'Fees_Duration'=>$Fees_Duration,'password'=>$password);

       DB::table('USERINFO')->insert($data);

        return redirect()->back()
                    ->with('success', 'Student added successfully');

      }


      }
   }

   public function DeactivateStudent(Request $request)
  {
    $USERID=$request->get('idA');
    $student = userinfo::find($USERID);
    $name=$student->name;

    $student->flag='0';
    $student->reasons=$request->get('reasons');
    $student->remarks=$request->get('remarks');
    
    $student->save();
      return redirect()->back()
                  ->with('success','User Deactivated Successfully');
  }

  public function edit(Request $request){
     $id =$request->get('id');
     $user = userinfo::find($id);

    $user->SSN= $request->get('regNo');
    $user->name= $request->get('name');
    $user->GENDER= $request->get('Gender');
    if($user->TITLE=='student'){
    $user->Fees_Status= $request->get('Fees');
    if($request->get('Fees')=='PAID'){
    $user->Fees_Duration= $request->get('Fees_Duration');
    }
    else{
       $user->Fees_Duration=NULL;
    }
  }
  elseif($user->TITLE=='staff'){
    $user->phone_number=$request->get('phone');
    $user->email=$request->get('email');
    $role=$request->get('role');
    if($role=='staff'){
      $user->staff='1';
      $user->principal='0';
      $user->HoD='0';
      $user->Timetable_Master='0';
    }
    elseif($role=='principal'){
      $user->principal='1';
      $user->HoD='0';
      $user->Timetable_Master='0';
       $user->staff='0';
    }
    elseif($role=='tmaster'){
      $user->Timetable_Master='1';
      $user->principal='0';
      $user->HoD='0';
       $user->staff='0';
    }
    elseif($role=='HoD'){
      $user->HoD='1';
       $user->Timetable_Master='0';
      $user->principal='0';
       $user->staff='0';
    }
  }

    $user->save();
    return redirect()->back()
                    ->with('success', 'User Details updated successfully');

    

   }

   public function activatestudent(Request $request){
     $id =$request->get('id');
     $student = userinfo::find($id);

    $student->SSN= $request->get('regNo');
    $student->name= $request->get('name');
    $student->GENDER= $request->get('Gender');
    $student->Fees_Status= $request->get('Fees');
    if($request->get('Fees')=='PAID'){
    $student->Fees_Duration= $request->get('Fees_Duration');
    }
    else{
       $student->Fees_Duration=NULL;
    }
    $student->DEFAULTDEPTID=$request->get('dprogram');
    $student->flag='1';
    $student->reasons=NULL;
    $student->remarks=NULL;

    $student->save();
    return redirect()->back()
                    ->with('success', 'Student Activated successfully');

   }


   // public function insertpassword(){
   //  $msg="done";
   //  $userPassword=bcrypt("@camis");
   //  $affected = DB::table('USERINFO')->update(array('LoginPassword' =>$userPassword));
   //  return $msg;
   // }

   public function staff(){
    $staffCSE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','31')->orderBy('name','asc')->get();
    $staffETE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','32')->orderBy('name','asc')->get();
    return view ('staffs')->with('staffCSE',$staffCSE)->with('staffETE',$staffETE);
   }

   public function editstaffCSE(){
    $badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','DESC')->first();
     $staffCSE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','31')->orderBy('name','asc')->get();
     return view ('editstaffCSE')->with('badgeno',$badgeno)->with('staffCSE',$staffCSE);
   }

   function fetchstudent(Request $request){
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = userinfo::select('name')->where('SSN', 'LIKE', "%{$query}%")->value('name');
      if(count($data)!=0){
     
      
       $output = $data;
     
      echo $output;
     }
     
   }
 }


}
