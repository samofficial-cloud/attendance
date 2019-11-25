@extends('layouts.app')

@section('title')
  APPROVAL
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
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
</ul>

</div>
</div>
</nav>
</div>

<br>

<?php
use App\reservation;
 $pending = reservation::where('rstatus','-1')->get();
  $approved = reservation::where('rstatus','1')->get();
 $i='1';
 $j='1';
?>
<div class="container2">
  <h4>PENDING REQUESTS</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Week</th>
      <th scope="col">Time</th>
      <th scope="col">Capacity</th>
       <th scope="col">Reason</th>
      <th scope="col">Remarks</th>
      <th scope="col">Approval</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($pending as $pending)
      <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $pending->Name}}</td>
      <td>{{$pending->Venue}}</td>
      <td>{{ $pending->Day }}</td>
      <td>{{ $pending->Date }}/{{ $pending->Month}}/{{ $pending->Year}}</td>
       <td>{{$pending->Week}}</td>
      <td>{{ $pending->Time}}</td>
      <td>{{ $pending->Capacity}}</td>
      <td>{{ $pending->Reason}}</td>
      <td>{{ $pending->Remarks}}</td>
      
      <td><a class="btn btn-sm btn-success" href="{{route('changestatus',$pending->id)}}">Decline</a>
        
<a class="btn btn-sm btn-success" href="{{route('changestatusc',$pending->id)}}">Approve</a>

      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>

<br>
<div class="container2">
  <h4>APPROVED REQUESTS</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Week</th>
      <th scope="col">Name</th>
      <th scope="col">Reason</th>
      <th scope="col">Time</th>
      <th scope="col">Approval</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($approved as $approved)
      <tr>
      <th scope="row">{{ $j }}</th>
      <td>{{$approved->Venue}}</td>
      <td>{{ $approved->Day }}</td>
      <td>{{ $approved->Date }}/{{ $approved->Month}}/{{ $approved->Year}}</td>
       <td>{{$approved->Week}}</td>
      <td>{{ $approved->Name}}</td>
      <td>{{ $approved->Reason}}</td>
      <td>{{ $approved->Time}}</td>
      <td>
       <a class="btn btn-sm btn-success" href="{{route('changestatusb',$approved->id)}}">Change</a>
        </td>
      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>


@endsection