@extends('layouts.app')

@section('title')
  GENERAL REPORTS
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
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>

</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container3" style="padding-left: 107px;">
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
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
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
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>

  </ul>
  </center>
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
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
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
<?php
use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->get();
?>

<br>
<div class="container">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Type of Report</h5>
    <hr>

  <a data-toggle="modal" data-target="#students" class="btn styling color_nav3 active" role="button" aria-pressed="true">STUDENTS</a>
  <br>
  <br>
  <a data-toggle="modal" data-target="#staffs" class="btn styling color_nav3 active" role="button" aria-pressed="true">STAFF</a>
  <br>
  <br>
  <a data-toggle="modal" data-target="#events" class="btn styling color_nav3 active" role="button" aria-pressed="true">EVENTS</a>
  <br>
  <br>
  <a data-toggle="modal" data-target="#courses" class="btn styling color_nav3 active" role="button" aria-pressed="true">COURSES</a>
  <br>
  <br>
  <a data-toggle="modal" data-target="#reservations" class="btn styling color_nav3 active" role="button" aria-pressed="true">RESERVATIONS</a>

  <div class="modal fade" id="students" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="studentsform" action="{{ route('Generalstudentspdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">Get By:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select</option>
                     <option value="1" id="Option" >Degree Program</option>
                    <option value="2" id="Option">Course</option>
                  </select>
                </div>
               </div>


               <div class="form-group row">
                  <label for="Criteria" class="col-sm-4 col-form-label">Criteria:</label>
                   <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="Selection" id="ActiveStudents1" value="1" checked>
                   <label class="form-check-label" for="ActiveStudents1">Active</label>
                   </div>
                   <div class="form-check form-check-inline"> 
                   <input class="form-check-input" type="radio" name="Selection" id="InactiveStudents1" value="0">
                    <label class="form-check-label" for="InactiveStudents1">Inactive</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Selection" id="AllStudents1" value="All">
                  <label class="form-check-label" for="AllStudents1">All Students</label>
                  </div>
                 </div>
           </div>

  <div class="form-group row" id="program" style="display:none">
  <label for="dprogram"  class="col-sm-4 col-form-label">Degree Program:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="dprogram" id="dprogram">
    <option value="">Select Degree Program</option>
     <option value="18">BSc. in Business Information Technology year 1</option>
    <option value="19">BSc. in Business Information Technology year 2</option>
    <option value="20">BSc. in Business Information Technology year 3</option>
    <option value="5"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="6">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="7">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="11">B.Sc. in Computer Science year 1</option>
    <option value="12">B.Sc. in Computer Science year 2</option>
    <option value="13">B.Sc. in Computer Science year 3</option>
    <option value="21">B.Sc. with Computer Science 1</option>
    <option value="22">B.Sc. with Computer Science</option>
    <option value="23">B.Sc. with Computer Science 3</option>
    <option value="28">Certificate in Computer Science</option>
    <option value="29">Diploma in Computer Science year 1</option>
    <option value="30">Diploma in Computer Science year 2</option>
    <option value="24">B.Sc. in Electronic Engineering year 1</option>
    <option value="25">B.Sc. in Electronic Engineering year 2</option>
    <option value="26">B.Sc. in Electronic Engineering year 3</option>
    <option value="27">B.Sc. in Electronic Engineering year 4</option>
    <option value="8">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="9">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="10">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="14">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="15">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="16">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="17">B.Sc. in Telecommunications Engineering 4</option>
  </select>
  <span id="dprogram_alert"></span>
  </div>
  </div>

  <div class="form-group row" id="course" style="display:none">
    <label for="courseid"  class="col-sm-4 col-form-label">Course Id:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="courseid" id="courseid">
    <option value="">Select Course ID</option>
    @foreach($mycourse as $mycourse)
    <option value="{{$mycourse->course}}">{{$mycourse->course}}</option>
    @endforeach
  </select>
  <span id="courseid_alert"></span>
  </div>
  </div>

  <div id="StudentCheckbox">
      <div class="form-group row" >
      <label for="inputEmail3" class="col-sm-4 col-form-label">Show Fees Status</label>
      <div class="col-sm-8">
      <input id="fees_status" type="checkbox" name="studentcheckbox" value="true">
      </div>
      </div>
    </div>

     <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
     </form>
  </div>

  </div>
  </div>
  </div>

   <div class="modal fade" id="staffs" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('Generalstaffpdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">DEPARTMENT:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select</option>
                     <option value="31">Computer Science and Engineering</option>
                    <option value="32">Electronics and Telecommunications Engineering</option>
                    <option value="100">All Staff</option>
                  </select>
                </div>
               </div>

                <div class="form-group row">
                  <label for="Criteria" class="col-sm-4 col-form-label">CRITERIA:</label>
                   <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="Selection" id="ActiveStudents1" value="1" checked>
                   <label class="form-check-label" for="ActiveStudents1">Active</label>
                   </div>
                   <div class="form-check form-check-inline"> 
                   <input class="form-check-input" type="radio" name="Selection" id="InactiveStudents1" value="0">
                    <label class="form-check-label" for="InactiveStudents1">Inactive</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Selection" id="AllStudents1" value="All">
                  <label class="form-check-label" for="AllStudents1">All</label>
                  </div>
                 </div>
           </div>

           <center><button class="btn btn-primary" type="submit">Generate Report</button></center>

               </form>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="events" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('Generaleventspdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">EVENT NAME:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select Event Type</option>
                     <option value="HOLIDAY">Holiday</option>
                    <option value="CANCELLATION">Class Cancellation</option>
                    <option value="All">All Events</option>
                  </select>
                </div>
                </div>

                <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">Semester No:</label>
                   <div class="col-sm-8">
                  <select name="semester" id="getSemester" class="custom-select Reason" required="">
                    <option value="" id="">Select Semester No.</option>
                     <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="All">All Semesters</option>
                  </select>
                </div>
               </div>
               

           <center><button class="btn btn-primary" type="submit">Generate Report</button></center>

               </form>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="courses" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('Generalcoursepdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}

                 <div class="form-group row" id="program">
  <label for="dprogram"  class="col-sm-4 col-form-label">Degree Program:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="dprogram" id="dprogram" required="">
    <option value="">Select Degree Program</option>
     <option value="BIT1">BSc. in Business Information Technology year 1</option>
    <option value="BIT2">BSc. in Business Information Technology year 2</option>
    <option value="BIT3">BSc. in Business Information Technology year 3</option>
    <option value="CEIT1"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="CEIT2">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="CEIT3">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="CEIT4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="CS1(in)">B.Sc. in Computer Science year 1</option>
    <option value="CS2(in)">B.Sc. in Computer Science year 2</option>
    <option value="CS3(in)">B.Sc. in Computer Science year 3</option>
    <option value="CS1(with)">B.Sc. with Computer Science 1</option>
    <option value="CS2(with)">B.Sc. with Computer Science</option>
    <option value="CS3(with)">B.Sc. with Computer Science 3</option>
    <option value="CS(Cert)">Certificate in Computer Science</option>
    <option value="CS1(Dipl.)">Diploma in Computer Science year 1</option>
    <option value="CS2(Dipl.)">Diploma in Computer Science year 2</option>
    <option value="EE1">B.Sc. in Electronic Engineering year 1</option>
    <option value="EE2">B.Sc. in Electronic Engineering year 2</option>
    <option value="EE3">B.Sc. in Electronic Engineering year 3</option>
    <option value="EE4">B.Sc. in Electronic Engineering year 4</option>
    <option value="ESC1">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="ESC2">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="ESC2">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="TE1">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="TE2">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="TE3">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="TE4">B.Sc. in Telecommunications Engineering 4</option>
  </select>
  </div>
  </div>

                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">Course Type:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select Course Type</option>
                     <option value="Core">Core</option>
                    <option value="Optional">Optional</option>
                    <option value="All">All Courses</option>
                  </select>
                </div>
               </div>

               <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">Semester No:</label>
                   <div class="col-sm-8">
                  <select name="semester" id="getSemester" class="custom-select Reason" required="">
                    <option value="" id="">Select Course Type</option>
                     <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="All">All Semesters</option>
                  </select>
                </div>
               </div>

           <center><button class="btn btn-primary" type="submit">Generate Report</button></center>

               </form>
             </div>
           </div>
         </div>
       </div>

<div class="modal fade" id="reservations" role="dialog" style="padding-right:222px!important;">

          <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 160%;">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="reservations_form" action="{{ route('reservationspdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label">GET BY:</label>
                   <div class="col-sm-8">
                  <select name="category" id="reservationSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select</option>
                    <option value="name">Name</option>
                    <option value="0">Declined Requests</option>
                    <option value="1">Approved Requests</option>
                    <option value="-1">Pending Requests</option>
                    <option value="All">All Requests</option>
                  </select>
                </div>
                </div>

            <div class="form-group row" id="rsname" style="display:none">
            <label for="InputName" class="col-sm-4 col-form-label">NAME</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="InputName" name="Name" value="">
            <span id="name_alert"></span>
            </div>
            </div>

            <div class="form-group row" id="divstatus" style="display:none">
                  <label for="Criteria" class="col-sm-4 col-form-label">Status:</label>
                   <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="Selection" id="AllRequest" value="All" checked>
                   <label class="form-check-label" for="AllRequest">All</label>
                   </div>
                   <div class="form-check form-check-inline"> 
                   <input class="form-check-input" type="radio" name="Selection" id="ApprovedRequest" value="1">
                    <label class="form-check-label" for="ApprovedRequest">Approved </label>
                  </div>
                  <div class="form-check form-check-inline"> 
                   <input class="form-check-input" type="radio" name="Selection" id="PendingRequest" value="-1">
                    <label class="form-check-label" for="ApprovedRequest">Pending </label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Selection" id="DeclinedRequest" value="0">
                  <label class="form-check-label" for="DeclinedRequest">Declined Requests</label>
                  </div>
                 </div>
           </div>

            <div id="DivCheckbox">
                 <div class="form-group row" >
                   <label for="inputEmail3" class="col-sm-4 col-form-label">SPECIFY DATE RANGE</label>
                   <div class="col-sm-8">
                     <input id="daterange" type="checkbox" name="checkbox" value="true">
                   </div>
                 </div>
               </div>
               
               
      <div class="form-group row" id="divdaterange" style="display:none">
    <label for="fromDate"  class="col-sm-4 col-form-label">FROM</label>
    <div class="col-sm-3">
    <input type="date"  class="form-control" id="fromDate" name="FromDate" max="2020-12-31">
    <span id="date_alert"></span>
  </div>
   <label for="toDate"  class="col-sm-2 col-form-label">TO</label>
    <div class="col-sm-3">
    <input type="date" class="form-control" id="toDate" name="ToDate" max="2020-12-31">
  </div>
  </div>

  
<center><button class="btn btn-primary" type="submit">Generate Report</button></center>

               </form>
             </div>
           </div>
         </div>
       </div>






  </div>
</div>
</div>
<div class="col-10">
  <div class="card hero-image border-info" style="height: 100%">
  <div class="card-body">
    <div align="center">
      <h1 style="text-align: center;"><b>UNIVERSITY OF DAR ES SALAAM</b></h1>
    <h2 style="text-align: center;"><b>COLLEGE OF ICT</b></h2>
    
   <div><img src="img/logo_udsm.jpg" height="200px" width="170px"></div>
    <br>
    <br>
    <h1><b>REPORTS GENERATION</b></h1>
    
</div>
</div>
</div>
</div>
</div>
</div>


@endsection

@section('pagescript')
<script type="text/javascript">
  $(document).ready(function() {
  $('#getSelection').click(function(){
    var query=$(this).val();
    if(query=='1'){
      $('#course').hide();
      $('#program').show();
      $('[name="courseid"]').val("");
    }
    else if(query=='2'){
      $('#program').hide();
       $('#course').show();
       $('[name="dprogram"]').val("");
    }
  });

  $('#daterange').click(function(){
     if($(this).is(":checked")){
      $('#divdaterange').show();
    }
    else{
      $('#divdaterange').hide();
    }

   }); 

  $('#reservationSelection').click(function(){
     var query=$(this).val();
     if (query=='name') {
      $('#rsname').show();
      $('#divstatus').show();
     }
     else{
      $('#rsname').hide();
      $('#divstatus').hide();
     }

    });

  $("#reservations_form").submit(function(e) {

    //e.preventDefault();
    if($('#reservationSelection').val()=='name'){
      var query=$('#InputName').val();
      if(query==''){
        var message=document.getElementById('name_alert');
        message.style.color='red';
        message.innerHTML="Name is required";
        return false;
      }
    }

    if($('#daterange').is(":checked")){
      var date1=$('#fromDate').val();
      var date2=$('#toDate').val();
      if(date2<=date1){
        var message=document.getElementById('date_alert');
        message.style.color='red';
        message.innerHTML="'From Date' cannot be Greater than or Equal to 'To Date'";
        return false;
      }
    }

    });

  $("#studentsform").submit(function(e) {
    if($('#getSelection').val()== '1'){
      if($('#dprogram').val()==''){
        var message=document.getElementById('dprogram_alert');
        message.style.color='red';
        message.innerHTML="Degree Program is Required.";
        return false;
      }
    }

    if($('#getSelection').val()== '2'){
      if($('#courseid').val()==''){
        var message=document.getElementById('courseid_alert');
        message.style.color='red';
        message.innerHTML="Course ID is Required.";
        return false;
      }
    }


 });   
});
</script>
@endsection