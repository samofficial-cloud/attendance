@extends('layouts.app')
@section('title')
VENUE RESERVATION
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
   <a class="nav-link active" style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link active" style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link active" style="color:#060606"href="/">HOME</a>
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
   <a class="nav-link active" style="color:#060606"href="/">HOME</a>
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




<?php

  use App\timetable;
  $timetable = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','07:00')->get();
 $timetable1 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','08:00')->get();
 $timetable2 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','09:00')->get();
 $timetable3 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','10:00')->get();
 $timetable4 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','11:00')->get();
 $timetable5 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','12:00')->get();
 $timetable6 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','13:00')->get();
 $timetable7 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','14:00')->get();
 $timetable8 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','15:00')->get();
 $timetable9 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','16:00')->get();
 $timetable10 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','17:00')->get();
 $timetable11 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','18:00')->get();
 $timetable12 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Monday')->where('fromTime','19:00')->get();


 $timetableA2 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','07:00')->get();
 $timetable21 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','08:00')->get();
 $timetable22 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','09:00')->get();
 $timetable23 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','10:00')->get();
 $timetable24 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','11:00')->get();
 $timetable25 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','12:00')->get();
 $timetable26 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','13:00')->get();
 $timetable27 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','14:00')->get();
 $timetable28 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','15:00')->get();
 $timetable29 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','16:00')->get();
 $timetable210 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','17:00')->get();
 $timetable211 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','18:00')->get();
 $timetable212 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Tuesday')->where('fromTime','19:00')->get();


 $timetableA3 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','07:00')->get();
 $timetable31 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','08:00')->get();
 $timetable32 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','09:00')->get();
 $timetable33 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','10:00')->get();
 $timetable34 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','11:00')->get();
 $timetable35 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','12:00')->get();
 $timetable36 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','13:00')->get();
 $timetable37 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','14:00')->get();
 $timetable38 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','15:00')->get();
 $timetable39 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','16:00')->get();
 $timetable310 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','17:00')->get();
 $timetable311 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','18:00')->get();
 $timetable312 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Wednesday')->where('fromTime','19:00')->get();


 $timetableA4 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','07:00')->get();
 $timetable41 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','08:00')->get();
 $timetable42 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','09:00')->get();
 $timetable43 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','10:00')->get();
 $timetable44 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','11:00')->get();
 $timetable45 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','12:00')->get();
 $timetable46 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','13:00')->get();
 $timetable47 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','14:00')->get();
 $timetable48 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','15:00')->get();
 $timetable49 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','16:00')->get();
 $timetable410 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','17:00')->get();
 $timetable411 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','18:00')->get();
 $timetable412 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Thursday')->where('fromTime','19:00')->get();


 $timetableA5 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','07:00')->get();
 $timetable51 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','08:00')->get();
 $timetable52 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','09:00')->get();
 $timetable53 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','10:00')->get();
 $timetable54 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','11:00')->get();
 $timetable55 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','12:00')->get();
 $timetable56 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','13:00')->get();
 $timetable57 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','14:00')->get();
 $timetable58 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','15:00')->get();
 $timetable59 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','16:00')->get();
 $timetable510 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','17:00')->get();
 $timetable511 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','18:00')->get();
 $timetable512 = timetable::select('course','criteria','id','fromTime','toTime')->where('venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','19:00')->get();


  use App\calendar;
$timetabled = calendar::select('Date','Day','Month','Year')->where('Week',$_GET['wid'])->get();

