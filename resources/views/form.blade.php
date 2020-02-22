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
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
<br>
<?php
use App\capacityvenue;
 $capacity = capacityvenue::select('capacity')->where('venue',$_GET['room'])->value('capacity');

?>


​

<div class="row2 justify-content-center">
  <div class="col-sm-6">

<div class="card">

  <div class="card-header" style="text-align: center;">
    <h4>Complete the Following Form</h4>
  </div>
   
  <div class="card-body">
<form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="InputName" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['room'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Day" name="Day" value="{{ $_GET['day'] }}" readonly>
  </div>
  </div>
  <div class="form-group row">
    <label for="inputdate"  class="col-sm-3 col-form-label">Date</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputday" name="Date" value="{{ $_GET['dd'] }}/{{ $_GET['mm'] }}/{{ $_GET['yy'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTime"  class="col-sm-3 col-form-label">Time</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputTime" name="Time" value="{{ $_GET['tim'] }}" readonly>
  </div>
  </div>
<input type="hidden" id="Month" name="Month" value="{{ $_GET['mm'] }}">
<input type="hidden" id="Year" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year" name="Year" value="{{ $_GET['yy'] }}">
<input type="hidden" id="Date" name="Date" value="{{ $_GET['dd'] }}">
  <div class="form-group row">
    <label for="Reason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-7">
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
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant</label>
        <div class="col-sm-7">
  <input  class="form-control-lg" type="number" value=$("input[type='number']").inputSpinner() min="0" max={{ $capacity}} step="1" name="capacity" required />
</div>
<script src="./src/bootstrap-input-spinner.js"></script>
<script>
    $("input[type='number']").inputSpinner()
</script>
</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-7">
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




<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>




@endsection
