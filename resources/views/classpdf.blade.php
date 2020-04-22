
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


    @if($_GET['selection']=='All courses')

        @if(count($all_courses)>0)
            <div class="col-xs-9"><legend>
               <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
              </legend> </div>
                    <p class="note" style="float: right; font-size: 15px;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note" style="font-size: 15px;">Academic year:  <b>{{$current_academic_year}}</b></p>

                    @foreach($program_fullAllCoursesStaff as $var)
                        @if($var->DEPTNAME=='CSE')
                            <p class="note">Department: <b>Computer science and Engineering</b></p>
                        @elseif($var->DEPTNAME=='ETE')
                            <p class="note">Department: <b>Electronics and Telecommunications Engineering</b></p>
                        @else


                        @endif

                    @endforeach
                    <p class="note">Case: <b>All courses</b> </p>
                    <p class="note">Class attendance report for : <b>{{$name}} ({{$reg_no}})</b> </p>
        @else

        @endif






  @else

  @endif






@if($_GET['selection']=='One course')

            <div class="col-xs-6">
                @if(count($dataSingle_all)>0)
                    <div class="col-xs-9"><legend>
                      <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
  </legend>
                      </div>
                            <p  style="float: right;">Semester: <b>{{$current_semester}}</b></p>
                <p >Academic year: <b>{{$current_academic_year}}</b></p>

                            @foreach($program_fullAllCourses as $var)
                                <p class="note">Programme: <b>{{$var->full}}</b></p>
                            @endforeach
                            <p class="note">Course: <b>{{$_GET['course_id']}}</b></p>
                            

                            <p class="note" style="font-size: 18px;"> Class attendance report for: <b>{{$name}} ({{$reg_no}}) </b></p>
                        

                   <p style="font-size: 18px">Overall percantage so far: <b>{{$percentage}}%</b></p>

                    <p>Minimum required percentage: {{$minimum_percentage}}% </p>
<br>

                    <table  class="hover table table-bordered table-striped" id="myTable1">
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
                        @foreach ($dataSingle_all as $var)
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


                @else
                    <h4>No data could be found for the specified parameters</h4>
                @endif
            </div>

    @elseif ($_GET['selection']=='All courses')

        <div class="col-xs-6 ">
            @if(count($all_courses)>0)
             
                <table id="sorter1" style="width: 70%" class="hover table table-striped table-bordered" >
                    <thead class="thead-dark">
                    <tr>
                        <th >S/N</th>
                        <th class="order"><center>Course Code</center></th>
                        <th class="order"><center>Course name</center></th>
                        <th class="order"><center>Percentage</center></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    foreach($all_courses as $values){
                        $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                        $val = (iterator_to_array($iterator,true));
                        print('<tr><td style="text-align: center;" class="counterCell">.</td>'.'<td><center>'.$val['courseId'].'</center><td>'.$val['course_name'].'</td><td><center>'.round($val['PERCENTAGE']).'%'.'</center></td></tr>');

                    }
                    ?>
                    </tbody>

                </table>
                <br>
                <br>
                <!-- course key -->
            @else
                <h4>No data could be found for the specified parameters</h4>
            @endif
        </div>

@else

@endif

</div>

</body>
</html>