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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
    <a class="nav-link active" style="color:#060606" href="/venue">VENUE RESERVATION</a>
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
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

  use App\calendar;
$timetabled = calendar::select('Date','Day','Month','Year')->where('Week',$_GET['wid'])->get();

$Cweek = calendar::select('Week')->where('Date',date('j'))->where('Month',date('n'))->where('Year',date('Y'))->Value('Week');

  $today=date('j-n-Y');
  $tdate=date('j');
  $tmonth=date('n');
  $tyear=date('Y');

   use App\reservation;
   
    $stat = reservation::select('rstatus')->where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('Day','Monday')->where('Month',date('m'))->get();
   $states = reservation::where('Week',$_GET['wid'])->where('Venue',$_GET['rid'])->where('rstatus','-1')->get();  

  use App\capacityvenue;
 $capacity = capacityvenue::select('capacity')->where('venue',$_GET['rid'])->where('Criteria','Lecture')->value('capacity');

$capacity1 = capacityvenue::select('capacity')->where('venue',$_GET['rid'])->where('Criteria','Test')->value('capacity');
  ?> 

<br>

<div class="container2">
  <div class="row2">
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
  <div class="card hero-image border-info">
  <div class="card-body">
    <div class="row">
    <div class="col"><h5 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h5></div>

    <div class="col" align="center"> <h5><b>TODAY:{{ $today }}</b></h5></div>
    <div class="col" align="right"> <h5><b>CURRENT WEEK:{{ $Cweek }}</b></h5></div>
    </div>

     <div class="dropright">
  <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #ffffff;">
    {{ $_GET['wid'] }}
  </a>

   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/reservation?rid={{$_GET['rid']}}&wid=Wk1" class="list-group-item list-group-item-action dropdown-item">Wk1 (23/03-27/03)</a>
     <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk2" class="list-group-item list-group-item-action dropdown-item">Wk2 (30/03-03/04)</a>
    <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk3" class="list-group-item list-group-item-action dropdown-item">Wk3 (06/04-10/04)</a>
    <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk4" class="list-group-item list-group-item-action dropdown-item">Wk4 (13/04-17/04)</a>
     <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk5" class="list-group-item list-group-item-action dropdown-item">Wk5 (20/04-24/04)</a>
       <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk6" class="list-group-item list-group-item-action dropdown-item">Wk6 (27/04-01/05)</a>
        <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk7" class="list-group-item list-group-item-action dropdown-item">Wk7 (04/05-08/05)</a>
         <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk8" class="list-group-item list-group-item-action dropdown-item">Wk8 (11/05-15/05)</a>
          <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk9" class="list-group-item list-group-item-action dropdown-item">Wk9 (18/05-22/05)</a>
           <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk10" class="list-group-item list-group-item-action dropdown-item">Wk10 (25/05-29/05)</a>
            <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk11" class="list-group-item list-group-item-action dropdown-item">Wk11 (01/06-05/06)</a>
             <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk12" class="list-group-item list-group-item-action dropdown-item">Wk12 (08/06-12/06)</a>
              <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk13" class="list-group-item list-group-item-action dropdown-item">Wk13 (15/06-19/06)</a>
               <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk14" class="list-group-item list-group-item-action dropdown-item">Wk14 (22/06-26/06)</a>
                <a href="/reservation?rid={{ $_GET['rid'] }}&wid=Wk15" class="list-group-item list-group-item-action dropdown-item">Wk15 (29/06-03/07)</a>

  </div>
</div>

