@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@section('title')
  COURSES
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:740px;
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
    font-size: 0.9rem;
    font-weight: 400;
    
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}


.dataTables_wrapper .dt-buttons {
  float:none;  
  text-align:center;
}

.dataTables_wrapper .dataTables_info {
  padding-top: 0px;
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
<?php
$i='1';
?>
<br>
<br>
<div class="container2">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Degree Program</h5>
    @if(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==31)
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/Showcourses?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/Showcourses?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/Showcourses?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/Showcourses?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/Showcourses?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/Showcourses?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/Showcourses?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/Showcourses?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/Showcourses?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/Showcourses?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/Showcourses?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/Showcourses?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/Showcourses?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

@elseif(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==32)

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/Showcourses?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/Showcourses?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/Showcourses?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/Showcourses?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/Showcourses?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/Showcourses?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/Showcourses?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/Showcourses?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>
@elseif(Auth::user()->principal==1)
<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/Showcourses?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/Showcourses?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/Showcourses?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/Showcourses?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/Showcourses?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/Showcourses?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/Showcourses?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/Showcourses?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/Showcourses?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/Showcourses?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/Showcourses?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/Showcourses?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/Showcourses?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/Showcourses?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/Showcourses?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/Showcourses?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/Showcourses?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/Showcourses?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/Showcourses?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/Showcourses?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/Showcourses?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/Showcourses?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>
@endif

</div>
</div>
</div>

<div class="col-10">
   @if ($errors= Session::get('errors'))
          <div class="alert alert-danger">
           <p>{{$errors}}</p>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <h2>{{$full}} Courses</h2>
    <div>
    <a data-toggle="modal" data-target="#newcourse" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>
<div class="modal fade" id="newcourse" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newcourses')}}">
  {{csrf_field()}}

 
    <div class="form-group row">
    <label for="d-program"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="d-program" name="d-program" value="{{$full}}" readonly>
  </div>
  </div>

     <div class="form-group row">
    <label for="course"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="course" name="course" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="course_name" name="course_name" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="credit"  class="col-sm-3 col-form-label"><strong>Credit:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="credit" name="credit" value="" required="">
  </div>
  </div>


  <div class="form-group row">
    <label for="criteria"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="criteria" id="criteria">
    <option value="Core">Core</option>
    <option value="Optional">Optional</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="semester"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="semester" id="semester">
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="lecture_no"  class="col-sm-3 col-form-label"><strong>No. of Hours per Semester:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="lecture_no" name="lecture_no" value="" required="">
  </div>
  </div>

  <input type="text" class="form-control" id="program" name="program" value="{{$_GET['rid']}}" hidden="">


  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
<a class="btn btn-sm btn-success" style="float: right; margin-top:20px;" href="/generate-Course-pdf?rid={{$_GET['rid']}}">PRINT</a>
</div>
    
    <table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
     <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
      <th scope="col"  style="color:#3490dc;">Course Code</th>
      <th scope="col"  style="color:#3490dc;">Course Name</th>
      <th scope="col"  style="color:#3490dc;">Credit</th>
      <th scope="col"  style="color:#3490dc;">Semester</th>
      <th scope="col"  style="color:#3490dc;">Criteria</th>
      <th scope="col"  style="color:#3490dc;">No. of Hours per Semester</th>
      <th scope="col"  style="color:#3490dc;">Change</th>
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $course)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$course->course}}</center></td>
      <td>{{$course->course_name}}</td>
      <td><center>{{$course->credit}}</center></td>
       <td><center>{{$course->semester}}</center></td>
      <td><center>{{$course->criteria}}</center></td>
      <td><center>{{$course->lectures_no}}</center></td>
     <td ><a data-toggle="modal" data-target="#edit{{$course->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$course->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editcourse')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="course{{$course->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="course{{$course->id}}" name="course" value="{{$course->course}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="course_name{{$course->id}}"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="course_name{{$course->id}}" name="course_name" value="{{$course->course_name}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="credit{{$course->id}}"  class="col-sm-3 col-form-label"><strong>Credit:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="credit{{$course->id}}" name="credit" value="{{$course->credit}}" required>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="semester{{$course->id}}"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select" name="semester" id="semester{{$course->id}}">
    @if($course->semester=="1")
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @elseif($course->semester=="2")
    <option value="2">Semester 2</option>
    <option value="1">Semester 1</option>
    @else
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="criteria{{$course->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select" name="criteria" id="criteria{{$course->id}}">
    @if($course->criteria=="Core")
    <option value="Core">Core</option>
    <option value="Optional">Optional</option>
    @elseif($course->criteria=="Optional")
    <option value="Optional">Optional</option>
    <option value="Core">Core</option>
    @else
    <option value="Core">Core</option>
    <option value="Optional">Optional</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="lecture_no{{$course->id}}"  class="col-sm-3 col-form-label"><strong>No. of Hours per Semester:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="lecture_no{{$course->id}}" name="lecture_no" value="{{$course->lectures_no}}">
  </div>
  </div>
<br>
  <input type="hidden" id="id{{$course->id}}" name="id" value="{{$course->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a class="btn btn-sm btn-danger" href="{{route('DeleteCourse',$course->id)}}">Delete</a>



      </td>
    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
</div>



</div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('pagescript')

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>

<script type="text/javascript">
 $(document).ready(function() {
  var x = {!! json_encode($full) !!};
  
  // console.log(x);
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x, 
                exportOptions: {
                    columns: [1, 2, 3, 4, 5 ]
                }
            },

            {
                extend: 'copyHtml5',className: 'btn-success',
                exportOptions: {
                    columns: [ 1, 2, 3, 4, 5]
                }
            },
             ]     
    } );
//     var styles = {
//     position: "relative",
//     float: "right"
// };
$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");
// $("div#myTable_wrapper").find($(".dt-buttons")).find($("a")).css(styles);
});

</script>


@endsection