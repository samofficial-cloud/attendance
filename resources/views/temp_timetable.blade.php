@extends('layouts.app')

@section('title')
  Temporary Timetable
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
.form-inline .custom-select {
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
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
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
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
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

</br>
<?php
  $date=date('Y-m-d');
  $time=date("h:i");
   $i='1';

use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->get();

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
    
<a data-toggle="modal" data-target="#mytest" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

 <div class="modal fade" id="mytest" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 102%">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

  <div class="modal-body">
        <form method="get" action="{{ route('inserttemp_timetables') }}" onsubmit="return getdata()"  name="myForm">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Name"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Name" name="name" value="{{ Auth::user()->name }}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Date"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-7">
    <input type="date" min="{{$date}}"class="form-control" id="Date" name="Date" max="2020-12-31" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue" name="Venue" value="" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="inputTimeFrom" name="fromTime" value="" required>
  </div>
   <label for="inputTimeTo"  class="col-sm-1 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="inputTimeTo" name="toTime" value="" required>
  </div>
  </div>

  <span id="message"></span>

 
<div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="courseid" id="courseid">
    <option value="">Select Course</option>
    @foreach($mycourse as $mycoursess)
    <option value="{{$mycoursess->course}}">{{$mycoursess->course}}</option>
    @endforeach
  </select>
  </div>
  </div>



  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Category:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="type" id="inlineFormCustomSelectPref">
    <option value="">Select Category</option>
    <option value="Lecture">Lecture</option>
    <option value="Tutorial">Tutorial</option>
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
<div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'UPCOMING')" id="defaultOpen"><strong>UPCOMING</strong></button>
  <button class="tablinks" onclick="openInstructors(event, 'PREVIOUS')" ><strong>PREVIOUS</strong></button>
</div>
<div id="PREVIOUS" class="tabcontent">
<br>
<h2>2. Previous Temporary Timetable</h2>
<br>
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;width: 1px;"><center>S/N</center></th>
      <th scope="col" style="color:#3490dc;"><center>COURSE ID</center></th>
      <th scope="col" style="color:#3490dc;"><center>VENUE</center></th>
      <th scope="col" style="color:#3490dc;"><center>DATE</center></th>
      <th scope="col" style="color:#3490dc;"><center>TIME</center></th>
      <th scope="col" style="color:#3490dc;"><center>CATEGORY</center></th>
    </tr>
  </thead>
  <tbody>
    @foreach($previous_temp as $temp)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$temp->course}}</center></td>
      <td><center>{{$temp->venue}}</center></td>
      <td><center>{{$temp->date}}</center></td>
  <td><center>{{$temp->fromTime}} - {{$temp->toTime}}</center></td>
      <td><center>{{$temp->category}}</center></td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div id="UPCOMING" class="tabcontent">
  <br>
  <h2>1. Upcoming Temporary Timetable</h2>
  <br>
<table class="hover table table-striped table-bordered" id="myTable1">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc; width: 1px"><center>S/N</center></th>
      <th scope="col" style="color:#3490dc;"><center>COURSE ID</center></th>
      <th scope="col" style="color:#3490dc;"><center>VENUE</center></th>
      <th scope="col" style="color:#3490dc;"><center>DATE</center></th>
      <th scope="col" style="color:#3490dc;"><center>TIME</center></th>
      <th scope="col" style="color:#3490dc;"><center>CATEGORY</center></th>
      <th scope="col" style="color:#3490dc;"><center>ACTION</center></th>
    </tr>
  </thead>
  <tbody>
    @foreach($next_temp as $temp)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$temp->course}}</center></td>
      <td><center>{{$temp->venue}}</center></td>
      <td><center>{{$temp->date}}</center></td>
  <td><center>{{$temp->fromTime}} - {{$temp->toTime}}</center></td>
      <td><center>{{$temp->category}}</center></td>
      <td>
        <a data-toggle="modal" data-target="#edit{{$temp->id}}" role="button" aria-pressed="true"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>
        <div class="modal fade" id="edit{{$temp->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 102%">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{ route('edittemp') }}" >
  {{csrf_field()}}
  <div class="form-group row">
    <label for="Name{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Name{{$temp->id}}" name="name" value="{{ Auth::user()->name }}" readonly>
  </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="Date{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-7">
    <input type="date" min="{{$date}}"class="form-control" id="Date{{$temp->id}}" name="Date" max="2020-12-31" value="{{$temp->date}}" required>
  </div>
  </div>
