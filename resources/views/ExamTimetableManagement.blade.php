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
  <div class="container2">
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
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
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



</ul>

</div>
</div>
</nav>
</div>

<br>

<?php

  use App\exam;
  $exams=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Monday')
      ->where('exams.day','Monday')
      ->where('exams.venue',$_GET['rid'])
      ->get();


   $exams1=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Monday')
      ->where('exams.day','Monday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams2=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Tuesday')
      ->where('exams.day','Tuesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams3=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Tuesday')
      ->where('exams.day','Tuesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams4=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Wednesday')
      ->where('exams.day','Wednesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams5=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Wednesday')
      ->where('exams.day','Wednesday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams6=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Thursday')
      ->where('exams.day','Thursday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams7=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Thursday')
      ->where('exams.day','Thursday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams8=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk16')
      ->where('calendars.Day','Friday')
      ->where('exams.day','Friday')
      ->where('exams.venue',$_GET['rid'])
      ->get();

      $exams9=exam::select('exams.course','exams.venue','exams.day','calendars.Date','calendars.Month','calendars.Year','exams.fromTime','exams.toTime','exams.id')
      ->join('calendars','calendars.Week','=','exams.Week')
      ->where('calendars.Week','Wk17')
      ->where('calendars.Day','Friday')
      ->where('exams.day','Friday')
      ->where('exams.venue',$_GET['rid'])
      ->get();
   
  
?> 

<div class="container2">
  <div class="row2">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title"><b>ROOMS</b></h5>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/examupdate?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/examupdate?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/examupdate?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/examupdate?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/examupdate?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/examupdate?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/examupdate?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/examupdate?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/examupdate?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/examupdate?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/examupdate?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/examupdate?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
    
  </div>
</div>


 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK C
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">C02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C10</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK D
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">D02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D10</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D11</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D12</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D13</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D14</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D15</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D16</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D17</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D18</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D19</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D20</a>
  </div>
</div>

</div>

</div>

</div>

<div class="col-10">
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
  <div class="card hero-image border-info">
  <div class="card-body">

    <div style="color: #29234a"><H1><CENTER><b>UNIVERSITY EXAMINATION TIMETABLE</b></CENTER></H1></div>
    <h3 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h3>


<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5" align="center">
<th align="center">WK16</th>
 <th >7:00-10:30</th>
 <th>11:00-14:30</th>
 <th>15:00-18:30</th>
</tr>

<tr align="center">
 <th  style="background-color:#f79d45">MON<br>17/02/2020</th>
  @foreach ($exams as $examed)
  @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>

 @else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 
<input type="text" name="id" value="{{$examed->id}}" hidden>
<input type="text" name="Week" value="Wk16" hidden>


  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endforeach
</tr>

<tr align="center">
 <th style="background-color:#88eab2">TUE<br>18/02/2020</th>
  @foreach ($exams2 as $examed)
   @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>
  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>



  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>

 @else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endforeach
</tr>

<tr align="center">
 <th style="background-color:#ef6c68">WED<br>19/02/2020</th>
   @foreach ($exams4 as $examed)
     @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
 @else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}
   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#b5f66d">THUR<br>20/02/2020</th>
   @foreach ($exams6 as $examed)
  @if ($examed->day == 'Thursday')
  @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#ffed4a">FRI<br>21/02/2020</th>
   @foreach ($exams8 as $examed)
  @if ($examed->day == 'Friday')
   @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the form below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk16" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>
    
    
</table>
<br>

<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5" align="center">
<th align="center">WK17</th>
 <th >7:00-10:30</th>
 <th>11:00-14:30</th>
 <th>15:00-18:30</th>
</tr>


<tr align="center">
 <th  style="background-color:#f79d45">MON<br>24/02/2020</th>
  @foreach ($exams1 as $examed)
  @if ($examed->day == 'Monday')
  @if(!is_null($examed->course))
  <td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#88eab2">TUE<br>25/02/2020</th>
  @foreach ($exams3 as $examed)
  @if ($examed->day == 'Tuesday')
   @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>
  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

  <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th style="background-color:#ef6c68">WED<br>26/02/2020</th>
   @foreach ($exams5 as $examed)
  @if ($examed->day == 'Wednesday')
     @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#b5f66d">THUR<br>27/02/2020</th>
   @foreach ($exams7 as $examed)
  @if ($examed->day == 'Thursday')
  @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#ffed4a">FRI<br>28/02/2020</th>
   @foreach ($exams9 as $examed)
  @if ($examed->day == 'Friday')
   @if(!is_null($examed->course))
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true">{{ $examed['course']}}
   </a>
   <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the form below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$examed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$examed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course1' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$examed->id}}" name="Venue" value="{{$examed->venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="Date{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$examed->id}}" name="Date" value="{{$examed->Date}}/{{$examed->Month}}/{{$examed->Year}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$examed->id}}" name="Day" value="{{$examed->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputFromTime{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputFromTime{{$examed->id}}" name="fromTime" value="{{$examed->fromTime}}" readonly>
  </div>
  <label for="inputToTime{{$examed->id}}"  class="col-sm-2 col-form-label"><strong>TO:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputToTime{{$examed->id}}" name="toTime" value="{{$examed->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid{{$examed->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="courseid{{$examed->id}}" name="courseid" value="{{$examed->course}}">
  </div>
  </div>

 <input type="text" name="id" value="{{$examed->id}}" hidden> 

<input type="text" name="Week" value="Wk17" hidden>




  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
</td>
@endif
@endif
@endforeach
</tr>
    
    
</table>
</div>
</div>
</div>

</div>
</div>
@endsection

@section('pagescript')

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>
@endsection