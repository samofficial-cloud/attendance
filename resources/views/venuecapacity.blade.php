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
    <a class="nav-link active" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>

<?php
use App\capacityvenue;
 $venue = capacityvenue::where('criteria','Lecture')->get();
 $venue1 = capacityvenue::where('criteria','Test')->get();
  $venue2 = capacityvenue::where('criteria','Practical')->get();
 $i=1;
 $j=1;
 $k=1;
?>

<div class="container">
  <h3><b>ROOMS CAPACITY</b></h3>
  <h4>1. Lectures</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($venue as$venue)
      <tr>
      <th scope="row">{{ $i }}</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>

      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>2. Tests and Examinations</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue1 as$venue)
      <tr>
      <th scope="row">{{ $j }}</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>

      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>3. Practicals</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue2 as$venue)
      <tr>
      <th scope="row">{{ $k }}</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>

      </tr>
      <?php
      $k=$k+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>






@endsection
