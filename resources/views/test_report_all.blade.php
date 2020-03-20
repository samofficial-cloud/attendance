@extends('layouts.app')

@section('title')
  REPORT
@endsection


@section('content')
<div class="classname">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

    @if(Auth::user()->staff==1)
    <div class="container">
 <center><ul class="nav1 nav-tabs" style="width: 84%">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container" style="max-width: 1165px;">
  <center><ul class="nav1 nav-tabs">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">ETE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS</a>
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES</a>
          <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
          <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
        </div>
      </li>

</ul>
</center>
</div>
@elseif(Auth::user()->Timetable_Master==1)
<div class="container2">
  <center><ul class="nav1 nav-tabs" style="padding-left: 35px;">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/events">EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>

  </ul>
  </center>
</div>
@elseif(Auth::user()->HoD==1)
<div class="container">
  <center><ul class="nav1 nav-tabs" style="align-content: center; width: 93%">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::user()->DEFAULTDEPTID==31)
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">INSTRUCTORS MANAGEMENT</a>
          @elseif(Auth::user()->DEFAULTDEPTID==32)
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">INSTRUCTORS MANAGEMENT</a>
          @endif
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES MANAGEMENT</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS MANAGEMENT</a>
        </div>
      </li>

</ul>
</center>
</div>

@endif


</nav>
</div>
<br>
<div class="container">

  @if((count($all_test)>0) OR (count($all_test2)>0) OR (count($all_test3)>0))
  <div class="col-xs-9"><legend>
          <div style="float: right;">
              <h6 class="note">Academic year: {{$current_academic_year}}</h6>
              <h6 class="note">Semester: {{$current_semester}}</h6></div>

          <h6 class="note">Programme:

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

          </h6>
    <h5 class="note">Course
        : {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
         <u> <p class="note"> Test attendance report for all students</p></u>
  </legend> </div>



<br>
    <div class="major">
        <a class="btn styling mb-2 button_color active" style="color: rgba(17,17,17,1); float:left;" href="/attendance_report_tests/absentees/{{{$_GET['course_id']}}}">Show only absentee students</a>

        <a class="btn styling mb-2 button_color active" style="color: rgba(17,17,17,1); float:right;" href="/attendance_report_tests/present/{{{$_GET['course_id']}}}">Show only students who are present</a>

        <div style="clear: both;"></div>
    </div>

        <!-- TEST 1 -->
<div class="col-xs-6">
<u><h5>TEST 1 </h5></u>
  @if(count($all_test)>0)
Date: {{date("d/m/Y",strtotime($date)) }} &nbsp


            <span> Test start time: {{date("H:i",strtotime($times))}} </span> &nbsp &nbsp
            <span>Test end time:{{date("H:i",strtotime( $timee))}}</span>

  <table id="myTable" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>


          <th class="order">SURNAME</th>
          <th class="order">OTHER NAMES</th>
            <th>REGISTRATION NUMBER</th>
          <th>PROGRAMME</th>
          <th>SIGNING TIME</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td class="counterCell"></td>

          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
              $temp2 = preg_split('/\s+/', $temp1[1]);
              $first_name=$temp2[1];
              $middle_name=$temp2[2];
              $other_names=$temp1[1];
              print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>

        <td>{{$var->reg_no}}</td>
          <td>{{$var->program}}</td>
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
  @else
  <h4>No data to display</h4>
  @endif
</div>
<br>
<br>

<!-- TEST 2 -->
<div class="col-xs-6">
<u><h5>TEST 2</h5></u>
  @if(count($all_test2)>0)
Date: {{date("d/m/Y",strtotime($date2)) }} &nbsp
        <span> Test start time: {{date("H:i",strtotime($time2s))}} </span> &nbsp &nbsp
        <span>Test end time:{{date("H:i",strtotime( $time2e))}}</span>
  <table id="myTable2" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th class="order">SURNAME</th>
          <th class="order">OTHER NAMES</th>
        <th>REGISTRATION NUMBER</th>
          <th>PROGRAMME</th>
          <th>SIGNING TIME</th>
          <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test2 as $var)
      <tr>
        <td class="counterCell"></td>
          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
          $temp2 = preg_split('/\s+/', $temp1[1]);
          $first_name=$temp2[1];
          $middle_name=$temp2[2];
          $other_names=$temp1[1];
          print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>
        <td>{{$var->reg_no}}</td>
          <td>{{$var->program}}</td>
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
  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->
<div class="col-xs-6">

<u><h5>TEST 3 </h5></u>
  @if(count($all_test3)>0)
Date: {{date("d/m/Y",strtotime($date3)) }} &nbsp
        <span> Test start time: {{date("H:i",strtotime($time3s))}} </span> &nbsp &nbsp
        <span>Test end time:{{date("H:i",strtotime( $time3e))}}</span>
  <table id="myTable3" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th class="order">SURNAME</th>
          <th class="order">OTHER NAMES</th>
        <th>REGISTRATION NUMBER</th>
          <th>PROGRAMME</th>
          <th>SIGNING TIME</th>
          <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test3 as $var)
      <tr>
        <td class="counterCell"></td>
          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
          $temp2 = preg_split('/\s+/', $temp1[1]);
          $first_name=$temp2[1];
          $middle_name=$temp2[2];
          $other_names=$temp1[1];
          print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>
        <td>{{$var->reg_no}}</td>
          <td>{{$var->program}}</td>
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
  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>





        @if((count($all_test)>0) OR (count($all_test2)>0) OR (count($all_test3)>0))
        <!-- course key -->

        <h6><u>KEY</u></h6>
        <?php

        $tempOut = array();
        foreach($all_test as $values){
            $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
            $val = (iterator_to_array($iterator,true));
            $tempoIn=$val['program'];

            if(!in_array($tempoIn, $tempOut))
            {
                print($val['program'].' - '.$val['full'].'<br>');
                array_push($tempOut,$tempoIn);
            }




        }

            foreach($all_test2 as $values){
                $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                $val = (iterator_to_array($iterator,true));
                $tempoIn=$val['program'];

                if(!in_array($tempoIn, $tempOut))
                {
                    print($val['program'].' - '.$val['full'].'<br>');
                    array_push($tempOut,$tempoIn);
                }




            }

            foreach($all_test3 as $values){
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

@else

@endif
        <br>




<form action="{{route('testallpdf')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}

    <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

    <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

      <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

  <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


  <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


     <center><button class="btn btn-primary" type="submit">Download</button></center>
     </form>

    @else
        <h4>No data to display</h4>
    @endif


    <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>
</div>




@endsection

@section('pagescript')

<script>
        $(document).ready( function () {
                $("#myTable").tablesorter();
                $("#myTable2").tablesorter();
                $("#myTable3").tablesorter();
        });
</script>




<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>

@endsection