$Cweek = calendar::select('Week')->where('Date',date('d'))->where('Month',date('m'))->where('Year',date('Y'))->Value('Week');

  $today=date('d-m-Y');
  $tdate=date('d');
  $tmonth=date('m');
  $tyear=date('Y');

   use App\reservation;
    $state = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','07:00')->get();
     $state1 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','08:00')->get();
      $state2 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','09:00')->get();
       $state3 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','10:00')->get();
        $state4 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','11:00')->get();
         $state5 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','12:00')->get();
          $state6 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','13:00')->get();
           $state7 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','14:00')->get();
            $state8 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','15:00')->get();
             $state9 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','16:00')->get();
              $state10 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','17:00')->get();
               $state11 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','18:00')->get();
                $state12 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->where('fromTime','19:00')->get();
    $stat = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->get();
   $states = reservation::where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('rstatus','-1')->get();


   $stateA2 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','07:00')->get();
     $state21 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','08:00')->get();
      $state22 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','09:00')->get();
       $state23 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','10:00')->get();
        $state24 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','11:00')->get();
         $state25 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','12:00')->get();
          $state26 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','13:00')->get();
           $state27 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','14:00')->get();
            $state28 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','15:00')->get();
             $state29 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','16:00')->get();
              $state210 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','17:00')->get();
               $state211 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','18:00')->get();
                $state212 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Tuesday')->where('Month',date('m'))->where('fromTime','19:00')->get();


                $stateA3 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','07:00')->get();
     $state31 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','08:00')->get();
      $state32 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','09:00')->get();
       $state33 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','10:00')->get();
        $state34 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','11:00')->get();
         $state35 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','12:00')->get();
          $state36 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','13:00')->get();
           $state37 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','14:00')->get();
            $state38 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','15:00')->get();
             $state39 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','16:00')->get();
              $state310 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','17:00')->get();
               $state311 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','18:00')->get();
                $state312 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Wednesday')->where('Month',date('m'))->where('fromTime','19:00')->get();


                $stateA4 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','07:00')->get();
     $state41 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','08:00')->get();
      $state42 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','09:00')->get();
       $state43 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','10:00')->get();
        $state44 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','11:00')->get();
         $state45 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','12:00')->get();
          $state46 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','13:00')->get();
           $state47 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','14:00')->get();
            $state48 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','15:00')->get();
             $state49 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','16:00')->get();
              $state410 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','17:00')->get();
               $state411 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','18:00')->get();
                $state412 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Thursday')->where('Month',date('m'))->where('fromTime','19:00')->get();


                $stateA5 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','07:00')->get();
     $state51 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','08:00')->get();
      $state52 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('fromTime','09:00')->get();
       $state53 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','10:00')->get();
        $state54 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','11:00')->get();
         $state55 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','12:00')->get();
          $state56 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','13:00')->get();
           $state57 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','14:00')->get();
            $state58 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','15:00')->get();
             $state59 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','16:00')->get();
              $state510 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','17:00')->get();
               $state511 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','18:00')->get();
                $state512 = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Friday')->where('Month',date('m'))->where('fromTime','19:00')->get();

                use App\capacityvenue;
 $capacity = capacityvenue::select('capacity')->where('venue',$_GET['rid'])->value('capacity');

  ?> 

<br>

<div class="container2">
  <div class="row2">
    <div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Room to View Free Slot</h5>

    <div class="btn-group dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
   <a href="/reservation?rid=B101&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B101</a>
     <a href="/reservation?rid=B102&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B102</a>
    <a href="/reservation?rid=B103&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B103</a>
    <a href="/reservation?rid=B104&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B104</a>
    <a href="/reservation?rid=B106&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/reservation?rid=B106&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/reservation?rid=B201&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/reservation?rid=B202&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/reservation?rid=B203&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/reservation?rid=B204&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/reservation?rid=B205&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/reservation?rid=B206&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/reservation?rid=B207&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B207</a>
    <a href="/reservation?rid=B208&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B208</a>
    <a href="/reservation?rid=B302&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/reservation?rid=B302&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/reservation?rid=B304&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/reservation?rid=B304&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/reservation?rid=B307&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/reservation?rid=B307&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/reservation?rid=B310&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/reservation?rid=B310&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B311</a>
  </div>
</div>


 <div class="btn-group dropright">
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

<div class="btn-group dropright">
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

</div>


  </div>
