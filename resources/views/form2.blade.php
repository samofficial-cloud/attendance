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
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
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

<form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{ $_GET['room'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Day" name="Day" value="{{ $_GET['day'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTime"  class="col-sm-3 col-form-label"><strong>Time:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputTime" name="Time" value="{{ $_GET['tim'] }}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="courseid" name="courseid">
  </div>
  </div>

  <div class="form-group row">
    <label for="program"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="program" name="program">
  </div>
  </div>

<input type="text" name="id" value="<?php
    echo $_GET['id'];
    ?>
" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectPref">
    <option value="Lecture">Lecture</option>
    <option value="Tutorial">Tutorial</option>
    <option value="Practical">Practical</option>
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