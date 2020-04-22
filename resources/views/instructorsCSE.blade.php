@extends('layouts.app')

@section('title')
  INSTRUCTORS CSE
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:1054px;
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

div.dt-buttons.buttons{
  padding-left:740px;
  justify-content: right;
}

div.dt-buttons {
        clear: both;
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
.form-inline label {
  justify-content:left;
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
           <a class="dropdown-item" style="color:#060606" href="/manage/users">USERS</a>
           <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
           <a class="dropdown-item" style="color:#060606" href="manage/courses">COURSES</a>
           <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
           <a class="dropdown-item" style="color:#060606" href="/approval">RESERVATIONS</a>
          <a class="dropdown-item" style="color:#060606"href="/manage/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="/manage/instructors-ETE">ETE-INSTRUCTORS</a>
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
$j='1';
?>



<br>
<div class="container3">
  @if(Auth::user()->DEFAULTDEPTID==31 or Auth::user()->principal==1 )
  <center><h4><b>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</b></h4>
  <h5><b>INSTRUCTOR ASSIGNMENT FOR THE ACADEMIC YEAR 2019/2020</b></h5></center>
   @if ($errors=Session::get('errors'))
          <div class="alert alert-danger">
            <p>{{$errors}}</p>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

<a data-toggle="modal" data-target="#newinstructor" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>
<div class="modal fade" id="newinstructor" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newinstructor')}}" name="form1" id="form1" onsubmit="return getdata()">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="dept"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="dept" name="dept" value="CSE" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="course"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="course" name="course" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="course_name" name="course_name" value="" required="" autocomplete="off">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor"  class="col-sm-3 col-form-label"><strong>Instructor 01:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor" name="instructor" value="" required="" autocomplete="off">
 <div id="nameList"></div>
</div>
</div>
<span id="message2"></span>

  <div class="form-group row">
    <label for="instructor2"  class="col-sm-3 col-form-label"><strong>Instructor 02:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor2" name="instructor2" value="" autocomplete="off">
    <div id="nameList2"></div>
  </div>
  </div>
  <span id="message3"></span>

  <div class="form-group row">
    <label for="instructor3"  class="col-sm-3 col-form-label"><strong>Instructor 03:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor3" name="instructor3" value="" autocomplete="off">
    <div id="nameList3"></div>
  </div>
  </div>
  <span id="message4"></span>

  <div class="form-group row">
    <label for="instructor4"  class="col-sm-3 col-form-label"><strong>Instructor 04:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor4" name="instructor4" value="" autocomplete="off">
    <div id="nameList4"></div>
  </div>
  </div>
  <span id="message5"></span>

  <div class="form-group row">
    <label for="instructor5"  class="col-sm-3 col-form-label"><strong>Instructor 05:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor5" name="instructor5" value="" autocomplete="off">
    <div id="nameList5"></div>
  </div>
  </div>
  <span id="message6"></span>

  <div class="form-group row">
    <label for="TA"  class="col-sm-3 col-form-label"><strong>Tutorial Assistant:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="TA" name="TA" value="" autocomplete="off">
    <div id="nameList6"></div>
  </div>
  </div>
  <span id="message7"></span>

  <div class="form-group row">
    <label for="technical_staff"  class="col-sm-3 col-form-label"><strong>Technical Staff 01:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff" name="technical_staff" value="" autocomplete="off">
    <div id="nameList7"></div>
  </div>
  </div>
  <span id="message8"></span>

  <div class="form-group row">
    <label for="technical_staff2"  class="col-sm-3 col-form-label"><strong>Technical Staff 02:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff2" name="technical_staff2" value="" autocomplete="off">
    <div id="nameList8"></div>
  </div>
  </div>
  <span id="message9"></span>


  {{-- <div class="form-group row">
    <label for="course_type"  class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type">
    <option value=""></option>
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
  </select>
  </div>
  </div>
  <span id="message1"></span> --}}

  <div class="form-group row">
    <label for="semester"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester">
     <option value=""></option>
    <option value="1">Semester 1</option>
    <option value="2">semester 2</option>
  </select>
  </div>
  </div>
<span id="message"></span>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary" id="newdata">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
<div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'Active Instructors')" id="defaultOpen"><strong>ACTIVE COURSES AND INSTRUCTORS</strong></button>
  <button class="tablinks" style="float: right;" onclick="openInstructors(event, 'Inactive Instructors')"><strong>INACTIVE  COURSES AND INSTRUCTORS</strong></button>
</div>
<div id="Active Instructors" class="tabcontent">
  <br>
  <h4>1. ACTIVE COURSES AND INSTRUCTORS.</h4>
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
     <th scope="col" style="color:#3490dc;"><center>Course ID</center></th>
      <th scope="col" style="color:#3490dc;"><center>Course Name</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_1</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_2</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_3</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_4</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_5</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Tutorial Assistant</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Technical Staff 1</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Technical Staff 2</center></th>
      {{-- <th scope="col" style="color:#3490dc;">Course Type</th> --}}
      <th scope="col" style="color:#3490dc;"><center>Semester</center></th>
       <th scope="col" style="width: 114px; color:#3490dc;"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors1 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{ $instructors->course}}</center></td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_Staff_2}}</td>
      {{-- <td>{{ $instructors->course_type}}</td> --}}
      <td><center>{{ $instructors->semester}}</center></td>
      <td><center><a data-toggle="modal" data-target="#edit{{$instructors->id}}" role="button" aria-pressed="true" name="editC"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$instructors->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editinstructor')}}" name="formB">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="course{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course ID: </strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="course{{$instructors->id}}" name="course" value="{{$instructors->course}}" readonly="">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="course_name{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="course_name{{$instructors->id}}" name="course_name" value="{{$instructors->course_name}}" autocomplete="off">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor{{$instructors->id}}" name="instructor" value="{{$instructors->instructor}}" autocomplete="off" required>
    <div id="nameList{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message2{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorA{{$instructors->id}}" name="instructor2" value="{{$instructors->Instructor_2}}" autocomplete="off">
    <div id="nameList2{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message3{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorB{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 03:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorB{{$instructors->id}}" name="instructor3" value="{{$instructors->Instructor_3}}" autocomplete="off">
    <div id="nameList3{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message4{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorC{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 04:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorC{{$instructors->id}}" name="instructor4" value="{{$instructors->Instructor_4}}" autocomplete="off">
    <div id="nameList4{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message5{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorD{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 05:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorD{{$instructors->id}}" name="instructor5" value="{{$instructors->Instructor_5}}" autocomplete="off">
    <div id="nameList5{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message6{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="TA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Tutorial Assistant:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="TA{{$instructors->id}}" name="TA" value="{{$instructors->Tutorial_Assistant}}" autocomplete="off">
    <div id="nameList6{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message7{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="technical_staff{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staff{{$instructors->id}}" name="technical_staff" value="{{$instructors->technical_staff}}" autocomplete="off">
    <div id="nameList7{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message8{{$instructors->id}}"></span>
  <br>
  <div class="form-group row">
    <label for="technical_staffA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staffA{{$instructors->id}}" name="technical_staff2" value="{{$instructors->Technical_Staff_2}}" autocomplete="off">
    <div id="nameList8{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message9{{$instructors->id}}"></span>
  <br>

 {{--  <div class="form-group row">
    <label for="course_type{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type{{$instructors->id}}">
    @if($instructors->course_type=="Core")
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @elseif($instructors->course_type=="Elective")
    <option value="Elective">Elective</option>
    <option value="Core">Core</option>
    @else
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @endif
  </select>
  </div>
  </div>
<br> --}}
  <div class="form-group row">
    <label for="semester{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester{{$instructors->id}}">
    @if($instructors->semester == 1)
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @elseif($instructors->semester == 2)
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

  <input type="hidden" id="id{{$instructors->id}}" name="id" value="{{$instructors->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
<a data-toggle="modal" data-target="#Deactivate{{$instructors->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>

        <div class="modal fade" id="Deactivate{{$instructors->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color:red;">WARNING!!!</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <h5>Are you sure you want to deactivate this course?</h5>
            <br>
            <br>
           <div align="right">
<a class="btn btn-sm btn-info" href="{{route('DeleteLecturer',$instructors->id)}}">Proceed</a>
<a class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</a>

</div>
</div>
</div>
</div>
</div>

</center>
      </td>
       </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>
<center><a class="btn btn-sm btn-success" href="{{route('CSEpdf')}}">PRINT</a></center>
</div>
<div id="Inactive Instructors" class="tabcontent">
<h4>1. INACTIVE COURSES AND INSTRUCTORS.</h4>
<br>
<?php
$i='1';
?>
<table class="hover table table-striped table-bordered" id="myTable1">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
     <th scope="col" style="color:#3490dc;"><center>Course ID</center></th>
      <th scope="col" style="color:#3490dc;"><center>Course Name</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_1</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_2</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_3</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_4</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Instructor_5</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Tutorial Assistant</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Technical Staff 1</center></th>
      <th scope="col"  style="color:#3490dc;"><center>Technical Staff 2</center></th>
      {{-- <th scope="col" style="color:#3490dc;"><center>Course Type</center></th> --}}
      <th scope="col" style="color:#3490dc;"><center>Semester</center></th>
       <th scope="col" style="width: 114px; color:#3490dc;"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors11 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_Staff_2}}</td>
      {{-- <td>{{ $instructors->course_type}}</td> --}}
      <td>{{ $instructors->semester}}</td>
      <td><center><a data-toggle="modal" data-target="#edit{{$instructors->id}}" role="button" aria-pressed="true" class="btn btn-info">ACTIVATE <i class="fa fa-check-circle" style="font-size:16px; color: green;"></i></a></center>

        <div class="modal fade" id="edit{{$instructors->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Confirm the Details Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('activateinstructor')}}" name="formC">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="course{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course ID: </strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="course{{$instructors->id}}" name="course" value="{{$instructors->course}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="course_name{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="course_name{{$instructors->id}}" name="course_name" value="{{$instructors->course_name}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor{{$instructors->id}}" name="instructor" value="{{$instructors->instructor}}" required>
    <div id="nameList{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message2{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorA{{$instructors->id}}" name="instructor2" value="{{$instructors->Instructor_2}}" autocomplete="off">
    <div id="nameList2{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message3{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorB{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 03:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorB{{$instructors->id}}" name="instructor3" value="{{$instructors->Instructor_3}}" autocomplete="off">
    <div id="nameList3{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message4{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructorC{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 04:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorC{{$instructors->id}}" name="instructor4" value="{{$instructors->Instructor_4}}" autocomplete="off">
    <div id="nameList4{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message5{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="instructor5{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 05:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructorD{{$instructors->id}}" name="instructor5" value="{{$instructors->Instructor_5}}" autocomplete="off">
    <div id="nameList5{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message6{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="TA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Tutorial Assistant:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="TA{{$instructors->id}}" name="TA" value="{{$instructors->Tutorial_Assistant}}" autocomplete="off">
    <div id="nameList6{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message7{{$instructors->id}}"></span>
  <br>

  <div class="form-group row">
    <label for="technical_staff{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staff{{$instructors->id}}" name="technical_staff" value="{{$instructors->technical_staff}}" autocomplete="off">
    <div id="nameList7{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message8{{$instructors->id}}"></span>
  <br>
  <div class="form-group row">
    <label for="technical_staffA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staffA{{$instructors->id}}" name="technical_staff2" value="{{$instructors->Technical_Staff_2}}" autocomplete="off">
    <div id="nameList8{{$instructors->id}}"></div>
  </div>
  </div>
  <span id="message9{{$instructors->id}}"></span>
  <br>

 {{--  <div class="form-group row">
    <label for="course_type{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type{{$instructors->id}}">
    @if($instructors->course_type=="Core")
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @elseif($instructors->course_type=="Elective")
    <option value="Elective">Elective</option>
    <option value="Core">Core</option>
    @else
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @endif
  </select>
  </div>
  </div>
<br> --}}
  <div class="form-group row">
    <label for="semester{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester{{$instructors->id}}">
    @if($instructors->semester == 1)
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @elseif($instructors->semester == 2)
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

  <input type="hidden" id="id{{$instructors->id}}" name="id" value="{{$instructors->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">ACTIVATE</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>


      </td>
       </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>

@else
<h3 style="color: red;">SORRY!!!YOU DO NOT HAVE PERMISSION TO VIEW THIS PAGE</h3>
@endif

</div>

<meta name="viewport" content="width=device-width, initial-scale=1">

@endsection

@section('pagescript')


<script>
function getdata(){
       var txtone = document.forms["form1"]["semester"].value;
        // var txttwo = document.forms["form1"]["course_type"].value;
       


      if (txtone==='') {
        $('#message').show();
        var message=document.getElementById('message');
        message.style.color='red';
        message.innerHTML=" Please fill Semester";
        return false;
      }
      else{
        $('#message').hide();
      }

    //   if(txttwo === ''){
    //     $('#message1').show();
    //     var message=document.getElementById('message1');
    //     message.style.color='red';
    //     message.innerHTML="Please fill Course type";
    //     return false;
    // }

    // else{
    //   $('#message1').hide();
    // }

}
</script>

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>

<script type="text/javascript">
 $(document).ready(function() {
  
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");
});

</script>

<script type="text/javascript">
 $(document).ready(function() {
  
    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );

$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");
});

</script>

<script>
$(document).ready(function(){
  var a =" ";
  var b = " ";
  var c= " ";
  var d=" ";
  var f =" ";
  var g = "";
  var h = "";
  var z="";

$('#myTable').on('click', '[name="course_name"]', function(e){
    e.preventDefault();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
      var query = $('#course'+reg).val();
      console.log(query);
    if(query!=''){
       var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.course') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            $('#course_name'+reg).val(data);
          }
          });
    }
  });

$('#myTable1').on('click', '[name="course_name"]', function(e){
    e.preventDefault();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
      var query = $('#course'+reg).val();
      console.log(query);
    if(query!=''){
       var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.course') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            $('#course_name'+reg).val(data);
          }
          });
    }
  });

  $('#course_name').click(function(){
    var query = $('#course').val();
    if(query!=''){
       var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.course') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            $('#course_name').val(data);
          }
          });
    }
  });

 $('#instructor').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor').attr('style','border:1px solid #f00');
             a = '0';
            }
            else{
              a ='1';
              $('#message2').hide();
              $('#instructor').attr('style','border:1px solid #ced4da'); 
           $('#nameList').fadeIn();  
                    $('#nameList').html(data);
          }
        }
         });
        }
        else if(query==''){
          a ='1';
              $('#message2').hide();
              $('#instructor').attr('style','border:1px solid #ced4da');
        }
    });
 $(document).on('click', '#list', function(){
   a ='1';
   $('#message2').hide();
  $('#instructor').attr('style','border:1px solid #ced4da');

        $('#instructor').val($(this).text());
          
        $('#nameList').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList').fadeOut();  
    }); 
 //instructor 2
 $('#instructor2').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch1') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor2').attr('style','border:1px solid #f00');
             b = '0';
            }
            else{
              b ='1';
              $('#message3').hide();
              $('#instructor2').attr('style','border:1px solid #ced4da'); 
           $('#nameList2').fadeIn();  
                    $('#nameList2').html(data);
          }
        }
         });
        }
        else if(query==''){
          b ='1';
              $('#message3').hide();
              $('#instructor2').attr('style','border:1px solid #ced4da');
        }
    });

    $(document).on('click', '#list1', function(){
      b ='1';
      $('#message3').hide();
     $('#instructor2').attr('style','border:1px solid #ced4da');
        $('#instructor2').val($(this).text());
          
        $('#nameList2').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList2').fadeOut();  
    }); 

     //instructor3
