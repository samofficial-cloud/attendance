<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;


class ReportController extends Controller

{
  public function showattendance_all(Request $request) {
        $dataSingle="";
        $data="";
      $instructor_data="";
      $instructor2_data="";
      $instructor3_data="";
      $instructor4_data="";
      $instructor5_data="";
      $Tutorial_Assistant_data="";
      $technical_staff_data="";
      $Technical_Staff_2_data="";
      $Technical_Staff_3_data="";

$minimum_percentage=DB::table('camis_configuration')->where('id', 1)->value('minimum_class_percentage');
      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
    $today=date('Y-m-d');


      $semday1=DB::table('camis_configuration')->where('id', 1)->value('semester_startDate');

      $variables=[$today,$semday1];
      $holidays = DB::select('EXEC getHolidays ?,?',$variables);

      $temp_course=explode('-', strtoupper($request->get('course_id')));

      $course=$temp_course[0];


      $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

      foreach($program_initial as $var2){

          $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

      }

    $dept_short=DB::table('lecturers')->whereRaw("course LIKE '%$course%'")->value('dept');




    $name=$request->get('input_name');

    $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);

      $program_fullAllCoursesStaff=DB::select('EXEC getProgrammeFullAllCoursesStaff ?',[$name]);
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');

    $lectures_no = DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('lectures_no');

    $instructor=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor IS NOT NULL")->value('instructor');
      $instructor_2=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_2 IS NOT NULL")->value('instructor_2');
      $instructor_3=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_3 IS NOT NULL")->value('instructor_3');
      $instructor_4=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_4 IS NOT NULL")->value('instructor_4');
      $instructor_5=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND instructor_5 IS NOT NULL")->value('instructor_5');
      $Tutorial_Assistant=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Tutorial_Assistant IS NOT NULL")->value('Tutorial_Assistant');
      $technical_staff=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND technical_staff IS NOT NULL")->value('technical_staff');
      $Technical_Staff_2=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Technical_Staff_2 IS NOT NULL")->value('Technical_Staff_2');
      $Technical_Staff_3=DB::table('lecturers')->whereRaw("course LIKE '%$course%' AND Technical_Staff_3 IS NOT NULL")->value('Technical_Staff_3');

      $instructor_reg=DB::table('attendance')->where('name', $instructor)->value('reg_no');
      $instructor2_reg=DB::table('attendance')->where('name', $instructor_2)->value('reg_no');
      $instructor3_reg=DB::table('attendance')->where('name', $instructor_3)->value('reg_no');
      $instructor4_reg=DB::table('attendance')->where('name', $instructor_4)->value('reg_no');
      $instructor5_reg=DB::table('attendance')->where('name', $instructor_5)->value('reg_no');
      $Tutorial_Assistant_reg=DB::table('attendance')->where('name', $Tutorial_Assistant)->value('reg_no');
      $technical_staff_reg=DB::table('attendance')->where('name', $technical_staff)->value('reg_no');
      $Technical_Staff_2_reg=DB::table('attendance')->where('name', $Technical_Staff_2)->value('reg_no');
      $Technical_Staff_3_reg=DB::table('attendance')->where('name', $Technical_Staff_3)->value('reg_no');



    if ($request->get('category')== 1) {

      //Echo "All students";
    $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);

      foreach ($all as $val) {
        $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
        $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?,?,?',$values);
        array_multisort($all_students);
      }


        foreach ($all as $val) {
            $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
            $all_studentsProgKey[] = DB::select('EXEC getAttendanceAllProgKey ?,?,?,?,?',$values);
            array_multisort($all_studentsProgKey);
        }


