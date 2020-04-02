@extends('layouts.app')

@section('title')
  UE TIMETABLE
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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

<?php
Use App\exam;
 $exams = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();


       $exams1 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();

       $exams2 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();

       $exams3 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();

       $exams4 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();

       $exams5 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();

       $exams6 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();

        $exams7 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();

        $exams8 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();

        $exams9 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();

        $examsA = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();

        $examsB = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();

        $examsC = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();

        $examsD = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();

        $examsE = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:00')
       ->get();

        $exams11 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();


       $exams21 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();

       $exams22 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();

       $exams23 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();

       $exams24 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();

       $exams25 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();

       $exams26 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();

        $exams27 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();

        $exams28 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();

        $exams29 = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();

        $exams2A = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();

        $exams2B = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();

        $exams2C = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();

        $exams2D = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();

        $exams2E = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['cid'])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:00')
       ->get();

use App\program;
$full=program::select('full')->where('initial',$_GET['cid'])->value('full');


?>



<div class="container2">
  <div class="row2">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title"><b>ROOMS</b></h5>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/exam?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/exam?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/exam?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/exam?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/exam?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/exam?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/exam?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/exam?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/exam?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/exam?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/exam?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/exam?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
    
  </div>
</div>


 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK C
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">C02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C10</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK D
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">D02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D10</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D11</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D12</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D13</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D14</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D15</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D16</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D17</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D18</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D19</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D20</a>
  </div>
</div>
<br>
<br>
<h5><b>PROGRAM</b></h5>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examcourse?cid=CS1" class="list-group-item list-group-item-action dropdown-item">CS1</a>
     <a href="/examcourse?cid=CS2" class="list-group-item list-group-item-action dropdown-item">CS2</a>
    <a href="/examcourse?cid=CS3" class="list-group-item list-group-item-action dropdown-item">CS3</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examcourse?cid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/examcourse?cid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/examcourse?cid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/examcourse?cid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examcourse?cid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/examcourse?cid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/examcourse?cid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    C-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examcourse?cid=CIT1" class="list-group-item list-group-item-action dropdown-item">C-IT1</a>
     <a href="/examcourse?cid=CIT2" class="list-group-item list-group-item-action dropdown-item">C-IT2</a>
    <a href="/examcourse?cid=CIT3" class="list-group-item list-group-item-action dropdown-item">C-IT3</a>
    <a href="/examcourse?cid=CIT4" class="list-group-item list-group-item-action dropdown-item">C-IT4</a>
</div>
</div>

<br>
<br>
<a class="btn btn-light" href="/timetable" role="button" style="background-color: #d6d6d6;"> <b>Lectures</b></a>


</div>

</div>

</div>

<div class="col-10">
  <div class="card hero-image border-info">
  <div class="card-body">
    <div style="color: #29234a"><H1><CENTER><b>UNIVERSITY EXAMINATION TIMETABLE</b></CENTER></H1></div>
    <h3 class="card-title"><center><b>Program: {{ $full }}</b></center></h3>


<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5" align="center">
<th align="center" style="width: 10%;">WK16</th>
 <th >7:00-10:30</th>
 <th>11:00-14:30</th>
 <th>15:00-18:30</th>
</tr>


<tr align="center">
 <th  style="background-color:#f79d45">MON<br>17/02/2020</th>
 @if(count($exams)== 0)
 <td></td>
 @else
 @foreach($exams as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams1)== 0)
 <td></td>
 @else
 @foreach($exams1 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams2)== 0)
 <td></td>
 @else
 @foreach($exams2 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
</tr>

<tr align="center">
  <th style="background-color:#88eab2">TUE<br>18/02/2020</th>
   @if(count($exams3)== 0)
 <td></td>
 @else
 @foreach($exams3 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams4)== 0)
 <td></td>
 @else
 @foreach($exams4 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams5)== 0)
 <td></td>
 @else
 @foreach($exams5 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

</tr>

<tr align="center">
  <th style="background-color:#ef6c68">WED<br>19/02/2020</th>
   @if(count($exams6)== 0)
 <td></td>
 @else
 @foreach($exams6 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams7)== 0)
 <td></td>
 @else
 @foreach($exams7 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams8)== 0)
 <td></td>
 @else
 @foreach($exams8 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
</tr>

<tr align="center">
  <th style="background-color:#b5f66d">THUR<br>20/02/2020</th>
  @if(count($exams9)== 0)
 <td></td>
 @else
 @foreach($exams9 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
  
  @if(count($examsA)== 0)
 <td></td>
 @else
 @foreach($examsA as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($examsB)== 0)
 <td></td>
 @else
 @foreach($examsB as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

</tr>


<tr align="center">
  <th style="background-color:#ffed4a">FRI<br>21/02/2020</th>
  @if(count($examsC)== 0)
 <td></td>
 @else
 @foreach($examsC as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($examsD)== 0)
 <td></td>
 @else
 @foreach($examsD as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($examsE)== 0)
 <td></td>
 @else
 @foreach($examsE as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
  
</tr>







</table>

<br>
<br>

<table border="4" cellspacing="3" align="center" id="tid">

<tr style="background-color:#afbbc5" align="center">
<th align="center" style="width: 10%;">WK17</th>
 <th >7:00-10:30</th>
 <th>11:00-14:30</th>
 <th>15:00-18:30</th>
</tr>


<tr align="center">
 <th  style="background-color:#f79d45">MON<br>24/02/2020</th>
 @if(count($exams11)== 0)
 <td></td>
 @else
 @foreach($exams11 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams21)== 0)
 <td></td>
 @else
 @foreach($exams21 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams22)== 0)
 <td></td>
 @else
 @foreach($exams22 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
</tr>

<tr align="center">
  <th style="background-color:#88eab2">TUE<br>25/02/2020</th>
   @if(count($exams23)== 0)
 <td></td>
 @else
 @foreach($exams23 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams24)== 0)
 <td></td>
 @else
 @foreach($exams24 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams25)== 0)
 <td></td>
 @else
 @foreach($exams25 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

</tr>

<tr align="center">
  <th style="background-color:#ef6c68">WED<br>26/02/2020</th>
   @if(count($exams26)== 0)
 <td></td>
 @else
 @foreach($exams26 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams27)== 0)
 <td></td>
 @else
 @foreach($exams27 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

  @if(count($exams28)== 0)
 <td></td>
 @else
 @foreach($exams28 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
</tr>

<tr align="center">
  <th style="background-color:#b5f66d">THUR<br>27/02/2020</th>
  @if(count($exams29)== 0)
 <td></td>
 @else
 @foreach($exams29 as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
  
  @if(count($exams2A)== 0)
 <td></td>
 @else
 @foreach($exams2A as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams2B)== 0)
 <td></td>
 @else
 @foreach($exams2B as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

</tr>


<tr align="center">
  <th style="background-color:#ffed4a">FRI<br>28/02/2020</th>
  @if(count($exams2C)== 0)
 <td></td>
 @else
 @foreach($exams2C as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams2D)== 0)
 <td></td>
 @else
 @foreach($exams2D as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif

 @if(count($exams2E)== 0)
 <td></td>
 @else
 @foreach($exams2E as $exam)
 @if(!is_null($exam->course))
 <td bgcolor="#FFFFFF">{{$exam->venue}}<br>{{$exam->course}}<br><font color="green"> {{$exam->fromTime}}-{{$exam->toTime}}</font></td>
 @else
 <td></td>
 @endif
 @endforeach
 @endif
  
</tr>







</table>
</div>
</div>
</div>
</div>
</div>








@endsection