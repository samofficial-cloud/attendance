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
   <a class="nav-link " style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link " style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link " style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link " style="color:#060606"href="/">HOME</a>
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
@elseif(Auth::user()->admin==1)
<div class="container">
  <ul class="nav1 nav-tabs">
  <li class="nav-item">
   <a class="nav-link " style="color:#060606"href="/">HOME</a>
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
                    <p class="note"> Class attendance report for {{strtoupper($_GET['course_id'])}}({{$course_name}}) </p>

                </legend> </div>

        @else

        @endif


<!-- One student all courses -->
@elseif($_GET['selection']=='All courses')

@if(count($all_courses)>0)
    <div class="col-xs-9"><legend>
      <p class="note">Class attendance report for <b>{{$name}} ({{$reg_no}})</b> </p>
    <h5 class="note">Course(s): All </h5>
    </legend> </div>

    @else

    @endif

<!-- All students for a particular course -->
@elseif ($_GET['category']== 1)


@if(count($all_students)>0)
    <div class="col-xs-9"><legend>
      <p class="note">Class attendance report for all students </p>
    <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}}</h5>
    </legend> </div>

    @else

    @endif


<!-- Last case -->
@else
@if(!empty($name))
<div class="col-xs-9"><legend>
  <p class="note"> Class attendance report for {{$name}} ({{$reg_no}}) </p>
<h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
</legend> </div>
  @else

  @endif
@endif



<!-- Show also invalid cases -->
    @if(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

        <div class="col-xs-6">
            @if(count($dataSingle_all)>0)
                <div class="col-xs-9"><legend>
                        <p class="note"> Class attendance report for <b>{{$name}} ({{$reg_no}})</b> </p>
                        <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}}</h5>
                    </legend> </div>

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








<!-- Show also invalid cases staff -->
@elseif(!empty($_GET['checkbox']))

    <!-- instructor -->

            <div class="col-xs-6">
            @if(count($instructor_data)>0)
                    <div class="col-xs-9"><legend>
                            <p class="note">Instructor:  {{$instructor}} ({{$instructor_reg}}) </p>

                        </legend> </div>
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

  @endif
</div>

        <!-- instructor2 -->
        <div class="col-xs-6">
            @if(count($instructor2_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Instructor:  {{$instructor_2}} ({{$instructor2_reg}}) </p>

                    </legend> </div>
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

            @endif
        </div>


        <!-- instructor3 -->
        <div class="col-xs-6">
            @if(count($instructor3_data)>0)


                <div class="col-xs-9"><legend>
                        <p class="note">Instructor:  {{$instructor_3}} ({{$instructor3_reg}}) </p>
                    </legend> </div>
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

            @endif
        </div>

        <!-- instructor4 -->
        <div class="col-xs-6">
            @if(count($instructor4_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Instructor:  {{$instructor_4}} ({{$instructor4_reg}})</p>
                    </legend> </div>
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

            @endif
        </div>


        <!-- instructor5 -->
        <div class="col-xs-6">
            @if(count($instructor5_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Instructor:  {{$instructor_5}} ({{$instructor5_reg}})</p>
                    </legend> </div>
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

            @endif
        </div>


        <!-- Tutorial_assistant -->
        <div class="col-xs-6">
            @if(count($Tutorial_Assistant_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Tutorial Assistant:  {{$Tutorial_Assistant}} ({{ $Tutorial_Assistant_reg}})</p>
                    </legend> </div>
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

            @endif
        </div>

        <!-- technical_staff -->
        <div class="col-xs-6">
            @if(count($technical_staff_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Technical staff:  {{$technical_staff}} ({{ $technical_staff_reg}})</p>
                    </legend> </div>
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

            @endif
        </div>


        <!-- Techinal_staff 2 -->
        <div class="col-xs-6">
            @if(count($Technical_Staff_2_data)>0)

                <div class="col-xs-9"><legend>
                        <p class="note">Technical staff:  {{$Technical_Staff_2}} ({{ $Technical_Staff_2_reg}})</p>
                    </legend> </div>
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

            @endif
        </div>


        <!-- Technical staff3 -->
        <div class="col-xs-6">
            @if(count($Technical_Staff_3_data)>0)
                <div class="col-xs-9"><legend>
                        <p class="note">Technical staff:  {{$Technical_Staff_3}} ({{ $Technical_Staff_3_reg}})</p>
                    </legend> </div>
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
  <br>

  <!-- <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form> -->


  @else
  <h4>No data to display</h4>
  @endif
</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <br>
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

<div class="col-xs-6">
  @if(count($all_students)>0)
  <br>
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
  
  
  // console.log(x);
    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});

</script>

@endsection
