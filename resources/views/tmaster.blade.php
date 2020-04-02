@extends('layouts.app')
@section('title')
  APPROVAL
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:975px;
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
use App\reservation;
//$pending=DB::select('EXEC reservationdate');
$pending=reservation::where('flag','1')->where('rstatus','-1')->orderBy('combined_date','asc')->get();
 
//$approved = DB::select('EXEC approvedreservationdate');
$approved=reservation::where('flag','1')->where('rstatus','1')->orderBy('combined_date','asc')->get();

  $today=date('j');
  $tmonth=date('n');
  $tyear=date('Y');
 $i='1';
 $j='1';
?>
<div class="container2" >
  @if(Auth::user()->principal==1 or Auth::user()->Timetable_Master==1)
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
    <div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'Pending Requests')" id="defaultOpen"><strong>PENDING REQUESTS</strong></button>
  <button class="tablinks" onclick="openInstructors(event, 'Approved Requests')"><strong>APPROVED REQUESTS</strong></button>
</div>
<div id="Pending Requests" class="tabcontent">
    <br>
  <h4>1. PENDING REQUESTS</h4>
  @if(count($pending)==0)
  <h5>You have no any pending request.</h5>
  @else
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>Name</center></th>
      <th scope="col" style="color:#3490dc;"><center>Venue</center></th>
      <th scope="col" style="color:#3490dc;"><center>Day</center></th>
      <th scope="col" style="color:#3490dc;"><center>Date</center></th>
      <th scope="col" style="color:#3490dc;"><center>Week</center></th>
      <th scope="col" style="color:#3490dc;"><center>Time</center></th>
      <th scope="col" style="color:#3490dc;"><center>Capacity</center></th>
       <th scope="col" style="color:#3490dc;"><center>Reason</center></th>
      <th scope="col" style="color:#3490dc;"><center>Remarks</center></th>
      <th scope="col" style="color:#3490dc;"><center>Action</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($pending as $pending)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{ $pending->Name}}</td>
      <td><center>{{$pending->Venue}}</center></td>
      <td>{{ $pending->Day }}</td>
      <td><center>{{ $pending->combined_date}}</center></td>
       <td><center>{{$pending->Week}}</center></td>
      <td><center>{{ $pending->fromTime}}-{{ $pending->toTime}}</center></td>
      <td><center>{{ $pending->Capacity}}</center></td>
      <td>{{ $pending->Reason}}</td>
      <td>
        @if(count($pending->Remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$pending->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW <i class="fa fa-eye" style="font-size:14px; color: black;"></i></a></center>

        <div class="modal fade" id="Remarks{{$pending->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$pending->Remarks}}
            
</div>
</div>
</div>
</div>
@endif
      </td>
     {{--  href="{{route('DeleteRequest',$pending->id)}}" --}}
      <td>
        @if($pending->combined_date<date('Y-m-d'))
        <center><p>Obsolete</p></center>
         @else
        {{-- <a class="btn btn-sm btn-success" href="{{route('changestatus',$pending->id)}}">Decline</a> --}}

        <a data-toggle="modal" data-target="#Decline{{$pending->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Decline</a>
        <div class="modal fade" id="Decline{{$pending->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('changestatus')}}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Reason{{$pending->id}}"  class="col-sm-2 col-form-label"><strong>Reason(s):</strong></label>
    <div class="col-sm-10">
    <textarea class="form-control" name="Reason" id="Reason{{$pending->id}}" rows="5" required></textarea>
  </div>
  </div>
  <br>

  <input type="hidden" id="id{{$pending->id}}" name="id" value="{{$pending->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>


        
<a class="btn btn-sm btn-success" href="{{route('changestatusc',$pending->id)}}">Approve</a>

@endif
</td>

      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>
@endif

<br>
<br>
</div>
<div id="Approved Requests" class="tabcontent">
  <br>
  <h4>2. APPROVED REQUESTS</h4>
   @if(count($approved)==0)
  <h5>You have no any approved request.</h5>
  @else
<table class="hover table table-striped table-bordered" id="myTablee">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>Name</center></th>
      <th scope="col" style="color:#3490dc;"><center>Venue</center></th>
      <th scope="col" style="color:#3490dc;"><center>Day</center></th>
      <th scope="col" style="color:#3490dc;"><center>Date</center></th>
      <th scope="col" style="color:#3490dc;"><center>Week</center></th>
      <th scope="col" style="color:#3490dc;"><center>Time</center></th>
      <th scope="col" style="color:#3490dc;"><center>Capacity</center></th>
       <th scope="col" style="color:#3490dc;"><center>Reason</center></th>
       <th scope="col" style="color:#3490dc;"><center>Remarks</center></th>
       <th scope="col" style="color:#3490dc;"><center>Approved By</center></th>
      <th scope="col" style="color:#3490dc;"><center>Action</center></th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($approved as $approved)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td>{{ $approved->Name}}</td>
      <td><center>{{$approved->Venue}}</center></td>
      <td>{{ $approved->Day }}</td>
      <td><center>{{ $approved->combined_date}}</center></td>
       <td><center>{{$approved->Week}}</center></td>
     <td><center>{{ $approved->fromTime}}-{{ $approved->toTime}}</center></td>
     <td><center>{{ $approved->Capacity}}</center></td>
      <td>{{ $approved->Reason}}</td>
      <td>
        @if(count($approved->Remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$approved->id}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW <i class="fa fa-eye" style="font-size:15px; color: black;"></i></a></center>

        <div class="modal fade" id="Remarks{{$approved->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$approved->Remarks}}
            
</div>
</div>
</div>
</div>
@endif
        </td>
        <td>{{$approved->approved_by}}</td>
      <td>
         @if($approved->combined_date<date('Y-m-d'))
        <center><p>Obsolete</p></center>
         @else
       <a class="btn btn-sm btn-success" href="{{route('changestatusb',$approved->id)}}">Change</a>
       
       @endif
        </td>
      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
@endif
</div>
@else
<h3 style="color: red;">SORRY!!!YOU DO NOT HAVE PERMISSION TO VIEW THIS PAGE</h3>
@endif
</div>



@endsection

@section('pagescript')
{{-- <script src='https://kit.fontawesome.com/a076d05399.js'></script> --}}

<script type="text/javascript">
 $(document).ready(function() {
  
  
  // console.log(x);
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});

</script>

<script type="text/javascript">
 $(document).ready(function() {
  
  
  // console.log(x);
    var table = $('#myTablee').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

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
