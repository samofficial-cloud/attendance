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
<br>

<?php
use App\camis_configuration;
$semester=camis_configuration::select('current_semester')->value('current_semester');
  use App\exam;

   $exams=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Monday')
      ->where('exams.day','Monday')
      ->where('exams.venue',$_GET['rid'])
      ->get();


   $exams1=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Monday')
      ->where('exams.day','Monday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams2=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Tuesday')
      ->where('exams.day','Tuesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams3=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Tuesday')
      ->where('exams.day','Tuesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams4=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Wednesday')
      ->where('exams.day','Wednesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams5=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Wednesday')
      ->where('exams.day','Wednesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams6=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Thursday')
      ->where('exams.day','Thursday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams7=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Thursday')
      ->where('exams.day','Thursday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams8=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Friday')
      ->where('exams.day','Friday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams9=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Semester',$semester)
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Friday')
      ->where('exams.day','Friday')
      ->where('exams.venue',$_GET['rid'])
      ->get();
   
  
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


</div>

</div>

</div>

<div class="col-10">
  <div class="card hero-image border-info">
  <div class="card-body">
    <div style="color: #29234a"><H1><CENTER><b>UNIVERSITY EXAMINATION TIMETABLE</b></CENTER></H1></div>
    <h3 class="card-title"><center><b>ROOM NO:{{ $_GET['rid'] }}</b></center></h3>


<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5" align="center">
<th align="center" style="width: 10%;">WK16</th>
 <th >7:00-10:30</th>
 <th>11:00-14:30</th>
 <th>15:00-18:30</th>
</tr>
<tr align="center">
 <th  style="background-color:#f79d45">MON</th>
  @foreach ($exams as $examed)
  @if ($examed->day == 'Monday')
  @if(!is_null($examed->course))
  <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#88eab2">TUE</th>
  @foreach ($exams2 as $examed)
  @if ($examed->day == 'Tuesday')
  @if(!is_null($examed->course))
  <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#ef6c68">WED</th>
  @foreach ($exams4 as $examed)
  @if ($examed->day == 'Wednesday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#b5f66d">THUR</th>
  @foreach ($exams6 as $examed)
  @if ($examed->day == 'Thursday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#ffed4a">FRI</th>
  @foreach ($exams8 as $examed)
  @if ($examed->day == 'Friday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
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
 <th  style="background-color:#f79d45">MON</th>
  @foreach ($exams1 as $examed)
  @if ($examed->day == 'Monday')
  @if(!is_null($examed->course))
  <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#88eab2">TUE</th>
  @foreach ($exams3 as $examed)
  @if ($examed->day == 'Tuesday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#ef6c68">WED</th>
  @foreach ($exams5 as $examed)
  @if ($examed->day == 'Wednesday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#b5f66d">THUR</th>
  @foreach ($exams7 as $examed)
  @if ($examed->day == 'Thursday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>

<tr align="center">
 <th style="background-color:#ffed4a">FRI</th>
  @foreach ($exams9 as $examed)
  @if ($examed->day == 'Friday')
  @if(!is_null($examed->course))
   <td bgcolor="#ffffff"><font color="blue"> {{$examed->fromTime}}-{{$examed->toTime}}</font><br>{{$examed->course}}<br><font color="green"> {{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}</font></td>
  @else
  <td></td>
  @endif
  @endif
  @endforeach
</tr>
</table>
</div>
</div>
</div>
</div>
</div>

@endsection