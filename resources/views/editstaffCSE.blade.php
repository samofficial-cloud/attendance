@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@section('title')
  STAFF
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:700px;
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

div.dt-buttons {
        clear: both;
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
hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
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
 <center><ul class="nav1 nav-tabs" style="width: 84%">
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
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container" style="max-width: 1165px;">
  <center><ul class="nav1 nav-tabs">
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
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">ETE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS</a>
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES</a>
          <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
          <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
        </div>
      </li>

</ul>
</center>
</div>
@elseif(Auth::user()->Timetable_Master==1)
<div class="container2">
  <center><ul class="nav1 nav-tabs" style="padding-left: 35px;">
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
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/events">EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>

  </ul>
  </center>
</div>
@elseif(Auth::user()->HoD==1)
<div class="container">
  <center><ul class="nav1 nav-tabs" style="align-content: center; width: 93%">
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
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::user()->DEFAULTDEPTID==31)
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">INSTRUCTORS MANAGEMENT</a>
          @elseif(Auth::user()->DEFAULTDEPTID==32)
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">INSTRUCTORS MANAGEMENT</a>
          @endif
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES MANAGEMENT</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS MANAGEMENT</a>
        </div>
      </li>
    
</ul>
</center>
</div>

@endif


</nav>
</div>

<?php
$i='1';
$j='1';
?>



<br>
<div class="container">
  <h4><b>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</b></h4>
  <a data-toggle="modal" data-target="#staff" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

 <div class="modal fade" id="staff" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

  <div class="modal-body">
        <form method="post" action="{{route('addtest')}}" onsubmit="return getdata()"  name="myForm">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="dept"  class="col-sm-3 col-form-label"><strong>DEPARTMENT:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="dept" name="dept" value="CSE" readonly="">
  </div>
  </div>

   <div class="form-group row">
    <label for="Name"  class="col-sm-3 col-form-label"><strong>NAME:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Name" name="name" value="" required="">
  </div>
  </div>

   <div class="form-group row">
    <label for="SSN"  class="col-sm-3 col-form-label"><strong>EMPLOYEE ID:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="SSN" name="SSN" value="" required="">
  </div>
  </div>

  <div class="form-group row">
     <label for="SSN"  class="col-sm-3 col-form-label"><strong>PHONE NUMBER:</strong></label>
      <div class="col-sm-7">
      <input type="text" pattern="[^a-zA-Z]+" name="phone_number" class="form-control" value="">
          </div>
  </div>

   <div class="form-group row">
 <label for="email"  class="col-sm-3 col-form-label"><strong>EMAIL:</strong></label>
  <div class="col-sm-7"><input type="email" name="email" class="form-control" value="">
  </div>
    </div>

    <div class="form-group row">
    <label for="Gender"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="Gender" id="Gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
  </div>
  </div>

  <?php
  $badgeno= $badgeno->BADGENUMBER +1;
  ?>

  <input type="text" class="form-control" id="badgeno" name="badgeno" value="{{$badgeno}}" hidden="">

<input type="text" class="form-control" id="deptid" name="deptid" value="31" hidden="">

<input type="text" class="form-control" id="verificationmethod" name="verificationmethod" value="1" hidden="">

  <div class="form-group">
    <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
  <table class="table table-striped table-bordered" id="myTable" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
      <th scope="col"  style="color:#3490dc;">EMPLOYEE ID</th>
     <th scope="col"  style="color:#3490dc;">NAME</th>
      <th scope="col"  style="color:#3490dc;">PHONE NUMBER</th>
      <th scope="col"  style="color:#3490dc;">EMAIL</th>
     <th scope="col"  style="color:#3490dc;">EDIT</th> 
    </tr>
  </thead>
  <tbody>
     @foreach($staffCSE as $staff)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td>{{ $staff->SSN}}</td>
      <td>{{$staff->name}}</td>
      <td>{{ $staff->phone_number}}</td>
      <td>{{ $staff->email}}</td>
      <td></td>
       </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
<center><a class="btn btn-sm btn-success" href="/generate-CSE-Staff-pdf">PRINT</a></center>
<br>
</div>
@endsection

@section('pagescript')


<script type="text/javascript">
 $(document).ready(function() {
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );
//   
$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");

});
</script>
@endsection
