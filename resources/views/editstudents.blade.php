@extends('layouts.app')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

@section('title')
  STUDENTS
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
.form-inline .custom-select {
    width: 100%;
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
          <a class="dropdown-item active" style="color:#060606" href="/managestudents">STUDENTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<div class="container2">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h6 class="card-title"><strong>Choose Degree Program</strong></h6>
     @if(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==31)
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/editstudentsList?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/editstudentsList?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/editstudentsList?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/editstudentsList?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/editstudentsList?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/editstudentsList?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/editstudentsList?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/editstudentsList?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/editstudentsList?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/editstudentsList?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/editstudentsList?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/editstudentsList?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/editstudentsList?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

@elseif(Auth::user()->HoD==1 & Auth::user()->DEFAULTDEPTID==32)

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/editstudentsList?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/editstudentsList?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/editstudentsList?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/editstudentsList?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/editstudentsList?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/editstudentsList?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/editstudentsList?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/editstudentsList?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>

@elseif(Auth::user()->principal==1)
<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/editstudentsList?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/editstudentsList?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/editstudentsList?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/editstudentsList?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/editstudentsList?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/editstudentsList?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/editstudentsList?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/editstudentsList?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/editstudentsList?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/editstudentsList?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/editstudentsList?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/editstudentsList?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/editstudentsList?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/editstudentsList?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/editstudentsList?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/editstudentsList?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/editstudentsList?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/editstudentsList?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/editstudentsList?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/editstudentsList?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/editstudentsList?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/editstudentsList?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>
@endif


</div>
</div>
</div>


<div class="col-10">
   @if ($errors=Session::get('errors'))
        @if ($errors1=Session::get('prog'))
          <div class="alert alert-danger">
            <p>{{$errors}} - {{$errors1}}</p>
          </div>
        @endif
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
    <h2>{{$full}}</h2>
    

<a class="btn btn-sm btn-success" style="float: right; margin-top:20px;" href="/generate-Students-PDF?rid={{$_GET['rid']}}">PRINT</a>

   <br>
   <br>
<h4>1. ACTIVE STUDENTS</h4>
    <table class=" hover table table-striped table-bordered" id="example">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">REGISTRATION No.</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">FEES STATUS</th>
      <th scope="col" style="color:#3490dc;">CHANGE</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->SSN}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->GENDER}}</td>
      <td>{{$student->Fees_Status}}</td>
      <td>
        <a data-toggle="modal" data-target="#edit{{$student->USERID}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editstudent')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="regNo{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Registration Number:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="regNo{{$student->USERID}}" name="regNo" value="{{$student->SSN}}" >
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="name{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="name{{$student->USERID}}" name="name" value="{{$student->name}}" >
  </div>
  </div>
<br>

  <div class="form-group row">
    <label for="Gender{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Gender" id="Gender{{$student->USERID}}">
    @if($student->GENDER=="Male")
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    @elseif($student->GENDER=="Female")
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    @else
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="Fees{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Fees Status:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Fees" id="Fees{{$student->USERID}}">
    @if($student->Fees_Status=="PAID")
    <option value="PAID">PAID</option>
    <option value="NOT PAID">NOT PAID</option>
    @elseif($student->Fees_Status=="NOT PAID")
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @else
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @endif
  </select>
  </div>
  </div>
  <br>


  <input type="hidden" id="id{{$student->USERID}}" name="id" value="{{$student->USERID}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a class="btn btn-sm btn-danger" href="{{route('DeactivateStudent',$student->USERID)}}">Deactivate</a>

      </td>
    </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
</table>
<hr>
<?php
$i='1';
?>

<h4>2. INACTIVE STUDENTS</h4>
    <table class=" hover table table-striped table-bordered" id="mytable">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">REGISTRATION No.</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">FEES STATUS</th>
      <th scope="col" style="color:#3490dc;">CHANGE</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students2 as $student2)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student2->SSN}}</td>
      <td>{{$student2->name}}</td>
      <td>{{$student2->GENDER}}</td>
      <td>{{$student2->Fees_Status}}</td>
      <td><center><a data-toggle="modal" data-target="#edit{{$student2->USERID}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Activate</a></center>

        <div class="modal fade" id="edit{{$student2->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('ActivateStudent')}}">
  {{csrf_field()}}

  <div class="form-group row">
  <label for="dprogram{{$student2->USERID}}"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="dprogram" id="dprogram{{$student2->USERID}}">
    <option value="11">CS1(in)</option>
    <option value="12">CS2(in)</option>
    <option value="13">CS3(in)</option>
    <option value="21">CS1(with)</option>
    <option value="22">CS2(with)</option>
    <option value="23">CS3(with)</option>
    <option value="8">ESC1</option>
    <option value="9">ESC2</option>
    <option value="10">ESC3</option>
    <option value="14">TE1</option>
    <option value="15">TE2</option>
    <option value="16">TE3</option>
    <option value="17">TE4</option>
    <option value="5">CEIT1</option>
    <option value="6">CEIT2</option>
    <option value="7">CEIT3</option>
    <option value="4">CEIT4</option>
    <option value="24">EE1</option>
    <option value="25">EE2</option>
    <option value="26">EE3</option>
    <option value="27">EE4</option>
    <option value="18">B-IT1</option>
    <option value="19">B-IT2</option>
    <option value="20">B-IT3</option>
    <option value="28">CS(Cert)</option>
    <option value="29">CS1(Dipl.)</option>
    <option value="30">CS2(Dipl.)</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="regNo{{$student2->USERID}}"  class="col-sm-3 col-form-label"><strong>Registration Number:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="regNo{{$student2->USERID}}" name="regNo" value="{{$student2->SSN}}" >
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="name{{$student2->USERID}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="name{{$student2->USERID}}" name="name" value="{{$student2->name}}" >
  </div>
  </div>
