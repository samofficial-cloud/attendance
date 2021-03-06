@extends('layouts.app')

@section('title')
  TIMETABLE
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


<?php

  use App\timetable;
  $timetabled1 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled2 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled3 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled4 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled5 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled6 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled7 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled8 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled9 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled10 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabledC = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabledA = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabledB = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','19:00')
       ->get();
  

  $timetabled11 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled12 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled13 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled14 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled15 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled16 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled17 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled18 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled19 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled110 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled111 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled112 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled113 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','19:00')
       ->get();



       $timetabled21 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled22 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled23 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled24 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled25 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled26 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled27 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled28 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled29 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled210 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled211 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled212 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled213 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','19:00')
       ->get();



       $timetabled31 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled32 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled33 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled34 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled35 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled36 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled37 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled38 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled39 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled310 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled311 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled312 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled313 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','19:00')
       ->get();


       $timetabled41 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled42 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled43 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled44 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled45 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled46 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled47 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled48 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled49 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled410 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled411 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled412= timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled413 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','19:00')
       ->get();


       Use App\program;
       $full= program::select('full')->where('initial',$_GET['rid'])->value('full');


  ?> 

  <br>
<div class="container2">
  <div class="row2">
<div class="col-2 bg-light rounded">
<div class="card bg-light border-info">
  <div class="card-body">
    <h5 class="card-title"><b>ROOMS</b></h5>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/room?rid=B201" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/room?rid=B202" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/room?rid=B203" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/room?rid=B204" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/room?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/room?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/room?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/room?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/room?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/room?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/room?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/room?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
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
<br>
 <h5><b>PROGRAM</b></h5>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/programme?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/programme?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/programme?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/programme?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/programme?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/programme?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/programme?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/programme?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/programme?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/programme?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/programme?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/programme?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/programme?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/programme?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/programme?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/programme?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>
<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/programme?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/programme?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/programme?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/programme?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/programme?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

</div>
</div>

</div>

<style>
table {
  border: 3px solid black;
  width: 100%;
  font-family: "Times New Roman", Times, serif;
}

td {
  height: 70px;
  /*background-color: #e3f2fd;*/
  font-family: "Times New Roman", Times, serif;
  font-style: normal;
    font-weight: bold;
     border: 1px solid black
}
</style>


<div class="col-10 bg-light rounded">
  <div class="card hero-image border-info">
  <div class="card-body">

    {{-- <h5 class="card-title"><b>PROGRAM:{{$full}}</b></h5> --}}
    

<div style="color: #29234a"><H1><CENTER>{{$full}} Timetable</CENTER></H1></div>
<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5">
<th align="center"></th>
 <th>7:00-8:00</th>
 <th>8:00-9:00</th>
 <th>9:00-10:00</th>
 <th>10:00-11:00</th>
 <th>11:00-12:00</th>
 <th>12:00-13:00</th>
 <th>13:00-14:00</th>
 <th>14:00-15:00</th>
 <th>15:00-16:00</th>
   <th>16:00-17:00</th>
     <th>17:00-18:00</th>
       <th>18:00-19:00</th>
         <th>19:00-20:00</th>
</tr>


<tr align="center">

 <th  style="background-color:#f79d45">M<br>O<br>N</th>
@if(count($timetabled1)==0)
<td></td>
@else
  @foreach ($timetabled1 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled2)==0)
<td></td>
@else
  @foreach ($timetabled2 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled3)==0)
<td></td>
@else
  @foreach ($timetabled3 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled4)==0)
<td></td>
@else
  @foreach ($timetabled4 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif



  @if(count($timetabled5)==0)
<td></td>
@else
  @foreach ($timetabled5 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled6)==0)
<td></td>
@else
 @foreach ($timetabled6 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled7)==0)
<td></td>
@else
  @foreach ($timetabled7 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled8)==0)
<td></td>
@else
  @foreach ($timetabled8 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled9)==0)
<td></td>
@else
  @foreach ($timetabled9 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled10)==0)
<td></td>
@else
  @foreach ($timetabled10 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabledC)==0)
<td></td>
@else
  @foreach ($timetabledC as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabledA)==0)
<td></td>
@else
  @foreach ($timetabledA as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabledB)==0)
<td></td>
@else
  @foreach ($timetabledB as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>

<tr align="center">

 <th style="background-color:#88eab2">T<br>U<br>E</th>
@if(count($timetabled11)==0)
<td></td>
@else
  @foreach ($timetabled11 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled12)==0)
