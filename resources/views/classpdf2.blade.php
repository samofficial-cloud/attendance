<html>
<head>
	<title>Report</title>
</head>
<style>
table {
  border-collapse: collapse;
   width: 100%;
}

table, td, th {
  border: 1px solid black;
}
table {
  counter-reset: tableCount;
  }

  .counterCell:before {
  content: counter(tableCount);
  counter-increment: tableCount;
  }
</style>

<body>
<?php
use Illuminate\Support\Facades\DB;

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

      $temp_course=explode('-', strtoupper($_GET['course_id']));

      $course=$temp_course[0];


      $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

      foreach($program_initial as $var2){

          $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

      }

    $dept_short=DB::table('lecturers')->whereRaw("course LIKE '%$course%'")->value('dept');




    $name=$_GET['input_name'];

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



     if ($_GET['category']== 1) {

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
    }

    elseif ($_GET['category']== 2) {
      //echo one lecturer
      if ($_GET['checkbox']=='all cases'){

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
      }
      elseif($_GET['selection']=='One course') {


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
      }
      //echo one lecturer all courses
       else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$name]);
       $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
       $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
       foreach ($all as $val) {
         $values=[$name,$val->courseId,$val->lectures_no,$today,$semday1];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?,?,?',$values);
       }

      }


    }else {

      //echo one student

      if ($_GET['checkbox']=='all cases') {

      }

      elseif($_GET['selection']=='One course') {

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

      } 
      else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$name]);
        
        $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
        foreach ($all as $val) {
          $values3=[$name,$val->courseId,$val->lectures_no,$today,$semday1];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?,?,?',$values3);
        }

      }

    }

    use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
  ?>
<div class="container">

    <!-- Detailed case -->
    @if(!empty($_GET['checkbox']))

        @if((count($instructor_data)>0) OR (count($instructor2_data)>0) OR (count($instructor3_data)>0) OR (count($instructor4_data)>0) OR (count($instructor5_data)>0) OR (count($Tutorial_Assistant_data)>0) OR (count($technical_staff_data)>0) OR (count($Technical_Staff_2_data)>0) OR (count($Technical_Staff_3_data)>0))
            <div class="col-xs-9"><legend>
                    <div style="float: right;">
                    <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                    <h6 class="note">Semester: {{$current_semester}}</h6></div>
                    @if($dept_short=='CSE')
                        <h4 class="note">Department: Computer science and Engineering</h4>
                    @elseif($dept_short=='ETE')

                        <h4 class="note">Department: Electronics and Telecommunications Engineering</h4>
                    @else


                    @endif

                    <h4 class="note">Course: {{$_GET['course_id']}} </h4>

                    <b><p class="note"> Class attendance report for staffs</p></b>



                </legend> </div>

        @else

        @endif

<!-- One student all courses -->
@elseif($_GET['selection']=='All courses')

@if(count($all_courses)>0)
    <div class="col-xs-9"><legend>
            <div style="float: right;">
                <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                <h6 class="note">Semester: {{$current_semester}}</h6></div>
            @foreach($program_fullAllCourses as $var)
                <h4 class="note">Programme: {{$var->full}}</h4>
            @endforeach
            <h4 class="note">Case: All courses </h4>

      <b><p class="note">Class attendance report for {{$name}} ({{$reg_no}})</p></b>



    </legend> </div>

    @else

    @endif

<!-- All students for a particular course -->
@elseif ($_GET['category']== 1)


@if(count($all_students)>0)
    <div class="col-xs-9"><legend>
      <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
  </legend> </div>
              <p class="note" style="float: right; font-size: 15px;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note" style="font-size: 15px;">Academic year: <b>{{$current_academic_year}}</b></p>
                
            <p class="note" style="font-size: 15px;">Programme(s): <b>

                <?php
                $i=0;
                $length=count($program_full);
                foreach($program_full as $values){
                    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                    $val = (iterator_to_array($iterator,true));


                    if($i!=($length-1)){
                        print($val['full'].', ');
                    }else{

                        print($val['full'].' ');

                    }
                    $i++;
                }
                ?>
              </b>
            </p>

            <p class="note">Course: <b>{{$_GET['course_id']}}</b></p>
      <p class="note">Class attendance report for: <b>All students</b></p>


    

    @else

    @endif


<!-- Last case -->


        @else

        @endif




