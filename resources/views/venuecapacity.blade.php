@extends('layouts.app')

@section('title')
  VENUE CAPACITIES
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:686px;
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
    font-size: 15px;
    

    
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}
.form-inline .form-control {
    width: 100%;
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
<br>

<?php
use App\capacityvenue;
 $venue = capacityvenue::where('criteria','Lecture')->orderBy('Venue','asc')->get();
 $venue1 = capacityvenue::where('criteria','Test')->orderBy('Venue','asc')->get();
  $venue2 = capacityvenue::where('criteria','Practical')->orderBy('Venue','asc')->get();
 $i=1;
 $j=1;
 $k=1;
?>

<div class="container">
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

    <a data-toggle="modal" data-target="#newcapacity" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

    <div class="modal fade" id="newcapacity" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newcapacity')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue" name="Venue" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity" name="capacity" value="" required="" min="10" maxlength="3" onkeypress="if(this.value.length<=2){return event.charCode >= 48 && event.charCode <= 57} else return false;" max="400" >
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
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





  <h3><b>ROOMS CAPACITY</b></h3>
  <div class="tab">
  <button class="tablinks" onclick="openroom(event, 'Lectures')" id="defaultOpen"><strong>LECTURES</strong></button>
  <button class="tablinks" onclick="openroom(event, 'Tests')"><strong>TEST & EXAMINATIONS</strong></button>
  <button class="tablinks" onclick="openroom(event, 'Practicals')"><strong>PRACTICALS</strong></button>
</div>
<div id="Lectures" class="tabcontent">
    <br>
  <h4>1. Lectures</h4>
<table class="table table-striped table-bordered" id="table1" style="width: 83%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>VENUE</center></th>
      <th scope="col" style="color:#3490dc;"><center>CAPACITY</center></th>
      <th scope="col" style="color:#3490dc;"><center>ACTION</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($venue as$venue)
      <tr>
      <th  scope="row">{{ $i }}.</th>
      <td><center><strong>{{$venue->Venue}}</strong></center></td>
      <td><center><strong>{{ $venue->Capacity }}</strong></center></td>
      <td><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>
<br>
  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Lecture" readonly>
  </div>
  </div>
<br>
  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}" min="10" maxlength="3" onkeypress="if(this.value.length<=2){return event.charCode >= 48 && event.charCode <= 57} else return false;" max="400" >
  </div>
  </div>

  
<br>
  

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

{{-- <a href="{{route('DeleteVenue',$venue->id)}}"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a> --}}
<a data-toggle="modal" data-target="#Decline{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
<div class="modal fade" id="Decline{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: red;"><b>WARNING</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you what to delete this venue?</p>
            <br>
            <button class="btn btn-dark" type="button" class="close" data-dismiss="modal" style="float: left;">Cancel</button>
            <a href="{{route('DeleteVenue',$venue->id)}}" class="btn btn-danger" style="float: right;">Proceed</a>
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
</div>

<div id="Tests" class="tabcontent">
    <br>
<h4>2. Tests and Examinations</h4>
<table class="table table-striped table-bordered" id="table2" style="width: 83%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>VENUE</center></th>
      <th scope="col" style="color:#3490dc;"><center>CAPACITY</center></th>
       <th scope="col" style="color:#3490dc;"><center>ACTION</center></th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue1 as$venue)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td><center><strong>{{$venue->Venue}}</strong></center></td>
      <td><center><strong>{{ $venue->Capacity }}</strong></center></td>
      <td><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Test" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}" min="10" maxlength="3" onkeypress="if(this.value.length<=2){return event.charCode >= 48 && event.charCode <= 57} else return false;" max="400" >
  </div>
  </div>

  <br>

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a data-toggle="modal" data-target="#Decline{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
<div class="modal fade" id="Decline{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: red;"><b>WARNING</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you what to delete this venue?</p>
            <br>
            <button class="btn btn-dark" type="button" class="close" data-dismiss="modal" style="float: left;">Cancel</button>
            <a href="{{route('DeleteVenue',$venue->id)}}" class="btn btn-danger" style="float: right;">Proceed</a>
            </div>
          </div>
        </div>
      </div>

</center>
      </td>

      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>

<div id="Practicals" class="tabcontent">
    <br>
<h4>3. Practicals</h4>
<table class="table table-striped table-bordered" id="table3" style="width:83%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc; width: 1%;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>VENUE</center></th>
      <th scope="col" style="color:#3490dc;"><center>CAPACITY</center></th>
       <th scope="col" style="color:#3490dc;width: 10%"><center>ACTION</center></th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue2 as$venue)
      <tr>
      <th scope="row">{{ $k }}.</th>
      <td ><center><strong>{{$venue->Venue}}</strong></center></td>
      <td ><center><strong>{{ $venue->Capacity }}</strong></center></td>
      <td ><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Practical" readonly>
  </div>
  </div>
<br>
  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}" min="10" maxlength="3" onkeypress="if(this.value.length<=2){return event.charCode >= 48 && event.charCode <= 57} else return false;" max="400" >
  </div>
  </div>

<br>
  

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a data-toggle="modal" data-target="#Decline{{$venue->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
<div class="modal fade" id="Decline{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="color: red;"><b>WARNING</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you what to delete this venue?</p>
            <br>
            <button class="btn btn-dark" type="button" class="close" data-dismiss="modal" style="float: left;">Cancel</button>
            <a href="{{route('DeleteVenue',$venue->id)}}" class="btn btn-danger" style="float: right;">Proceed</a>
            </div>
          </div>
        </div>
      </div>
</center>
      </td>

      </tr>
      <?php
      $k=$k+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>
</div>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


@endsection

@section('pagescript')

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
$(document).ready(function() {
    var table = $('#table1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

    var table = $('#table2').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

    var table = $('#table3').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});
</script>
<script type="text/javascript">
  function openroom(evt, evtName) {
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