<br>

  <div class="form-group row">
    <label for="Gender{{$student2->USERID}}"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Gender" id="Gender{{$student2->USERID}}">
    @if($student2->GENDER=="Male")
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    @elseif($student2->GENDER=="Female")
    <option value="Female">Female</option>
    <option value="Male">Male</option>
    @else
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="Fees{{$student2->USERID}}"  class="col-sm-3 col-form-label"><strong>Fees Status:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Fees" id="Fees{{$student2->USERID}}">
    @if($student2->Fees_Status=="PAID")
    <option value="PAID">PAID</option>
    <option value="NOT PAID">NOT PAID</option>
    @elseif($student2->Fees_Status=="NOT PAID")
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @else
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @endif
  </select>
  </div>
  </div>
  <br>


  <input type="hidden" id="id{{$student2->USERID}}" name="id" value="{{$student2->USERID}}"/>

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
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
</table>

</div>
</div>
</div>

@endsection

@section('pagescript')


<script type="text/javascript">
 $(document).ready(function() {
  var x = {!! json_encode($full) !!};
  
  // console.log(x);
    var table = $('#example').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+'Active students', 
                exportOptions: {
                    columns: [1, 2, 3, 4 ]
                }
            },

            {
                extend: 'copyHtml5',className: 'btn-success',
                exportOptions: {
                    columns: [ 1, 2, 3, 4  ]
                }
            },
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example_wrapper").find($(".dt-buttons")).css("width", "300px");
$("div#example_wrapper").find($(".dt-buttons")).css(styles);
});


$(document).ready(function() {
  var x = {!! json_encode($full) !!};
  
  // console.log(x);
    var table = $('#mytable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+'Inactive students', 
                exportOptions: {
                    columns: [1, 2, 3, 4 ]
                }
            },

            {
                extend: 'copyHtml5',className: 'btn-success',
                exportOptions: {
                    columns: [ 1, 2, 3, 4  ]
                }
            },
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#mytable_wrapper").find($(".dt-buttons")).css("width", "760px");
$("div#mytable_wrapper").find($(".dt-buttons")).css(styles);
});
</script>

@endsection