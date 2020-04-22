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
 <center><ul class="nav1 nav-tabs" style="width: 98%">
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
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>

</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container3" style="padding-left: 154px;">
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
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" style="color:#060606" href="manage/users">USERS</a>
           <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
           <a class="dropdown-item" style="color:#060606" href="manage/courses">COURSES</a>
           <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
           <a class="dropdown-item" style="color:#060606" href="/approval">RESERVATIONS</a>
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-ETE">ETE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606" href="/system_settings">SYSTEM SETTINGS</a>

        </div>
      </li>

</ul>
</div>
@elseif(Auth::user()->Timetable_Master==1)
<div class="container3" style="padding-left: 153px;">

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
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
           <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
           <a class="dropdown-item" style="color:#060606" href="/approval">RESERVATIONS</a>

        </div>
      </li>

  </ul>

</div>
@elseif(Auth::user()->HoD==1)
<div class="container">
  <center><ul class="nav1 nav-tabs" style="align-content: center;">
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
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color:#060606" href="manage/users">USERS</a>
          <a class="dropdown-item" style="color:#060606" href="manage/courses">COURSES</a>
          @if(Auth::user()->DEFAULTDEPTID==31)
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-CSE">INSTRUCTORS</a>
          @elseif(Auth::user()->DEFAULTDEPTID==32)
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-ETE">INSTRUCTORS</a>
          @endif
         {{--  <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS MANAGEMENT</a> --}}
        </div>
      </li>

</ul>
</center>
</div>
@elseif(Auth::user()->admin==1)
<div class="container">
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
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSTRUCTORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="manage/instructors-CSE">CSE</a>
          <a class="dropdown-item" href="manage/instructors-ETE">ETE</a>
        </div>
      </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="manage/courses">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/managestudents">MANAGE STUDENTS</a>
  </li>


</ul>
</div>
@endif


</nav>
</div>
<br>
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

                    <b><p class="note"> Class Attendance Report for Staffs</p></b>



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

      <b><p class="note">Class Attendance Report for {{$name}} ({{$reg_no}})</p></b>



    </legend> </div>

    @else

    @endif

<!-- All students for a particular course -->
@elseif ($_GET['category']== 1)


@if(count($all_students)>0)
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

            <h5 class="note">Course: {{$_GET['course_id']}}</h5>
      <b><p class="note">Class Attendance Report for All Students </p></b>


    </legend> </div>

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

                <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
                    {{csrf_field()}}

                    <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

                    <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

                    <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

                    <input type="text" class="form-control" id="prog" name="prog" value="{{$_GET['prog']}}" hidden>

                    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


                    <input type="text" class="form-control" id="inputRegNo" name="input_name" value="{{$_GET['input_name']}}" hidden>


                    <center><button class="btn btn-primary" type="submit">Download</button></center>
                </form>




                @else
                    <h4>No data could be found for the specified parameters</h4>
                @endif

            </div>






            @elseif(!empty($_GET['input_name']) AND $_GET['selection']=='One course')

            <div class="col-xs-6">
                @if(count($dataSingle)>0)
                    {{--<div class="col-xs-9"><legend>--}}
                            {{--<p class="note"> Class Attendance Report for <b>{{$name}} ({{$reg_no}})</b> </p>--}}
                            {{--@foreach($program_fullAllCourses as $var)--}}
                                {{--<h5 class="note">Programme: {{$var->full}}</h5>--}}
                            {{--@endforeach--}}
                            {{--<h5 class="note">Course: {{$_GET['course_id']}}</h5>--}}
                        {{--</legend> </div>--}}

                    {{--<br>--}}

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

                            <b><p class="note"> Class Attendance Report for {{$name}} ({{$reg_no}}) </p></b>

                        </legend> </div>

                <br>

                    {{--<center><h4>Overall percentage</h4></center>--}}


                    <center><span class="chart " data-percent="{{$percentage}}">
		<span class="percent"></span>
	</span></center>
                    <br>

                    <div class="center location"><p>Overall percantage so far</p></div>
