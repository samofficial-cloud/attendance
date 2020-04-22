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
      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
      $temp_course=explode('-', strtoupper($_GET['course_id']));

      $course=$temp_course[0];
      $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

      foreach($program_initial as $var2){

          $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

      }
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $name=$_GET['input_name'];
    $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);
 
 if($_GET['selection']=='One course') {

          $dataSingle_all = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
          $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      }

      else {

          //Echo one student all courses
          $all_courses = DB::select('EXEC getAllCoursesTest1 ?',[$name]);
          $all_courses2 = DB::select('EXEC getAllCoursesTest2 ?',[$name]);
          $all_courses3 = DB::select('EXEC getAllCoursesTest3 ?',[$name]);

          $name = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['name', '=', $name],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      }

use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
?>
<br>
<div class="container">

@if($_GET['selection']=='All courses')
@if((count($all_courses)>0) OR (count($all_courses2)>0) OR (count($all_courses3)>0))
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
      <p class="note">Case: <b>All courses</b> </p>
      <p class="note">Test attendance report for: <b>{{$name}} ({{$reg_no}})</b></p>
     
@else

@endif

@else

@endif



@if ($_GET['selection']=='All courses')

<!-- TEST 1 -->
<div class="col-xs-6">
   @if(count($all_courses)>0)
  <h5>TEST 1 </h5>
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%;">S/N</th>
        <th style="width: 14%;"><center>COURSE</center></th>
        <th style="width: 14%;"><center>DATE</center></th>
          <th><center>TEST START TIME</center></th>
          <th><center>TEST END TIME</center></th>
          <th style="width: 24%;"><center>SIGNING TIME</center></th>
          <th style="width: 14%;"><center>STATUS</center></th>
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
foreach($all_courses as $values){
 $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
 $val = (iterator_to_array($iterator,true));
 print($val['courseId'].' - '.$val['course_name'].'<br>');

}
?>


  @else
  {{-- <h4>No data could be found for the specified parameters</h4> --}}
  @endif
</div>

<br>
<br>

<!-- TEST 2 -->
<div class="col-xs-6">
  @if(count($all_courses2)>0)
  <h5>TEST 2 </h5> 
  <table class="hover table table-bordered table-striped" id="myTable2">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%;">S/N</th>
        <th style="width: 14%;"><center>COURSE</center></th>
        <th style="width: 14%;"><center>DATE</center></th>
          <th><center>TEST START TIME</center></th>
          <th><center>TEST END TIME</center></th>
          <th style="width: 24%;"><center>SIGNING TIME</center></th>
          <th style="width: 14%;"><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses2 as $var)
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
  foreach($all_courses2 as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  @else
  {{-- <h4>No data could be found for the specified parameters</h4> --}}
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->

<div class="col-xs-6">
  @if(count($all_courses3)>0)
  <h5>TEST 3 </h5>
  <table class="hover table table-bordered table-striped" id="myTable3">
    <thead class="thead-dark">
     <tr>
        <th style="width: 5%;">S/N</th>
        <th style="width: 14%;"><center>COURSE</center></th>
        <th style="width: 14%;"><center>DATE</center></th>
          <th><center>TEST START TIME</center></th>
          <th><center>TEST END TIME</center></th>
          <th style="width: 24%;"><center>SIGNING TIME</center></th>
          <th style="width: 14%;"><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses3 as $var)
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
  foreach($all_courses3 as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  @else
  {{-- <h4>No data could be found for the specified parameters</h4> --}}
  @endif
</div>



@elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')

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
                <p class="note">Course: <b>{{$_GET['course_id']}}</b> </p>
                <p class="note"> Test attendance report for: <b>{{$name}} ({{$reg_no}})</b></p>
            

    <br>


        <div class="col-xs-6">
            @if(count($dataSingle_all)>0)
                <table class="hover table table-bordered table-striped" id="myTable4">
                    <thead class="thead-dark">
                    <tr>
                        <th style="width: 5%;">S/N</th>
                        <th><center>TYPE OF TEST</center></th>
                        <th style="width: 13%;"><center>DATE</center></th>
                        <th><center>TEST START TIME</center></th>
                        <th><center>TEST END TIME</center></th>
                        <th style="width: 24%;"><center>SIGN IN TIME</center></th>
                        <th style="width: 13%;"><center>STATUS</center></th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($dataSingle_all as $var)
                        <tr>
                            <td class="counterCell">.</td>
                            <td><center>{{$var->test_type}}</center></td>
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
            @else
                <h4>No data could be found for the specified parameters</h4>
            @endif
        </div>



@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable5" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>Identification number</th>
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
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

@endif

<br>
</div>
</body>
</html>