@extends('layouts.app')

@section('title')
  TIMETABLE
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
  </li>
</ul>

</div>
</nav>
</div>


<?php

  use App\timetable;
  
  $timetabled1 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','07:00-08:00')->where('day','Monday')->get();
  $timetabled2 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','08:00-09:00')->where('day','Monday')->get();
  $timetabled3 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','09:00-10:00')->where('day','Monday')->get();
  $timetabled4 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','10:00-11:00')->where('day','Monday')->get();
  $timetabled5 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','11:00-12:00')->where('day','Monday')->get();
  $timetabled6 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','12:00-13:00')->where('day','Monday')->get();
  $timetabled7 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','13:00-14:00')->where('day','Monday')->get();
  $timetabled8 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','14:00-15:00')->where('day','Monday')->get();
  $timetabled9 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','15:00-16:00')->where('day','Monday')->get();
  $timetabled10 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','16:00-17:00')->where('day','Monday')->get();
  $timetabledC = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Monday')->get();
  $timetabledA = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','18:00-19:00')->where('day','Monday')->get();
  $timetabledB = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','19:00-20:00')->where('day','Monday')->get();



  $timetabled11 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','07:00-08:00')->where('day','Tuesday')->get();
  $timetabled12 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','08:00-09:00')->where('day','Tuesday')->get();
  $timetabled13 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','09:00-10:00')->where('day','Tuesday')->get();
  $timetabled14 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','10:00-11:00')->where('day','Tuesday')->get();
  $timetabled15 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','11:00-12:00')->where('day','Tuesday')->get();
  $timetabled16 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','12:00-13:00')->where('day','Tuesday')->get();
  $timetabled17 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','13:00-14:00')->where('day','Tuesday')->get();
  $timetabled18 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','14:00-15:00')->where('day','Tuesday')->get();
  $timetabled19 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','15:00-16:00')->where('day','Tuesday')->get();
  $timetabled110 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','16:00-17:00')->where('day','Tuesday')->get();
  $timetabled111 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Tuesday')->get();
  $timetabled112 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','18:00-19:00')->where('day','Tuesday')->get();
  $timetabled113 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','19:00-20:00')->where('day','Tuesday')->get();


  $timetabled21 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','07:00-08:00')->where('day','Wednesday')->get();
  $timetabled22 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','08:00-09:00')->where('day','Wednesday')->get();
  $timetabled23 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','09:00-10:00')->where('day','Wednesday')->get();
  $timetabled24 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','10:00-11:00')->where('day','Wednesday')->get();
  $timetabled25 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','11:00-12:00')->where('day','Wednesday')->get();
  $timetabled26 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','12:00-13:00')->where('day','Wednesday')->get();
  $timetabled27 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','13:00-14:00')->where('day','Wednesday')->get();
  $timetabled28 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','14:00-15:00')->where('day','Wednesday')->get();
  $timetabled29 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','15:00-16:00')->where('day','Wednesday')->get();
  $timetabled210 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','16:00-17:00')->where('day','Wednesday')->get();
  $timetabled211 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Wednesday')->get();
  $timetabled212 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','18:00-19:00')->where('day','Wednesday')->get();
  $timetabled213 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','19:00-20:00')->where('day','Wednesday')->get();

  $timetabled31 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','07:00-08:00')->where('day','Thursday')->get();
  $timetabled32 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','08:00-09:00')->where('day','Thursday')->get();
  $timetabled33 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','09:00-10:00')->where('day','Thursday')->get();
  $timetabled34 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','10:00-11:00')->where('day','Thursday')->get();
  $timetabled35 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','11:00-12:00')->where('day','Thursday')->get();
  $timetabled36 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','12:00-13:00')->where('day','Thursday')->get();
  $timetabled37 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','13:00-14:00')->where('day','Thursday')->get();
  $timetabled38 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','14:00-15:00')->where('day','Thursday')->get();
  $timetabled39 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','15:00-16:00')->where('day','Thursday')->get();
  $timetabled310 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','16:00-17:00')->where('day','Thursday')->get();
  $timetabled311 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Thursday')->get();
  $timetabled312 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','18:00-19:00')->where('day','Thursday')->get();
  $timetabled313 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','19:00-20:00')->where('day','Thursday')->get();

  $timetabled41 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','07:00-08:00')->where('day','Friday')->get();
  $timetabled42 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','08:00-09:00')->where('day','Friday')->get();
  $timetabled43 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','09:00-10:00')->where('day','Friday')->get();
  $timetabled44 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','10:00-11:00')->where('day','Friday')->get();
  $timetabled45 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','11:00-12:00')->where('day','Friday')->get();
  $timetabled46 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','12:00-13:00')->where('day','Friday')->get();
  $timetabled47 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','13:00-14:00')->where('day','Friday')->get();
  $timetabled48 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','14:00-15:00')->where('day','Friday')->get();
  $timetabled49 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','15:00-16:00')->where('day','Friday')->get();
  $timetabled410 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','16:00-17:00')->where('day','Friday')->get();
  $timetabled411 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','17:00-18:00')->where('day','Friday')->get();
  $timetabled412 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','18:00-19:00')->where('day','Friday')->get();
  $timetabled413 = timetable::select('course','venue')->where('program','LIKE', '%'.$_GET['rid'].'%')->where('time','19:00-20:00')->where('day','Friday')->get();



  ?> 

  <br>
