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
<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Employee ID</label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="inputEmail3" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputVenue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputVenue" value="{{ $_GET['room'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputday"  class="col-sm-3 col-form-label">Day</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputday" value="{{ $_GET['day'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTime"  class="col-sm-3 col-form-label">Time</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputTime" value="{{ $_GET['tim'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputReason"  class="col-sm-3 col-form-label">Reason</label>
    <div class="col-sm-7">
   <select class="custom-select inputReason" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="1">Lecture</option>
    <option value="2">Test</option>
    <option value="3">Seminar</option>
    <option value="4">Other</option>
  </select>
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

@endsection