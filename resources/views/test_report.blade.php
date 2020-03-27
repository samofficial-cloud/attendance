@extends('layouts.app')

@section('title')
  REPORT
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:710px;
  padding-bottom:20px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;
}

div.dataTables_length select {
  height:25px;
  width:10px;
  font-size: 70%;
}
table.dataTable {
font-family: "Nunito", sans-serif;
    font-size: 15px;



  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}
.form-inline .form-control {
    width: 100%;
}

</style>

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

@if($_GET['selection']=='All courses')
@if((count($all_courses)>0) OR (count($all_courses2)>0) OR (count($all_courses3)>0))
      <div class="col-xs-9"><legend>
              <div style="float: right;">
                  <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                  <h6 class="note">Semester: {{$current_semester}}</h6></div>

              @foreach($program_fullAllCourses as $var)
                  <h4 class="note">Programme: {{$var->full}}</h4>
              @endforeach
      <h4 class="note">Case: All courses </h4>
              <b><p class="note">Test attendance report for {{$name}} ({{$reg_no}})</p></b>
      </legend> </div>
@else

@endif

@else

@endif

<br>

@if ($_GET['selection']=='All courses')

<!-- TEST 1 -->
<div class="col-xs-6">
  <h5>TEST 1 </h5>
  @if(count($all_courses)>0)
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
          <th>TEST START TIME</th>
          <th>TEST END TIME</th>
          <th>SIGNING TIME</th>
          <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
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
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

<br>
<br>
<hr>
<!-- TEST 2 -->
<div class="col-xs-6">
  <h5>TEST 2 </h5>
  @if(count($all_courses2)>0)
  <table class="hover table table-bordered table-striped" id="myTable2">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
          <th>TEST START TIME</th>
          <th>TEST END TIME</th>
          <th>SIGN IN TIME</th>
          <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses2 as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
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
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->
<hr>
<div class="col-xs-6">
  <h5>TEST 3 </h5>
  @if(count($all_courses3)>0)
  <table class="hover table table-bordered table-striped" id="myTable3">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
          <th>TEST START TIME</th>
          <th>TEST END TIME</th>
          <th>SIGN IN TIME</th>
          <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses3 as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
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

  <br>
      <form action="{{route('testpdf')}}" class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>



  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>



@elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')

        <div class="col-xs-9"><legend>
                <div style="float: right;">
                    <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                    <h6 class="note">Semester: {{$current_semester}}</h6></div>

                @foreach($program_fullAllCourses as $var)
                    <h4 class="note">Programme: {{$var->full}}</h4>
                @endforeach
                <h4 class="note">Course: {{$_GET['course_id']}} </h4>
                <b><p class="note"> Test attendance report for {{$name}} ({{$reg_no}})</p></b>
            </legend> </div>

    <br>


        <div class="col-xs-6">
            @if(count($dataSingle_all)>0)
                <table class="hover table table-bordered table-striped" id="myTable4">
                    <thead class="thead-dark">
                    <tr>
                        <th>S/N</th>
                        <th>TYPE OF TEST</th>
                        <th>DATE</th>
                        <th>TEST START TIME</th>
                        <th>TEST END TIME</th>
                        <th>SIGN IN TIME</th>
                        <th>STATUS</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($dataSingle_all as $var)
                        <tr>
                            <td class="counterCell">.</td>
                            <td>{{$var->test_type}}</td>
                            <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
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


                <form action="{{route('testinvalidpdf')}}" class="form-container form-horizontal" method="get">
                    {{csrf_field()}}

                    <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

                    <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

                    <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

                    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


                    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


                    <center><button class="btn btn-primary" type="submit">Download</button></center>
                </form>


                <br>


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


<div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>
</div>





@endsection


@section('pagescript')

<script type="text/javascript">
 $(document).ready(function() {

  // console.log(x);
    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

    var table = $('#myTable2').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

    var table = $('#myTable3').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

    var table = $('#myTable4').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

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
