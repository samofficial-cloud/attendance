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
    <a class="nav-link active" style="color:#060606"href="/generalReports">REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/generalReports">REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/generalReports">REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/generalReports">REPORTS</a>
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
      <div class="modal-content" style="width: 135%;">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="studentsform" action="{{ route('Generalstudentspdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-3 col-form-label"><strong>Get By:</strong></label>
                   <div class="col-sm-9">
                  <select name="category" id="getStudent" class="custom-select Reason" required="">
                    <option value="" id="">Select</option>
                     <option value="1" id="Option" >Degree Program</option>
                    <option value="2" id="Option">Course</option>
                  </select>
                </div>
               </div>


               <div class="form-group row">
                  <label for="Criteria" class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
                   <div class="col-sm-9">
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

           <div class="form-group row" id="studentDepartment" style="display: none;">
      <label for="studentdepartment"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
      <div class="col-sm-9">
          <select id="studentdepartment" name="studentdepartment" class="custom-select">
            <option value=""> Select Department</option>
           <option value="CSE">Computer Science and Engineering</option>
           <option value="ETE">Electronics and Telecommunication Engineering</option>
        </select>
        <span id="dept_alert"></span>
    </div>
    </div>

    <div class="form-group row" id="csestudentProgram" style="display: none;">
  <label for="csedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="csedprogram" id="csedprogram" >
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
  </select>
  <span id="cseprog_alert"></span>
  </div>
  </div>

  <div class="form-group row" id="etestudentProgram" style="display: none;">
  <label for="etedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="etedprogram" id="etedprogram">
    <option value="">Select Degree Program</option>
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
   <span id="eteprog_alert"></span>
 </div>
</div>

  <div class="form-group row" id="course" style="display:none">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course Id:</strong></label>
    <div class="col-sm-9">
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
      <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Show Fees Status</strong></label>
      <div class="col-sm-9">
      <input id="fees_status" type="checkbox" name="studentcheckbox" value="true">
      </div>
      </div>
    </div>
    <div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>
     </form>
  </div>

  </div>
  </div>
  </div>

   <div class="modal fade" id="staffs" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 108%">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('Generalstaffpdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-3 col-form-label"><strong>Department:</strong></label>
                   <div class="col-sm-9">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select</option>
                     <option value="31">Computer Science and Engineering</option>
                    <option value="32">Electronics and Telecommunications Engineering</option>
                    <option value="100">All Staff</option>
                  </select>
                </div>
               </div>

                <div class="form-group row">
                  <label for="Criteria" class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
                   <div class="col-sm-9">
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

<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>

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
                   <label for="" class="col-sm-4 col-form-label"><strong>EVENT NAME:</strong></label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select Event Type</option>
                     <option value="HOLIDAY">Public Holiday</option>
                    <option value="CANCELLATION">Class Cancellation</option>
                    <option value="All">All Events</option>
                  </select>
                </div>
                </div>

                <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label"><strong>SEMESTER No:</strong></label>
                   <div class="col-sm-8">
                  <select name="semester" id="getSemester" class="custom-select Reason" required="">
                    <option value="" id="">Select Semester No.</option>
                     <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="All">All Semesters</option>
                  </select>
                </div>
               </div>
               