@if(!empty($_GET['checkbox']))

        @if((count($instructor_data)>0) OR (count($instructor2_data)>0) OR (count($instructor3_data)>0) OR (count($instructor4_data)>0) OR (count($instructor5_data)>0) OR (count($Tutorial_Assistant_data)>0) OR (count($technical_staff_data)>0) OR (count($Technical_Staff_2_data)>0) OR (count($Technical_Staff_3_data)>0))
        <!-- instructor -->

            <div class="col-xs-6">
                @if(count($instructor_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor}} ({{$instructor_reg}}) </p>

                        </legend> </div>


                    <table id="mytableDetailedinstructor" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($instructor_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>




                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageInstructor}}%</p></b>
                @else

                @endif
            </div>

            <!-- instructor2 -->
            <div class="col-xs-6">
                @if(count($instructor2_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor_2}} ({{$instructor2_reg}}) </p>

                        </legend> </div>



                    <table id="mytableDetailedinstructor2" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($instructor2_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>



                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageInstructor_2}}%</p></b>
                @else

                @endif
            </div>


            <!-- instructor3 -->
            <div class="col-xs-6">
                @if(count($instructor3_data)>0)


                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor_3}} ({{$instructor3_reg}}) </p>
                        </legend> </div>



                    <table id="mytableDetailedinstructor3"  class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($instructor3_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>



                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageInstructor_3}}%</p></b>
                @else

                @endif
            </div>

            <!-- instructor4 -->
            <div class="col-xs-6">
                @if(count($instructor4_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor_4}} ({{$instructor4_reg}})</p>
                        </legend> </div>


                    <table id="mytableDetailedinstructor4" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($instructor4_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>



                <b>    <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageInstructor_4}}%</p></b>
                @else

                @endif
            </div>


            <!-- instructor5 -->
            <div class="col-xs-6">
                @if(count($instructor5_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor_5}} ({{$instructor5_reg}})</p>
                        </legend> </div>



                    <table id="mytableDetailedinstructor5" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($instructor5_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>




                <b>    <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageInstructor_5}}%</p> </b>
                @else

                @endif
            </div>


            <!-- Tutorial_assistant -->
            <div class="col-xs-6">
                @if(count($Tutorial_Assistant_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Tutorial Assistant:  {{$Tutorial_Assistant}} ({{ $Tutorial_Assistant_reg}})</p>
                        </legend> </div>


                    <table id="mytableDetailedTutorial" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($Tutorial_Assistant_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>




                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageTutorial_Assistant}}%</p></b>
                @else

                @endif
            </div>

            <!-- technical_staff -->
            <div class="col-xs-6">
                @if(count($technical_staff_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Technical staff:  {{$technical_staff}} ({{ $technical_staff_reg}})</p>
                        </legend> </div>


                    <table id="mytableDetailedtech1" class="hover table table-bordered table-striped" >
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($technical_staff_data as $var)
                            <tr>
                                <td class="counterCell">.</td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>




                <b>    <p style="font-size: 17px; ">Overall attendance percentage: {{$percentagetechnical_staff}}%</p></b>
                @else

                @endif
            </div>


            <!-- Techinal_staff 2 -->
            <div class="col-xs-6">
                @if(count($Technical_Staff_2_data)>0)

                    <div class="col-xs-9"><legend>
                            <p class="note">Technical staff:  {{$Technical_Staff_2}} ({{ $Technical_Staff_2_reg}})</p>
                        </legend> </div>


                    <table id="mytableDetailedtech2" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($Technical_Staff_2_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>






                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageTechnical_Staff_2}}%</p></b>
                @else

                @endif
            </div>


            <!-- Technical staff3 -->
            <div class="col-xs-6">
                @if(count($Technical_Staff_3_data)>0)
                    <div class="col-xs-9"><legend>
                            <p class="note">Technical staff:  {{$Technical_Staff_3}} ({{ $Technical_Staff_3_reg}})</p>
                        </legend> </div>



                    <table id="mytableDetailedtech3" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th>DATE</th>
                            <th>COURSE START TIME</th>
                            <th>COURSE END TIME</th>
                            <th>SIGNING TIME</th>
                            <th>STATUS</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($Technical_Staff_3_data as $var)
                            <tr>
                                <td class="counterCell"></td>
                                <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                                <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}
                                        @else
                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>
                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        PRESENT
                                    @else
                                        ABSENT
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>






                  <b>  <p style="font-size: 17px; ">Overall attendance percentage: {{$percentageTechnical_Staff_3}}%</p></b>
                @else

                @endif


                <br>
                <br>

                <h6><u>PUBLIC HOLIDAYS</u></h6>
                <?php
                foreach($holidays as $values){
                    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                    $val = (iterator_to_array($iterator,true));

                    print( date("d/m/Y",strtotime($val['combined_date'])).' - '.$val['holiday_name'].'<br>');

                }

                ?>
                <br>
                <br>

                @else
                    <h4>No data could be found for the specified parameters</h4>
                @endif

            </div>






            @elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')

            <div class="col-xs-6">
                @if(count($dataSingle)>0)
                    <div class="col-xs-9"><legend>
                      <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
  </legend> </div>
              
              <p  style="float: right; font-size: 15px;">Semester: <b>{{$current_semester}}</b></p>
                <p  style="font-size: 15px;">Academic year: <b>{{$current_academic_year}}</b></p>
                
                            @if($dept_short=="CSE")
                                <p class="note">Department: <b>Computer science and Engineering</b></p>
                            @elseif($dept_short=='ETE')
                                <p class="note">Department: <b>Electronics and Telecommunications Engineering</b></p>
                            @else


                            @endif


                            <p class="note">Course: <b>{{$_GET['course_id']}}</b> </p>
                            <p class="note"> Class attendance report for: <b>{{$name}} ({{$reg_no}})</b> </p>

                        

                    <p>Overall percantage so far: <b>{{$percentage}}%</b></p>
<br>

                    <table id="mytableOneCourse" class="hover table table-bordered table-striped" >
                        <thead class="thead-dark">
                        <tr>
                            <th>S/N</th>
                            <th><center>DATE</center></th>
                            <th><center>COURSE START TIME</center></th>
                            <th><center>COURSE END TIME</center></th>
                            <th style="width: 28%"><center>SIGNING TIME</center></th>
                            <th><center>STATUS</center></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($dataSingle as $var)
                            <tr>
                                <td class="counterCell">.</td>
                                <td><center>{{date("d/m/Y",strtotime($var->datetime))  }}</center></td>
                                <td><center>{{ date("H:i",strtotime($var->courseTimeFrom))}}</center></td>
                                <td><center>{{ date("H:i",strtotime($var->courseTimeTo))}}</center></td>
                                <td>
                                    @if($var->status==1)
                                        @if($var->validity=='VALID')
                                            {{ date("H:i",strtotime($var->datetime))}}




                                        @else

                                            <?php

                                            $datetime1 = new DateTime($var->courseTimeFrom);//start time
                                            $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                                            $interval = $datetime1->diff($datetime2);


                                            if($interval->format('%h')=='0'){
                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                                            } else if ($interval->format('%h')=='1'){

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                                            else {

                                                echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                                            }


                                            ?>



                                        @endif
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@if($var->status==1)
                                        <center>PRESENT</center>
                                    @else
                                        <center>ABSENT</center>
                                    @endif </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>


                    <br>


                    <h4><u>PUBLIC HOLIDAYS</u></h4>
                    <?php
                    foreach($holidays as $values){
                        $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                        $val = (iterator_to_array($iterator,true));
                        print(date("d/m/Y",strtotime($val['combined_date'])).' - '.$val['holiday_name'].'<br>');

                    }
                    ?>
                    <br>
                    <br>


                    <br>
                @else
                    <h4>No data could be found for the specified parameters</h4>
                @endif
            </div>






@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6 custom">
  @if(count($all_courses)>0)
  <br>
  <table style="width:60%;" class="hover table table-striped table-bordered" id="sorter2">
    <thead class="thead-dark">
      <tr>
        <th >S/N</th>
        <th class="order">Course code</th>
          <th>Course name</th>
        <th class="order">Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach($all_courses as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td style="text-align: center;" class="counterCell">.</td>'.'<td>'.$val['courseId'].'<td>'.$val['course_name'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>
    </tbody>

  </table>


<br>

        <p>Minimum required percentage: {{$minimum_percentage}}% </p>

<br>
<!-- course key -->



  <br>

  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>





@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <br>
  <table  class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th><center>Surname</center></th>
          <th><center>Other Name(s)</center></th>
        <th><center>Registration number</center></th>
        <th><center>Programme</center></th>
        <th><center>Percentage</center></th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_students as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));

    $temp1=explode(',', $val['name']);
    $surname=$temp1[0];
    $temp2 = preg_split('/\s+/', $temp1[1]);
    $first_name=$temp2[1];
    $middle_name=$temp2[2];
    $other_names=$temp1[1];
    print('<tr><td class="counterCell">.</td>'.'<td>'.$surname.'</td><td>'.$other_names.'</td><td><center>'.$val['reg_no'].'</center></td><td><center>'.$val['program'].'</center></td><td><center>'.round($val['PERCENTAGE']).'%'.'</center></td></tr>');

}
?>

    </tbody>

  </table>

  <br>

    <b><p>Minimum required percentage: {{$minimum_percentage}}%</p></b>
    <br>


        <!-- course key -->

        <h6><u>KEY</u></h6>
        <?php

        $tempOut = array();
        foreach($all_studentsProgKey as $values){
            $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
            $val = (iterator_to_array($iterator,true));
            $tempoIn=$val['program'];

            if(!in_array($tempoIn, $tempOut))
            {
                print($val['program'].' - '.$val['full'].'<br>');
                array_push($tempOut,$tempoIn);
            }
        }
        ?>


        <br>
  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

@endif

</div>
</body>
</html>