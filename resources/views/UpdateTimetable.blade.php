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
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
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
  // $timetabls = timetable::select('course')->where('time','16:00-17:00')->where('venue',$_GET['rid'])->where('day','Monday')->value('course');
  $timetabled = timetable::where('venue',$_GET['rid'])->get();
  
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
    <a href="/update?rid=B101" class="list-group-item list-group-item-action dropdown-item">B101</a>
     <a href="/update?rid=B102" class="list-group-item list-group-item-action dropdown-item">B102</a>
    <a href="/update?rid=B103" class="list-group-item list-group-item-action dropdown-item">B103</a>
    <a href="/update?rid=B104" class="list-group-item list-group-item-action dropdown-item">B104</a>
    <a href="/update?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/update?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/update?rid=B201" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/update?rid=B202" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/update?rid=B203" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/update?rid=B204" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/update?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/update?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/update?rid=B207" class="list-group-item list-group-item-action dropdown-item">B207</a>
    <a href="/update?rid=B208" class="list-group-item list-group-item-action dropdown-item">B208</a>
    <a href="/update?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/update?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/update?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/update?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/update?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/update?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/update?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/update?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
    
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
    <h5 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h5>

<div style="color: #29234a"><H1><CENTER><b>{{ $_GET['rid'] }} TIME TABLE</b></CENTER></H1></div>
<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5">
<th align="center"></th>
 <th>7:00-8:00</th>
 <th>8:00-9:00</th>
 <th>9:00-10:00</th>
 <th>10:00-11:00</th>
 <th>11:00-12:00</th>
 <th>12:00-13:00</th>
 <th>13:00-14:00</th>
 <th>14:00-15:00</th>
 <th>15:00-16:00</th>
   <th>16:00-17:00</th>
     <th>17:00-18:00</th>
       <th>18:00-19:00</th>
         <th>19:00-20:00</th>
</tr>


<tr align="center">
 <th  style="background-color:#f79d45">M<br>O<br>N</th>
  @foreach ($timetabled as $times)
  @if ($times->day == 'Monday')
  @if($times->course != '')
  <td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}
   </a>
   <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#88eab2">T<br>U<br>E</th>
  @foreach ($timetabled as $times)
  @if ($times->day == 'Tuesday')
   @if($times->course != '')
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}
   </a>
   <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th style="background-color:#ef6c68">W<br>E<br>D</th>
   @foreach ($timetabled as $times)
  @if ($times->day == 'Wednesday')
     @if($times->course != '')
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}
   </a>
   <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#b5f66d">T<br>H<br>U<br>R</th>
   @foreach ($timetabled as $times)
  @if ($times->day == 'Thursday')
  @if($times->course != '')
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}
   </a>
   <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the Form Below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
</td>
@endif
@endif
@endforeach
</tr>


<tr align="center">
 <th style="background-color:#ffed4a">F<br>R<br>I</th>
   @foreach ($timetabled as $times)
  @if ($times->day == 'Friday')
   @if($times->course != '')
<td bgcolor="#ffffff">
   <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}
   </a>
   <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title">Complete the form below</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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
 </td>
@else
<td>
  <a data-toggle="modal" data-target="#id{{$times->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Update</font></a>

  <div class="modal fade" id="id{{$times->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('u_course' )}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue" name="Venue" value="{{$times->venue}}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Day"  class="col-sm-3 col-form-label"><strong>Day:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day" name="Day" value="{{$times->day}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom" name="fromTime" value="{{$times->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeTo" name="toTime" value="{{$times->toTime}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="courseid" name="courseid" value="{{$times->course}}">
  </div>
  </div>

  


<input type="text" name="id" value="{{$times->id}}" hidden>
  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Select:</strong></label>
    <div class="col-sm-8">
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