<td></td>
@else
  @foreach ($timetabled12 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled13)==0)
<td></td>
@else
  @foreach ($timetabled13 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled14)==0)
<td></td>
@else
  @foreach ($timetabled14 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled15)==0)
<td></td>
@else
  @foreach ($timetabled15 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled16)==0)
<td></td>
@else
  @foreach ($timetabled16 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled17)==0)
<td></td>
@else
  @foreach ($timetabled17 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled18)==0)
<td></td>
@else
  @foreach ($timetabled18 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled19)==0)
<td></td>
@else
  @foreach ($timetabled19 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled110)==0)
<td></td>
@else
  @foreach ($timetabled110 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled111)==0)
<td></td>
@else
  @foreach ($timetabled111 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled112)==0)
<td></td>
@else
  @foreach ($timetabled112 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled113)==0)
<td></td>
@else
  @foreach ($timetabled113 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>

<tr align="center">

 <th style="background-color:#ef6c68">W<br>E<br>D</th>
@if(count($timetabled21)==0)
<td></td>
@else
  @foreach ($timetabled21 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled22)==0)
<td></td>
@else
  @foreach ($timetabled22 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled23)==0)
<td></td>
@else
  @foreach ($timetabled23 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled24)==0)
<td></td>
@else
  @foreach ($timetabled24 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled25)==0)
<td></td>
@else
  @foreach ($timetabled25 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled26)==0)
<td></td>
@else
  @foreach ($timetabled26 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled27)==0)
<td></td>
@else
  @foreach ($timetabled27 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled28)==0)
<td></td>
@else
  @foreach ($timetabled28 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled29)==0)
<td></td>
@else
  @foreach ($timetabled29 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled210)==0)
<td></td>
@else
  @foreach ($timetabled210 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled211)==0)
<td></td>
@else
  @foreach ($timetabled211 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled212)==0)
<td></td>
@else
  @foreach ($timetabled212 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled213)==0)
<td></td>
@else
  @foreach ($timetabled213 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>


<tr align="center">

 <th style="background-color:#b5f66d">T<br>H<br>U<br>R</th>
@if(count($timetabled31)==0)
<td></td>
@else
  @foreach ($timetabled31 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled32)==0)
<td></td>
@else
  @foreach ($timetabled32 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled33)==0)
<td></td>
@else
  @foreach ($timetabled33 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled34)==0)
<td></td>
@else
  @foreach ($timetabled34 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled35)==0)
<td></td>
@else
  @foreach ($timetabled35 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled36)==0)
<td></td>
@else
  @foreach ($timetabled36 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled37)==0)
<td></td>
@else
  @foreach ($timetabled37 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled38)==0)
<td></td>
@else
  @foreach ($timetabled38 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled39)==0)
<td></td>
@else
  @foreach ($timetabled39 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled310)==0)
<td></td>
@else
  @foreach ($timetabled310 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled311)==0)
<td></td>
@else
  @foreach ($timetabled311 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled312)==0)
<td></td>
@else
  @foreach ($timetabled312 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled313)==0)
<td></td>
@else
  @foreach ($timetabled313 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>


<tr align="center">

 <th style="background-color:#ffed4a">F<br>R<br>I</th>
@if(count($timetabled41)==0)
<td></td>
@else
  @foreach ($timetabled41 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled42)==0)
<td></td>
@else
  @foreach ($timetabled42 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled43)==0)
<td></td>
@else
  @foreach ($timetabled43 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled44)==0)
<td></td>
@else
  @foreach ($timetabled44 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled45)==0)
<td></td>
@else
  @foreach ($timetabled45 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled46)==0)
<td></td>
@else
  @foreach ($timetabled46 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled47)==0)
<td></td>
@else
  @foreach ($timetabled47 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled48)==0)
<td></td>
@else
  @foreach ($timetabled48 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled49)==0)
<td></td>
@else
  @foreach ($timetabled49 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled410)==0)
<td></td>
@else
  @foreach ($timetabled410 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled411)==0)
<td></td>
@else
  @foreach ($timetabled411 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled412)==0)
<td></td>
@else
  @foreach ($timetabled412 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled413)==0)
<td></td>
@else
  @foreach ($timetabled413 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif
</tr>

</table>


    

</div>
</div>
<br>
 <form action="{{route('programpdf')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 
    <input type="text" class="form-control" id="rid" name="rid" value="{{$_GET['rid']}}" hidden>
    <center><button class="btn btn-success" type="submit">Print</button></center>
     </form>
</div>
</div>
</div>



@endsection