<div class="container2">
  <div class="row2">
<div class="col-2 bg-light rounded">
<div class="card bg-light">
  <div class="card-body">
    <h5 class="card-title"><b>ROOMS</b></h5>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/room?rid=B101" class="list-group-item list-group-item-action dropdown-item">B101</a>
     <a href="/room?rid=B102" class="list-group-item list-group-item-action dropdown-item">B102</a>
    <a href="/room?rid=B103" class="list-group-item list-group-item-action dropdown-item">B103</a>
    <a href="/room?rid=B104" class="list-group-item list-group-item-action dropdown-item">B104</a>
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/room?rid=B201" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/room?rid=B202" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/room?rid=B203" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/room?rid=B204" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/room?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/room?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/room?rid=B207" class="list-group-item list-group-item-action dropdown-item">B207</a>
    <a href="/room?rid=B208" class="list-group-item list-group-item-action dropdown-item">B208</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/room?rid=B304" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/room?rid=B304" class="list-group-item list-group-item-action dropdown-item">B305</a>
    <a href="/room?rid=B307" class="list-group-item list-group-item-action dropdown-item">B307</a>
    <a href="/room?rid=B307" class="list-group-item list-group-item-action dropdown-item">B308</a>
    <a href="/room?rid=B310" class="list-group-item list-group-item-action dropdown-item">B310</a>
    <a href="/room?rid=B310" class="list-group-item list-group-item-action dropdown-item">B311</a>
  </div>
</div>


 <div class="dropright">
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

<div class="dropright">
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

<br>
<br>
<br>
 <h5><b>PROGRAMME</b></h5>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=CS1" class="list-group-item list-group-item-action dropdown-item">CS1</a>
     <a href="/programme?rid=CS2" class="list-group-item list-group-item-action dropdown-item">CS2</a>
    <a href="/programme?rid=CS3" class="list-group-item list-group-item-action dropdown-item">CS3</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/programme?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/programme?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/programme?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/programme?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/programme?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>



 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/programme?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/programme?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/programme?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/programme?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>



  </div>
</div>

</div>

<style>
table {
  border: 3px solid black;
  width: 100%;
}

td {
  height: 70px;
  
}
</style>


<div class="col-10 bg-light rounded">
  <div class="card" style="background-color:#f6fbff">
  <div class="card-body">
    <h5 class="card-title"><b>PROGRAMME:{{ $_GET['rid'] }}</b></h5>

<div style="color: #29234a"><H1><CENTER>{{ $_GET['rid'] }} TIME TABLE</CENTER></H1></div>
<table border="4" cellspacing="3" align="center" >
<tr>
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

 <td>MONDAY</td>
<td>
  @foreach ($timetabled1 as $times)
{{$times['venue']}}<br>{{$times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled2 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled3 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled4 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled5 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled6 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled7 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled8 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled9 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled10 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabledC as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabledA as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabledB as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

</tr>

<tr align="center">

 <td>TUESDAY</td>
<td>
  @foreach ($timetabled11 as $times)
{{$times['venue']}}<br>{{$times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled12 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled13 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled14 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled15 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled16 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled17 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled18 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled19 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled110 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled111 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled112 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled113 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

</tr>

<tr align="center">

 <td>WEDNESDAY</td>
<td>
  @foreach ($timetabled21 as $times)
{{$times['venue']}}<br>{{$times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled22 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled23 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled24 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled25 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled26 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled27 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled28 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled29 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled210 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled211 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled212 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled213 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

</tr>


<tr align="center">

 <td>THURSDAY</td>
<td>
  @foreach ($timetabled31 as $times)
{{$times['venue']}}<br>{{$times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled32 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled33 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled34 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled35 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled36 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled37 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled38 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled39 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled310 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled311 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled312 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled313 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

</tr>


<tr align="center">

 <td>FRIDAY</td>
<td>
  @foreach ($timetabled41 as $times)
{{$times['venue']}}<br>{{$times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled42 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled43 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled44 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled45 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled46 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled47 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled48 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled49 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled410 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled411 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled412 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

<td>
  @foreach ($timetabled413 as $times)
{{ $times['venue']}}<br>{{ $times['course']}}
@endforeach
</td>

</tr>

</table>


    

</div>
</div>
</div>
</div>
</div>


@endsection