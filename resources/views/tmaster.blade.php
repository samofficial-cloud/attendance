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
    <a class="nav-link active" style="color:#060606" href="/approval">APPROVAL</a>
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
    <a class="nav-link" style="color:#060606" href="/courses">COURSES</a>
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
  $today=date('d');
  $tmonth=date('m');
  $tyear=date('Y');
 $i='1';
 $j='1';
?>
<div class="container2">
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
  <h4>PENDING REQUESTS</h4>
  @if(count($pending)==0)
  <h5>You have no any pending request.</h5>
  @else
<table class="table table-striped table-bordered" style="width: 108%">
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
      <td>{{ $pending->fromTime}}-{{ $pending->toTime}}</td>
      <td>{{ $pending->Capacity}}</td>
      <td>{{ $pending->Reason}}</td>
      <td>{{ $pending->Remarks}}</td>
      
      <td>
        @if($pending->Year<$tyear)
        <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$pending->id)}}">Obsolete  </a>
        @elseif($pending->Year==$tyear)
        @if($pending->Month<$tmonth)
        <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$pending->id)}}">Obsolete  </a>
        @elseif($pending->Month==$tmonth and $pending->Date<$today)
         <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$pending->id)}}">Obsolete </a>
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
  <h4>APPROVED REQUESTS</h4>
   @if(count($approved)==0)
  <h5>You have no any approved request.</h5>
  @else
<table class="table table-striped table-bordered" style="width: 108%">
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
    
      @foreach($approved as $approved)
      <tr>
      <th scope="row">{{ $j }}</th>
      <td>{{ $approved->Name}}</td>
      <td>{{$approved->Venue}}</td>
      <td>{{ $approved->Day }}</td>
      <td>{{ $approved->Date }}/{{ $approved->Month}}/{{ $approved->Year}}</td>
       <td>{{$approved->Week}}</td>
     <td>{{ $approved->fromTime}}-{{ $approved->toTime}}</td>
     <td>{{ $approved->Capacity}}</td>
      <td>{{ $approved->Reason}}</td>
      <td>{{ $approved->Remarks}}</td>
      <td>
         @if($approved->Year<$tyear)
        <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$approved->id)}}">Obsolete </a> 
        @elseif($approved->Year==$tyear)
        @if($approved->Month<$tmonth)
        <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$approved->id)}}">Obsolete</a>
        @elseif($approved->Month==$tmonth and $approved->Date<$today)
         <a class="btn btn-sm btn-danger" href="{{route('DeleteRequest',$approved->id)}}">Obsolete </a>
         @else
       <a class="btn btn-sm btn-success" href="{{route('changestatusb',$approved->id)}}">Change</a>
       @endif
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


@endsection

@section('pagescript')
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
@endsection