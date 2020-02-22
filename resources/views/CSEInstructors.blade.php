@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@section('title')
  INSTRUCTORS CSE
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
    <a class="nav-link active" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
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
    <a class="nav-link active" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
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
    <a class="nav-link active" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
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
    <a class="nav-link active" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
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
<br>
<div class="container3">
  <h4><b>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</b></h4>
   @if ($errors= Session::get('errors'))
          <div class="alert alert-danger">
            <p>{{$errors}}</p>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif


<table class="table table-striped table-bordered" id="myTable" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
     <th scope="col"  style="color:#3490dc;">Course ID</th>
      <th scope="col"  style="color:#3490dc;">Course Name</th>
      <th scope="col"  style="color:#3490dc;">Instructor_1</th>
      <th scope="col"  style="color:#3490dc;">Instructor_2</th>
      <th scope="col"  style="color:#3490dc;">Instructor_3</th>
      <th scope="col"  style="color:#3490dc;">Instructor_4</th>
      <th scope="col"  style="color:#3490dc;">Instructor_5</th>
      <th scope="col"  style="color:#3490dc;">Tutorial Assistant</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff 2</th>
      <th scope="col"  style="color:#3490dc;">Course Type</th>
      <th scope="col"  style="color:#3490dc;">Semester</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors21 as $instructors)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td>{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_Staff_2}}</td>
      <td>{{ $instructors->course_type}}</td>
      <td>{{ $instructors->semester}}</td>
       </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>


<hr>
<h4><b>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATION ENGINEERING</b></h4>
<table class="hover table table-striped table-bordered" id="myTablee">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
     <th scope="col" style="color:#3490dc;">Course ID</th>
      <th scope="col" style="color:#3490dc;">Course Name</th>
      <th scope="col"  style="color:#3490dc;">Instructor_1</th>
      <th scope="col"  style="color:#3490dc;">Instructor_2</th>
      <th scope="col"  style="color:#3490dc;">Instructor_3</th>
      <th scope="col"  style="color:#3490dc;">Instructor_4</th>
      <th scope="col"  style="color:#3490dc;">Instructor_5</th>
      <th scope="col"  style="color:#3490dc;">Tutorial Assistant</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff 1</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff 2</th>
      <th scope="col" style="color:#3490dc;">Course Type</th>
      <th scope="col" style="color:#3490dc;">Semester</th>
      
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors12 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_Staff_2}}</td>
      <td>{{ $instructors->course_type}}</td>
      <td>{{ $instructors->semester}}</td>
       </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>


</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
//   
$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");

});

 $(document).ready(function() {
  
  
  // console.log(x);
    var table = $('#myTablee').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );
//   
$("div#myTablee_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");

});

</script>
@endsection