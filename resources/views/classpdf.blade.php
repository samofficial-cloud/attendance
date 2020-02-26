
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
    $course=strtoupper($_GET['course_id']);

    $reg_no=$_GET['reg_no'];

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

    $today=date('Y-m-d');
    $semday1='2019-11-04';

    $course=strtoupper($_GET['course_id']);

    $reg_no=$_GET['reg_no'];

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

    }elseif ($_GET['category']== 2) {
      //echo one lecturer
      if ($_GET['checkbox']=='all cases') {

          if($instructor!=NULL){

              $instructor_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor_data=NULL;
          }


          if($instructor_2!=NULL){

              $instructor2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_2],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor2_data=NULL;
          }


          if($instructor_3!=NULL){

              $instructor3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_3],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor3_data=NULL;
          }

          if($instructor_4!=NULL){

              $instructor4_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_4],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor4_data=NULL;
          }

          if($instructor_5!=NULL){

              $instructor5_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$instructor_5],['position', '=','LECTURER'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $instructor5_data=NULL;
          }

          if($Tutorial_Assistant!=NULL){

              $Tutorial_Assistant_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Tutorial_Assistant],['position', '=','TUT'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Tutorial_Assistant_data=NULL;
          }

          if($technical_staff!=NULL){

              $technical_staff_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$technical_staff],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $technical_staff_data=NULL;
          }

          if($Technical_Staff_2!=NULL){

              $Technical_Staff_2_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_2],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Technical_Staff_2_data=NULL;
          }

          if($Technical_Staff_3!=NULL){

              $Technical_Staff_3_data=DB::table('attendance')->where([['title', '=','staff'],['name', '=',$Technical_Staff_3],['position', '=','TECH'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

          }else {

              $Technical_Staff_3_data=NULL;
          }
      }
      elseif($_GET['selection']=='One course') {
        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','staff'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();

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

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$reg_no]);
       // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
       $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
       $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
       foreach ($all as $val) {
         $values=[$reg_no,$val->courseId,$val->lectures_no,$today,$semday1];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?,?,?',$values);
       }
      }


    }else {

      //echo one student

      if ($_GET['checkbox']=='all cases') {
      $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
      $dataSingle_all = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();
      }

      elseif($_GET['selection']=='One course') {

        $CountSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->count('status');
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','CLASS']])->whereRaw("courseId LIKE '%$course%'")->get();


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


      } else {

          //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$reg_no]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID'],['status', '=', 1],['category', '=','CLASS']])->limit(1)->value('reg_no');
        foreach ($all as $val) {
          $values3=[$reg_no,$val->courseId,$val->lectures_no,$today,$semday1];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?,?,?',$values3);
        }
      
      }

    }


  ?>
	<div class="container">

    <!-- Detailed case -->
    @if(!empty($_GET['checkbox']))

        @if((count($instructor_data)>0) OR (count($instructor2_data)>0) OR (count($instructor3_data)>0) OR (count($instructor4_data)>0) OR (count($instructor5_data)>0) OR (count($Tutorial_Assistant_data)>0) OR (count($technical_staff_data)>0) OR (count($Technical_Staff_2_data)>0) OR (count($Technical_Staff_3_data)>0))
            <div class="col-xs-9"><legend>
                <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                    <p class="note"> Class attendance report for {{strtoupper($_GET['course_id'])}}({{$course_name}}) </p>

                </div>

        @else

        @endif


<!-- One student all courses -->
@elseif($_GET['selection']=='All courses')

@if(count($all_courses)>0)
    <div class="col-xs-9">
  <legend>
      <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
      <p class="note">Class attendance report for <b>{{$name}} ({{$reg_no}})</b> </p>
    <h5 class="note">Course(s): All </h5>
    </div>

    @else

    @endif

<!-- All students for a particular course -->
@elseif ($_GET['category']== 1)


@if(count($all_students)>0)
    <div class="col-xs-9">
  <legend>
    <center>
      <b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
      <p class="note">Class attendance report for all students </p>
    <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}}</h5>
    </div>

    @else

    @endif


<!-- Last case -->
@else
@if(!empty($name))
<div class="col-xs-9">
  <legend>
    <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
  <p class="note"> Class attendance report for {{$name}} ({{$reg_no}}) </p>
<h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
</div>
  @else

  @endif
@endif



