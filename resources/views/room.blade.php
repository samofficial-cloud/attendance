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
  <div class="container2">
 <ul class="nav1 nav-tabs">
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
</nav>
</div>

<?php

  use App\timetable;
  $timetabled = timetable::where('venue',$_GET['rid'])->get();
   $timetabled1[] = timetable::where('venue',$_GET['rid'])->where('day','Monday')->get();
  $timetablede[] = timetable::where('venue',$_GET['rid'])->where('day','Tuesday')->get();
  $timetabled2[] = timetable::where('venue',$_GET['rid'])->where('day','Wednesday')->get();
  $timetabled3[] = timetable::where('venue',$_GET['rid'])->where('day','Thursday')->get();
  $timetabled4[] = timetable::where('venue',$_GET['rid'])->where('day','Friday')->get();


  ?> 

<br>
<div class="container2">
  <div class="row2">
<div class="col-2 bg-light rounded">
<div class="card bg-light border-info">
  <div class="card-body">
    <h5 class="card-title"><b>ROOMS</b></h5>
    

    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    BLOCK B
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B105</a>
    <a href="/room?rid=B106" class="list-group-item list-group-item-action dropdown-item">B106</a>
    <a href="/room?rid=B201" class="list-group-item list-group-item-action dropdown-item">B201</a>
    <a href="/room?rid=B202" class="list-group-item list-group-item-action dropdown-item">B202</a>
    <a href="/room?rid=B203" class="list-group-item list-group-item-action dropdown-item">B203</a>
    <a href="/room?rid=B204" class="list-group-item list-group-item-action dropdown-item">B204</a>
    <a href="/room?rid=B205" class="list-group-item list-group-item-action dropdown-item">B205</a>
    <a href="/room?rid=B206" class="list-group-item list-group-item-action dropdown-item">B206</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B301</a>
    <a href="/room?rid=B302" class="list-group-item list-group-item-action dropdown-item">B302</a>
    <a href="/room?rid=B305" class="list-group-item list-group-item-action dropdown-item">B304</a>
    <a href="/room?rid=B305" class="list-group-item list-group-item-action dropdown-item">B305</a>
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
 <h5><b>PROGRAMS</b></h5>

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



<div class="col-10 ">
  <div class="card hero-image border-info">
  <div class="card-body">
    <h5 class="card-title"><b>ROOM NO:{{ $_GET['rid'] }}</b></h5>

<div style="color: #29234a"><H1><CENTER><b>{{ $_GET['rid'] }} TIME TABLE</b></CENTER></H1></div>
<table border="4" align="center" id="tid">
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
  <?php
  $n=1;
  $p=1;
  $z=0;
  ?>
  <th  style="background-color:#f79d45">M<br>O<br>N</th>
 @for ($l = 0; $l <13; $l++)
 @if($timetabled1[0][$l]->course==$timetabled1[0][$n]->course)
 <?php
 $p++;
 ?>
 @elseif($timetabled1[0][$l]->course!=$timetabled1[0][$n]->course)
 @if($z==0)
 @if($timetabled1[0][0]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled1[0][0]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled1[0][0]->criteria}}</font><br>{{ $timetabled1[0][0]->course }}</td>
  @endif
 <?php
 $z=1;
 $p=1;
 ?>
 @elseif($z!=0)
 @if($timetabled1[0][$l]->course=='')
 <td colspan="{{ $p}}">{{ $timetabled1[0][$l]->course }}</td>
 @else
 <td bgcolor="#ffffff" colspan="{{ $p}}"><font color="green">{{  $timetabled1[0][$l]->criteria}}</font><br> {{ $timetabled1[0][$l]->course }}</td>
 @endif
 <?php
 $p=1;
 ?>
 @endif
 @endif
 <?php
 $n=$n+1;
 ?>
 @if ($n>12)
 @if($timetabled1[0][12]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled1[0][12]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled1[0][12]->criteria}}</font><br>{{ $timetabled1[0][12]->course }}</td>
  @endif
 @break;
 @endif
 
@endfor
</tr>





<tr align="center">
  <?php
  $n=1;
  $p=1;
  $z=0;
  ?>
 <th style="background-color:#88eab2">T<br>U<br>E</th>
 @for ($l = 0; $l <13; $l++)
 @if($timetablede[0][$l]->course==$timetablede[0][$n]->course)
 <?php
 $p++;
 ?>
 @elseif($timetablede[0][$l]->course!=$timetablede[0][$n]->course)
 @if($z==0)
 @if($timetablede[0][0]->course=='')
 <td colspan="{{ $p }}">{{ $timetablede[0][0]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetablede[0][0]->criteria}}</font><br>{{ $timetablede[0][0]->course }}</td>
  @endif
 <?php
 $z=1;
 $p=1;
 ?>
 @elseif($z!=0)
 @if($timetablede[0][$l]->course=='')
 <td colspan="{{ $p}}">{{ $timetablede[0][$l]->course }}</td>
 @else
 <td bgcolor="#ffffff" colspan="{{ $p}}"><font color="green">{{  $timetablede[0][$l]->criteria}}</font><br> {{ $timetablede[0][$l]->course }}</td>
 @endif
 <?php
 $p=1;
 ?>
 @endif
 @endif
 <?php
 $n=$n+1;
 ?>
 @if ($n>12)
 @if($timetablede[0][12]->course=='')
 <td colspan="{{ $p }}">{{ $timetablede[0][12]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetablede[0][12]->criteria}}</font><br>{{ $timetablede[0][12]->course }}</td>
  @endif
 @break;
 @endif
 
