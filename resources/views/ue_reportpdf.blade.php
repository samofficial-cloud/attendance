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
  $dataSingle="";
    $data="";

      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

      $temp_course=explode('-', strtoupper($_GET['course_id']));

      $course=$temp_course[0];

    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $name=$_GET['input_name'];
      $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);

      if($_GET['selection']=='One course') {

        $data = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $date=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


      } 
      else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->get();
          $all_courses_names = DB::select('EXEC getAllCoursesUe ?',[$name]);

          $name = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['name', '=', $name],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
  
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
              <p class="note" style="float: right;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note">Academic year: <b>{{$current_academic_year}}</b></p>


              @foreach($program_fullAllCourses as $var)
                  <p class="note">Programme: <b>{{$var->full}}</b></p>
              @endforeach
      <p class="note">Case: <b>All courses</b></p>
      <p class="note">UE Attendance Report for: <b>{{$name}} ({{$reg_no}})</b></p>
      
@else

@endif
@elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')
@if(count($data)>0)
      <div class="col-xs-9"><legend>
        <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
  </legend> </div>
             <p class="note" style="float: right;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note">Academic year: <b>{{$current_academic_year}}</b></p>

              @foreach($program_fullAllCourses as $var)
                  <p class="note">Programme: <b>{{$var->full}}</b></p>
              @endforeach
      <p class="note">Course: <b>{{$_GET['course_id']}}</b></p>
      <p class="note">UE Attendance Report for: <b>{{$name}} ({{$reg_no}})</b></p>
      
@else

@endif
@else
<div class="col-xs-9"><legend>
  <p class="note"> UE Attendance Report for {{$_GET['course_id']}} </p>
        @foreach($program_fullAllCourses as $var)
            <h5 class="note">Programme: {{$var->full}}</h5>
        @endforeach
    </legend> </div>
@endif



@if ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%">S/N</th>
        <th style="width: 12%"><center>COURSE</center></th>
        <th style="width: 13%"><center>DATE</center></th>
        <th><center>EXAM START TIME</center></th>
        <th><center>EXAM END TIME</center></th>
        <th style="width: 24%"><center>SIGNING TIME</center></th>
        <th style="width: 13%"><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses as $var)
      <tr>
        <td class="counterCell">.</td>
        <td><center>{{$var->courseId}}</center></td>
        <td><center>{{date("d/m/Y",strtotime($var->datetime)) }}</center></td>
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
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses_names as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>



@elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')

<div class="col-xs-6">


@if (!empty($FromTime))

  <table style="width: 50%">
<tr><td class="p_ue">EXAM DATE:</td> <td><b>{{date("d/m/Y",strtotime($date)) }}</b></td></tr>
<tr><td class="p_ue">EXAM TIME:</td> <td><b>{{ date("H:i",strtotime($FromTime))}} hours  to  {{ date("H:i",strtotime($ToTime))}} hours</b> </td></tr>

        @foreach ($data as $var)
        <tr>
            <td class="p_ue">STATUS:</td>
            @if($var->status==1)
                    <td><b> PRESENT<span><i class="fa fa-check-square-o" style="font-size:18px;color:#3e8ed0"></i></span></b></td>

            @else
                    <td><b>ABSENT</b></td>
                @endif
            </tr>
        <tr>
            <td class="p_ue">SIGNING TIME:</td>
                @if($var->status==1)
                    @if($var->validity=='VALID')
                        <td><b>{{ date("H:i",strtotime($var->datetime))}} hours</b></td>
                    @else
                       <td> <b>
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
                        </b></td>
                    @endif
                @else
                    <td><b>N/A</b></td>
                @endif
              </tr>
            
        @endforeach

   </table>

  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>



@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th >Name</th>
        <th>Identification number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_students as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell"></td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>
  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

@endif


<br>

</div>
</body>
</html>