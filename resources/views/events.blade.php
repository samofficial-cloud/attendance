@extends('layouts.app')

@section('title')
  EVENTS
@endsection
@section('style')
<style>

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;  
}

div.dataTables_length select { 
  height:30px;
  width:10px;
  font-size: 70%;
}
table.dataTable {
font-family: "Nunito", sans-serif;
    font-size: 0.9rem;
    font-weight: 400;
    
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

div.dt-buttons.buttons{
  padding-left:740px;
  justify-content: right;
}

div.top {
    box-sizing: border-box;
    padding-bottom: 6px;
}

.dataTables_wrapper .dt-buttons {
  float:none;  
  text-align:center;
}

.dataTables_wrapper .dataTables_info {
  padding-top: 0px;
}

.form-inline .form-control {
    width: 100%;
}
.form-inline label {
  justify-content:left;
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
  $date=date('Y-m-d');
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

<a data-toggle="modal" data-target="#event" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

 <div class="modal fade" id="event" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
<form method="get" action="{{route('addevent')}}" onsubmit = "return getdata()"  name="myForm">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Date"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8" style="width: 100%;">
    <input type="date" min="{{$date}}"class="form-control" id="Date" name="Date" max="2020-12-31" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="Criteria"  class="col-sm-3 col-form-label"><strong>Event Type:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="status" id="Criteria">
    <option value="HOLIDAY">Holiday</option>
    <option value="CANCELLATION">Class Cancellation</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="holiday_name"  class="col-sm-3 col-form-label"><strong>Holiday Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="holiday_name" name="holiday_name">
  </div>
  </div>
<span id="message1"></span>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="inputTimeFrom" name="fromTime" value="" required>
  </div>
   <label for="inputTimeTo"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="inputTimeTo" name="toTime" value="" required>
  </div>
  </div>

  <span id="message"></span>
<br>
  
  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
<?php
$i='1';
?>
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc; width: 5%">S/N</th>
      <th scope="col" style="color:#3490dc;">Day</th>
      <th scope="col" style="color:#3490dc;">Date</th>
      <th scope="col" style="color:#3490dc;">Duration</th>
      <th scope="col" style="color:#3490dc;">Event</th>
      <th scope="col" style="color:#3490dc;">Holiday Name</th>
      <th scope="col" style="color:#3490dc;">Change</th>
    </tr>
  </thead>
  <tbody>
    @foreach($events as $events)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$events->Day}}</td>
      <td>{{$events->Date}}/{{$events->Month}}/{{$events->Year}}</td>
      @if(strtotime($events->FromTime) ==strtotime("07:00") and strtotime($events->ToTime) == strtotime("20:00"))
       <td>All Day</td>
      @else
       <td>{{$events->FromTime}}-{{$events->ToTime}}</td>
       @endif
       @if($events->status=='HOLIDAY')
       <td>Public Holiday</td>
       @elseif($events->status=='CANCELLATION')
       <td>Class Cancellation</td>
       @else
       <td></td>
       @endif
      <td>{{$events->holiday_name}}</td>
      <td>
         <center><a data-toggle="modal" data-target="#edit{{$events->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a></center>

        <div class="modal fade" id="edit{{$events->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editevents')}}" name="myForm2"  onsubmit = "return getdata2()">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Date{{$events->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Date{{$events->id}}" name="Date" value="{{$events->Date}}-{{$events->Month}}-{{$events->Year}}" readonly="">
  </div>
  </div>
  <br>

  

  <div class="form-group row">
    <label for="event{{$events->id}}"  class="col-sm-3 col-form-label"><strong>Event:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="event" id="event{{$events->id}}">
    @if($events->status=="HOLIDAY")
    <option value="HOLIDAY">Holiday</option>
    <option value="CANCELLATION">Class Cancellation</option>
    @elseif($events->status=="CANCELLATION")
    <option value="CANCELLATION">Class Cancellation</option>
    <option value="HOLIDAY">Holiday</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="holiday_name{{$events->id}}"  class="col-sm-3 col-form-label"><strong>Holiday Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="holiday_name{{$events->id}}" name="holiday_name" value="{{$events->holiday_name}}">
  </div>
  </div>
  <br>
  <span id="message2"></span>

  <div class="form-group row">
    <label for="inputTimeFrom{{$events->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="inputTimeFrom{{$events->id}}" name="fromTime" value="" required="">
  </div>
   <label for="inputTimeTo{{$events->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="inputTimeTo{{$events->id}}" name="toTime" value="" required="">
  </div>
  </div>
<br>
<span id="message3"></span>
  
  <input type="hidden" id="id{{$events->id}}" name="id" value="{{$events->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
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


<center><a class="btn btn-sm btn-success" href="{{route('eventspdf')}}">PRINT</a></center>

</div>



@endsection

@section('pagescript')

<script>
function getdata(){
       var txtone = document.forms["myForm"]["toTime"].value;
        var txttwo = document.forms["myForm"]["fromTime"].value;
        var date = document.forms["myForm"]["Date"].value;
        var status = document.forms["myForm"]["status"].value;

        var holiday_name = document.forms["myForm"]["holiday_name"].value;


      if (txtone<txttwo) {
        var message=document.getElementById('message');
        message.style.color='red';
        message.innerHTML=" 'To' time cannot be less than 'From' time";
        return false;
      }

      if(status == 'HOLIDAY'){
      if (holiday_name === '') {
        var message=document.getElementById('message1');
        message.style.color='red';
        message.innerHTML="Holiday Name is required";
        return false;
      }
    }

}
</script>

<script>
function getdata2(){
       var txtone = document.forms["myForm2"]["toTime"].value;
        var txttwo = document.forms["myForm2"]["fromTime"].value;
        var status = document.forms["myForm2"]["event"].value;
        var holiday_name = document.forms["myForm2"]["holiday_name"].value;


      if (txtone<txttwo) {
        var message=document.getElementById('message3');
        message.style.color='red';
        message.innerHTML=" 'To' time cannot be less than 'From' time";
        return false;
      }

      if(status == 'HOLIDAY'){
      if (holiday_name === '') {
        var message=document.getElementById('message2');
        message.style.color='red';
        message.innerHTML="Holiday Name is required";
        return false;
      }
    }

}
</script>

<script type="text/javascript">
  $(document).ready(function() {
 
    var table = $('#myTable').DataTable( {
        dom: '<"top"l>rt<"bottom"pi>',
        "bFilter": false
         
    } );
});
</script>
<script>

</script>
@endsection