</div>



    <div class="col-10">
      @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Sorry!!</strong> Something went Wrong<br>
            <ul>
              @foreach ($errors as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
  <div class="card hero-image border-info">
  <div class="card-body">
    <div class="row">
    <div class="col"><h5 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h5></div>

    <div class="col" align="center"> <h5><b>TODAY:{{ $today }}</b></h5></div>
    <div class="col" align="right"> <h5><b>CURRENT WEEK:{{ $Cweek }}</b></h5></div>
    </div>

     <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ffffff;">
    {{ $_GET['wid'] }}
  </a>

   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/reservation?rid={{$_GET['rid']}}&wid=Wk1" class="list-group-item list-group-item-action dropdown-item">Wk1 (04/11-08/11)</a>
     <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk2" class="list-group-item list-group-item-action dropdown-item">Wk2 (11/11-15/11)</a>
    <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk3" class="list-group-item list-group-item-action dropdown-item">Wk3 (18/11-22/11)</a>
    <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk4" class="list-group-item list-group-item-action dropdown-item">Wk4 (25/11-29/11)</a>
     <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk5" class="list-group-item list-group-item-action dropdown-item">Wk5 (02/12-06/12)</a>
       <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk6" class="list-group-item list-group-item-action dropdown-item">Wk6 (09/12-13/12)</a>
        <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk7" class="list-group-item list-group-item-action dropdown-item">Wk7 (16/12-20/12)</a>
         <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk8" class="list-group-item list-group-item-action dropdown-item">Wk8 (23/12-27/12)</a>
          <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk9" class="list-group-item list-group-item-action dropdown-item">Wk9 (30/12-03/1)</a>
           <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk10" class="list-group-item list-group-item-action dropdown-item">Wk10 (06/01-10/1)</a>
            <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk11" class="list-group-item list-group-item-action dropdown-item">Wk11 (13/1-17/1)</a>
             <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk12" class="list-group-item list-group-item-action dropdown-item">Wk12 (20/1-24/1)</a>
              <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk13" class="list-group-item list-group-item-action dropdown-item">Wk13 (27/1-31/1)</a>
               <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk14" class="list-group-item list-group-item-action dropdown-item">Wk14 (03/2-07/2)</a>
                <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk15" class="list-group-item list-group-item-action dropdown-item">Wk15 (10/2-14/2)</a>

  </div>
</div>

<div style="color: #29234a"><H1><CENTER>{{ $_GET['rid'] }} TIME TABLE</CENTER></H1></div>
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
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Monday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  MON
</th>
 @foreach ($timetable as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($state as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
    @endforeach
    @if(count($state)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


  @foreach ($timetable1 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
@foreach($state1 as $stat)
  @if( $stat->rstatus=='1') <td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state1)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

</td>
@endif
@endif
@endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


 @foreach ($timetable2 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state2 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $$stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state2)==0)
    <td>
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


  @foreach ($timetable3 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
     @foreach($state3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
@endforeach
@if(count($state3)==0)
 <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

 @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
 @endif
    @endforeach


@foreach ($timetable4 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state4)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable5 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
@foreach($state5 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state5)==0)
    <td>
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


@foreach ($timetable6 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($state6 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state6)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable7 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state7 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state7)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable8 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state8 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state8)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable9 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state9 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state9)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
 @foreach ($timetable10 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state10 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td> 
    @else Reserve
   @endif
   @endforeach
   @if(count($state10)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
 @foreach ($timetable11 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state11 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif(  $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
    @else Reserve
   @endif
   @endforeach
   @if(count($state11)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
 <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach

 @foreach ($timetable12 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state12 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
    @else Reserve
   @endif
   @endforeach
   @if(count($state12)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
</tr>

<tr align="center">
 <th  style="background-color:#88eab2">
 @foreach ($timetabled as $times)
  @if ($times->Day == 'Tuesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  TUE
</th>
 @foreach ($timetableA2 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA2 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
    @endforeach
    @if(count($stateA2)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

</td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


   @foreach ($timetable21 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
    @foreach($state21 as $stat)
    @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
    @endif
    @endforeach
   @if(count($state21)==0)
   <td>
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

 </td>
  @endif
  @endif
  @endif

  @else
  <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable22 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state22 as $stat)
    @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif( $$stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
    @endif
    @endforeach
  @if(count($state22)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
  @endif
  @endif
  @endif

   @else
   <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
   @endforeach


  @foreach ($timetable23 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
     @foreach($state23 as $stat)
     @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
  @if(count($state23)==0)
  <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

  </td>
  @endif
  @endif
  @endif

  @else
  <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable24 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state24 as $stat)
     @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
     @if(count($state24)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

  </td>
   @endif
   @endif
   @endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


   @foreach ($timetable25 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state25 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
  @if(count($state25)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

   </td>
   @endif
   @endif
   @endif
 
@else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach

   @foreach ($timetable26 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state26 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
  @if(count($state26)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
 
@else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


   @foreach ($timetable27 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state27 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
   @if(count($state27)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach

   @foreach ($timetable28 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state28 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @else Reserve
     @endif
     @endforeach
   @if(count($state28)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif 

 @else
 <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
   @endforeach


   @foreach ($timetable29 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state29 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
   @if(count($state29)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

  @else
   <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
   @endforeach


   @foreach ($timetable210 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state210 as $stat)
     @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
    @endforeach
   @if(count($state210)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable211 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state211 as $stat)
     @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif(  $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
   @if(count($state211)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

  @else
  <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


 @foreach ($timetable212 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state212 as $stat)
     @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
     @if(count($state212)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

  @else
  <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach
    
</tr>

<tr align="center">
 <th  style="background-color:#ef6c68">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Wednesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  WED
</th>
 @foreach ($timetableA3 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($stateA3 as $stat)
    @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

   @if(count($stateA3)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

 @else
 <td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
 @endif
 @endforeach

   @foreach ($timetable31 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
  @else
  @foreach($state31 as $stat)
  @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state31)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


 @foreach ($timetable32 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state32 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif( $$stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state32)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


  @foreach ($timetable33 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state33 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
@endforeach
@if(count($state33)==0)
 <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
 @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
 @endif
    @endforeach


@foreach ($timetable34 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state34 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state34)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable35 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
@foreach($state35 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state35)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


@foreach ($timetable36 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state36 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state36)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable37 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state37 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state37)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable38 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state38 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state38)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable39 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state39 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state39)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable310 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state310 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="##c7aeec">Pending </td>
   @endif
   @endforeach
   @if(count($state310)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable311 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state311 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif(  $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state311)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable312 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state312 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state312)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
    
</tr>


<tr align="center">
 <th  style="background-color:#b5f66d">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Thursday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  THUR
</th>
 @foreach ($timetableA4 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
     @foreach($stateA4 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
  @if(count($stateA4)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
     @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
    @endif
    @endforeach


   @foreach ($timetable41 as $timed)
   @if ($timed->course == '')
   @if($yy<$tyear)
   <td><br><br>N/A</td>
   @elseif($yy==$tyear)
   @if($mm<$tmonth)
   <td><br><br>N/A</td>
   @elseif($mm==$tmonth and $dd<$tdate)
   <td><br><br>N/A</td>
   @else
     @foreach($state41 as $stat)
     @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
     @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach
   @if(count($state41)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable42 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state42 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $$stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state42)==0)
 <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


  @foreach ($timetable43 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
     @foreach($state43 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
@endforeach
@if(count($state43)==0)
 <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
 @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
 @endif
    @endforeach


@foreach ($timetable44 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state44 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state44)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable45 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
@foreach($state45 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state45)==0)
 <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


@foreach ($timetable46 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state46 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved </td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state46)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable47 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state47 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state47)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable48 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state48 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state48)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable49 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state49 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state49)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable410 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state410 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td> 
   @endif
   @endforeach
   @if(count($state410)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable411 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state411 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved </td>
    @elseif(  $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state411)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable412 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state412 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved </td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state412)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
    
</tr>


<tr align="center">
 <th  style="background-color:#ffed4a">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Friday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  FRI
</th>
 @foreach ($timetableA5 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA5 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved </td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
    @endforeach
    @if(count($stateA5)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

     @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
    @endif
    @endforeach


    @foreach ($timetable51 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($state51 as $stat)
  @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state51)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable52 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @endif
  @if($yy==$tyear and $mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear and $mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state52 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
    @if(count($state52)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
   @endforeach


  @foreach ($timetable53 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
      @foreach($state53 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
@endforeach
@if(count($state53)==0)
<td>
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif

 @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
 @endif
    @endforeach


@foreach ($timetable54 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state54 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state54)==0)
   <td>
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable55 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
@foreach($state55 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
    @endforeach
    @if(count($state55)==0)
     <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
   @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
   @endif
    @endforeach


@foreach ($timetable56 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state56 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state56)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable57 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state57 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state57)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable58 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state58 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state58)==0)
   <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable59 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state59 as $stat)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state59)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable510 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
   @foreach($state510 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state510)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable511 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state511 as $stat)
   @if(  $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td> 
    @elseif(  $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
    @else Reserve
   @endif
   @endforeach
   @if(count($state511)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach


 @foreach ($timetable512 as $timed)
  @if ($timed->course == '')
 @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
    @foreach($state512 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif( $stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
   @endif
   @endforeach
   @if(count($state512)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$timed->toTime}}" readonly>
  </div>
  </div>

<input type="hidden" id="Month" name="Month" value="{{ $mm}}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date" name="Date" value="{{ $dd}}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number" value=$(input[type=number]).inputSpinner() min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>

    </td>
    @endif
    @endif
    @endif
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
    @endforeach
    
</tr>
 
    
    
</table>
</div>
</div>
</div>
</div>
</div>
</div>

<script src="./src/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection
