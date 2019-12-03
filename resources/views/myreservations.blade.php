@extends('layouts.app')

@section('title')
  My Reservations
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
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</div>
</nav>
</div>

<br>
<?php
use App\reservation;
 $pending = reservation::where('rstatus','-1')->where('Name',  Auth::user()->name)->get();
  $approved = reservation::where('rstatus','1')->where('Name', Auth::user()->name)->get();
 $i='1';
 $j='1';
?>

<div class="container">
  <h4>PENDING REQUESTS</h4>
   @if(count($pending)==0)
  <h5>You have no any pending request.</h5>
  @else
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Week</th>
      <th scope="col">Time</th>
       <th scope="col">Reason</th>
      <th scope="col">Approval</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($pending as $pending)
      <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{$pending->Venue}}</td>
      <td>{{ $pending->Day }}</td>
      <td>{{ $pending->Date }}/{{ $pending->Month}}/{{ $pending->Year}}</td>
       <td>{{$pending->Week}}</td>
      <td>{{ $pending->Time}}</td>
      <td>{{ $pending->Reason}}</td>
      
      <td><a class="btn btn-sm btn-success" href="{{route('changestatusd',$pending->id)}}">Cancel</a>
        
      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>
@endif
</div>

<br>
<div class="container">
  <h4>APPROVED REQUESTS</h4>
   @if(count($approved)==0)
  <h5>You have no any approved request.</h5>
  @else
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Week</th>
       <th scope="col">Time</th>
      <th scope="col">Reason</th>
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
      <td>{{ $approved->Time}}</td>
      <td>{{ $approved->Reason}}</td>
     
      <td>
       <a class="btn btn-sm btn-success" href="{{route('changestatusd',$approved->id)}}">Cancel</a>
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




@endsection