$('#instructor3').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch2') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor3').attr('style','border:1px solid #f00');
             c = '0';
            }
            else{
              c ='1';
              $('#message4').hide();
              $('#instructor3').attr('style','border:1px solid #ced4da'); 
           $('#nameList3').fadeIn();  
                    $('#nameList3').html(data);
          }
        }
         });
        }
         else if(query==''){
          c ='1';
              $('#message4').hide();
              $('#instructor3').attr('style','border:1px solid #ced4da');
         }
    });

    $(document).on('click', '#list2', function(){
      c ='1';
      $('#message4').hide();
      $('#instructor3').attr('style','border:1px solid #ced4da');
        $('#instructor3').val($(this).text());
          
        $('#nameList3').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList3').fadeOut();  
    }); 

     //instructor 4
     $('#instructor4').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch3') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor4').attr('style','border:1px solid #f00');
             d = '0';
            }
            else{
              d ='1';
              $('#message5').hide();
              $('#instructor4').attr('style','border:1px solid #ced4da'); 
           $('#nameList4').fadeIn();  
                    $('#nameList4').html(data);
          }
        }
         });
        }
        else if(query==''){
          d ='1';
              $('#message5').hide();
              $('#instructor4').attr('style','border:1px solid #ced4da');
        }
    });

    $(document).on('click', '#list3', function(){
      d ='1';
      $('#message5').hide();
      $('#instructor4').attr('style','border:1px solid #ced4da');
        $('#instructor4').val($(this).text());
          
        $('#nameList4').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList4').fadeOut();  
    }); 