<!-- Show also invalid cases -->
    @if(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

        <div class="col-xs-6">
            @if(count($dataSingle_all)>0)
                <div class="col-xs-9">
                  <legend>
                    <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
           <p class="note"> Class attendance report for <b>{{$name}} ({{$reg_no}})</b> </p>
                <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}}</h5>
                    </div>

            <br>


                <table class="hover table table-bordered table-striped" id="myTable1">
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
                    @foreach ($dataSingle_all as $var)
                        <tr>
                            <td class="counterCell">.</td>
                            <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
                            <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
                            <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
                            <td>
                                @if($var->status==1)
                                    @if($var->validity=='VALID')
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else
                <h4>No data to display</h4>
            @endif
        </div>








<!-- Show also invalid cases staff -->
@elseif(!empty($_GET['checkbox']))

    <!-- instructor -->

            <div class="col-xs-6">
            @if(count($instructor_data)>0)
                    <div class="col-xs-9">
                      <legend>
                        <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                            <p class="note">Instructor:  {{$instructor}} ({{$instructor_reg}}) </p>
                        </div>
                <br>

  <table class="table table-bordered table-striped">
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
          {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
          @else
          {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

  @else

  @endif
</div>

        <!-- instructor2 -->
        <div class="col-xs-6">
            @if(count($instructor2_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Instructor:  {{$instructor_2}} ({{$instructor2_reg}}) </p>

                    </div>
                <br>


                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>


        <!-- instructor3 -->
        <div class="col-xs-6">
            @if(count($instructor3_data)>0)


                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Instructor:  {{$instructor_3}} ({{$instructor3_reg}}) </p>
                    </div>
                <br>


                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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


            @else

            @endif
        </div>

        <!-- instructor4 -->
        <div class="col-xs-6">
            @if(count($instructor4_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Instructor:  {{$instructor_4}} ({{$instructor4_reg}})</p>
                  </div>
                <br>

                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>


        <!-- instructor5 -->
        <div class="col-xs-6">
            @if(count($instructor5_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Instructor:  {{$instructor_5}} ({{$instructor5_reg}})</p>
                    </div>
                <br>


                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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


            @else

            @endif
        </div>


        <!-- Tutorial_assistant -->
        <div class="col-xs-6">
            @if(count($Tutorial_Assistant_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Tutorial Assistant:  {{$Tutorial_Assistant}} ({{ $Tutorial_Assistant_reg}})</p>
                     </div>
                <br>

                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>

        <!-- technical_staff -->
        <div class="col-xs-6">
            @if(count($technical_staff_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Technical staff:  {{$technical_staff}} ({{ $technical_staff_reg}})</p>
                    </div>
                <br>

                <table class="hover table table-bordered table-striped" id="myTable1">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>


        <!-- Techinal_staff 2 -->
        <div class="col-xs-6">
            @if(count($Technical_Staff_2_data)>0)

                <div class="col-xs-9"><legend>
                  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                  <p class="note">Technical staff:  {{$Technical_Staff_2}} ({{ $Technical_Staff_2_reg}})</p>
                    </div>
                <br>

                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>


        <!-- Technical staff3 -->
        <div class="col-xs-6">
            @if(count($Technical_Staff_3_data)>0)
                <div class="col-xs-9"><legend>
                        <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
<br>
                        <p class="note">Technical staff:  {{$Technical_Staff_3}} ({{ $Technical_Staff_3_reg}})</p>
                    </div>


                <table class="table table-bordered table-striped">
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
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived early)
                                    @else
                                        {{ date("H:i",strtotime($var->datetime))}} (Arrived late)
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

            @else

            @endif
        </div>

@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">


@if (!empty($name))
<p>Minimum required percentage: 75% </p>
<center><span class="chart " data-percent="{{$percentage}}">
    <span class="percent"></span>
  </span></center>
<br>

<div class="center location"><p>Your current percantage so far</p></div>
  
  @else
  <h4>No data to display</h4>
  @endif
</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="hover table table-striped table-bordered" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach($all_courses as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell">.</td>'.'<td>'.$val['courseId'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>
    </tbody>

  </table>
<br>
<br>
<!-- course key -->

<h6><u>KEY</u></h6>
<?php
foreach($all_courses as $values){
 $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
 $val = (iterator_to_array($iterator,true));
 print($val['courseId'].' - '.$val['course_name'].'<br>');

}
?>


  @else
  <h4>No data to display</h4>
  @endif
</div>


@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable1" class="table table-bordered table-striped" >
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Registration number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_students as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell">.</td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>


  @else
  <h4>No data to display</h4>
  @endif
</div>

@endif

</div>
</body>
</html>