<br>
  <div class="form-group row">
    <label for="Venue{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue{{$temp->id}}" name="Venue" value="{{$temp->venue}}" required>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="inputTimeFrom{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="fromTime{{$temp->id}}" name="fromTime" value="{{$temp->fromTime}}" required>
  </div>
   <label for="inputTimeTo{{$temp->id}}"  class="col-sm-1 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="toTime{{$temp->id}}" name="toTime" value="{{$temp->toTime}}" required>
  </div>
  <span id="messageA{{$temp->id}}"></span>
  </div>
<br>
  <div class="form-group row">
    <label for="courseid{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="courseid" id="courseid{{$temp->id}}">
    <option value="{{$temp->course}}">{{$temp->course}}</option>
    @foreach($mycourse as $mycoursess)
    @if($mycoursess->course != $temp->course)
    <option value="{{$mycoursess->course}}">{{$mycoursess->course}}</option>
    @endif
    @endforeach
  </select>
  </div>
  </div>
<br>


  <div class="form-group row">
    <label for="Select{{$temp->id}}"  class="col-sm-3 col-form-label"><strong>Category:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="type" id="Select{{$temp->id}}">
    @if($temp->category=='Lecture')
    <option value="Lecture">Lecture</option>
    <option value="Tutorial">Tutorial</option>
    @else
    <option value="Tutorial">Tutorial</option>
  <option value="Lecture">Lecture</option>
  @endif
  </select>
  </div>
  </div>
<br>
<input type="text" id="id{{$temp->id}}" name="idA" value="{{$temp->id}}" hidden="">
<div class="form-group">
    <center><button type="submit" class="btn btn-primary" name="buttonA" id="buttonA{{$temp->id}}">SUBMIT</button></center>
    </div>
</form>
</div>
</div>
</div>
</div>
<a data-toggle="modal" data-target="#Delete{{$temp->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
        <div class="modal fade" id="Delete{{$temp->id}}" role="dialog">
          <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color:red;">WARNING!!!</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <h5>Are you sure you want to delete this?</h5>
            <br>
<center><a class="btn btn-sm btn-danger" href="{{ route('canceltemp',$temp->id) }}">Proceed</a></center>
</div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

@endsection

@section('pagescript')
<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>

<script type="text/javascript">
 $(document).ready(function() {
  // console.log(x);
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});

</script>

<script>
function getdata(){
       var txtone = document.forms["myForm"]["toTime"].value;
        var txttwo = document.forms["myForm"]["fromTime"].value;


      if (txtone<=txttwo) {
        var message=document.getElementById('message');
        message.style.color='red';
        message.innerHTML=" 'To' time cannot be less than or equal to 'From' time";
        return false;
      }
}

$(document).ready(function(){
  $('[name="buttonA"]').click(function(e){
  var id = $("#"+e.target.id).val();
  let reg = e.target.id.replace(/\D/g,'');
  var t1=$('#toTime'+reg).val();
  var t2=$('#fromTime'+reg).val();
  if(t1<=t2){
    var message=document.getElementById('messageA'+reg);
    message.style.color='red';
    message.innerHTML="'To Time' cannot be less than or equal to 'From Time'";
    return false;
  }
  else{
    var message=document.getElementById('messageA'+reg);
    message.innerHTML="";
  }
  });
  });
</script>


<script type="text/javascript">
  function openInstructors(evt, evtName) {
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