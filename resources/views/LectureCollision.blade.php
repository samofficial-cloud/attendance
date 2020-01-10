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
  <div class="container">
 <ul class="nav nav-tabs">
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
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</nav>
</div>

<br>

<?php
$i='1';
$program=array('ESC1','ESC2','ESC3','TE1','TE2','TE3','TE4','CS1'.'CS2','CS3','CEIT1','CEIT2','CEIT3','CEIT4','BIT1','BIT2','BIT3' );
use App\timetable;
for($a=0; $a<count($program);$a++){
      $course[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','07:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course1[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','08:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course2[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','09:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course3[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','10:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course4[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','11:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course5[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','12:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course6[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','13:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course7[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','14:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course8[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course9[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','16:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course10[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','17:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course11[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','18:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course12[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','19:00')
       ->get();   
}


for($a=0; $a<count($program);$a++){
      $courseA[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','07:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course21[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','08:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course22[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','09:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course23[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','10:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course24[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','11:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course25[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','12:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course26[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','13:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course27[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','14:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course28[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course29[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','16:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course210[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','17:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course211[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','18:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course212[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','19:00')
       ->get();   
}


for($a=0; $a<count($program);$a++){
      $courseB[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','07:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course31[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','08:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course32[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','09:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course33[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','10:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course34[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','11:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course35[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','12:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course36[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','13:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course37[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','14:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course38[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course39[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','16:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course310[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','17:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course311[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','18:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course312[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','19:00')
       ->get();   
}


for($a=0; $a<count($program);$a++){
      $courseC[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','07:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course41[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','08:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course42[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','09:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course43[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','10:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course44[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','11:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course45[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','12:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course46[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','13:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course47[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','14:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course48[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course49[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','16:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course410[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','17:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course411[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','18:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course412[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','19:00')
       ->get();   
}


for($a=0; $a<count($program);$a++){
      $courseD[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','07:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course51[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','08:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course52[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','09:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course53[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','10:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course54[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','11:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course55[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','12:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course56[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','13:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course57[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','14:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course58[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course59[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','16:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course510[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','17:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course511[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','18:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course512[] =timetable::select ('courses.course', 'timetables.venue', 'timetables.day', 'courses.program','timetables.fromTime','timetables.toTime','courses.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
      ->where ('courses.program' ,$program[$a])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','19:00')
       ->get();   
}


?>

<div class="container">
  <h3><font color="red">LECTURES COLLISIONS</h3>
  @for($x=0; $x<count($course);$x++)
  @if(count($course[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course[$x][$c]->program}}</td>
             <td>{{$course[$x][$c]->course}}</td>
             <td>{{$course[$x][$c]->venue}}</td>
             <td>{{ $course[$x][$c]->day }}</td>
             <td>{{$course[$x][$c]->fromTime}}</td>
            <td>{{ $course[$x][$c]->toTime }}</td>
            <td>{{ $course[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course1[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course1[$x][$c]->program}}</td>
             <td>{{$course1[$x][$c]->course}}</td>
             <td>{{$course1[$x][$c]->venue}}</td>
             <td>{{ $course1[$x][$c]->day }}</td>
             <td>{{$course1[$x][$c]->fromTime}}</td>
            <td>{{ $course1[$x][$c]->toTime }}</td>
            <td>{{ $course1[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course2[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course2[$x][$c]->program}}</td>
             <td>{{$course2[$x][$c]->course}}</td>
             <td>{{$course2[$x][$c]->venue}}</td>
             <td>{{ $course2[$x][$c]->day }}</td>
             <td>{{$course2[$x][$c]->fromTime}}</td>
            <td>{{ $course2[$x][$c]->toTime }}</td>
            <td>{{ $course2[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course3[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course3[$x][$c]->program}}</td>
             <td>{{$course3[$x][$c]->course}}</td>
             <td>{{$course3[$x][$c]->venue}}</td>
             <td>{{ $course3[$x][$c]->day }}</td>
             <td>{{$course3[$x][$c]->fromTime}}</td>
            <td>{{ $course3[$x][$c]->toTime }}</td>
            <td>{{ $course3[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course4[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course4[$x][$c]->program}}</td>
             <td>{{$course4[$x][$c]->course}}</td>
             <td>{{$course4[$x][$c]->venue}}</td>
             <td>{{ $course4[$x][$c]->day }}</td>
             <td>{{$course4[$x][$c]->fromTime}}</td>
            <td>{{ $course4[$x][$c]->toTime }}</td>
            <td>{{ $course4[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course5[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course5[$x][$c]->program}}</td>
             <td>{{$course5[$x][$c]->course}}</td>
             <td>{{$course5[$x][$c]->venue}}</td>
             <td>{{ $course5[$x][$c]->day }}</td>
             <td>{{$course5[$x][$c]->fromTime}}</td>
            <td>{{ $course5[$x][$c]->toTime }}</td>
            <td>{{ $course5[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course6[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course6[$x][$c]->program}}</td>
             <td>{{$course6[$x][$c]->course}}</td>
             <td>{{$course6[$x][$c]->venue}}</td>
             <td>{{ $course6[$x][$c]->day }}</td>
             <td>{{$course6[$x][$c]->fromTime}}</td>
            <td>{{ $course6[$x][$c]->toTime }}</td>
            <td>{{ $course6[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course7[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course7[$x][$c]->program}}</td>
             <td>{{$course7[$x][$c]->course}}</td>
             <td>{{$course7[$x][$c]->venue}}</td>
             <td>{{ $course7[$x][$c]->day }}</td>
             <td>{{$course7[$x][$c]->fromTime}}</td>
            <td>{{ $course7[$x][$c]->toTime }}</td>
            <td>{{ $course7[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course8[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course8[$x][$c]->program}}</td>
             <td>{{$course8[$x][$c]->course}}</td>
             <td>{{$course8[$x][$c]->venue}}</td>
             <td>{{ $course8[$x][$c]->day }}</td>
             <td>{{$course8[$x][$c]->fromTime}}</td>
            <td>{{ $course8[$x][$c]->toTime }}</td>
            <td>{{ $course8[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course9[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course9[$x][$c]->program}}</td>
             <td>{{$course9[$x][$c]->course}}</td>
             <td>{{$course9[$x][$c]->venue}}</td>
             <td>{{ $course9[$x][$c]->day }}</td>
             <td>{{$course9[$x][$c]->fromTime}}</td>
            <td>{{ $course9[$x][$c]->toTime }}</td>
            <td>{{ $course9[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course10[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course10[$x][$c]->program}}</td>
             <td>{{$course10[$x][$c]->course}}</td>
             <td>{{$course10[$x][$c]->venue}}</td>
             <td>{{ $course10[$x][$c]->day }}</td>
             <td>{{$course10[$x][$c]->fromTime}}</td>
            <td>{{ $course10[$x][$c]->toTime }}</td>
            <td>{{ $course10[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course11[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course11[$x][$c]->program}}</td>
             <td>{{$course11[$x][$c]->course}}</td>
             <td>{{$course11[$x][$c]->venue}}</td>
             <td>{{ $course11[$x][$c]->day }}</td>
             <td>{{$course11[$x][$c]->fromTime}}</td>
            <td>{{ $course11[$x][$c]->toTime }}</td>
            <td>{{ $course11[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course12[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course12[$x][$c]->program}}</td>
             <td>{{$course12[$x][$c]->course}}</td>
             <td>{{$course12[$x][$c]->venue}}</td>
             <td>{{ $course12[$x][$c]->day }}</td>
             <td>{{$course12[$x][$c]->fromTime}}</td>
            <td>{{ $course12[$x][$c]->toTime }}</td>
            <td>{{ $course12[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course13[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course13[$x][$c]->program}}</td>
             <td>{{$course13[$x][$c]->course}}</td>
             <td>{{$course13[$x][$c]->venue}}</td>
             <td>{{ $course13[$x][$c]->day }}</td>
             <td>{{$course13[$x][$c]->fromTime}}</td>
            <td>{{ $course13[$x][$c]->toTime }}</td>
            <td>{{ $course13[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseA[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $courseA[$x][$c]->program}}</td>
             <td>{{$courseA[$x][$c]->course}}</td>
             <td>{{$courseA[$x][$c]->venue}}</td>
             <td>{{ $courseA[$x][$c]->day }}</td>
             <td>{{$courseA[$x][$c]->fromTime}}</td>
            <td>{{ $courseA[$x][$c]->toTime }}</td>
            <td>{{ $courseA[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course21[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course21[$x][$c]->program}}</td>
             <td>{{$course21[$x][$c]->course}}</td>
             <td>{{$course21[$x][$c]->venue}}</td>
             <td>{{ $course21[$x][$c]->day }}</td>
             <td>{{$course21[$x][$c]->fromTime}}</td>
            <td>{{ $course21[$x][$c]->toTime }}</td>
            <td>{{ $course21[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course22[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course22[$x][$c]->program}}</td>
             <td>{{$course22[$x][$c]->course}}</td>
             <td>{{$course22[$x][$c]->venue}}</td>
             <td>{{ $course22[$x][$c]->day }}</td>
             <td>{{$course22[$x][$c]->fromTime}}</td>
            <td>{{ $course22[$x][$c]->toTime }}</td>
            <td>{{ $course22[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course23[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course23[$x][$c]->program}}</td>
             <td>{{$course23[$x][$c]->course}}</td>
             <td>{{$course23[$x][$c]->venue}}</td>
             <td>{{ $course23[$x][$c]->day }}</td>
             <td>{{$course23[$x][$c]->fromTime}}</td>
            <td>{{ $course23[$x][$c]->toTime }}</td>
            <td>{{ $course23[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course24[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course24[$x][$c]->program}}</td>
             <td>{{$course24[$x][$c]->course}}</td>
             <td>{{$course24[$x][$c]->venue}}</td>
             <td>{{ $course24[$x][$c]->day }}</td>
             <td>{{$course24[$x][$c]->fromTime}}</td>
            <td>{{ $course24[$x][$c]->toTime }}</td>
            <td>{{ $course24[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course25[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course25[$x][$c]->program}}</td>
             <td>{{$course25[$x][$c]->course}}</td>
             <td>{{$course25[$x][$c]->venue}}</td>
             <td>{{ $course25[$x][$c]->day }}</td>
             <td>{{$course25[$x][$c]->fromTime}}</td>
            <td>{{ $course25[$x][$c]->toTime }}</td>
            <td>{{ $course25[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course26[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course26[$x][$c]->program}}</td>
             <td>{{$course26[$x][$c]->course}}</td>
             <td>{{$course26[$x][$c]->venue}}</td>
             <td>{{ $course26[$x][$c]->day }}</td>
             <td>{{$course26[$x][$c]->fromTime}}</td>
            <td>{{ $course26[$x][$c]->toTime }}</td>
            <td>{{ $course26[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course27[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course27[$x][$c]->program}}</td>
             <td>{{$course27[$x][$c]->course}}</td>
             <td>{{$course27[$x][$c]->venue}}</td>
             <td>{{ $course27[$x][$c]->day }}</td>
             <td>{{$course27[$x][$c]->fromTime}}</td>
            <td>{{ $course27[$x][$c]->toTime }}</td>
            <td>{{ $course27[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course28[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course28[$x][$c]->program}}</td>
             <td>{{$course28[$x][$c]->course}}</td>
             <td>{{$course28[$x][$c]->venue}}</td>
             <td>{{ $course28[$x][$c]->day }}</td>
             <td>{{$course28[$x][$c]->fromTime}}</td>
            <td>{{ $course28[$x][$c]->toTime }}</td>
            <td>{{ $course28[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course29[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course29[$x][$c]->program}}</td>
             <td>{{$course29[$x][$c]->course}}</td>
             <td>{{$course29[$x][$c]->venue}}</td>
             <td>{{ $course29[$x][$c]->day }}</td>
             <td>{{$course29[$x][$c]->fromTime}}</td>
            <td>{{ $course29[$x][$c]->toTime }}</td>
            <td>{{ $course29[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course210[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course210[$x][$c]->program}}</td>
             <td>{{$course210[$x][$c]->course}}</td>
             <td>{{$course210[$x][$c]->venue}}</td>
             <td>{{ $course210[$x][$c]->day }}</td>
             <td>{{$course210[$x][$c]->fromTime}}</td>
            <td>{{ $course210[$x][$c]->toTime }}</td>
            <td>{{ $course210[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course211[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course211[$x][$c]->program}}</td>
             <td>{{$course211[$x][$c]->course}}</td>
             <td>{{$course211[$x][$c]->venue}}</td>
             <td>{{ $course211[$x][$c]->day }}</td>
             <td>{{$course211[$x][$c]->fromTime}}</td>
            <td>{{ $course211[$x][$c]->toTime }}</td>
            <td>{{ $course211[$x][$c]->criteria}}</td>
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
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course212[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course212[$x][$c]->program}}</td>
             <td>{{$course212[$x][$c]->course}}</td>
             <td>{{$course212[$x][$c]->venue}}</td>
             <td>{{ $course212[$x][$c]->day }}</td>
             <td>{{$course212[$x][$c]->fromTime}}</td>
            <td>{{ $course212[$x][$c]->toTime }}</td>
            <td>{{ $course212[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($courseB);$x++)
  @if(count($courseB[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseB[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $courseB[$x][$c]->program}}</td>
             <td>{{$courseB[$x][$c]->course}}</td>
             <td>{{$courseB[$x][$c]->venue}}</td>
             <td>{{ $courseB[$x][$c]->day }}</td>
             <td>{{$courseB[$x][$c]->fromTime}}</td>
            <td>{{ $courseB[$x][$c]->toTime }}</td>
            <td>{{ $courseB[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


 @for($x=0; $x<count($course31);$x++)
  @if(count($course31[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course31[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course31[$x][$c]->program}}</td>
             <td>{{$course31[$x][$c]->course}}</td>
             <td>{{$course31[$x][$c]->venue}}</td>
             <td>{{ $course31[$x][$c]->day }}</td>
             <td>{{$course31[$x][$c]->fromTime}}</td>
            <td>{{ $course31[$x][$c]->toTime }}</td>
            <td>{{ $course31[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course32);$x++)
  @if(count($course32[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course32[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course32[$x][$c]->program}}</td>
             <td>{{$course32[$x][$c]->course}}</td>
             <td>{{$course32[$x][$c]->venue}}</td>
             <td>{{ $course32[$x][$c]->day }}</td>
             <td>{{$course32[$x][$c]->fromTime}}</td>
            <td>{{ $course32[$x][$c]->toTime }}</td>
            <td>{{ $course32[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course33);$x++)
  @if(count($course33[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course33[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course33[$x][$c]->program}}</td>
             <td>{{$course33[$x][$c]->course}}</td>
             <td>{{$course33[$x][$c]->venue}}</td>
             <td>{{ $course33[$x][$c]->day }}</td>
             <td>{{$course33[$x][$c]->fromTime}}</td>
            <td>{{ $course33[$x][$c]->toTime }}</td>
            <td>{{ $course33[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course34);$x++)
  @if(count($course34[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course34[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course34[$x][$c]->program}}</td>
             <td>{{$course34[$x][$c]->course}}</td>
             <td>{{$course34[$x][$c]->venue}}</td>
             <td>{{ $course34[$x][$c]->day }}</td>
             <td>{{$course34[$x][$c]->fromTime}}</td>
            <td>{{ $course34[$x][$c]->toTime }}</td>
            <td>{{ $course34[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course35);$x++)
  @if(count($course35[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course35[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course35[$x][$c]->program}}</td>
             <td>{{$course35[$x][$c]->course}}</td>
             <td>{{$course35[$x][$c]->venue}}</td>
             <td>{{ $course35[$x][$c]->day }}</td>
             <td>{{$course35[$x][$c]->fromTime}}</td>
            <td>{{ $course35[$x][$c]->toTime }}</td>
            <td>{{ $course35[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course36);$x++)
  @if(count($course36[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course36[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course36[$x][$c]->program}}</td>
             <td>{{$course36[$x][$c]->course}}</td>
             <td>{{$course36[$x][$c]->venue}}</td>
             <td>{{ $course36[$x][$c]->day }}</td>
             <td>{{$course36[$x][$c]->fromTime}}</td>
            <td>{{ $course36[$x][$c]->toTime }}</td>
            <td>{{ $course36[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course37);$x++)
  @if(count($course37[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course37[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course37[$x][$c]->program}}</td>
             <td>{{$course37[$x][$c]->course}}</td>
             <td>{{$course37[$x][$c]->venue}}</td>
             <td>{{ $course37[$x][$c]->day }}</td>
             <td>{{$course37[$x][$c]->fromTime}}</td>
            <td>{{ $course37[$x][$c]->toTime }}</td>
            <td>{{ $course37[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course38);$x++)
  @if(count($course38[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course38[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course38[$x][$c]->program}}</td>
             <td>{{$course38[$x][$c]->course}}</td>
             <td>{{$course38[$x][$c]->venue}}</td>
             <td>{{ $course38[$x][$c]->day }}</td>
             <td>{{$course38[$x][$c]->fromTime}}</td>
            <td>{{ $course38[$x][$c]->toTime }}</td>
            <td>{{ $course38[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course39);$x++)
  @if(count($course39[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course39[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course39[$x][$c]->program}}</td>
             <td>{{$course39[$x][$c]->course}}</td>
             <td>{{$course39[$x][$c]->venue}}</td>
             <td>{{ $course39[$x][$c]->day }}</td>
             <td>{{$course39[$x][$c]->fromTime}}</td>
            <td>{{ $course39[$x][$c]->toTime }}</td>
            <td>{{ $course39[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course310);$x++)
  @if(count($course310[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course310[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course310[$x][$c]->program}}</td>
             <td>{{$course310[$x][$c]->course}}</td>
             <td>{{$course310[$x][$c]->venue}}</td>
             <td>{{ $course310[$x][$c]->day }}</td>
             <td>{{$course310[$x][$c]->fromTime}}</td>
            <td>{{ $course310[$x][$c]->toTime }}</td>
            <td>{{ $course310[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course311);$x++)
  @if(count($course311[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course311[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course311[$x][$c]->program}}</td>
             <td>{{$course311[$x][$c]->course}}</td>
             <td>{{$course311[$x][$c]->venue}}</td>
             <td>{{ $course11[$x][$c]->day }}</td>
             <td>{{$course311[$x][$c]->fromTime}}</td>
            <td>{{ $course311[$x][$c]->toTime }}</td>
            <td>{{ $course311[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course312);$x++)
  @if(count($course312[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course312[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course312[$x][$c]->program}}</td>
             <td>{{$course312[$x][$c]->course}}</td>
             <td>{{$course312[$x][$c]->venue}}</td>
             <td>{{ $course312[$x][$c]->day }}</td>
             <td>{{$course312[$x][$c]->fromTime}}</td>
            <td>{{ $course312[$x][$c]->toTime }}</td>
            <td>{{ $course312[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($courseC);$x++)
  @if(count($courseC[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseC[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $courseC[$x][$c]->program}}</td>
             <td>{{$courseC[$x][$c]->course}}</td>
             <td>{{$courseC[$x][$c]->venue}}</td>
             <td>{{ $courseC[$x][$c]->day }}</td>
             <td>{{$courseC[$x][$c]->fromTime}}</td>
            <td>{{ $courseC[$x][$c]->toTime }}</td>
            <td>{{ $courseC[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


 @for($x=0; $x<count($course41);$x++)
  @if(count($course41[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course41[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course41[$x][$c]->program}}</td>
             <td>{{$course41[$x][$c]->course}}</td>
             <td>{{$course41[$x][$c]->venue}}</td>
             <td>{{ $course41[$x][$c]->day }}</td>
             <td>{{$course41[$x][$c]->fromTime}}</td>
            <td>{{ $course41[$x][$c]->toTime }}</td>
            <td>{{ $course41[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course42);$x++)
  @if(count($course42[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course42[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course42[$x][$c]->program}}</td>
             <td>{{$course42[$x][$c]->course}}</td>
             <td>{{$course42[$x][$c]->venue}}</td>
             <td>{{ $course42[$x][$c]->day }}</td>
             <td>{{$course42[$x][$c]->fromTime}}</td>
            <td>{{ $course42[$x][$c]->toTime }}</td>
            <td>{{ $course42[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course43);$x++)
  @if(count($course43[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course43[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course43[$x][$c]->program}}</td>
             <td>{{$course43[$x][$c]->course}}</td>
             <td>{{$course43[$x][$c]->venue}}</td>
             <td>{{ $course43[$x][$c]->day }}</td>
             <td>{{$course43[$x][$c]->fromTime}}</td>
            <td>{{ $course43[$x][$c]->toTime }}</td>
            <td>{{ $course43[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course44);$x++)
  @if(count($course44[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course44[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course44[$x][$c]->program}}</td>
             <td>{{$course44[$x][$c]->course}}</td>
             <td>{{$course44[$x][$c]->venue}}</td>
             <td>{{ $course44[$x][$c]->day }}</td>
             <td>{{$course44[$x][$c]->fromTime}}</td>
            <td>{{ $course44[$x][$c]->toTime }}</td>
            <td>{{ $course44[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course45);$x++)
  @if(count($course45[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course45[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course45[$x][$c]->program}}</td>
             <td>{{$course45[$x][$c]->course}}</td>
             <td>{{$course45[$x][$c]->venue}}</td>
             <td>{{ $course45[$x][$c]->day }}</td>
             <td>{{$course45[$x][$c]->fromTime}}</td>
            <td>{{ $course45[$x][$c]->toTime }}</td>
            <td>{{ $course45[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course46);$x++)
  @if(count($course46[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course46[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course46[$x][$c]->program}}</td>
             <td>{{$course46[$x][$c]->course}}</td>
             <td>{{$course46[$x][$c]->venue}}</td>
             <td>{{ $course46[$x][$c]->day }}</td>
             <td>{{$course46[$x][$c]->fromTime}}</td>
            <td>{{ $course46[$x][$c]->toTime }}</td>
            <td>{{ $course46[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course47);$x++)
  @if(count($course47[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course47[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course47[$x][$c]->program}}</td>
             <td>{{$course47[$x][$c]->course}}</td>
             <td>{{$course47[$x][$c]->venue}}</td>
             <td>{{ $course47[$x][$c]->day }}</td>
             <td>{{$course47[$x][$c]->fromTime}}</td>
            <td>{{ $course47[$x][$c]->toTime }}</td>
            <td>{{ $course47[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course48);$x++)
  @if(count($course8[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course48[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course48[$x][$c]->program}}</td>
             <td>{{$course48[$x][$c]->course}}</td>
             <td>{{$course48[$x][$c]->venue}}</td>
             <td>{{ $course48[$x][$c]->day }}</td>
             <td>{{$course48[$x][$c]->fromTime}}</td>
            <td>{{ $course48[$x][$c]->toTime }}</td>
            <td>{{ $course48[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course49);$x++)
  @if(count($course49[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course49[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course49[$x][$c]->program}}</td>
             <td>{{$course49[$x][$c]->course}}</td>
             <td>{{$course49[$x][$c]->venue}}</td>
             <td>{{ $course49[$x][$c]->day }}</td>
             <td>{{$course49[$x][$c]->fromTime}}</td>
            <td>{{ $course49[$x][$c]->toTime }}</td>
            <td>{{ $course49[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course410);$x++)
  @if(count($course410[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course410[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course410[$x][$c]->program}}</td>
             <td>{{$course410[$x][$c]->course}}</td>
             <td>{{$course410[$x][$c]->venue}}</td>
             <td>{{ $course410[$x][$c]->day }}</td>
             <td>{{$course410[$x][$c]->fromTime}}</td>
            <td>{{ $course410[$x][$c]->toTime }}</td>
            <td>{{ $course410[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course411);$x++)
  @if(count($course411[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course411[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course411[$x][$c]->program}}</td>
             <td>{{$course411[$x][$c]->course}}</td>
             <td>{{$course411[$x][$c]->venue}}</td>
             <td>{{ $course411[$x][$c]->day }}</td>
             <td>{{$course411[$x][$c]->fromTime}}</td>
            <td>{{ $course411[$x][$c]->toTime }}</td>
            <td>{{ $course411[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course412);$x++)
  @if(count($course412[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course412[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course412[$x][$c]->program}}</td>
             <td>{{$course412[$x][$c]->course}}</td>
             <td>{{$course412[$x][$c]->venue}}</td>
             <td>{{ $course412[$x][$c]->day }}</td>
             <td>{{$course412[$x][$c]->fromTime}}</td>
            <td>{{ $course412[$x][$c]->toTime }}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($courseD);$x++)
  @if(count($courseD[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseD[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $courseD[$x][$c]->program}}</td>
             <td>{{$courseD[$x][$c]->course}}</td>
             <td>{{$courseD[$x][$c]->venue}}</td>
             <td>{{ $courseD[$x][$c]->day }}</td>
             <td>{{$courseD[$x][$c]->fromTime}}</td>
            <td>{{ $courseD[$x][$c]->toTime }}</td>
            <td>{{ $courseD[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


 @for($x=0; $x<count($course51);$x++)
  @if(count($course51[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course51[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course51[$x][$c]->program}}</td>
             <td>{{$course51[$x][$c]->course}}</td>
             <td>{{$course51[$x][$c]->venue}}</td>
             <td>{{ $course51[$x][$c]->day }}</td>
             <td>{{$course51[$x][$c]->fromTime}}</td>
            <td>{{ $course51[$x][$c]->toTime }}</td>
            <td>{{ $course51[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course52);$x++)
  @if(count($course52[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course52[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course52[$x][$c]->program}}</td>
             <td>{{$course52[$x][$c]->course}}</td>
             <td>{{$course52[$x][$c]->venue}}</td>
             <td>{{ $course52[$x][$c]->day }}</td>
             <td>{{$course52[$x][$c]->fromTime}}</td>
            <td>{{ $course52[$x][$c]->toTime }}</td>
            <td>{{ $course52[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor


@for($x=0; $x<count($course53);$x++)
  @if(count($course3[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course53[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course53[$x][$c]->program}}</td>
             <td>{{$course53[$x][$c]->course}}</td>
             <td>{{$course53[$x][$c]->venue}}</td>
             <td>{{ $course53[$x][$c]->day }}</td>
             <td>{{$course53[$x][$c]->fromTime}}</td>
            <td>{{ $course53[$x][$c]->toTime }}</td>
            <td>{{ $course53[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course54);$x++)
  @if(count($course54[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course54[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course54[$x][$c]->program}}</td>
             <td>{{$course54[$x][$c]->course}}</td>
             <td>{{$course54[$x][$c]->venue}}</td>
             <td>{{ $course54[$x][$c]->day }}</td>
             <td>{{$course54[$x][$c]->fromTime}}</td>
            <td>{{ $course54[$x][$c]->toTime }}</td>
            <td>{{ $course54[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course55);$x++)
  @if(count($course55[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course55[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course55[$x][$c]->program}}</td>
             <td>{{$course55[$x][$c]->course}}</td>
             <td>{{$course55[$x][$c]->venue}}</td>
             <td>{{ $course55[$x][$c]->day }}</td>
             <td>{{$course55[$x][$c]->fromTime}}</td>
            <td>{{ $course55[$x][$c]->toTime }}</td>
            <td>{{ $course55[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course56);$x++)
  @if(count($course56[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course56[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course56[$x][$c]->program}}</td>
             <td>{{$course56[$x][$c]->course}}</td>
             <td>{{$course56[$x][$c]->venue}}</td>
             <td>{{ $course56[$x][$c]->day }}</td>
             <td>{{$course56[$x][$c]->fromTime}}</td>
            <td>{{ $course56[$x][$c]->toTime }}</td>
            <td>{{ $course56[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course57);$x++)
  @if(count($course57[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course57[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course57[$x][$c]->program}}</td>
             <td>{{$course57[$x][$c]->course}}</td>
             <td>{{$course57[$x][$c]->venue}}</td>
             <td>{{ $course57[$x][$c]->day }}</td>
             <td>{{$course57[$x][$c]->fromTime}}</td>
            <td>{{ $course57[$x][$c]->toTime }}</td>
            <td>{{ $course57[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course58);$x++)
  @if(count($course58[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course58[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course58[$x][$c]->program}}</td>
             <td>{{$course58[$x][$c]->course}}</td>
             <td>{{$course58[$x][$c]->venue}}</td>
             <td>{{ $course58[$x][$c]->day }}</td>
             <td>{{$course58[$x][$c]->fromTime}}</td>
            <td>{{ $course58[$x][$c]->toTime }}</td>
            <td>{{ $course58[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course59);$x++)
  @if(count($course59[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course59[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course59[$x][$c]->program}}</td>
             <td>{{$course59[$x][$c]->course}}</td>
             <td>{{$course59[$x][$c]->venue}}</td>
             <td>{{ $course59[$x][$c]->day }}</td>
             <td>{{$course59[$x][$c]->fromTime}}</td>
            <td>{{ $course59[$x][$c]->toTime }}</td>
            <td>{{ $course59[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course510);$x++)
  @if(count($course510[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course510[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course510[$x][$c]->program}}</td>
             <td>{{$course510[$x][$c]->course}}</td>
             <td>{{$course510[$x][$c]->venue}}</td>
             <td>{{ $course510[$x][$c]->day }}</td>
             <td>{{$course510[$x][$c]->fromTime}}</td>
            <td>{{ $course510[$x][$c]->toTime }}</td>
            <td>{{ $course510[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>
</table>
@endif
@endfor

@for($x=0; $x<count($course511);$x++)
  @if(count($course511[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course511[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course511[$x][$c]->program}}</td>
             <td>{{$course511[$x][$c]->course}}</td>
             <td>{{$course511[$x][$c]->venue}}</td>
             <td>{{ $course511[$x][$c]->day }}</td>
             <td>{{$course511[$x][$c]->fromTime}}</td>
            <td>{{ $course511[$x][$c]->toTime }}</td>
            <td>{{ $course511[$x][$c]->criteria}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
     @endfor
      </tbody>

</table>
@endif
@endfor

@for($x=0; $x<count($course512);$x++)
  @if(count($course512[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Core/Optional</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course512[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course512[$x][$c]->program}}</td>
             <td>{{$course512[$x][$c]->course}}</td>
             <td>{{$course512[$x][$c]->venue}}</td>
             <td>{{ $course512[$x][$c]->day }}</td>
             <td>{{$course512[$x][$c]->fromTime}}</td>
            <td>{{ $course512[$x][$c]->toTime }}</td>
            <td>{{ $course512[$x][$c]->criteria}}</td>
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





@endsection