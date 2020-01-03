@extends('layouts.app')
@section('title')
VENUE RESERVATION
@endsection
@section('content')
<div class="classname">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="container">
 <ul class="nav nav-tabs">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
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
</ul>

</div>
</nav>
</div>
<br>

<?php

use App\calendar;
$Cweek = calendar::select('Week')->where('Date',date('d'))->where('Month',date('m'))->where('Year',date('Y'))->Value('Week');

?>

<div class="container ">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Room to View Free Slot</h5>

    <div class="btn-group dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/reservation?rid=B101&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B101</a>
     <a href="/reservation?rid=B102&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B102</a>
    <a href="/reservation?rid=B103&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B103</a>
    <a href="/reservation?rid=B104&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B104</a>
    <a href="/reservation?rid=B106&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/reservation?rid=B106&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/reservation?rid=B201&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/reservation?rid=B202&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/reservation?rid=B203&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/reservation?rid=B204&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/reservation?rid=B205&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/reservation?rid=B206&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/reservation?rid=B207&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B207</a>
    <a href="/reservation?rid=B208&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B208</a>
    <a href="/reservation?rid=B302&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/reservation?rid=B302&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/reservation?rid=B304&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/reservation?rid=B304&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/reservation?rid=B307&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/reservation?rid=B307&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/reservation?rid=B310&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/reservation?rid=B310&wid={{ $Cweek }}" class="list-group-item list-group-item-action dropdown-item">B311</a>
  </div>
</div>


 <div class="btn-group dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK C
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">C02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">C10</a>
  </div>
</div>

<div class="btn-group dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK D
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D01</a>
     <a href="#" class="list-group-item list-group-item-action dropdown-item">D02</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D03</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D04</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D05</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D06</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D07</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D08</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D09</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D10</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D11</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D12</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D13</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D14</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D15</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D16</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D17</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D18</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D19</a>
    <a href="#" class="list-group-item list-group-item-action dropdown-item">D20</a>
  </div>
</div>




  </div>
</div>

</div>

<br>

<div class="col-10">
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
  <div class="card hero-image border-info" >
  <div class="card-body">
     <h5 class="card-title"><b>ROOM NO: #</b></h5>
    <center><h1 class="card-title"><b>WELCOME TO COLLEGE OF ICT</b></h1></center>
    <center><h2 class="card-title"><b>ROOM RESERVATION PORTAL</b></h2></center>

    <div align="center">
    
   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>
    
    <h1 >SEMESTER 1 2019/20</h1><br>
    <h2>WEEK: 1-15</h2>

  
</div>


</div>
</div>
</div>
</div>
</div>





@endsection