//instructor 5
$('#instructor5').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch4') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor5').attr('style','border:1px solid #f00');
             f = '0';
            }
            else{
              f ='1';
              $('#message6').hide();
              $('#instructor5').attr('style','border:1px solid #ced4da'); 
           $('#nameList5').fadeIn();  
                    $('#nameList5').html(data);
          }
        }
         });
        }
        else if(query==''){
          f ='1';
              $('#message6').hide();
              $('#instructor5').attr('style','border:1px solid #ced4da'); 
        }
    });

    $(document).on('click', '#list4', function(){
      f ='1';
      $('#message6').hide();
              $('#instructor5').attr('style','border:1px solid #ced4da'); 
        $('#instructor5').val($(this).text());
          
        $('#nameList5').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList5').fadeOut();  
    }); 

     //TA
     $('#TA').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch5') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#TA').attr('style','border:1px solid #f00');
             g = '0';
            }
            else{
              g ='1';
              $('#message7').hide();
              $('#TA').attr('style','border:1px solid #ced4da'); 
           $('#nameList6').fadeIn();  
                    $('#nameList6').html(data);
          }
        }
         });
        }
        else if(query==''){
          g ='1';
              $('#message7').hide();
              $('#TA').attr('style','border:1px solid #ced4da'); 
        }
    });

    $(document).on('click', '#list5', function(){
       g ='1';
       $('#message7').hide();
              $('#TA').attr('style','border:1px solid #ced4da'); 
        $('#TA').val($(this).text());
          
        $('#nameList6').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList6').fadeOut();  
    }); 

     //Technical Staff
     $('#technical_staff').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch6') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staff').attr('style','border:1px solid #f00');
             h = '0';
            }
            else{
              h ='1';
              $('#message8').hide();
              $('#technical_staff').attr('style','border:1px solid #ced4da'); 
           $('#nameList7').fadeIn();  
                    $('#nameList7').html(data);
          }
        }
         });
        }
        else if(query==''){
          h ='1';
              $('#message8').hide();
              $('#technical_staff').attr('style','border:1px solid #ced4da'); 
        }
    });

    $(document).on('click', '#list6', function(){
       h ='1';
       $('#message8').hide();
              $('#technical_staff').attr('style','border:1px solid #ced4da'); 
        $('#technical_staff').val($(this).text());
          
        $('#nameList7').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList7').fadeOut();  
    }); 

     //Technical Staff 2
      $('#technical_staff2').keyup(function(e){ 
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch7') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staff2').attr('style','border:1px solid #f00');
             z = '0';
            }
            else{
              z ='1';
              $('#message9').hide();
              $('#technical_staff2').attr('style','border:1px solid #ced4da'); 
           $('#nameList8').fadeIn();  
                    $('#nameList8').html(data);
          }
        }
         });
        }
        else if(query==''){
          z ='1';
              $('#message9').hide();
              $('#technical_staff2').attr('style','border:1px solid #ced4da'); 
        }
    });

    $(document).on('click', '#list7', function(){
      z ='1';
       $('#message9').hide();
              $('#technical_staff2').attr('style','border:1px solid #ced4da'); 
        $('#technical_staff2').val($(this).text());
          
        $('#nameList8').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList8').fadeOut();  
    }); 

