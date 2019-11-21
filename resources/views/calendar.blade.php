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
</ul>

</div>
</nav>
</div>

<?php

  use App\calendar;
  // $timetabls = timetable::select('course')->where('time','16:00-17:00')->where('venue',$_GET['rid'])->where('day','Monday')->value('course');

  $timetabled = calendar::select('Date','Day','Month','Year')->where('Week',$_GET['wid'])->get();

  $today=date('d-m-Y');
  
  ?> 

  <?php

  use App\timetable;
  // $timetabls = timetable::select('course')->where('time','16:00-17:00')->where('venue',$_GET['rid'])->where('day','Monday')->value('course');
  $timetable = timetable::where('venue',$_GET['rid'])->get();
  
  ?> 

  <style>
table {
  border: 3px solid black;
  width: 100%;
  font-family: "Times New Roman", Times, serif;
}

td {
  font-family: "Times New Roman", Times, serif;
  font-style: normal;
    font-weight: bold;
     border: 1px solid black
     
}

</style>


<div class="container">
  <div class="row">
  <div class="card hero-image">
  <div class="card-body">
    <h5 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h5>

    <h5>{{ $today }}</h5>

     <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ffffff;">
    {{ $_GET['wid'] }}
  </a>

   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/calendar?rid=Wk1" class="list-group-item list-group-item-action dropdown-item">Wk1</a>
     <a href="/calendar?rid=Wk2" class="list-group-item list-group-item-action dropdown-item">Wk2</a>
    <a href="/calendar?rid=Wk3" class="list-group-item list-group-item-action dropdown-item">Wk3</a>
    <a href="/calendar?rid=Wk4" class="list-group-item list-group-item-action dropdown-item">Wk4</a>

  </div>
</div>




<div style="color: #29234a"><H1><CENTER> {{ $_GET['rid'] }} TIME TABLE</CENTER></H1></div>
<table border="4" cellspacing="3" align="center" >
<tr style="background-color:#afbbc5">
<th align="center"></th>
 <th>7:00-8:00</th>
 <th>8:00-9:00</th>
 <th>9:00-10:00</th>
 <th>10:00-11:00</th>
 <th>11:00-12:00</th>
 <th>12:00-13:00</th>
 <th>13:00-14:00</th>
 <th>14:00-15:00</th>
 <th>15:00-16:00</th>
   <th>16:00-17:00</th>
     <th>17:00-18:00</th>
       <th>18:00-19:00</th>
         <th>19:00-20:00</th>
</tr>


<tr align="center">
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Monday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
@endif
@endforeach
<br>
  MON
</th>
 @foreach ($timetable as $timed)
  @if ($timed->day == 'Monday')
  @if ($timed->course == '')
  <td><a href="/form?day=Monday&room={{ $_GET['rid'] }}&tim={{$timed['time']  }}" class="btn button_color active" role="button" aria-pressed="true">Reserve</a></td>
  @else
<td bgcolor="#ffffff">{{ $timed['course']}}</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Tuesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
@endif
@endforeach
<br>
  TUES
</th>
 @foreach ($timetable as $time)
  @if ($time->day == 'Tuesday')
  @if ($time->course == '')
  <td><a href="/form" class="btn button_color active" role="button" aria-pressed="true">Reserve</a></td>
  @else
<td bgcolor="#ffffff">{{ $time['course']}}</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Wednesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
@endif
@endforeach
<br>
  WED
</th>
@foreach ($timetable as $time)
  @if ($time->day == 'Wednesday')
  @if ($time->course == '')
  <td><a href="/form" class="btn button_color active" role="button" aria-pressed="true">Reserve</a></td>
  @else
<td bgcolor="#ffffff">{{ $time['course']}}</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Thursday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
@endif
@endforeach
<br>
  THUR
</th>
@foreach ($timetable as $time)
  @if ($time->day == 'Thursday')
  @if ($time->course == '')
  <td><a href="/form" class="btn button_color active" role="button" aria-pressed="true">Reserve</a></td>
  @else
<td bgcolor="#ffffff">{{ $time['course']}}</td>
@endif
@endif
@endforeach
</tr>

<tr align="center">
 <th  style="background-color:#f79d45">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Friday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
@endif
@endforeach
<br>
  FRI
</th>
@foreach ($timetable as $time)
  @if ($time->day == 'Friday')
  @if ($time->course == '')
  <td><a href="/form" class="btn button_color active" role="button" aria-pressed="true">Reserve</a></td>
  @else
<td bgcolor="#ffffff">{{ $time['course']}}</td>
@endif
@endif
@endforeach
</tr>



    
    
</table>
</div>
</div>
</div>
</div>



@endsection