@endfor
</tr>

<tr align="center">
  <?php
  $n=1;
  $p=1;
  $z=0;
  ?>
 <th style="background-color:#ef6c68">W<br>E<br>D</th>
 @for ($l = 0; $l <13; $l++)
 @if($timetabled2[0][$l]->course==$timetabled2[0][$n]->course)
 <?php
 $p++;
 ?>
 @elseif($timetabled2[0][$l]->course!=$timetabled2[0][$n]->course)
 @if($z==0)
 @if($timetabled2[0][0]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled2[0][0]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled2[0][0]->criteria}}</font><br>{{ $timetabled2[0][0]->course }}</td>
  @endif
 <?php
 $z=1;
 $p=1;
 ?>
 @elseif($z!=0)
 @if($timetabled2[0][$l]->course=='')
 <td colspan="{{ $p}}">{{ $timetabled2[0][$l]->course }}</td>
 @else
 <td bgcolor="#ffffff" colspan="{{ $p}}"><font color="green">{{  $timetabled2[0][$l]->criteria}}</font><br> {{ $timetabled2[0][$l]->course }}</td>
 @endif
 <?php
 $p=1;
 ?>
 @endif
 @endif
 <?php
 $n=$n+1;
 ?>
 @if ($n>12)
 @if($timetabled2[0][12]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled2[0][12]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled2[0][12]->criteria}}</font><br>{{ $timetabled2[0][12]->course }}</td>
  @endif
 @break;
 @endif
 
@endfor
</tr>

{{-- <tr align="center">
 <th style="background-color:#ef6c68">W<br>E<br>D</th>
   @foreach ($timetabled as $times)
  @if ($times->day == 'Wednesday')
     @if($times->course != '')
<td bgcolor="#ffffff"><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@else
<td> </td>
@endif
@endif
@endforeach
</tr>
 --}}
<tr align="center">
  <?php
  $n=1;
  $p=1;
  $z=0;
  ?>
  <th style="background-color:#b5f66d">T<br>H<br>U<br>R</th>
 @for ($l = 0; $l <13; $l++)
 @if($timetabled3[0][$l]->course==$timetabled3[0][$n]->course)
 <?php
 $p++;
 ?>
 @elseif($timetabled3[0][$l]->course!=$timetabled3[0][$n]->course)
 @if($z==0)
 @if($timetabled3[0][0]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled3[0][0]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled3[0][0]->criteria}}</font><br>{{ $timetabled3[0][0]->course }}</td>
  @endif
 <?php
 $z=1;
 $p=1;
 ?>
 @elseif($z!=0)
 @if($timetabled3[0][$l]->course=='')
 <td colspan="{{ $p}}">{{ $timetabled3[0][$l]->course }}</td>
 @else
 <td bgcolor="#ffffff" colspan="{{ $p}}"><font color="green">{{  $timetabled3[0][$l]->criteria}}</font><br> {{ $timetabled3[0][$l]->course }}</td>
 @endif
 <?php
 $p=1;
 ?>
 @endif
 @endif
 <?php
 $n=$n+1;
 ?>
 @if ($n>12)
 @if($timetabled3[0][12]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled3[0][12]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled3[0][12]->criteria}}</font><br>{{ $timetabled3[0][12]->course }}</td>
  @endif
 @break;
 @endif
 
@endfor
</tr>

<tr align="center">
  <?php
  $n=1;
  $p=1;
  $z=0;
  ?>
  <th style="background-color:#ffed4a">F<br>R<br>I</th>
 @for ($l = 0; $l <13; $l++)
 @if($timetabled4[0][$l]->course==$timetabled4[0][$n]->course)
 <?php
 $p++;
 ?>
 @elseif($timetabled4[0][$l]->course!=$timetabled4[0][$n]->course)
 @if($z==0)
 @if($timetabled4[0][0]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled4[0][0]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled4[0][0]->criteria}}</font><br>{{ $timetabled4[0][0]->course }}</td>
  @endif
 <?php
 $z=1;
 $p=1;
 ?>
 @elseif($z!=0)
 @if($timetabled4[0][$l]->course=='')
 <td colspan="{{ $p}}">{{ $timetabled4[0][$l]->course }}</td>
 @else
 <td bgcolor="#ffffff" colspan="{{ $p}}"><font color="green">{{  $timetabled4[0][$l]->criteria}}</font><br> {{ $timetabled4[0][$l]->course }}</td>
 @endif
 <?php
 $p=1;
 ?>
 @endif
 @endif
 <?php
 $n=$n+1;
 ?>
 @if ($n>12)
 @if($timetabled4[0][12]->course=='')
 <td colspan="{{ $p }}">{{ $timetabled4[0][12]->course }}</td>
 @else
  <td bgcolor="#ffffff" colspan="{{ $p }}"><font color="green">{{  $timetabled4[0][12]->criteria}}</font><br>{{ $timetabled4[0][12]->course }}</td>
  @endif
 @break;
 @endif
 
@endfor
</tr>

    
    
</table>
</div>
</div>
<br>
<form action="{{route('roompdf')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 
    <input type="text" class="form-control" id="rid" name="rid" value="{{$_GET['rid']}}" hidden>
    <center><button class="btn btn-success" type="submit">Print</button></center>
     </form>
</div>
</div>
</div>

@endsection
