@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@section('title')
  COURSES
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:740px;
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
    <a class="nav-link active" style="color:#060606" href="/coursee">COURSES</a>
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
    <a class="nav-link active" style="color:#060606" href="/coursee">COURSES</a>
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
    <a class="nav-link active" style="color:#060606" href="/coursee">COURSES</a>
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
    <a class="nav-link active" style="color:#060606" href="/coursee">COURSES</a>
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
?>
<br>
<br>
<div class="container2">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Degree Program</h5>
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/courses/show?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/courses/show?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/courses/show?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/courses/show?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/courses/show?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/courses/show?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/courses/show?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/courses/show?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/courses/show?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/courses/show?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/courses/show?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/courses/show?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/courses/show?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/courses/show?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/courses/show?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/courses/show?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/courses/show?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/courses/show?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/courses/show?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/courses/show?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/courses/show?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/courses/show?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

</div>
</div>
</div>

<div class="col-10">
   
    <h2>{{$full}} Courses</h2>
    
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
     <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
      <th scope="col"  style="color:#3490dc;">Course Code</th>
      <th scope="col"  style="color:#3490dc;">Course Name</th>
      <th scope="col"  style="color:#3490dc;">Credit</th>
      <th scope="col"  style="color:#3490dc;">Semester</th>
      <th scope="col"  style="color:#3490dc;">Criteria</th>
      <th scope="col"  style="color:#3490dc;">No. of Hours per Semester</th>
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $course)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$course->course}}</td>
      <td>{{$course->course_name}}</td>
      <td>{{$course->credit}}</td>
       <td>{{$course->semester}}</td>
      <td>{{$course->criteria}}</td>
      <td>{{$course->lectures_no}}</td>
    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
</div>



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
</script>

<script type="text/javascript">
 $(document).ready(function() {
  var x = {!! json_encode($full) !!};
  
  // console.log(x);
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );
$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");

});

</script>


@endsection