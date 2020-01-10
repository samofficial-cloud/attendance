@extends('layouts.app')

@section('title')
  Update Timetable
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>

</ul>

</div>
</div>
</nav>
</div>

<br>

<?php
  use App\timetable;
  $timetabled = timetable::where('venue','B101')->get();
  $i='1';
  ?> 

   <div class="container">
  <h4>TIMETABLE MANAGEMENT</h4>
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

<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Day</th>
      <th scope="col">Venue</th>
      <th scope="col">Time</th>
      <th scope="col">Course</th>
       <th scope="col">Program</th>
      <th scope="col">Remarks</th>
      <th scope="col">Remarks</th>
    </tr>
  </thead>

  <tbody>
    
      @foreach($timetabled as $pending)
      <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $pending->day}}</td>
      <td>{{$pending->venue}}</td>
      <td>{{ $pending->time}}</td>
      <td>{{ $pending->course}}</td>
      <td>{{ $pending->program}}</td>
      <td>{{ $pending->criteria}}</td>
       <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#id{{$pending->id}}">Edit</button>
      <div class="modal fade" id="id{{$pending->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$pending->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$pending->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTime"  class="col-sm-3 col-form-label"><strong>Time:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="inputTime" name="Time" value="{{$pending->time}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$pending->course}}">
  </div>
  </div>

  <div class="form-group row">
    <label for="program"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="program" name="program" value="{{$pending->program}}">
  </div>
  </div>


<input type="text" name="id" value="{{$pending->id}}" hidden>
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





@endsection