<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>

               </form>
             </div>
           </div>
         </div>
       </div>

       <div class="modal fade" id="courses" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 135%">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="course_form" action="{{ route('Generalcoursepdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}

<div class="form-group row" id="courseDepartment">
      <label for="coursedepartment"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
      <div class="col-sm-9">
          <select id="coursedepartment" name="coursedepartment" class="custom-select" required="">
            <option value=""> Select Department</option>
           <option value="CSE">Computer Science and Engineering</option>
           <option value="ETE">Electronics and Telecommunication Engineering</option>
        </select>
    </div>
    </div>

    <div class="form-group row" id="csecourse" style="display: none;">
  <label for="csedcourse"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="csedcourse" id="csedcourse" >
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
  </select>
  <span id="csecourse_alert"></span>
  </div>
  </div>

  <div class="form-group row" id="etecourse" style="display: none;">
  <label for="etedcourse"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="etedcourse" id="etedcourse">
    <option value="">Select Degree Program</option>
    <option value="EE1">B.Sc. in Electronic Engineering year 1</option>
    <option value="EE2">B.Sc. in Electronic Engineering year 2</option>
    <option value="EE3">B.Sc. in Electronic Engineering year 3</option>
    <option value="EE4">B.Sc. in Electronic Engineering year 4</option>
    <option value="ESC1">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="ESC2">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="ESC3">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="TE1">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="TE2">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="TE3">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="TE4">B.Sc. in Telecommunications Engineering 4</option>
   </select>
   <span id="etecourse_alert"></span>
 </div>
</div>

                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
                   <div class="col-sm-9">
                  <select name="category" id="getSelection" class="custom-select Reason" required="">
                    <option value="" id="">Select Course Type</option>
                     <option value="Core">Core</option>
                    <option value="Optional">Optional</option>
                    <option value="All">All Courses</option>
                  </select>
                </div>
               </div>

               <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-3 col-form-label"><strong>Semester No:</strong></label>
                   <div class="col-sm-9">
                  <select name="semester" id="getSemester" class="custom-select Reason" required="">
                    <option value="" id="">Select Course Type</option>
                     <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="All">All Semesters</option>
                  </select>
                </div>
               </div>
<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>

               </form>
             </div>
           </div>
         </div>
       </div>

<div class="modal fade" id="reservations" role="dialog" style="padding-right:222px!important;">

          <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 150%;">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="reservations_form" action="{{ route('reservationspdf') }}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row" id="getBy">
                   <label for="" class="col-sm-4 col-form-label"><strong>Get By:</strong></label>
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
            <label for="InputName" class="col-sm-4 col-form-label"><strong>Name:</strong></label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="reservationName" name="Name" value="" autocomplete="off">
            <div id="nameList"></div>
            <span id="name_alert"></span>
            </div>
            </div>

            <div class="form-group row" id="divstatus" style="display:none">
                  <label for="Criteria" class="col-sm-4 col-form-label"><strong>Status:</strong></label>
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
                   <label for="inputEmail3" class="col-sm-4 col-form-label"><strong>Specify Date Range:</strong></label>
                   <div class="col-sm-8">
                     <input id="daterange" type="checkbox" name="checkbox" value="true">
                   </div>
                 </div>
               </div>
               
               
      <div class="form-group row" id="divdaterange" style="display:none">
    <label for="fromDate"  class="col-sm-4 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="date"  class="form-control" id="fromDate" name="FromDate" max="2020-12-31">
    <span id="date_alert"></span>
  </div>
   <label for="toDate"  class="col-sm-1 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="date" class="form-control" id="toDate" name="ToDate" max="2020-12-31">
  </div>
  </div>

  
<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>

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
  var a=0;
  $(document).ready(function() {
  $('#getStudent').click(function(){
    var query=$(this).val();
    if(query=='1'){
      $('#course').hide();
      $('#studentDepartment').show();
      $('[name="courseid"]').val("");
    }
    else if(query=='2'){
      $('#studentDepartment').hide();
      $('#csestudentProgram').hide();
        $('#etestudentProgram').hide();
       $('#course').show();
       $('[name="dprogram"]').val("");
       $('[name="studentdepartment"]').val("");
       $('[name="csedprogram"]').val("");
       $('[name="etedprogram"]').val("");
    }
  });

  $('#studentdepartment').click(function(){
    var dept=$('#studentdepartment').val();
      if(dept=='CSE'){
        $('#etestudentProgram').hide();
        $('#csestudentProgram').show();
      }
      else if(dept=='ETE'){
        $('#csestudentProgram').hide();
        $('#etestudentProgram').show();
      }
      else{
        $('#csestudentProgram').hide();
        $('#etestudentProgram').hide();
      }

    });
  $('#coursedepartment').click(function(){
    var dept=$('#coursedepartment').val();
      if(dept=='CSE'){
        $('#etecourse').hide();
        $('#csecourse').show();
      }
      else if(dept=='ETE'){
        $('#csecourse').hide();
        $('#etecourse').show();
      }
      else{
        $('#csecourse').hide();
        $('#etecourse').hide();
      }

    });
  $("#course_form").submit(function(e) {
     var query=$('#coursedepartment').val();
      if(query=='CSE'){
        var textfive = document.getElementById('csedcourse').value;
         if(textfive==''){
          var message=document.getElementById('csecourse_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
      }
    }
    else if(query=='ETE'){
        var textfive = document.getElementById('etedcourse').value;
         if(textfive==''){
          var message=document.getElementById('etecourse_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
      }
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
      var query=$('#reservationName').val();
      if(query==''){
        var message=document.getElementById('name_alert');
        $('#name_alert').show();
        message.style.color='red';
        message.innerHTML="Name is required";
        return false;
      }
      if(a=='0'){
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
    if($('#getStudent').val()== '1'){
      var query=$('#studentdepartment').val();
      if(query==''){
        var message=document.getElementById('dept_alert');
        message.style.color='red';
        message.innerHTML="Please fill out this field";
        return false;
      }
      else if(query=='CSE'){
        document.getElementById('dept_alert').style.display="none";
        var textfive = document.getElementById('csedprogram').value;
         if(textfive==''){
          var message=document.getElementById('cseprog_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
      }
    }
    else if(query=='ETE'){
        document.getElementById('dept_alert').style.display="none";
        var textfive = document.getElementById('etedprogram').value;
         if(textfive==''){
          var message=document.getElementById('eteprog_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
      }
    }
  }

    if($('#getStudent').val()== '2'){
      if($('#courseid').val()==''){
        var message=document.getElementById('courseid_alert');
        message.style.color='red';
        message.innerHTML="Course ID is Required.";
        return false;
      }
    }




 }); 
 $('#reservationName').keyup(function(e){ 
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
             $('#reservationName').attr('style','border:1px solid #f00');
             a = '0';
             $('#name_alert').show();
        var message=document.getElementById('name_alert');
        message.style.color='red';
        message.innerHTML="This user does not exist";
            }
            else{
              a ='1';
              $('#name_alert').hide();
              $('#reservationName').attr('style','border:1px solid #ced4da'); 
           $('#nameList').fadeIn();  
                    $('#nameList').html(data);
          }
        }
         });
        }
        else if(query==''){
              $('#name_alert').hide();
              $('#reservationName').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){
   a ='1';
   $('#name_alert').hide();
  $('#reservationName').attr('style','border:1px solid #ced4da');

        $('#reservationName').val($(this).text());
          
        $('#nameList').fadeOut();  
    });

     $(document).on('click', 'form', function(){
     $('#nameList').fadeOut();  
    });   
});
</script>
<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>
@endsection