      return View('attendance_report')->with('all_students',$all_students)->with('all_studentsProgKey',$all_studentsProgKey)->with('course_name',$course_name)->with('program_full',$program_full)->with('minimum_percentage',$minimum_percentage)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);




    }elseif ($request->get('category')== 2) {
      //echo one lecturer
      if ($request->get('checkbox')=='all cases'){

          $valuesP=[$course,$today,$semday1];
          $tempHP= DB::select('EXEC extra_countH ?,?,?',$valuesP);
          $tempCP= DB::select('EXEC extra_countC ?,?,?',$valuesP);

          foreach ($tempHP as $val) {
              $extraHP=$val->TotalRecords;
          }

          foreach ($tempCP as $val) {
              $extraCP=$val->TotalRecords;
          }






          if($instructor!=NULL){

              $instructor_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountInstructor = DB::table('attendance')->where([['name', '=',$instructor],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','LECTURER'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageInstructor=round(($CountInstructor+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $instructor_data=NULL;
          }


          if($instructor_2!=NULL){

              $instructor2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_2],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountInstructor_2 = DB::table('attendance')->where([['name', '=',$instructor_2],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','LECTURER'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageInstructor_2=round(($CountInstructor_2+$extraHP+$extraCP)*100/$lectures_no);


          }else {

              $instructor2_data=NULL;
          }


          if($instructor_3!=NULL){

              $instructor3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_3],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountInstructor_3 = DB::table('attendance')->where([['name', '=',$instructor_3],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','LECTURER'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageInstructor_3=round(($CountInstructor_3+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $instructor3_data=NULL;
          }

          if($instructor_4!=NULL){

              $instructor4_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_4],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountInstructor_4 = DB::table('attendance')->where([['name', '=',$instructor_4],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','LECTURER'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageInstructor_4=round(($CountInstructor_4+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $instructor4_data=NULL;
          }

          if($instructor_5!=NULL){

              $instructor5_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_5],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountInstructor_5 = DB::table('attendance')->where([['name', '=',$instructor_5],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','LECTURER'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageInstructor_5=round(($CountInstructor_5+$extraHP+$extraCP)*100/$lectures_no);


          }else {

              $instructor5_data=NULL;
          }

          if($Tutorial_Assistant!=NULL){

              $Tutorial_Assistant_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Tutorial_Assistant],['position', '=','TUT'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountTutorial_Assistant = DB::table('attendance')->where([['name', '=',$Tutorial_Assistant],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','TUT'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageTutorial_Assistant=round(($CountTutorial_Assistant+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $Tutorial_Assistant_data=NULL;
          }

          if($technical_staff!=NULL){

              $technical_staff_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$technical_staff],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $Counttechnical_staff = DB::table('attendance')->where([['name', '=',$technical_staff],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','TECH'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentagetechnical_staff=round(($Counttechnical_staff+$extraHP+$extraCP)*100/$lectures_no);


          }else {

              $technical_staff_data=NULL;
          }

          if($Technical_Staff_2!=NULL){

              $Technical_Staff_2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_2],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountTechnical_Staff_2 = DB::table('attendance')->where([['name', '=',$Technical_Staff_2],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','TECH'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageTechnical_Staff_2=round(($CountTechnical_Staff_2+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $Technical_Staff_2_data=NULL;
          }

          if($Technical_Staff_3!=NULL){

              $Technical_Staff_3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_3],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
              $CountTechnical_Staff_3 = DB::table('attendance')->where([['name', '=',$Technical_Staff_3],['validity', '=', 'VALID'],['status', '=', 1],['position', '=','TECH'],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
              $percentageTechnical_Staff_3=round(($CountTechnical_Staff_3+$extraHP+$extraCP)*100/$lectures_no);

          }else {

              $Technical_Staff_3_data=NULL;
          }






          return View('attendance_report')->with('instructor',$instructor)->with('instructor_2',$instructor_2)->with('instructor_3',$instructor_3)->with('instructor_4',$instructor_4)->with('instructor_5',$instructor_5)->with('Tutorial_Assistant',$Tutorial_Assistant)->with('technical_staff',$technical_staff)->with('Technical_Staff_2',$Technical_Staff_2)->with('Technical_Staff_3',$Technical_Staff_3)->with('instructor_reg',$instructor_reg)->with('instructor2_reg',$instructor2_reg)->with('instructor3_reg',$instructor3_reg)->with('instructor4_reg',$instructor4_reg)->with('instructor5_reg',$instructor5_reg)->with('Tutorial_Assistant_reg',$Tutorial_Assistant_reg)->with('technical_staff_reg',$technical_staff_reg)->with('Technical_Staff_2_reg',$Technical_Staff_2_reg)->with('Technical_Staff_3_reg',$Technical_Staff_3_reg)->with('instructor_data',$instructor_data)->with('instructor2_data',$instructor2_data)->with('instructor3_data',$instructor3_data)->with('instructor4_data',$instructor4_data)->with('instructor5_data',$instructor5_data)->with('Tutorial_Assistant_data',$Tutorial_Assistant_data)->with('technical_staff_data',$technical_staff_data)->with('Technical_Staff_2_data',$Technical_Staff_2_data)->with('Technical_Staff_3_data',$Technical_Staff_3_data)->with('course_name',$course_name)->with('holidays',$holidays)->with('dept_short',$dept_short)->with('percentageInstructor',$percentageInstructor)->with('percentageInstructor_2',$percentageInstructor_2)->with('percentageInstructor_3',$percentageInstructor_3)->with('percentageInstructor_4',$percentageInstructor_4)->with('percentageInstructor_5',$percentageInstructor_5)->with('percentagetechnical_staff',$percentagetechnical_staff)->with('percentageTechnical_Staff_2',$percentageTechnical_Staff_2)->with('percentageTechnical_Staff_3',$percentageTechnical_Staff_3)->with('percentageTutorial_Assistant',$percentageTutorial_Assistant)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);

      }
      elseif($request->get('selection')=='One course') {


          $CountSingle = DB::table('attendance')->where([['name', '=', $name],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
          $name = DB::table('attendance')->where([['name', '=', $name],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');

          $dataSingle = DB::table('attendance')->where([['name', '=', $name],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          $values2=[$course,$today,$semday1];
          $tempH= DB::select('EXEC extra_countH ?,?,?',$values2);
          $tempC= DB::select('EXEC extra_countC ?,?,?',$values2);

          foreach ($tempH as $val) {
              $extraH=$val->TotalRecords;
          }

          foreach ($tempC as $val) {
              $extraC=$val->TotalRecords;
          }

          $percentage=round(($CountSingle+$extraH+$extraC)*100/$lectures_no);


          return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name)->with('course_name',$course_name)->with('holidays',$holidays)->with('dept_short',$dept_short)->with('dataSingle',$dataSingle)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);




      }
      //echo one lecturer all courses
       else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$name]);
       // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
       $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
       $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
       foreach ($all as $val) {
         $values=[$name,$val->courseId,$val->lectures_no,$today,$semday1];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?,?,?',$values);
       }

       return View('attendance_report2')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no)->with('program_fullAllCoursesStaff',$program_fullAllCoursesStaff)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);
// dd($all_courses);


        // $data = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->get();
        // $name = DB::table('attendance_all')->where([['reg_no', '=', $reg_no],['title', '=','staff']])->limit(1)->value('name');
        // return View('attendance_report')->with('data',$data)->with('name',$name);
      }


    }else {

      //echo one student

      if ($request->get('checkbox')=='all cases') {

      }

      elseif($request->get('selection')=='One course') {

          //from all cases start

          $CountSingle = DB::table('attendance')->where([['name', '=', $name],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');


          $values3=[$course,$today,$semday1];
          $tempH2= DB::select('EXEC extra_countH ?,?,?',$values3);
          $tempC2= DB::select('EXEC extra_countC ?,?,?',$values3);

          foreach ($tempH2 as $val) {
              $extraH2=$val->TotalRecords;
          }

          foreach ($tempC2 as $val) {
              $extraC2=$val->TotalRecords;
          }


          $percentage=round(($CountSingle+$extraH2+$extraC2)*100/$lectures_no);

          //from all cases end


          $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
          $dataSingle_all = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();



          return View('attendance_report2')->with('dataSingle_all',$dataSingle_all)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name)->with('holidays',$holidays)->with('program_fullAllCourses',$program_fullAllCourses)->with('percentage',$percentage)->with('minimum_percentage',$minimum_percentage)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);

      } else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$name]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
        foreach ($all as $val) {
          $values3=[$name,$val->courseId,$val->lectures_no,$today,$semday1];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?,?,?',$values3);
        }
        // dd($all_courses);
        return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no)->with('program_fullAllCourses',$program_fullAllCourses)->with('minimum_percentage',$minimum_percentage)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);
// dd($all);

        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }

  }


  public function showattendance_all_tests (Request $request){

    $dataSingle="";
    $data="";
      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
      $temp_course=explode('-', strtoupper($request->get('course_id')));

      $course=$temp_course[0];
      $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

      foreach($program_initial as $var2){

          $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

      }
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $name=$request->get('input_name');
    $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);


    if ($request->get('category')== 1) {
      //echo "All students";
//      $all_test = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//      $all_test2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//      $all_test3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

        $all_test=DB::select('EXEC all_test ?',[$course]);
        $all_test2=DB::select('EXEC all_test ?',[$course]);
        $all_test3=DB::select('EXEC all_test ?',[$course]);
        $date = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');

        $times = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time2s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time3s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');

        $timee = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time2e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time3e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');



      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('test_report_all')->with('all_test',$all_test)->with('all_test2',$all_test2)->with('all_test3',$all_test3)->with('date',$date)->with('date2',$date2)->with('date3',$date3)->with('course_name',$course_name)->with('program_full',$program_full)->with('timee',$timee)->with('times',$times)->with('time2e',$time2e)->with('time2s',$time2s)->with('time3e',$time3e)->with('time3s',$time3s)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);



    }else {

      //Echo one student
      if($request->get('selection')=='One course') {

          $dataSingle_all = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
          $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
          return View('test_report')->with('dataSingle_all',$dataSingle_all)->with('name',$name)->with('reg_no',$reg_no)->with('course_name',$course_name)->with('program_fullAllCourses',$program_fullAllCourses)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);


      } else {

          //Echo one student all courses

          // $all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 1']])->get();
          // $all_courses2 = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 2']])->get();
          // $all_courses3 = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST'],['test_type', '=','Test 3']])->get();

          $all_courses = DB::select('EXEC getAllCoursesTest1 ?',[$name]);
          $all_courses2 = DB::select('EXEC getAllCoursesTest2 ?',[$name]);
          $all_courses3 = DB::select('EXEC getAllCoursesTest3 ?',[$name]);

          $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

          return View('test_report')->with('all_courses',$all_courses)->with('name',$name)->with('reg_no',$reg_no)->with('all_courses2',$all_courses2)->with('all_courses3',$all_courses3)->with('program_fullAllCourses',$program_fullAllCourses)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);
    // dd($all);


        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }



  }


  public function showattendance_all_ue (Request $request){

    $dataSingle="";
    $data="";

      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

      $temp_course=explode('-', strtoupper($request->get('course_id')));

      $course=$temp_course[0];

    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $name=$request->get('input_name');
      $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);

    if ($request->get('category')== 1) {
      //echo "All students";

        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }

        $all_test=DB::select('EXEC  all_testUe ?',[$course]);

//      $all_test = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $date = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $FromTime = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
      $ToTime = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();


      return View('ue_report_all')->with('all_test',$all_test)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('course_name',$course_name)->with('program_full',$program_full)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);



    }else {

      //echo one student


     if($request->get('selection')=='One course') {

        $data = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $date=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        return View('ue_report')->with('data',$data)->with('reg_no',$reg_no)->with('name',$name)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('validity',$validity)->with('course_name',$course_name)->with('program_fullAllCourses',$program_fullAllCourses)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->get();
          $all_courses_names = DB::select('EXEC getAllCoursesUe ?',[$name]);

          $name = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        return View('ue_report')->with('all_courses',$all_courses)->with('all_courses_names',$all_courses_names)->with('name',$name)->with('reg_no',$reg_no)->with('program_fullAllCourses',$program_fullAllCourses)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester);
    // dd($all);

        //
        // $all = DB::table('attendance_all')->where('reg_no',$reg_no)->get();
        // $name = DB::table('attendance_all')->where('reg_no',$reg_no)->limit(1)->value('name');
        // return View('attendance_report')->with('all_courses',$all_courses)->with('name',$name);
      }

    }

  }



    public function checkUser(Request $request)
    {

        if($request->inputRegNo!=null) {

            $inputRegNo = $request->inputRegNo;
            $result = DB::table('USERINFO')
                ->where('SSN', $inputRegNo)->value('name');

            echo $result;
        }else {


        }

    }


    public function checkCourse(Request $request)
    {

        if($request->input_name!=null) {

            $input_name = $request->input_name;
            $title = DB::table('USERINFO')
                ->where('name', $input_name)->value('TITLE');
            $name = $input_name;


            if(!empty($title)){

if($title=='staff'){

    $staff_course_list=DB::table('lecturers')->select('course','course_name')->where('instructor',$name)->orWhere('Instructor_2',$name)->orWhere('Instructor_3',$name)->orWhere('Instructor_4',$name)->orWhere('Instructor_5',$name)->orWhere('Tutorial_Assistant',$name)->orWhere('technical_staff',$name)->orWhere('Technical_Staff_2',$name)->orWhere('Technical_Staff_3',$name)->get();

    foreach ($staff_course_list as $var ){

        echo "
             <option>".$var->course."-".$var->course_name."</option>";


    }


}else if ($title=='student'){

    $list_courses=DB::select('EXEC getStudentCourseList ?',[$name]);



    foreach ($list_courses as $var ){

        echo "
             <option  >".$var->course."-".$var->course_name."</option>";


    }

}else {


}

            }else {



            }

        }else {


        }

    }



   public function checkDegreeCourses(Request $request)
   {



           $inputProg = $request->inputProg;
           $DegreeCourseList = DB::table('courses')->select('course','course_name')->where('program', $inputProg)->get();

           foreach ($DegreeCourseList as $var ){

               echo "
            <option>".$var->course."-".$var->course_name."</option>";


           }
//echo $DegreeCourseList;





   }





    public function autoCompleteCourse(Request $request)
    {


        if($request->get('query'))
        {
            $query = $request->get('query');


            $data=DB::table('courses')->select('course','course_name')->where('course', 'LIKE', "%{$query}%")->get();
            if(count($data)!=0){
                $output = '<ul class="dropdown-menu" style="display:block; width: 91%; margin-left: 5%;  padding: 3%; margin-top:0% ">';
                foreach($data as $row)
                {
                    $output .= '
       <li id="list">'.$row->course."-".$row->course_name.'</li>
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




    public function AutoComplete(Request $request) {

        if($request->get('query'))
        {
            $query = $request->get('query');


            $data=DB::table('programs')->where('initial', 'LIKE', "%{$query}%")->get();
            if(count($data)!=0){
                $output = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
                foreach($data as $row)
                {
                    $output .= '
       <li id="list">'.$row->initial.'</li>
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


    public function AutoCompleteName(Request $request) {



        if($request->get('query'))
        {
            $query = $request->get('query');
$course_input=$request->get('course_input');

            $temp_course1=strtoupper($course_input);

            $temp_course2=explode('-', strtoupper($temp_course1));

            $course=$temp_course2[0];




            $parameters=[$course,$query];
            $data = DB::select('EXEC getNamePerCourse ?,?',$parameters);
//            $data=DB::table('USERINFO')->where('name', 'LIKE', "%{$query}%")->get();
            if(count($data)!=0){
                $output = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';
                foreach($data as $row)
                {
                    $output .= '
       <li id="listNamePerCourse">'.$row->name.'</li>
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



    public function AutoCompleteStaffNames(Request $request) {



        if($request->get('query'))
        {
            $query = $request->get('query');
            $course_input=$request->get('course_input');

            $temp_course1=strtoupper($course_input);

            $temp_course2=explode('-', strtoupper($temp_course1));

            $course=$temp_course2[0];


            $instructor= DB::table('lecturers')->whereRaw("instructor LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('instructor');
            $instructor2= DB::table('lecturers')->whereRaw("instructor_2 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('instructor_2');
            $instructor3= DB::table('lecturers')->whereRaw("instructor_3 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Instructor_3');
            $instructor4= DB::table('lecturers')->whereRaw("instructor_4 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Instructor_4');
            $instructor5= DB::table('lecturers')->whereRaw("instructor_5 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Instructor_5');
            $TutorialAssistant= DB::table('lecturers')->whereRaw("Tutorial_Assistant LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Tutorial_Assistant');
            $technical_staff= DB::table('lecturers')->whereRaw("technical_staff LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('technical_staff');
            $TechnicalStaff2= DB::table('lecturers')->whereRaw("Technical_Staff_2 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Technical_Staff_2');
            $TechnicalStaff3= DB::table('lecturers')->whereRaw("Technical_Staff_3 LIKE '%$query%'")->where('course', 'LIKE', "%{$course}%")->value('Technical_Staff_3');


            if((count($instructor)>0) OR (count($instructor2)>0) OR (count($instructor3)>0) OR (count($instructor4)>0) OR (count($instructor5)>0) OR (count($TutorialAssistant)>0) OR (count($technical_staff)>0) OR (count($TechnicalStaff2)>0) OR (count($TechnicalStaff3)>0)) {

            $output = '<ul class="dropdown-menu" style="display:block; width: 89%; margin-left: 5%; margin-top:0% ">';


            if (count($instructor) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $instructor . '</li>
       ';
            } else {


            }


            if (count($instructor2) != 0) {
                $output .= '
       <li id="listNameStaffPerCourse">' . $instructor2 . '</li>
       ';

            } else {


            }


            if (count($instructor3) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $instructor3 . '</li>
       ';
            } else {


            }


            if (count($instructor4) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $instructor4 . '</li>
       ';
            } else {


            }


            if (count($instructor5) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $instructor5 . '</li>
       ';
            } else {


            }


            if (count($TutorialAssistant) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $TutorialAssistant . '</li>
       ';
            } else {


            }


            if (count($technical_staff) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $technical_staff . '</li>
       ';

            } else {


            }


            if (count($TechnicalStaff2) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $TechnicalStaff2 . '</li>
       ';
            } else {


            }


            if (count($TechnicalStaff3) != 0) {

                $output .= '
       <li id="listNameStaffPerCourse">' . $TechnicalStaff3 . '</li>
       ';

            } else {


            }

            $output .= '</ul>';


            echo $output;

        }else{
                echo "0";
            }

        }


    }




    public function AutoCompleteNameAllStudents(Request $request) {



        if($request->get('query'))
        {
            $query = $request->get('query');




            $data=DB::table('USERINFO')->where('name', 'LIKE', "%{$query}%")->where('title', '=', 'student')->get();
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



    public function AutoCompleteNameAllStaff(Request $request) {



        if($request->get('query'))
        {
            $query = $request->get('query');




            $data=DB::table('USERINFO')->where('name', 'LIKE', "%{$query}%")->where('title', '=', 'staff')->get();
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




    public function sortClass(Request $request,$courseValue,$fullCourse) {

        $today=date('Y-m-d');

        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

          $semday1=DB::table('camis_configuration')->where('id', 1)->value('semester_startDate');

        $percentage=$request->percentage;
        $course=strtoupper($courseValue);

        $minimum_percentage=DB::table('camis_configuration')->where('id', 1)->value('minimum_class_percentage');

        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }


        //Echo "All students";
        $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);



        foreach ($all as $val) {
            $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
            $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?,?,?',$values);
            array_multisort($all_students);
        }


        foreach ($all as $val) {
            $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
            $all_studentsProgKey[] = DB::select('EXEC getAttendanceAllProgKey ?,?,?,?,?',$values);
            array_multisort($all_studentsProgKey);
        }



if($request->get('sort_criteria')==1) {
    foreach ($all_students as $values) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($values));
        $val = (iterator_to_array($iterator, true));

        if (round($val['PERCENTAGE']) < $percentage) {

            $all_studentsFilter[] = $values;

        } else {


        }

    }


    return View('attendance_report3')->with('all_studentsFilter', $all_studentsFilter)->with('all_studentsProgKey', $all_studentsProgKey)->with('course_name', $course_name)->with('program_full', $program_full)->with('percentage', $percentage)->with('minimum_percentage', $minimum_percentage)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse)->with('courseValue',$courseValue);

}elseif ($request->get('sort_criteria')==2){


    foreach ($all_students as $values) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($values));
        $val = (iterator_to_array($iterator, true));

        if (round($val['PERCENTAGE']) > $percentage) {

            $all_studentsFilter[] = $values;

        } else {


        }

    }


    return View('attendance_report3')->with('all_studentsFilter', $all_studentsFilter)->with('all_studentsProgKey', $all_studentsProgKey)->with('course_name', $course_name)->with('program_full', $program_full)->with('percentage', $percentage)->with('minimum_percentage', $minimum_percentage)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse)->with('courseValue',$courseValue);



} else{


}

    }


    public function AbsenteeTest($courseValue,$fullCourse) {

        $temp_course1=strtoupper($courseValue);

        $temp_course2=explode('-', strtoupper($temp_course1));

        $course=$temp_course2[0];

        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }




        //echo "All students";
//               $all_test = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//        $all_test2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//        $all_test3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
        $all_test=DB::select('EXEC all_testAbsentee ?',[$course]);
        $all_test2=DB::select('EXEC all_test2Absentee ?',[$course]);
        $all_test3=DB::select('EXEC all_test3Absentee ?',[$course]);


        $date = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');

        $times = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time2s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time3s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');

        $timee = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time2e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time3e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');



        // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
        // $all_students = array();


        return View('test_report_all2')->with('all_test',$all_test)->with('all_test2',$all_test2)->with('all_test3',$all_test3)->with('date',$date)->with('date2',$date2)->with('date3',$date3)->with('course_name',$course_name)->with('program_full',$program_full)->with('timee',$timee)->with('times',$times)->with('time2e',$time2e)->with('time2s',$time2s)->with('time3e',$time3e)->with('time3s',$time3s)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse);




    }



    public function AbsenteeUe($courseValue,$fullCourse) {

        $temp_course1=strtoupper($courseValue);

        $temp_course2=explode('-', strtoupper($temp_course1));

        $course=$temp_course2[0];
        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }

//        $all_test = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',0],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

        $all_test=DB::select('EXEC all_testUeAbsentee ?',[$course]);
        $date = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',0],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $FromTime = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',0],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $ToTime = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',0],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

        // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
        // $all_students = array();


        return View('ue_report_all2')->with('all_test',$all_test)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('course_name',$course_name)->with('program_full',$program_full)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse);



    }



    //present starts

    public function PresentTest($courseValue,$fullCourse) {

        $temp_course1=strtoupper($courseValue);

        $temp_course2=explode('-', strtoupper($temp_course1));

        $course=$temp_course2[0];
        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }


        //echo "All students";
//               $all_test = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//        $all_test2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
//        $all_test3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',0],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
        $all_test=DB::select('EXEC all_testPresent ?',[$course]);
        $all_test2=DB::select('EXEC all_test2Present ?',[$course]);
        $all_test3=DB::select('EXEC all_test3Present ?',[$course]);


        $date = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');

        $times = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time2s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time3s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');

        $timee = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time2e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time3e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');



        // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
        // $all_students = array();


        return View('test_report_all3')->with('all_test',$all_test)->with('all_test2',$all_test2)->with('all_test3',$all_test3)->with('date',$date)->with('date2',$date2)->with('date3',$date3)->with('course_name',$course_name)->with('program_full',$program_full)->with('timee',$timee)->with('times',$times)->with('time2e',$time2e)->with('time2s',$time2s)->with('time3e',$time3e)->with('time3s',$time3s)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse);




    }



    public function PresentUe($courseValue,$fullCourse) {

        $temp_course1=strtoupper($courseValue);

        $temp_course2=explode('-', strtoupper($temp_course1));

        $course=$temp_course2[0];

        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }

//        $all_test = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',0],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

        $all_test=DB::select('EXEC all_testUePresent ?',[$course]);
        $date = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $FromTime = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $ToTime = DB::table('attendance_ue')->where([['title', '=','student'],['status', '=',1],['validity', '=','VALID'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

        // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
        // $all_students = array();

        return View('ue_report_all3')->with('all_test',$all_test)->with('date',$date)->with('FromTime',$FromTime)->with('ToTime',$ToTime)->with('course_name',$course_name)->with('program_full',$program_full)->with('current_academic_year',$current_academic_year)->with('current_semester',$current_semester)->with('fullCourse',$fullCourse);



    }



   public function classPDF(){

        $pdf = PDF::loadView('classpdf');

        return $pdf->stream('class attendance.pdf');
    }

    public function classPDF2(){

        $pdf = PDF::loadView('classpdf2');

        return $pdf->stream('class attendance.pdf');
    }

    public function classPDF3(){

        $pdf = PDF::loadView('classpdf3');

        return $pdf->stream('class attendance.pdf');
    }

    public function testPDF(){

        $pdf = PDF::loadView('testpdf');

        return $pdf->stream('Test attendance.pdf');
    }

    public function testallPDF(){

        $pdf = PDF::loadView('testallpdf');

        return $pdf->stream('Test All attendance.pdf');
    }

    public function testinvalidPDF(){

        $pdf = PDF::loadView('testinvalidpdf');

        return $pdf->stream('All Tests attendance.pdf');
    }

    public function UEPDF(){

        $pdf = PDF::loadView('UEpdf');

        return $pdf->stream('UE attendance.pdf');
    }

    public function UEAllPDF(){

        $pdf = PDF::loadView('UEAllpdf');

        return $pdf->stream('UE All attendance.pdf');
    }

}
