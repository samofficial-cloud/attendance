@extends('layouts.app')

@section('title')
  REPORT
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
    <a class="nav-link active" style="color:#060606"href="/report">REPORT</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>
<div class="container">


@if(!empty($_GET['checkbox']))
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{$name}} </p></legend> </div>
@elseif($_GET['selection']=='All courses')
  <div class="col-xs-9"><legend>
    <p class="note"> Attendance report for {{$name}} (All courses) </p></legend> </div>

@else
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{strtoupper($_GET['course_id'])}} </p></legend> </div>
@endif

@if(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))


<div class="col-xs-6">
  @if(count($dataSingle_all)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Date</th>
        <th>Time</th>
        <th>Attendance status</th>
        <th>Arrival time</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($dataSingle_all as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{date("d-m-Y",strtotime($var->datetime))  }}</td>
        <td>{{ date("H:i",strtotime($var->datetime))}}</td>
        <td>@if($var->status==1)
          PRESENT
          @else
          NOT PRESENT
          @endif
        </td>
        <td>@if($var->validity=='VALID')
          EARLY
          @else
          LATE
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>


@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Identification number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td class="counterCell"></td>
        <td>{{$name}}</td>
        <td>{{$reg_no}}</td>
        <td> {{$percentage}}%</td>
      </tr>

    </tbody>

  </table>

</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($data)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{ $var->course }}</td>
        <td> {{ round($var->percentage)}}%</td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>


@else

<div class="col-xs-6">
  @if(count($data)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Identification number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{ $var->name }}</td>
        <td>{{ $var->reg_no }}</td>
        <td> {{round($var->percentage)}}%</td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>

@endif

    <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>
</div>




@endsection
