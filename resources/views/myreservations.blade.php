@extends('layouts.app')

@section('title')
  My Reservations
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

<br>
<?php
use App\reservation;
 $pending = reservation::where('rstatus','-1')->where('Name',  Auth::user()->name)->where('flag','1')->whereDate('combined_date','>=',date('Y-m-d'))->orderBy('combined_date','asc')->get();
  $approved = reservation::where('rstatus','1')->where('Name', Auth::user()->name)->where('flag','1')->whereDate('combined_date','>=',date('Y-m-d'))->orderBy('combined_date','asc')->get();
  $declined=reservation::where('flag','0')->where('rstatus','-1')->where('Name', Auth::user()->name)->whereDate('combined_date','>=',date('Y-m-d'))->orderBy('combined_date','asc')->get();
 $i='1';
 $j='1';
 $k='1';
?>

<div class="container">
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
   <a href="/venue"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

   <div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'Pending Requests')" id="defaultOpen"><strong>PENDING REQUESTS</strong></button>
  <button class="tablinks" onclick="openInstructors(event, 'Approved Requests')"><strong>APPROVED REQUESTS</strong></button>
  <button class="tablinks" onclick="openInstructors(event, 'Declined Requests')"><strong>DECLINED REQUESTS</strong></button>
</div>
<div id="Pending Requests" class="tabcontent">
   <br>
  <h4>1. PENDING REQUESTS</h4>
   {{-- @if(count($pending)==0)
  <h5>You have no any pending request.</h5>
  @else --}}
<table class="hover table table-striped table-bordered" id="table1">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>Venue</center></th>
      <th scope="col" style="color:#3490dc;"><center>Day</center></th>
      <th scope="col" style="color:#3490dc;"><center>Date</center></th>
      <th scope="col" style="color:#3490dc;"><center>Week</center></th>
      <th scope="col" style="color:#3490dc;"><center>Time</center></th>
      <th scope="col" style="color:#3490dc;"><center>Capacity</center></th>
       <th scope="col" style="color:#3490dc;"><center>Reason</center></th>
      <th scope="col" style="color:#3490dc;"><center>Remarks</center></th>
      <th scope="col" style="color:#3490dc;"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($pending as $pending)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$pending->Venue}}</center></td>
      <td>{{ $pending->Day }}</td>
      <td><center>{{ $pending->combined_date}}</center></td>
       <td><center>{{$pending->Week}}</center></td>
      <td><center>{{ $pending->fromTime}}-{{ $pending->toTime}}</center></td>
      <td><center>{{ $pending->Capacity}}</center></td>
      <td>{{ $pending->Reason}}</td>
      <td>
         @if(count($pending->Remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$pending->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW</a></center>

        <div class="modal fade" id="Remarks{{$pending->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$pending->Remarks}}
            <br>
            <br>
            <center><button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button></center>
            
</div>
</div>
</div>
</div>
@endif
      </td>
      
      <td>
        <center><a data-toggle="modal" data-target="#Cancel{{$pending->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Cancel</a></center>
        <div class="modal fade" id="Cancel{{$pending->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color: red;"><b>WARNING</b></h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you want to cancel this reservation?</p>
            <br>
            <div align="right">
      <a class="btn btn-info" href="{{route('changestatusd',$pending->id)}}">Proceed</a>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
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
{{-- @endif --}}
</div>

<div id="Approved Requests" class="tabcontent">
  <br>
  <h4>2. APPROVED REQUESTS</h4>
   {{-- @if(count($approved)==0)
  <h5>You have no any approved request.</h5>
  @else --}}
<table class="hover table table-striped table-bordered" id="table2">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>Venue</center></th>
      <th scope="col" style="color:#3490dc;"><center>Day</center></th>
      <th scope="col" style="color:#3490dc;"><center>Date</center></th>
      <th scope="col" style="color:#3490dc;"><center>Week</center></th>
       <th scope="col" style="color:#3490dc;"><center>Time</center></th>
      <th scope="col" style="color:#3490dc;"><center>Capacity</center></th>
      <th scope="col" style="color:#3490dc;"><center>Reason</center></th>
      <th scope="col" style="color:#3490dc;"><center>Remarks</center></th>
      <th scope="col" style="color:#3490dc;"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($approved as $approved)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td><center>{{$approved->Venue}}</center></td>
      <td>{{ $approved->Day }}</td>
      <td><center>{{ $approved->combined_date}}</center></td>
       <td><center>{{$approved->Week}}</center></td>
      <td><center>{{ $approved->fromTime}}-{{ $approved->toTime}}</center></td>
      <td><center>{{ $approved->Capacity}}</center></td>
      <td>{{ $approved->Reason}}</td>
      <td>
         @if(count($approved->Remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$approved->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW</a></center>

        <div class="modal fade" id="Remarks{{$approved->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$approved->Remarks}}
<br>
<br>
  <center><button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button></center>
            
</div>
</div>
</div>
</div>
@endif
      </td>
     
     <td>
        <center><a data-toggle="modal" data-target="#Cancel{{$approved->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Cancel</a></center>
        <div class="modal fade" id="Cancel{{$approved->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color: red;"><b>WARNING</b></h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you want to cancel this reservation?</p>
            <br>
            <div align="right">
      <a class="btn btn-info" href="{{route('changestatusd',$approved->id)}}">Proceed</a>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
</div>
      
</div>
</div>
</div>
</div>
        </td>
      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
{{-- @endif --}}
</div>
<div id="Declined Requests" class="tabcontent">
  <br>
  <h4>3. DECLINED REQUESTS</h4>
  <table class="hover table table-striped table-bordered" id="table3">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>Venue</center></th>
      <th scope="col" style="color:#3490dc;"><center>Day</center></th>
      <th scope="col" style="color:#3490dc;"><center>Date</center></th>
       <th scope="col" style="color:#3490dc;"><center>Time</center></th>
      <th scope="col" style="color:#3490dc;"><center>Capacity</center></th>
      <th scope="col" style="color:#3490dc;"><center>Reason</center></th>
      <th scope="col" style="color:#3490dc;"><center>Remarks</center></th>
      <th scope="col" style="color:#3490dc;"><center>Decline Reason(s)</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($declined as $declined)
      <tr>
        <th scope="row">{{ $k }}.</th>
      <td><center>{{$declined->Venue}}</center></td>
      <td>{{ $declined->Day }}</td>
      <td><center>{{ $pending->combined_date}}</center></td>
      <td><center>{{ $declined->fromTime}}-{{ $declined->toTime}}</center></td>
      <td><center>{{ $declined->Capacity}}</center></td>
      <td>{{ $declined->Reason}}</td>
      <td>
         @if(count($declined->Remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$declined->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW</a></center>

        <div class="modal fade" id="Remarks{{$declined->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$declined->Remarks}}
<br>
<br>
  <center><button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button></center>
            
</div>
</div>
</div>
</div>
@endif
      </td>
      <td>
        <center> <a data-toggle="modal" data-target="#Decline{{$declined->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW</a></center>

        <div class="modal fade" id="Decline{{$declined->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Decline Reason(s)</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
           {{$declined->decline_reason}}
<br>
<br>
 <center><button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button></center>
            
</div>
</div>
</div>
</div>
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
<script type="text/javascript">
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