//on submit
    $("#form1").submit(function(e) { 

      if(a=='0'){
        $('#message2').show();
         var message=document.getElementById('message2');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(b=='0'){
        $('#message3').show();
         var message=document.getElementById('message3');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(c=='0'){
        $('#message4').show();
         var message=document.getElementById('message4');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(d=='0'){
        $('#message5').show();
         var message=document.getElementById('message5');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(f=='0'){
        console.log(f);
        $('#message6').show();
         var message=document.getElementById('message6');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(g=='0'){
        console.log(f);
        $('#message7').show();
         var message=document.getElementById('message7');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(h=='0'){
        console.log(f);
        $('#message8').show();
         var message=document.getElementById('message8');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(z=='0'){
        console.log(f);
        $('#message9').show();
         var message=document.getElementById('message9');
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      else if(a=='1' && b=='1' &&c=='1'&&d=='1'&&f=='1'&&g=='1'&&h=='1'&&z=='1'){

        return true;

        $("#form1").ajaxSubmit({url: 'newinstructor', type: 'get'});
    
    }

});
var globalreg='';
//instructor 1
$('#myTable').on('keyup', '[name="instructor"]', function(e){
  console.log(1);
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
        
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor'+reg).attr('style','border:1px solid #f00');
             a = '0';
            }
            else{
              a ='1';
              $('#message2'+reg).hide();
              $('#instructor'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList'+reg).fadeIn();  
                    $('#nameList'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          a ='1';
              $('#message2'+reg).hide();
              $('#instructor').attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list', function(){
   a ='1';
   $('#message2'+globalreg).hide();
  $('#instructor'+globalreg).attr('style','border:1px solid #ced4da');

        $('#instructor'+globalreg).val($(this).text());
          
        $('#nameList'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList'+globalreg).fadeOut();  
    }); 

//instructor 2
$('#myTable').on('keyup', '[name="instructor2"]', function(e){ 
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch1') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorA'+reg).attr('style','border:1px solid #f00');
             b = '0';
            }
            else{
              b ='1';
              $('#message3'+reg).hide();
              $('#instructorA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList2'+reg).fadeIn();  
                    $('#nameList2'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          b ='1';
              $('#message3'+reg).hide();
              $('#instructorA'+reg).attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list1', function(){
      b ='1';
      $('#message3'+globalreg).hide();
     $('#instructorA'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorA'+globalreg).val($(this).text());
          
        $('#nameList2'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList2'+globalreg).fadeOut();  
    });

    //instructor 3
    $('#myTable').on('keyup', '[name="instructor3"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch2') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorB'+reg).attr('style','border:1px solid #f00');
             c = '0';
            }
            else{
              c ='1';
              $('#message4'+reg).hide();
              $('#instructorB'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList3'+reg).fadeIn();  
                    $('#nameList3'+reg).html(data);
          }
        }
         });
        }
         else if(query==''){
          c ='1';
              $('#message4'+reg).hide();
              $('#instructorB'+reg).attr('style','border:1px solid #ced4da');
         }
         globalreg=reg;
    });

    $(document).on('click', '#list2', function(){
      c ='1';
      $('#message4'+globalreg).hide();
      $('#instructorB'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorB'+globalreg).val($(this).text());
          
        $('#nameList3'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList3'+globalreg).fadeOut();  
    });

    //instructor 4
    $('#myTable').on('keyup', '[name="instructor4"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch3') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorC'+reg).attr('style','border:1px solid #f00');
             d = '0';
            }
            else{
              d ='1';
              $('#message5'+reg).hide();
              $('#instructorC'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList4'+reg).fadeIn();  
                    $('#nameList4'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          d ='1';
              $('#message5'+reg).hide();
              $('#instructorC'+reg).attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list3', function(){
      d ='1';
      $('#message5'+globalreg).hide();
      $('#instructorC'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorC'+globalreg).val($(this).text());
          
        $('#nameList4'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList4'+globalreg).fadeOut();  
    }); 
    //instructor 5
    $('#myTable').on('keyup', '[name="instructor5"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch4') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorD'+reg).attr('style','border:1px solid #f00');
             f = '0';
            }
            else{
              f ='1';
              $('#message6'+reg).hide();
              $('#instructorD'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList5'+reg).fadeIn();  
                    $('#nameList5'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          f ='1';
              $('#message6'+reg).hide();
              $('#instructorD'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list4', function(){
      f ='1';
      $('#message6'+globalreg).hide();
      $('#instructorD'+globalreg).attr('style','border:1px solid #ced4da'); 
      $('#instructorD'+globalreg).val($(this).text());
          
        $('#nameList5'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList5'+globalreg).fadeOut();  
    }); 
    //TA
    $('#myTable').on('keyup', '[name="TA"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch5') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#TA'+reg).attr('style','border:1px solid #f00');
             g = '0';
            }
            else{
              g ='1';
              $('#message7'+reg).hide();
              $('#TA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList6'+reg).fadeIn();  
                    $('#nameList6'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          g ='1';
              $('#message7'+reg).hide();
              $('#TA'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list5', function(){
       g ='1';
       $('#message7'+globalreg).hide();
              $('#TA'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#TA'+globalreg).val($(this).text());
          
        $('#nameList6'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList6'+globalreg).fadeOut();  
    }); 

     //Technical Staff
     $('#myTable').on('keyup', '[name="technical_staff"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch6') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staff'+reg).attr('style','border:1px solid #f00');
             h = '0';
            }
            else{
              h ='1';
              $('#message8'+reg).hide();
              $('#technical_staff'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList7'+reg).fadeIn();  
                    $('#nameList7'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          h ='1';
              $('#message8'+reg).hide();
              $('#technical_staff'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list6', function(){
       h ='1';
       $('#message8'+globalreg).hide();
              $('#technical_staff'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#technical_staff'+globalreg).val($(this).text());
          
        $('#nameList7'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList7'+globalreg).fadeOut();  
    }); 

     //Technical Staff 2
     $('#myTable').on('keyup', '[name="technical_staff2"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch7') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staffA'+reg).attr('style','border:1px solid #f00');
             z = '0';
            }
            else{
              z ='1';
              $('#message9'+reg).hide();
              $('#technical_staffA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList8'+reg).fadeIn();  
                    $('#nameList8'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          z ='1';
              $('#message9'+reg).hide();
              $('#technical_staffA'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
        console.log(z);
    });

    $(document).on('click', '#list7', function(){
      z ='1';
       $('#message9'+globalreg).hide();
              $('#technical_staffA'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#technical_staffA'+globalreg).val($(this).text());
          
        $('#nameList8'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList8'+globalreg).fadeOut();  
    }); 

     //On submit
     $('#myTable').on('submit', '[name="formB"]', function(e){
     
      if(a=='0'){
        $('#message2'+globalreg).show();
         var message=document.getElementById('message2'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(b=='0'){
        $('#message3'+globalreg).show();
         var message=document.getElementById('message3'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(c=='0'){
        $('#message4'+globalreg).show();
         var message=document.getElementById('message4'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(d=='0'){
        $('#message5'+globalreg).show();
         var message=document.getElementById('message5'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(f=='0'){
        $('#message6'+globalreg).show();
         var message=document.getElementById('message6'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(g=='0'){
        $('#message7'+globalreg).show();
         var message=document.getElementById('message7'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(h=='0'){
        $('#message8'+globalreg).show();
         var message=document.getElementById('message8'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(z=='0'){
        $('#message9'+globalreg).show();
         var message=document.getElementById('message9'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      else if(a=='1' && b=='1' &&c=='1'&&d=='1'&&f=='1'&&g=='1'&&h=='1'&&z=='1'){

        return true;

        // $("#form1").ajaxSubmit({url: 'newinstructor', type: 'get'});
    
    }

});
 

 //inactive
 $('#myTable1').on('keyup', '[name="instructor"]', function(e){
  console.log(1);
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
        
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructor'+reg).attr('style','border:1px solid #f00');
             a = '0';
            }
            else{
              a ='1';
              $('#message2'+reg).hide();
              $('#instructor'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList'+reg).fadeIn();  
                    $('#nameList'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          a ='1';
              $('#message2'+reg).hide();
              $('#instructor').attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list', function(){
   a ='1';
   $('#message2'+globalreg).hide();
  $('#instructor'+globalreg).attr('style','border:1px solid #ced4da');

        $('#instructor'+globalreg).val($(this).text());
          
        $('#nameList'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList'+globalreg).fadeOut();  
    }); 

//instructor 2
$('#myTable1').on('keyup', '[name="instructor2"]', function(e){ 
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch1') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorA'+reg).attr('style','border:1px solid #f00');
             b = '0';
            }
            else{
              b ='1';
              $('#message3'+reg).hide();
              $('#instructorA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList2'+reg).fadeIn();  
                    $('#nameList2'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          b ='1';
              $('#message3'+reg).hide();
              $('#instructorA'+reg).attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list1', function(){
      b ='1';
      $('#message3'+globalreg).hide();
     $('#instructorA'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorA'+globalreg).val($(this).text());
          
        $('#nameList2'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList2'+globalreg).fadeOut();  
    });

    //instructor 3
    $('#myTable1').on('keyup', '[name="instructor3"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch2') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorB'+reg).attr('style','border:1px solid #f00');
             c = '0';
            }
            else{
              c ='1';
              $('#message4'+reg).hide();
              $('#instructorB'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList3'+reg).fadeIn();  
                    $('#nameList3'+reg).html(data);
          }
        }
         });
        }
         else if(query==''){
          c ='1';
              $('#message4'+reg).hide();
              $('#instructorB'+reg).attr('style','border:1px solid #ced4da');
         }
         globalreg=reg;
    });

    $(document).on('click', '#list2', function(){
      c ='1';
      $('#message4'+globalreg).hide();
      $('#instructorB'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorB'+globalreg).val($(this).text());
          
        $('#nameList3'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList3'+globalreg).fadeOut();  
    });

    //instructor 4
    $('#myTable1').on('keyup', '[name="instructor4"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch3') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorC'+reg).attr('style','border:1px solid #f00');
             d = '0';
            }
            else{
              d ='1';
              $('#message5'+reg).hide();
              $('#instructorC'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList4'+reg).fadeIn();  
                    $('#nameList4'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          d ='1';
              $('#message5'+reg).hide();
              $('#instructorC'+reg).attr('style','border:1px solid #ced4da');
        }
        globalreg=reg;
    });

    $(document).on('click', '#list3', function(){
      d ='1';
      $('#message5'+globalreg).hide();
      $('#instructorC'+globalreg).attr('style','border:1px solid #ced4da');
        $('#instructorC'+globalreg).val($(this).text());
          
        $('#nameList4'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList4'+globalreg).fadeOut();  
    }); 
    //instructor 5
    $('#myTable1').on('keyup', '[name="instructor5"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch4') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#instructorD'+reg).attr('style','border:1px solid #f00');
             f = '0';
            }
            else{
              f ='1';
              $('#message6'+reg).hide();
              $('#instructorD'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList5'+reg).fadeIn();  
                    $('#nameList5'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          f ='1';
              $('#message6'+reg).hide();
              $('#instructorD'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list4', function(){
      f ='1';
      $('#message6'+globalreg).hide();
      $('#instructorD'+globalreg).attr('style','border:1px solid #ced4da'); 
      $('#instructorD'+globalreg).val($(this).text());
          
        $('#nameList5'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList5'+globalreg).fadeOut();  
    }); 
    //TA
    $('#myTable1').on('keyup', '[name="TA"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch5') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#TA'+reg).attr('style','border:1px solid #f00');
             g = '0';
            }
            else{
              g ='1';
              $('#message7'+reg).hide();
              $('#TA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList6'+reg).fadeIn();  
                    $('#nameList6'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          g ='1';
              $('#message7'+reg).hide();
              $('#TA'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list5', function(){
       g ='1';
       $('#message7'+globalreg).hide();
              $('#TA'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#TA'+globalreg).val($(this).text());
          
        $('#nameList6'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList6'+globalreg).fadeOut();  
    }); 

     //Technical Staff
     $('#myTable1').on('keyup', '[name="technical_staff"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch6') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staff'+reg).attr('style','border:1px solid #f00');
             h = '0';
            }
            else{
              h ='1';
              $('#message8'+reg).hide();
              $('#technical_staff'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList7'+reg).fadeIn();  
                    $('#nameList7'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          h ='1';
              $('#message8'+reg).hide();
              $('#technical_staff'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
    });

    $(document).on('click', '#list6', function(){
       h ='1';
       $('#message8'+globalreg).hide();
              $('#technical_staff'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#technical_staff'+globalreg).val($(this).text());
          
        $('#nameList7'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList7'+globalreg).fadeOut();  
    }); 

     //Technical Staff 2
     $('#myTable1').on('keyup', '[name="technical_staff2"]', function(e){
        e.preventDefault();
        var query = $(this).val();
        var id = $("#"+e.target.id).val();
        let reg = e.target.id.replace(/\D/g,'');
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch7') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data=='0'){
             $('#technical_staffA'+reg).attr('style','border:1px solid #f00');
             z = '0';
            }
            else{
              z ='1';
              $('#message9'+reg).hide();
              $('#technical_staffA'+reg).attr('style','border:1px solid #ced4da'); 
           $('#nameList8'+reg).fadeIn();  
                    $('#nameList8'+reg).html(data);
          }
        }
         });
        }
        else if(query==''){
          z ='1';
              $('#message9'+reg).hide();
              $('#technical_staffA'+reg).attr('style','border:1px solid #ced4da'); 
        }
        globalreg=reg;
        console.log(z);
    });

    $(document).on('click', '#list7', function(){
      z ='1';
       $('#message9'+globalreg).hide();
              $('#technical_staffA'+globalreg).attr('style','border:1px solid #ced4da'); 
        $('#technical_staffA'+globalreg).val($(this).text());
          
        $('#nameList8'+globalreg).fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList8'+globalreg).fadeOut();  
    }); 

     //On submit
     $('#myTable1').on('submit', '[name="formC"]', function(e){
     
      if(a=='0'){
        $('#message2'+globalreg).show();
         var message=document.getElementById('message2'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(b=='0'){
        $('#message3'+globalreg).show();
         var message=document.getElementById('message3'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(c=='0'){
        $('#message4'+globalreg).show();
         var message=document.getElementById('message4'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(d=='0'){
        $('#message5'+globalreg).show();
         var message=document.getElementById('message5'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(f=='0'){
        $('#message6'+globalreg).show();
         var message=document.getElementById('message6'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(g=='0'){
        $('#message7'+globalreg).show();
         var message=document.getElementById('message7'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(h=='0'){
        $('#message8'+globalreg).show();
         var message=document.getElementById('message8'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      if(z=='0'){
        $('#message9'+globalreg).show();
         var message=document.getElementById('message9'+globalreg);
        message.style.color='red';
        message.innerHTML="This instructor is not registered";
        return false;
      }
      else if(a=='1' && b=='1' &&c=='1'&&d=='1'&&f=='1'&&g=='1'&&h=='1'&&z=='1'){

        return true;

        // $("#form1").ajaxSubmit({url: 'newinstructor', type: 'get'});
    
    }

});


    });
</script>
<script type="text/javascript">
  function openInstructors(evt, evtName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(evtName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
@endsection