<div style="color: #29234a"><H1><CENTER>{{ $_GET['rid'] }} TIME TABLE</CENTER></H1></div>
<table border="4" cellspacing="3" align="center" id="tid">
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
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  MON
</th>
 @foreach ($timetable as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($state as $stat)
  @if('08:00'<=$stat->toTime)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endif
    @endforeach
    @if(count($state)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inlineFormCustomSelecttoTime{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inlineFormCustomSelecttoTime{{$timed->id}}">
    @if(is_null($next))@if(is_null($nexts))<option value="08:00">08:00</option>
    @if(is_null($next1))@if(is_null($nexts1))<option value="09:00">09:00</option>
    @if(is_null($next2))@if(is_null($nexts2))<option value="10:00">10:00</option>
    @if(is_null($next3))@if(is_null($nexts3))<option value="11:00">11:00</option>
    @if(is_null($next4))@if(is_null($nexts4))<option value="12:00">12:00</option>
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="inlineFormCustomSelectReason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectReason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


 @foreach ($timetable1 as $timed)
  @if ($timed->course == '') 
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @if('09:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('09:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next1))@if(is_null($nexts1))<option value="09:00">09:00</option>
    @if(is_null($next2))@if(is_null($nexts2))<option value="10:00">10:00</option>
    @if(is_null($next3))@if(is_null($nexts3))<option value="11:00">11:00</option>
    @if(is_null($next4))@if(is_null($nexts4))<option value="12:00">12:00</option>
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
  @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  
  @endif
  @endforeach

@foreach ($timetable2 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('10:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('10:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('10:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next2))@if(is_null($nexts2))<option value="10:00">10:00</option>
    @if(is_null($next3))@if(is_null($nexts3))<option value="11:00">11:00</option>
    @if(is_null($next4))@if(is_null($nexts4))<option value="12:00">12:00</option>
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable3 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('11:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('11:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next3))@if(is_null($nexts3))<option value="11:00">11:00</option>
    @if(is_null($next4))@if(is_null($nexts4))<option value="12:00">12:00</option>
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


  @foreach ($timetable4 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('12:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('12:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('12:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next4))@if(is_null($nexts4))<option value="12:00">12:00</option>
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable5 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('13:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('13:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next5))@if(is_null($nexts5))<option value="13:00">13:00</option>
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable6 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('14:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('14:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next6))@if(is_null($nexts6))<option value="14:00">14:00</option>
    @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable7 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('15:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('15:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next7))@if(is_null($nexts7))<option value="15:00">15:00</option>
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable8 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('16:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('16:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex8)
       @foreach($state8 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next8))@if(is_null($nexts8))<option value="16:00">16:00</option>
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable9 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  
  @if('17:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('17:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex8)
       @foreach($state8 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex9)
       @foreach($state9 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next9))@if(is_null($nexts9))<option value="17:00">17:00</option>
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
</td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable10 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('18:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('18:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex8)
       @foreach($state8 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex9)
       @foreach($state9 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex10)
       @foreach($state10 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    
     @if(is_null($next10))@if(is_null($nexts10))<option value="18:00">18:00</option>
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable11 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('19:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('19:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex8)
       @foreach($state8 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex9)
       @foreach($state9 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex10)
       @foreach($state10 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex11)
       @foreach($state11 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next11))@if(is_null($nexts11))<option value="19:00">19:00</option>
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable12 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('20:00'<=$statex)
  @foreach($state as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('20:00'<=$statex1)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex2)
       @foreach($state2 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex3)
       @foreach($state3 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex4)
       @foreach($state4 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex5)
       @foreach($state5 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex6)
       @foreach($state6 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex7)
       @foreach($state7 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex8)
       @foreach($state8 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex9)
       @foreach($state9 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex10)
       @foreach($state10 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex11)
       @foreach($state11 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex12)
       @foreach($state12 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Monday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
     @if(is_null($next12))@if(is_null($nexts12))<option value="20:00">20:00</option>
    @endif @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

</tr>




<tr align="center">
 <th  style="background-color:#88eab2">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Tuesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  TUE
</th>
 @foreach ($timetableA2 as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA2 as $stat)
  @if('08:00'<=$stat->toTime)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endif
    @endforeach
    @if(count($stateA2)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inlineFormCustomSelecttoTime{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inlineFormCustomSelecttoTime{{$timed->id}}">
    @if(is_null($nextA2))@if(is_null($nextsA2))<option value="08:00">08:00</option>
    @if(is_null($next21))@if(is_null($nexts21))<option value="09:00">09:00</option>
    @if(is_null($next22))@if(is_null($nexts22))<option value="10:00">10:00</option>
    @if(is_null($next23))@if(is_null($nexts23))<option value="11:00">11:00</option>
    @if(is_null($next24))@if(is_null($nexts24))<option value="12:00">12:00</option>
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="inlineFormCustomSelectReason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectReason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


 @foreach ($timetable21 as $timed)
  @if ($timed->course == '') 
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @if('09:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('09:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next21))@if(is_null($nexts21))<option value="09:00">09:00</option>
    @if(is_null($next22))@if(is_null($nexts22))<option value="10:00">10:00</option>
    @if(is_null($next23))@if(is_null($nexts23))<option value="11:00">11:00</option>
    @if(is_null($next24))@if(is_null($nexts24))<option value="12:00">12:00</option>
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
  @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  
  @endif
  @endforeach

@foreach ($timetable22 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('10:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('10:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('10:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next22))@if(is_null($nexts22))<option value="10:00">10:00</option>
    @if(is_null($next23))@if(is_null($nexts23))<option value="11:00">11:00</option>
    @if(is_null($next24))@if(is_null($nexts24))<option value="12:00">12:00</option>
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable23 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('11:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('11:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next23))@if(is_null($nexts23))<option value="11:00">11:00</option>
    @if(is_null($next24))@if(is_null($nexts24))<option value="12:00">12:00</option>
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


  @foreach ($timetable24 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('12:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('12:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('12:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next24))@if(is_null($nexts24))<option value="12:00">12:00</option>
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable25 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('13:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('13:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next25))@if(is_null($nexts25))<option value="13:00">13:00</option>
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable26 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('14:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('14:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next26))@if(is_null($nexts26))<option value="14:00">14:00</option>
    @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable27 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('15:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('15:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next27))@if(is_null($nexts27))<option value="15:00">15:00</option>
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable28 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('16:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('16:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex28)
       @foreach($state28 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next28))@if(is_null($nexts28))<option value="16:00">16:00</option>
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable29 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  
  @if('17:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('17:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex28)
       @foreach($state28 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex29)
       @foreach($state29 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next29))@if(is_null($nexts29))<option value="17:00">17:00</option>
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
</td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable210 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('18:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('18:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex28)
       @foreach($state28 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex29)
       @foreach($state29 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex210)
       @foreach($state210 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    
     @if(is_null($next210))@if(is_null($nexts210))<option value="18:00">18:00</option>
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable211 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('19:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('19:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex28)
       @foreach($state28 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex29)
       @foreach($state29 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex210)
       @foreach($state210 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex211)
       @foreach($state211 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next211))@if(is_null($nexts211))<option value="19:00">19:00</option>
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable212 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('20:00'<=$statexA2)
  @foreach($stateA2 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('20:00'<=$statex21)
       @foreach($state21 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex22)
       @foreach($state22 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex23)
       @foreach($state23 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex24)
       @foreach($state24 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex25)
       @foreach($state25 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex26)
       @foreach($state26 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex27)
       @foreach($state27 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex28)
       @foreach($state28 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex29)
       @foreach($state29 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex210)
       @foreach($state210 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex211)
       @foreach($state211 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex212)
       @foreach($state212 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Tuesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
     @if(is_null($next212))@if(is_null($nexts212))<option value="20:00">20:00</option>
    @endif @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

</tr>






<tr align="center">
 <th  style="background-color:#ef6c68">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Wednesday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  WED
</th>
 @foreach ($timetableA3 as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA3 as $stat)
  @if('08:00'<=$stat->toTime)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endif
    @endforeach
    @if(count($stateA3)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inlineFormCustomSelecttoTime{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inlineFormCustomSelecttoTime{{$timed->id}}">
    @if(is_null($nextA3))@if(is_null($nextsA3))<option value="08:00">08:00</option>
    @if(is_null($next31))@if(is_null($nexts31))<option value="09:00">09:00</option>
    @if(is_null($next32))@if(is_null($nexts32))<option value="10:00">10:00</option>
    @if(is_null($next33))@if(is_null($nexts33))<option value="11:00">11:00</option>
    @if(is_null($next34))@if(is_null($nexts34))<option value="12:00">12:00</option>
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="inlineFormCustomSelectReason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectReason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


 @foreach ($timetable31 as $timed)
  @if ($timed->course == '') 
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @if('09:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('09:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next31))@if(is_null($nexts31))<option value="09:00">09:00</option>
    @if(is_null($next32))@if(is_null($nexts32))<option value="10:00">10:00</option>
    @if(is_null($next33))@if(is_null($nexts33))<option value="11:00">11:00</option>
    @if(is_null($next34))@if(is_null($nexts34))<option value="12:00">12:00</option>
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
  @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  
  @endif
  @endforeach

@foreach ($timetable32 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('10:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('10:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('10:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next32))@if(is_null($nexts32))<option value="10:00">10:00</option>
    @if(is_null($next33))@if(is_null($nexts33))<option value="11:00">11:00</option>
    @if(is_null($next34))@if(is_null($nexts34))<option value="12:00">12:00</option>
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable33 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('11:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('11:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next33))@if(is_null($nexts33))<option value="11:00">11:00</option>
    @if(is_null($next34))@if(is_null($nexts34))<option value="12:00">12:00</option>
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


  @foreach ($timetable34 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('12:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('12:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('12:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next34))@if(is_null($nexts34))<option value="12:00">12:00</option>
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable35 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('13:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('13:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next35))@if(is_null($nexts35))<option value="13:00">13:00</option>
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable36 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('14:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('14:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next36))@if(is_null($nexts36))<option value="14:00">14:00</option>
    @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable37 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('15:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('15:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next37))@if(is_null($nexts37))<option value="15:00">15:00</option>
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable38 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('16:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('16:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex38)
       @foreach($state38 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next38))@if(is_null($nexts38))<option value="16:00">16:00</option>
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable39 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  
  @if('17:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('17:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex38)
       @foreach($state38 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex39)
       @foreach($state39 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next39))@if(is_null($nexts39))<option value="17:00">17:00</option>
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
</td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable310 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('18:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('18:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex38)
       @foreach($state38 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex39)
       @foreach($state39 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex310)
       @foreach($state310 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    
     @if(is_null($next310))@if(is_null($nexts310))<option value="18:00">18:00</option>
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable311 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('19:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('19:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex38)
       @foreach($state38 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex39)
       @foreach($state39 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex310)
       @foreach($state310 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex311)
       @foreach($state311 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next311))@if(is_null($nexts311))<option value="19:00">19:00</option>
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable312 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('20:00'<=$statexA3)
  @foreach($stateA3 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('20:00'<=$statex31)
       @foreach($state31 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex32)
       @foreach($state32 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex33)
       @foreach($state33 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex34)
       @foreach($state34 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex35)
       @foreach($state35 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex36)
       @foreach($state36 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex37)
       @foreach($state37 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex38)
       @foreach($state38 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex39)
       @foreach($state39 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex310)
       @foreach($state310 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex311)
       @foreach($state311 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex312)
       @foreach($state312 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Wednesday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
     @if(is_null($next312))@if(is_null($nexts312))<option value="20:00">20:00</option>
    @endif @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

</tr>


<tr align="center">
 <th  style="background-color:#b5f66d">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Thursday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  THUR
</th>
 @foreach ($timetableA4 as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA4 as $stat)
  @if('08:00'<=$stat->toTime)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endif
    @endforeach
    @if(count($stateA4)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inlineFormCustomSelecttoTime{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inlineFormCustomSelecttoTime{{$timed->id}}">
    @if(is_null($nextA4))@if(is_null($nextsA4))<option value="08:00">08:00</option>
    @if(is_null($next41))@if(is_null($nexts41))<option value="09:00">09:00</option>
    @if(is_null($next42))@if(is_null($nexts42))<option value="10:00">10:00</option>
    @if(is_null($next43))@if(is_null($nexts43))<option value="11:00">11:00</option>
    @if(is_null($next44))@if(is_null($nexts44))<option value="12:00">12:00</option>
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="inlineFormCustomSelectReason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectReason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


 @foreach ($timetable41 as $timed)
  @if ($timed->course == '') 
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @if('09:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('09:00'<=$statex41)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next41))@if(is_null($nexts41))<option value="09:00">09:00</option>
    @if(is_null($next42))@if(is_null($nexts42))<option value="10:00">10:00</option>
    @if(is_null($next43))@if(is_null($nexts43))<option value="11:00">11:00</option>
    @if(is_null($next44))@if(is_null($nexts44))<option value="12:00">12:00</option>
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
  @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  
  @endif
  @endforeach

@foreach ($timetable42 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('10:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('10:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('10:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next42))@if(is_null($nexts42))<option value="10:00">10:00</option>
    @if(is_null($next43))@if(is_null($nexts43))<option value="11:00">11:00</option>
    @if(is_null($next44))@if(is_null($nexts44))<option value="12:00">12:00</option>
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable43 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('11:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('11:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next43))@if(is_null($nexts43))<option value="11:00">11:00</option>
    @if(is_null($next44))@if(is_null($nexts44))<option value="12:00">12:00</option>
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


  @foreach ($timetable44 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('12:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('12:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('12:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next44))@if(is_null($nexts44))<option value="12:00">12:00</option>
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable45 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('13:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('13:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next45))@if(is_null($nexts45))<option value="13:00">13:00</option>
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable46 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('14:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('14:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next46))@if(is_null($nexts46))<option value="14:00">14:00</option>
    @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable47 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('15:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('15:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next47))@if(is_null($nexts47))<option value="15:00">15:00</option>
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable48 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('16:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('16:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex48)
       @foreach($state48 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next48))@if(is_null($nexts48))<option value="16:00">16:00</option>
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable49 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  
  @if('17:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('17:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex48)
       @foreach($state48 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex49)
       @foreach($state49 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next49))@if(is_null($nexts49))<option value="17:00">17:00</option>
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
</td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable410 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('18:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('18:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex48)
       @foreach($state48 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex49)
       @foreach($state49 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex410)
       @foreach($state410 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    
     @if(is_null($next410))@if(is_null($nexts410))<option value="18:00">18:00</option>
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable411 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('19:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('19:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex48)
       @foreach($state48 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex49)
       @foreach($state49 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex410)
       @foreach($state410 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex411)
       @foreach($state411 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next411))@if(is_null($nexts411))<option value="19:00">19:00</option>
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable412 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('20:00'<=$statexA4)
  @foreach($stateA4 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('20:00'<=$statex41)
       @foreach($state41 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex42)
       @foreach($state42 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex43)
       @foreach($state43 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex44)
       @foreach($state44 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex45)
       @foreach($state45 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex46)
       @foreach($state46 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex47)
       @foreach($state47 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex48)
       @foreach($state48 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex49)
       @foreach($state49 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex410)
       @foreach($state410 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex411)
       @foreach($state411 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex412)
       @foreach($state412 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Thursday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
     @if(is_null($next412))@if(is_null($nexts412))<option value="20:00">20:00</option>
    @endif @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

</tr>


<tr align="center">
 <th  style="background-color:#ffed4a">
  @foreach ($timetabled as $times)
  @if ($times->Day == 'Friday')
{{ $times['Date']}}/{{ $times['Month']}}/{{ $times['Year']}}
<?php
$dd=$times['Date'];
$mm=$times['Month'];
$yy=$times['Year'];
?>
@endif
@endforeach
<br>
  FRI
</th>
 @foreach ($timetableA5 as $timed)
  @if ($timed->course== '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @foreach($stateA5 as $stat)
  @if('08:00'<=$stat->toTime)
   @if( $stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endif
    @endforeach
    @if(count($stateA5)==0)
    <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputday{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inlineFormCustomSelecttoTime{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inlineFormCustomSelecttoTime{{$timed->id}}">
    @if(is_null($nextA5))@if(is_null($nextsA5))<option value="08:00">08:00</option>
    @if(is_null($next51))@if(is_null($nexts51))<option value="09:00">09:00</option>
    @if(is_null($next52))@if(is_null($nexts52))<option value="10:00">10:00</option>
    @if(is_null($next53))@if(is_null($nexts53))<option value="11:00">11:00</option>
    @if(is_null($next54))@if(is_null($nexts54))<option value="12:00">12:00</option>
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="inlineFormCustomSelectReason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="inlineFormCustomSelectReason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
@endif
@endif
@endif

@else
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $timed['course']}}</td>
@endif
@endforeach


 @foreach ($timetable51 as $timed)
  @if ($timed->course == '') 
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  @if('09:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('09:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next51))@if(is_null($nexts51))<option value="09:00">09:00</option>
    @if(is_null($next52))@if(is_null($nexts52))<option value="10:00">10:00</option>
    @if(is_null($next53))@if(is_null($nexts53))<option value="11:00">11:00</option>
    @if(is_null($next54))@if(is_null($nexts54))<option value="12:00">12:00</option>
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
  @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  
  @endif
  @endforeach

@foreach ($timetable52 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('10:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('10:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('10:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next52))@if(is_null($nexts52))<option value="10:00">10:00</option>
    @if(is_null($next53))@if(is_null($nexts53))<option value="11:00">11:00</option>
    @if(is_null($next54))@if(is_null($nexts54))<option value="12:00">12:00</option>
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable53 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('11:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('11:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('11:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next53))@if(is_null($nexts53))<option value="11:00">11:00</option>
    @if(is_null($next54))@if(is_null($nexts54))<option value="12:00">12:00</option>
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


  @foreach ($timetable54 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('12:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('12:00'<=$statex51)
       @foreach($state1 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('12:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('12:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next54))@if(is_null($nexts54))<option value="12:00">12:00</option>
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable55 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('13:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('13:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('13:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('13:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next55))@if(is_null($nexts55))<option value="13:00">13:00</option>
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif @endif @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable56 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('14:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('14:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('14:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('14:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
        <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next56))@if(is_null($nexts56))<option value="14:00">14:00</option>
    @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

   @foreach ($timetable57 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('15:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('15:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('15:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('15:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
   @if(is_null($next57))@if(is_null($nexts57))<option value="15:00">15:00</option>
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach


   @foreach ($timetable58 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('16:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('16:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('16:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('16:00'<=$statex58)
       @foreach($state58 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next58))@if(is_null($nexts58))<option value="16:00">16:00</option>
    @if(is_null($next59))@if(is_null($nexts59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable59 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else
  
  @if('17:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('17:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('17:00'<=$statex58)
       @foreach($state58 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('17:00'<=$statex59)
       @foreach($state59 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach


        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next59))@if(is_null($next59))<option value="17:00">17:00</option>
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif  @endif  @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
</td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

@foreach ($timetable510 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('18:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('18:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('18:00'<=$statex58)
       @foreach($state58 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex59)
       @foreach($state59 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('18:00'<=$statex510)
       @foreach($state510 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    
     @if(is_null($next510))@if(is_null($nexts510))<option value="18:00">18:00</option>
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable511 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('19:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('19:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('19:00'<=$statex58)
       @foreach($state58 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex59)
       @foreach($state59 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex510)
       @foreach($state510 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('19:00'<=$statex511)
       @foreach($state511 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
    @if(is_null($next511))@if(is_null($nexts511))<option value="19:00">19:00</option>
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif  @endif  @endif
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

  @foreach ($timetable512 as $timed)
  @if ($timed->course == '')
  @if($yy<$tyear)
  <td><br><br>N/A</td>
  @elseif($yy==$tyear)
  @if($mm<$tmonth)
  <td><br><br>N/A</td>
  @elseif($mm==$tmonth and $dd<$tdate)
  <td><br><br>N/A</td>
  @else 
  
  @if('20:00'<=$statexA5)
  @foreach($stateA5 as $stat)
   @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
    @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
     @endif
     @endforeach

     @elseif('20:00'<=$statex51)
       @foreach($state51 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex52)
       @foreach($state52 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex53)
       @foreach($state53 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex54)
       @foreach($state54 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex55)
       @foreach($state55 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex56)
       @foreach($state56 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex57)
       @foreach($state57 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex58)
       @foreach($state58 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex59)
       @foreach($state59 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex510)
       @foreach($state510 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @elseif('20:00'<=$statex511)
       @foreach($state511 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

         @elseif('20:00'<=$statex512)
       @foreach($state512 as $stat)
         @if($stat->rstatus=='1')<td bgcolor="##c7aeec">Reserved</td>
         @elseif($stat->rstatus=='-1')<td bgcolor="#81ecaf">Pending</td>
         @endif
        @endforeach

        @else
         <td height="100">
      <a data-toggle="modal" data-target="#id{{$timed->id}}" class="btn button_color active" role="button" aria-pressed="true"><font color="blue">Reserve</font></a>
      <div class="modal fade" id="id{{$timed->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="post" action="{{url('create')}}">
  {{csrf_field()}}
  <div class="form-group row">
    <label for="InputName{{$timed->id}}" class="col-sm-3 col-form-label">Employee ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="InputName{{$timed->id}}" name="Name" value="{{ Auth::user()->name }}" readonly>
    </div>
  </div>
  <div class="form-group row">
    <label for="Venue{{$timed->id}}"  class="col-sm-3 col-form-label">Venue:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Venue{{$timed->id}}" name="Venue" value="{{ $_GET['rid'] }}" readonly>
  </div>
  </div>
   <div class="form-group row">
    <label for="Day{{$timed->id}}"  class="col-sm-3 col-form-label">Day:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="Day{{$timed->id}}" name="Day" value="Friday" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputdate{{$timed->id}}"  class="col-sm-3 col-form-label">Date:</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="inputdate{{$timed->id}}" name="Date" value="{{ $dd }}/{{ $mm }}/{{ $yy }}" readonly>
  </div>
  </div>


  <div class="form-group row">
    <label for="inputTimeFrom{{$timed->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="text" class="form-control" id="inputTimeFrom{{$timed->id}}" name="fromTime" value="{{$timed->fromTime}}" readonly>
  </div>
   <label for="inputTimeTo{{$timed->id}}"  class="col-sm-2 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <select class="custom-select Reason" name="toTime" id="inputTimeTo{{$timed->id}}">
     @if(is_null($next512))@if(is_null($nexts512))<option value="20:00">20:00</option>
    @endif @endif 
  </select>
  </div>
  </div>

<input type="hidden" id="Month{{$timed->id}}" name="Month" value="{{ $mm}}">
<input type="hidden" id="wid{{$timed->id}}" name="wid" value="{{ $_GET['wid'] }}">
<input type="hidden" id="Year{{$timed->id}}" name="Year" value="{{ $yy }}">
<input type="hidden" id="Date{{$timed->id}}" name="Date" value="{{ $dd}}">
<input type="hidden" id="today{{$timed->id}}" name="ReservationDate" value="{{$today}}">

  <div class="form-group row">
    <label for="Reason{{$timed->id}}"  class="col-sm-3 col-form-label">Reason:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Reason" id="Reason{{$timed->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Seminar">Seminar</option>
    <option value="Meeting">Meeting</option>
    <option value="Practical">Practical</option>
    <option value="Others">Other</option>
  </select>
  </div>
  </div>

  <div class="slidecontainer form-group row">
        <label for="inputCapacity"  class="col-sm-3 col-form-label">No. of Participant:</label>
        <div class="col-sm-8">
  <input  class="form-control-lg" type="number"  min="0" max={{ $capacity}} step=1 name="capacity" required />
</div>

</div>

   <div class="form-group row">
    <label for="FormControlTextarea1{{$timed->id}}" class="col-sm-3">Remarks:</label>
    <div class="col-sm-8">
    <textarea class="form-control" name="remark" id="FormControlTextarea1{{$timed->id}}" rows="1" maxlength="80"></textarea>
  </div>
  </div>
  

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

     </form>
</div>

</div>
</div>
</div>
 </td>
     @endif
     @endif
     @endif
 
  @else
<td bgcolor="#ffffff"><font color="green">{{ $timed['criteria']}}</font><br>{{ $timed['course']}}</td>
  @endif
  @endforeach

</tr>

</table>
<br>
<div>
<h5><b>NOTE<br>This room can accomodate as follows:
<table>
  <tr>
    <td>1. Lectures/Seminars</td>
    <td>-</td>
    <td>{{$capacity}}</td>
  </tr>
  <tr>
  <td>2. Tests and Exams</td>
  <td>-</td>
  <td>{{$capacity1}}</td>
</tr>
</table>
</b>
</h5>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection
