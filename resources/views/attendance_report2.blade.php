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
  <div class="container2">
 <ul class="nav1 nav-tabs">
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
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSTRUCTORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/instructors-CSE">CSE</a>
          <a class="dropdown-item" href="/instructors-ETE">ETE</a>
        </div>
      </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/courses">COURSES</a>
  </li>


</ul>

</div>
</nav>
</div>
<br>
<div class="container">


    @if($_GET['selection']=='All courses')

        @if(count($all_courses)>0)
            <div class="col-xs-9"><legend>
                    <div style="float: right;">
                        <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                        <h6 class="note">Semester: {{$current_semester}}</h6></div>
                    @foreach($program_fullAllCoursesStaff as $var)


                        @if($var->DEPTNAME=='CSE')
                            <h4 class="note">Department: Computer science and Engineering</h4>
                        @elseif($var->DEPTNAME=='ETE')

                            <h4 class="note">Department: Electronics and Telecommunications Engineering</h4>
                        @else


                        @endif

                    @endforeach
                    <h4 class="note">Case: All courses </h4>

                    <u><p class="note">Class attendance report for {{$name}} ({{$reg_no}}) </p></u>


                </legend> </div>

        @else

        @endif






  @else

  @endif






@if($_GET['selection']=='One course')

            <div class="col-xs-6">
                @if(count($dataSingle_all)>0)
                    <div class="col-xs-9"><legend>
                            <div style="float: right;">
                                <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                                <h6 class="note">Semester: {{$current_semester}}</h6></div>

                            @foreach($program_fullAllCourses as $var)
                                <h4 class="note">Programme: {{$var->full}}</h4>
                            @endforeach
                            <h4 class="note">Course: {{strtoupper($_GET['course_id'])}}({{$course_name}})</h4>
                            <u><p class="note"> Class attendance report for {{$name}} ({{$reg_no}}) </p></u>
                        </legend> </div>

                    <br>

                    {{--<center><h4>Overall percentage(holidays and class cancellation considered)</h4></center>--}}


                    <center><span class="chart " data-percent="{{$percentage}}">
		<span class="percent"></span>
	</span></center>
                    <br>

                    <div class="center location"><p>Overall percantage so far</p></div>
                    <br>



                    <p>Minimum required percentage: {{$minimum_percentage}}% </p>

                    <br>
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


                    <h6><u>PUBLIC HOLIDAYS</u></h6>
                    <?php
                    foreach($holidays as $values){
                        $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                        $val = (iterator_to_array($iterator,true));
                        print(date("d/m/Y",strtotime($val['combined_date'])).' - '.$val['holiday_name'].'<br>');

                    }
                    ?>
                    <br>
                    <br>



                    <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
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
            </div>

    @elseif ($_GET['selection']=='All courses')

        <div class="col-xs-6 ">
            @if(count($all_courses)>0)
                <br>
                <table style="width: 60%" class="hover table table-striped table-bordered" id="myTable1">
                    <thead class="thead-dark">
                    <tr>
                        <th >S/N</th>
                        <th>Course code</th>
                        <th>Course name</th>
                        <th>Percentage</th>
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
                <br>
                <!-- course key -->




                <br>

                <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
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
        </div>


@else


@endif




      <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>



@endsection

@section('pagescript')
<script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.easypiechart.min.js') }}" defer></script>

<script>
	$(function() {
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
      scaleColor:	false,
      trackColor:	'#e9ecef',
      barColor: '#72b4ea',
      lineCap:	'square',
      lineWidth:	'20',
      size: '160',
      animate:{
					duration:2000,
					enabled:true
				},
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});

	});
	</script>

<script>
        $(document).ready( function () {
                $("#myTable").tablesorter();
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
