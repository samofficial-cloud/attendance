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

  <div class="col-xs-9"><legend>
    <p class="note"> Attendance report from  week {{$_GET['week_no']}}  to  week {{$_GET['week_no_2']}} </p></legend> </div>

@if(!empty($_GET['reg_no']))


<div class="col-xs-6">

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Registration number</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td class="counterCell"></td>
        <td>{{$name}}</td>
        <td>{{$reg_no}}</td>
        <td> {{$course_name}}</td>
        <td> {{$percentage}}%</td>
      </tr>

    </tbody>

  </table>

</div>

@else

<div class="col-xs-6">
  @if(count($data)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Registration number</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{ $var->name }}</td>
        <td>{{ $var->reg_no }}</td>
        <td> {{ $var->course }}</td>
        <td> {{ $var->percentage }}%</td>
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
