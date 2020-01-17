<html>
<head>
	<title>Report</title>
</head>
<style>
table {
  border-collapse: collapse;
   width: 100%;
}

table, td, th {
  border: 1px solid black;
}
table {
  counter-reset: tableCount;
  }

  .counterCell:before {
  content: counter(tableCount);
  counter-increment: tableCount;
  }
</style>

<body>
  <?php

  use App\timetable;
  $timetabled = timetable::where('venue',$_GET['rid'])->get();
   $timetabled1[] = timetable::where('venue',$_GET['rid'])->where('day','Monday')->get();
  $timetablede[] = timetable::where('venue',$_GET['rid'])->where('day','Tuesday')->get();
  $timetabled2[] = timetable::where('venue',$_GET['rid'])->where('day','Wednesday')->get();
  $timetabled3[] = timetable::where('venue',$_GET['rid'])->where('day','Thursday')->get();
  $timetabled4[] = timetable::where('venue',$_GET['rid'])->where('day','Friday')->get();


  ?> 

  <div class="card hero-image border-info">
  <div class="card-body">
    
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      
    </b></center>
<div style="color: #29234a"><H3><CENTER><b>{{ $_GET['rid'] }} TIME TABLE</b></CENTER></H3></div>
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
</body>
</html>
