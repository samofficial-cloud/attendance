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
  <div class="container">
 <ul class="nav nav-tabs">
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
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>

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
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputTime"  class="col-sm-3 col-form-label">No. of Participant</label>
        <div class="col-sm-7">
  <input type="range" min="1" max="99" name="capacity" value="demo" class="slider" id="myRange">
  <center> <span id="demo"></span></center>
</div>
</div>

   <div class="form-group row">
    <label for="exampleFormControlTextarea1" class="col-sm-3">Remarks</label>
    <div class="col-sm-7">
    <textarea class="form-control" name="remark" id="exampleFormControlTextarea1" rows="2"></textarea>
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