@extends('layouts.app')

@section('title')
  HOME
@endsection

@section('content')

<div class="classname">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="container2">
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
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSTRUCTORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/instructors-CSE">CSE</a>
          <a class="dropdown-item" href="/instructors-ETE">ETE</a>
        </div>
      </li>

      <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/courses">COURSES</a>
  </li>



</ul>

</div>
</nav>
</div>
<br>
<br>

<div class="container">
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
    <a href="/coursesCS1?rid=CS1" class="list-group-item list-group-item-action dropdown-item">CS1</a>
     <a href="/coursesCS2?rid=CS2" class="list-group-item list-group-item-action dropdown-item">CS2</a>
    <a href="/coursesCS3?rid=CS3" class="list-group-item list-group-item-action dropdown-item">CS3</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesTE1?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/coursesTE2?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/coursesTE3?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/coursesTE4?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesESC1?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/coursesESC2?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/coursesESC3?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesCEIT1?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/coursesCEIT2?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/coursesCEIT3?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/coursesCEIT4?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

</div>
</div>
</div>
<div class="col-10">
  <div class="card hero-image border-info" >
  <div class="card-body">
    <h5 class="card-title"><b></b></h5>

    <div align="center">
      <h1 style="text-align: center;"><b>UNIVERSITY OF DAR ES SALAAM</b></h1>
    <h2 style="text-align: center;"><b>COLLEGE OF ICT</b></h2>
    
   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>
    
    <h1>TAUGHT COURSES</h1>
    

  
</div>


</div>
</div>
</div>


</div>
</div>


@endsection