<br><br><br>

                    <table id="mytableOneCourse" class="hover table table-bordered table-striped" >
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
                        @foreach ($dataSingle as $var)
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


                    <br>




                    <form action="{{route('classpdf2')}} " class="form-container form-horizontal" method="get">
                        {{csrf_field()}}

                        <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

                        <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

                        <input type="text" class="form-control" id="inputCourse" name="prog" value="{{$_GET['prog']}}" hidden>

                        <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


                        <input type="text" class="form-control" id="inputRegNo" name="input_name" value="{{$_GET['input_name']}}" hidden>


                        <center><button class="btn btn-primary" type="submit">Download</button></center>
                    </form>


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
          <th class="order">Course name</th>
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

  <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="prog" value="{{$_GET['prog']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="input_name" value="{{$_GET['input_name']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>


  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>





@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <br>

        <a data-toggle="modal" data-target="#sortClass" class="btn styling mb-2 button_color active" role="button" aria-pressed="true">Sort by percentage</a> &nbsp;
        <div class="modal fade" id="sortClass" role="dialog">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <b><h5 class="modal-title">Sort by percentage</h5></b>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                    <?php
                        $temp_course1=strtoupper($_GET['course_id']);

                        $temp_course2=explode('-', strtoupper($temp_course1));

                        $course=$temp_course2[0];
                    ?>
                        <form id="test_form"  action="/attendance_report/sortClass/{{{$course}}}/{{$_GET['course_id']}}" class="form-container form-horizontal" method="get">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Criteria:</label>
                                <div class="col-sm-8">
                                    <select name="sort_criteria" id="getSortCriteria" >

                                        <option value="1" >Below</option>
                                        <option value="2" >Above</option>
                                    </select>
                                </div>
                            </div>




                            <div id="DivCheckt" style="display:block;">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Percentage:</label>
                                    <div class="col-sm-8">
                                        <input type="number" id="percent" required name="percentage" class="form-control" oninput="validatePercentage()" autocomplete="off" >
                                        <p class="mt-2 p-1"  id="messagePercentage"></p>
                                    </div>

                                </div>
                            </div>

                            <div style="margin-left: 52.5%;"><button id="percent_btn"  class="btn btn-primary" type="submit">Sort</button>        <button type="button" style="margin-left: 6%;" class="btn btn-danger" id="btnclose" data-dismiss="modal">Cancel</button></div>
                            {{--<center><button id="percent_btn"  class="btn btn-primary" type="submit">Sort</button></center>--}}
                        </form>
                    </div>

                </div>
            </div>
        </div>


  <table id="myTable1" class="table table-bordered table-striped" >
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th class="order">SURNAME</th>
          <th class="order">OTHER NAMES</th>
        <th>Registration number</th>
          <th>Programme</th>
        <th>Percentage</th>
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
    print('<tr><td class="counterCell">.</td>'.'<td>'.$surname.'</td><td>'.$other_names.'</td><td>'.$val['reg_no'].'</td><td>'.$val['program'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');


//       print('<tr><td class="counterCell">.</td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

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





  <form action="{{route('classpdf2')}} " class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="prog" value="{{$_GET['prog']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="input_name" value="{{$_GET['input_name']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>


  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

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


    function validatePercentage(){
        var percentage=document.getElementById("percent").value;

        if(percentage <=0 || percentage>100){

            document.getElementById("messagePercentage").style.backgroundColor ='#ccd8e263';
            document.getElementById("messagePercentage").style.color ='red';
            document.getElementById("messagePercentage").innerHTML ='Invalid input';
            document.getElementById("percent_btn").disabled=true;


        }

        else{
            document.getElementById("messagePercentage").innerHTML ='';
            document.getElementById("percent_btn").disabled=false;
            document.getElementById("messagePercentage").style.backgroundColor ='';
        }

    }






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

<script type="text/javascript">
 $(document).ready(function() {
// $('tr').each(
     // $('tr').each(
     //     function(){
     //         $(this).find('td:gt(11)').hide();
     //     });
//puprpose test
     $("#sorter2").tablesorter();



  // console.log(x);
    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

    var table = $('#mytableOneCourse').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );


     var table = $('#mytableDetailedinstructor').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedinstructor2').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedinstructor3').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedinstructor4').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedinstructor5').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedtech1').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedtech2').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );

     var table = $('#mytableDetailedtech3').DataTable( {
         dom: '<"top"fl>rt<"bottom"pi>'
     } );


});

</script>

@endsection
