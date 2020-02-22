@extends('layouts.app')

@section('title')
  STUDENTS
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
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<br>

<div class="container">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h6 class="card-title"><strong>Choose Degree Program</strong></h6>
     @if(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==31)
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/editstudentsList?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/editstudentsList?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/editstudentsList?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/editstudentsList?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/editstudentsList?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/editstudentsList?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/editstudentsList?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/editstudentsList?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/editstudentsList?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/editstudentsList?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/editstudentsList?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/editstudentsList?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/editstudentsList?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

@elseif(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==32)

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/editstudentsList?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/editstudentsList?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/editstudentsList?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/editstudentsList?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/editstudentsList?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/editstudentsList?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/editstudentsList?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/editstudentsList?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>

@elseif(Auth::user()->principal==1)
<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/editstudentsList?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/editstudentsList?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/editstudentsList?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/editstudentsList?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/editstudentsList?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/editstudentsList?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/editstudentsList?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/editstudentsList?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/editstudentsList?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/editstudentsList?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/editstudentsList?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/editstudentsList?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/editstudentsList?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/editstudentsList?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/editstudentsList?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/editstudentsList?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/editstudentsList?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/editstudentsList?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/editstudentsList?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/editstudentsList?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/editstudentsList?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>
@endif


</div>
</div>
</div>
<div class="col-9">
  <div class="card hero-image border-info" >
  <div class="card-body">
    <h5 class="card-title"><b></b></h5>

    <div align="center">
      <h1 style="text-align: center;"><b>UNIVERSITY OF DAR ES SALAAM</b></h1>
    <h2 style="text-align: center;"><b>COLLEGE OF ICT</b></h2>
    
   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>
    
    <h1>LIST OF STUDENTS</h1>
    

  
</div>


</div>
</div>
</div>


</div>
</div>


@endsection