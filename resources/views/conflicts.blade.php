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
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
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
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
$i='1';
$program=array('ESC1','ESC2','ESC3','TE1','TE2','TE3','TE4','CS1(in)','CS2(in)','CS3(in)','CS1(with)','CS2(with)','CS3(with)','CEIT1','CEIT2','CEIT3','CEIT4','BIT1','BIT2','BIT3','EE1','EE2','EE3','EE4');
use App\exam;
for($a=0; $a<count($program);$a++){
      $course[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course1[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course2[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course3[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course4[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course5[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course6[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course7[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course8[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course9[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course10[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course11[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course12[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course13[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course14[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $courseA[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course21[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course22[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course23[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course24[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course25[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course26[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course27[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course28[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course29[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course210[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course211[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course212[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course213[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course214[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:00')
       ->get();   
}







?>

<div class="container2">
  <div class="row2">
    <div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title"><b>Lectures</b></h5>
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/update?rid=B101" class="list-group-item list-group-item-action dropdown-item">B101</a>
     <a href="/update?rid=B102" class="list-group-item list-group-item-action dropdown-item">B102</a>
    <a href="/update?rid=B103" class="list-group-item list-group-item-action dropdown-item">B103</a>
    <a href="/update?rid=B104" class="list-group-item list-group-item-action dropdown-item">B104</a>
    <a href="/update?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/update?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/update?rid=B201" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/update?rid=B202" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/update?rid=B203" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/update?rid=B204" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/update?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/update?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/update?rid=B207" class="list-group-item list-group-item-action dropdown-item">B207</a>
    <a href="/update?rid=B208" class="list-group-item list-group-item-action dropdown-item">B208</a>
    <a href="/update?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/update?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/update?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/update?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/update?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/update?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/update?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/update?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
    
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
<h5><b>Examinations</b></h5>
<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examupdate?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/examupdate?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/examupdate?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/examupdate?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/examupdate?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/examupdate?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/examupdate?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/examupdate?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/examupdate?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/examupdate?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/examupdate?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/examupdate?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
    
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
<a class="btn btn-light" href="/LectureConflicts" role="button" style="background-color: #d6d6d6; width: 84%"> <b>Lecture Collisions</b></a>
<br>
<br>
<a class="btn btn-light" href="/conflicts" role="button" style="background-color: #d6d6d6; width: 84%"> <b>Exam Collisions</b></a>
<br>
<br>
<a class="btn btn-light" href="/VenueCapacity" role="button" style="background-color: #d6d6d6; width: 84%"> <b>Room capacity</b></a>


</div>

</div>

</div>
    <div class="col-10">
  <h3><font color="red">EXAMINATION COLLISIONS</font></h3>
  @for($x=0; $x<count($course);$x++)
  @if(count($course[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course[$x][$c]->program}}</td>
             <td>{{$course[$x][$c]->course}}</td>
             <td>{{$course[$x][$c]->venue}}</td>
             <td>{{ $course[$x][$c]->day }}</td>
             <td>{{$course[$x][$c]->fromTime}}</td>
            <td>{{ $course[$x][$c]->toTime }}</td>
            <td>{{ $course[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
      @endfor
      </tbody>
    </table>
@endif
@endfor


 @for($x=0; $x<count($course1);$x++)
  @if(count($course1[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course1[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course1[$x][$c]->program}}</td>
             <td>{{$course1[$x][$c]->course}}</td>
             <td>{{$course1[$x][$c]->venue}}</td>
             <td>{{ $course1[$x][$c]->day }}</td>
             <td>{{$course1[$x][$c]->fromTime}}</td>
            <td>{{ $course1[$x][$c]->toTime }}</td>
             <td>{{ $course1[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course2);$x++)
  @if(count($course2[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course2[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course2[$x][$c]->program}}</td>
             <td>{{$course2[$x][$c]->course}}</td>
             <td>{{$course2[$x][$c]->venue}}</td>
             <td>{{ $course2[$x][$c]->day }}</td>
             <td>{{$course2[$x][$c]->fromTime}}</td>
            <td>{{ $course2[$x][$c]->toTime }}</td>
             <td>{{ $course2[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course3);$x++)
  @if(count($course3[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course3[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course3[$x][$c]->program}}</td>
             <td>{{$course3[$x][$c]->course}}</td>
             <td>{{$course3[$x][$c]->venue}}</td>
             <td>{{ $course3[$x][$c]->day }}</td>
             <td>{{$course3[$x][$c]->fromTime}}</td>
            <td>{{ $course3[$x][$c]->toTime }}</td>
            <td>{{ $course3[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course4);$x++)
  @if(count($course4[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course4[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course4[$x][$c]->program}}</td>
             <td>{{$course4[$x][$c]->course}}</td>
             <td>{{$course4[$x][$c]->venue}}</td>
             <td>{{ $course4[$x][$c]->day }}</td>
             <td>{{$course4[$x][$c]->fromTime}}</td>
            <td>{{ $course4[$x][$c]->toTime }}</td>
            <td>{{ $course4[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course5);$x++)
  @if(count($course5[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course5[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course5[$x][$c]->program}}</td>
             <td>{{$course5[$x][$c]->course}}</td>
             <td>{{$course5[$x][$c]->venue}}</td>
             <td>{{ $course5[$x][$c]->day }}</td>
             <td>{{$course5[$x][$c]->fromTime}}</td>
            <td>{{ $course5[$x][$c]->toTime }}</td>
            <td>{{ $course5[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course6);$x++)
  @if(count($course6[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course6[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course6[$x][$c]->program}}</td>
             <td>{{$course6[$x][$c]->course}}</td>
             <td>{{$course6[$x][$c]->venue}}</td>
             <td>{{ $course6[$x][$c]->day }}</td>
             <td>{{$course6[$x][$c]->fromTime}}</td>
            <td>{{ $course6[$x][$c]->toTime }}</td>
            <td>{{ $course6[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course7);$x++)
  @if(count($course7[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course7[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course7[$x][$c]->program}}</td>
             <td>{{$course7[$x][$c]->course}}</td>
             <td>{{$course7[$x][$c]->venue}}</td>
             <td>{{ $course7[$x][$c]->day }}</td>
             <td>{{$course7[$x][$c]->fromTime}}</td>
            <td>{{ $course7[$x][$c]->toTime }}</td>
            <td>{{ $course7[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course8);$x++)
  @if(count($course8[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course8[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course8[$x][$c]->program}}</td>
             <td>{{$course8[$x][$c]->course}}</td>
             <td>{{$course8[$x][$c]->venue}}</td>
             <td>{{ $course8[$x][$c]->day }}</td>
             <td>{{$course8[$x][$c]->fromTime}}</td>
            <td>{{ $course8[$x][$c]->toTime }}</td>
            <td>{{ $course8[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course9);$x++)
  @if(count($course9[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course9[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course9[$x][$c]->program}}</td>
             <td>{{$course9[$x][$c]->course}}</td>
             <td>{{$course9[$x][$c]->venue}}</td>
             <td>{{ $course9[$x][$c]->day }}</td>
             <td>{{$course9[$x][$c]->fromTime}}</td>
            <td>{{ $course9[$x][$c]->toTime }}</td>
            <td>{{ $course9[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course10);$x++)
  @if(count($course10[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course10[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course10[$x][$c]->program}}</td>
             <td>{{$course10[$x][$c]->course}}</td>
             <td>{{$course10[$x][$c]->venue}}</td>
             <td>{{ $course10[$x][$c]->day }}</td>
             <td>{{$course10[$x][$c]->fromTime}}</td>
            <td>{{ $course10[$x][$c]->toTime }}</td>
            <td>{{ $course10[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course11);$x++)
  @if(count($course11[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course11[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course11[$x][$c]->program}}</td>
             <td>{{$course11[$x][$c]->course}}</td>
             <td>{{$course11[$x][$c]->venue}}</td>
             <td>{{ $course11[$x][$c]->day }}</td>
             <td>{{$course11[$x][$c]->fromTime}}</td>
            <td>{{ $course11[$x][$c]->toTime }}</td>
            <td>{{ $course11[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course12);$x++)
  @if(count($course12[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course12[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course12[$x][$c]->program}}</td>
             <td>{{$course12[$x][$c]->course}}</td>
             <td>{{$course12[$x][$c]->venue}}</td>
             <td>{{ $course12[$x][$c]->day }}</td>
             <td>{{$course12[$x][$c]->fromTime}}</td>
            <td>{{ $course12[$x][$c]->toTime }}</td>
            <td>{{ $course12[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course13);$x++)
  @if(count($course13[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course13[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course13[$x][$c]->program}}</td>
             <td>{{$course13[$x][$c]->course}}</td>
             <td>{{$course13[$x][$c]->venue}}</td>
             <td>{{ $course13[$x][$c]->day }}</td>
             <td>{{$course13[$x][$c]->fromTime}}</td>
            <td>{{ $course13[$x][$c]->toTime }}</td>
            <td>{{ $course13[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course14);$x++)
  @if(count($course14[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course14[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course14[$x][$c]->program}}</td>
             <td>{{$course14[$x][$c]->course}}</td>
             <td>{{$course14[$x][$c]->venue}}</td>
             <td>{{ $course14[$x][$c]->day }}</td>
             <td>{{$course14[$x][$c]->fromTime}}</td>
            <td>{{ $course14[$x][$c]->toTime }}</td>
            <td>{{ $course14[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($courseA);$x++)
  @if(count($courseA[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseA[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $courseA[$x][$c]->program}}</td>
             <td>{{$courseA[$x][$c]->course}}</td>
             <td>{{$courseA[$x][$c]->venue}}</td>
             <td>{{ $courseA[$x][$c]->day }}</td>
             <td>{{$courseA[$x][$c]->fromTime}}</td>
            <td>{{ $courseA[$x][$c]->toTime }}</td>
            <td>{{ $courseA[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


 @for($x=0; $x<count($course21);$x++)
  @if(count($course21[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course21[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course21[$x][$c]->program}}</td>
             <td>{{$course21[$x][$c]->course}}</td>
             <td>{{$course21[$x][$c]->venue}}</td>
             <td>{{ $course21[$x][$c]->day }}</td>
             <td>{{$course21[$x][$c]->fromTime}}</td>
            <td>{{ $course21[$x][$c]->toTime }}</td>
            <td>{{ $course21[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course22);$x++)
  @if(count($course22[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course22[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course22[$x][$c]->program}}</td>
             <td>{{$course22[$x][$c]->course}}</td>
             <td>{{$course22[$x][$c]->venue}}</td>
             <td>{{ $course22[$x][$c]->day }}</td>
             <td>{{$course22[$x][$c]->fromTime}}</td>
            <td>{{ $course22[$x][$c]->toTime }}</td>
            <td>{{ $course22[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course23);$x++)
  @if(count($course23[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course23[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course23[$x][$c]->program}}</td>
             <td>{{$course23[$x][$c]->course}}</td>
             <td>{{$course23[$x][$c]->venue}}</td>
             <td>{{ $course23[$x][$c]->day }}</td>
             <td>{{$course23[$x][$c]->fromTime}}</td>
            <td>{{ $course23[$x][$c]->toTime }}</td>
            <td>{{ $course23[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course24);$x++)
  @if(count($course24[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course24[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course24[$x][$c]->program}}</td>
             <td>{{$course24[$x][$c]->course}}</td>
             <td>{{$course24[$x][$c]->venue}}</td>
             <td>{{ $course24[$x][$c]->day }}</td>
             <td>{{$course24[$x][$c]->fromTime}}</td>
            <td>{{ $course24[$x][$c]->toTime }}</td>
            <td>{{ $course24[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course25);$x++)
  @if(count($course25[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course25[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course25[$x][$c]->program}}</td>
             <td>{{$course25[$x][$c]->course}}</td>
             <td>{{$course25[$x][$c]->venue}}</td>
             <td>{{ $course25[$x][$c]->day }}</td>
             <td>{{$course25[$x][$c]->fromTime}}</td>
            <td>{{ $course25[$x][$c]->toTime }}</td>
            <td>{{ $course25[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course26);$x++)
  @if(count($course26[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course26[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course26[$x][$c]->program}}</td>
             <td>{{$course26[$x][$c]->course}}</td>
             <td>{{$course26[$x][$c]->venue}}</td>
             <td>{{ $course26[$x][$c]->day }}</td>
             <td>{{$course26[$x][$c]->fromTime}}</td>
            <td>{{ $course26[$x][$c]->toTime }}</td>
            <td>{{ $course26[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course27);$x++)
  @if(count($course27[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course27[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course27[$x][$c]->program}}</td>
             <td>{{$course27[$x][$c]->course}}</td>
             <td>{{$course27[$x][$c]->venue}}</td>
             <td>{{ $course27[$x][$c]->day }}</td>
             <td>{{$course27[$x][$c]->fromTime}}</td>
            <td>{{ $course27[$x][$c]->toTime }}</td>
            <td>{{ $course27[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course28);$x++)
  @if(count($course28[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course28[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course28[$x][$c]->program}}</td>
             <td>{{$course28[$x][$c]->course}}</td>
             <td>{{$course28[$x][$c]->venue}}</td>
             <td>{{ $course28[$x][$c]->day }}</td>
             <td>{{$course28[$x][$c]->fromTime}}</td>
            <td>{{ $course28[$x][$c]->toTime }}</td>
            <td>{{ $course28[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course29);$x++)
  @if(count($course29[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course29[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course29[$x][$c]->program}}</td>
             <td>{{$course29[$x][$c]->course}}</td>
             <td>{{$course29[$x][$c]->venue}}</td>
             <td>{{ $course29[$x][$c]->day }}</td>
             <td>{{$course29[$x][$c]->fromTime}}</td>
            <td>{{ $course29[$x][$c]->toTime }}</td>
            <td>{{ $course29[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course210);$x++)
  @if(count($course210[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course210[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course210[$x][$c]->program}}</td>
             <td>{{$course210[$x][$c]->course}}</td>
             <td>{{$course210[$x][$c]->venue}}</td>
             <td>{{ $course210[$x][$c]->day }}</td>
             <td>{{$course210[$x][$c]->fromTime}}</td>
            <td>{{ $course210[$x][$c]->toTime }}</td>
            <td>{{ $course210[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course211);$x++)
  @if(count($course211[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course211[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course211[$x][$c]->program}}</td>
             <td>{{$course211[$x][$c]->course}}</td>
             <td>{{$course211[$x][$c]->venue}}</td>
             <td>{{ $course211[$x][$c]->day }}</td>
             <td>{{$course211[$x][$c]->fromTime}}</td>
            <td>{{ $course211[$x][$c]->toTime }}</td>
            <td>{{ $course211[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course212);$x++)
  @if(count($course212[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course212[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course212[$x][$c]->program}}</td>
             <td>{{$course212[$x][$c]->course}}</td>
             <td>{{$course212[$x][$c]->venue}}</td>
             <td>{{ $course212[$x][$c]->day }}</td>
             <td>{{$course212[$x][$c]->fromTime}}</td>
            <td>{{ $course212[$x][$c]->toTime }}</td>
            <td>{{ $course212[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course213);$x++)
  @if(count($course213[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course213[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course213[$x][$c]->program}}</td>
             <td>{{$course213[$x][$c]->course}}</td>
             <td>{{$course213[$x][$c]->venue}}</td>
             <td>{{ $course213[$x][$c]->day }}</td>
             <td>{{$course213[$x][$c]->fromTime}}</td>
            <td>{{ $course213[$x][$c]->toTime }}</td>
            <td>{{ $course213[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course214);$x++)
  @if(count($course214[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">S/N</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course214[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}.</th>
             <td>{{ $course214[$x][$c]->program}}</td>
             <td>{{$course214[$x][$c]->course}}</td>
             <td>{{$course214[$x][$c]->venue}}</td>
             <td>{{ $course214[$x][$c]->day }}</td>
             <td>{{$course214[$x][$c]->fromTime}}</td>
            <td>{{ $course214[$x][$c]->toTime }}</td>
            <td>{{ $course214[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor



</div>
</div>
</div>





@endsection