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
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</nav>
</div>

<br>

<?php
$i='1';
$program=array('ESC1','ESC2','ESC3','TE1','TE2','TE3','TE4','CS1'.'CS2','CS3','CEIT1','CEIT2','CEIT3','CEIT4','BIT1','BIT2','BIT3' );
use App\exam;
for($a=0; $a<count($program);$a++){
      $course[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course1[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course2[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course3[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course4[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course5[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course6[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course7[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course8[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course9[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course10[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course11[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course12[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course13[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','11:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course14[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk16')
       ->where('exams.fromTime','15:00')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $courseA[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course21[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course22[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Monday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course23[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course24[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course25[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Tuesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course26[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course27[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course28[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Wednesday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course29[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course210[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course211[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Thursday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course212[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','07:30')
       ->get();   
}

for($a=0; $a<count($program);$a++){
      $course213[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','11:30')
       ->get();   
}
for($a=0; $a<count($program);$a++){
      $course214[] = exam::select ('courses.course', 'exams.venue', 'exams.day', 'courses.program','exams.fromTime','exams.toTime','exams.Week')
      ->join('courses','exams.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$program[$a])
       ->where('exams.day','Friday')
       ->where('exams.Week','Wk17')
       ->where('exams.fromTime','15:00')
       ->get();   
}







?>

<div class="container">
  <h3><font color="red">EXAMINATION COLLISIONS</h3>
  @for($x=0; $x<count($course);$x++)
  @if(count($course[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course[$x][$c]->program}}</td>
             <td>{{$course[$x][$c]->course}}</td>
             <td>{{$course[$x][$c]->venue}}</td>
             <td>{{ $course[$x][$c]->day }}</td>
             <td>{{$course[$x][$c]->fromTime}}</td>
            <td>{{ $course[$x][$c]->toTime }}</td>
            <td>{{ $course[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
      @endfor
      </tbody>
    </table>
@endif
@endfor


 @for($x=0; $x<count($course1);$x++)
  @if(count($course1[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course1[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course1[$x][$c]->program}}</td>
             <td>{{$course1[$x][$c]->course}}</td>
             <td>{{$course1[$x][$c]->venue}}</td>
             <td>{{ $course1[$x][$c]->day }}</td>
             <td>{{$course1[$x][$c]->fromTime}}</td>
            <td>{{ $course1[$x][$c]->toTime }}</td>
             <td>{{ $course1[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course2);$x++)
  @if(count($course2[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course2[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course2[$x][$c]->program}}</td>
             <td>{{$course2[$x][$c]->course}}</td>
             <td>{{$course2[$x][$c]->venue}}</td>
             <td>{{ $course2[$x][$c]->day }}</td>
             <td>{{$course2[$x][$c]->fromTime}}</td>
            <td>{{ $course2[$x][$c]->toTime }}</td>
             <td>{{ $course2[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course3);$x++)
  @if(count($course3[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course3[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course3[$x][$c]->program}}</td>
             <td>{{$course3[$x][$c]->course}}</td>
             <td>{{$course3[$x][$c]->venue}}</td>
             <td>{{ $course3[$x][$c]->day }}</td>
             <td>{{$course3[$x][$c]->fromTime}}</td>
            <td>{{ $course3[$x][$c]->toTime }}</td>
            <td>{{ $course3[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course4);$x++)
  @if(count($course4[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course4[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course4[$x][$c]->program}}</td>
             <td>{{$course4[$x][$c]->course}}</td>
             <td>{{$course4[$x][$c]->venue}}</td>
             <td>{{ $course4[$x][$c]->day }}</td>
             <td>{{$course4[$x][$c]->fromTime}}</td>
            <td>{{ $course4[$x][$c]->toTime }}</td>
            <td>{{ $course4[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course5);$x++)
  @if(count($course5[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course5[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course5[$x][$c]->program}}</td>
             <td>{{$course5[$x][$c]->course}}</td>
             <td>{{$course5[$x][$c]->venue}}</td>
             <td>{{ $course5[$x][$c]->day }}</td>
             <td>{{$course5[$x][$c]->fromTime}}</td>
            <td>{{ $course5[$x][$c]->toTime }}</td>
            <td>{{ $course5[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course6);$x++)
  @if(count($course6[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course6[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course6[$x][$c]->program}}</td>
             <td>{{$course6[$x][$c]->course}}</td>
             <td>{{$course6[$x][$c]->venue}}</td>
             <td>{{ $course6[$x][$c]->day }}</td>
             <td>{{$course6[$x][$c]->fromTime}}</td>
            <td>{{ $course6[$x][$c]->toTime }}</td>
            <td>{{ $course6[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course7);$x++)
  @if(count($course7[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course7[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course7[$x][$c]->program}}</td>
             <td>{{$course7[$x][$c]->course}}</td>
             <td>{{$course7[$x][$c]->venue}}</td>
             <td>{{ $course7[$x][$c]->day }}</td>
             <td>{{$course7[$x][$c]->fromTime}}</td>
            <td>{{ $course7[$x][$c]->toTime }}</td>
            <td>{{ $course7[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course8);$x++)
  @if(count($course8[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course8[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course8[$x][$c]->program}}</td>
             <td>{{$course8[$x][$c]->course}}</td>
             <td>{{$course8[$x][$c]->venue}}</td>
             <td>{{ $course8[$x][$c]->day }}</td>
             <td>{{$course8[$x][$c]->fromTime}}</td>
            <td>{{ $course8[$x][$c]->toTime }}</td>
            <td>{{ $course8[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course9);$x++)
  @if(count($course9[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course9[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course9[$x][$c]->program}}</td>
             <td>{{$course9[$x][$c]->course}}</td>
             <td>{{$course9[$x][$c]->venue}}</td>
             <td>{{ $course9[$x][$c]->day }}</td>
             <td>{{$course9[$x][$c]->fromTime}}</td>
            <td>{{ $course9[$x][$c]->toTime }}</td>
            <td>{{ $course9[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course10);$x++)
  @if(count($course10[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course10[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course10[$x][$c]->program}}</td>
             <td>{{$course10[$x][$c]->course}}</td>
             <td>{{$course10[$x][$c]->venue}}</td>
             <td>{{ $course10[$x][$c]->day }}</td>
             <td>{{$course10[$x][$c]->fromTime}}</td>
            <td>{{ $course10[$x][$c]->toTime }}</td>
            <td>{{ $course10[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course11);$x++)
  @if(count($course11[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course11[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course11[$x][$c]->program}}</td>
             <td>{{$course11[$x][$c]->course}}</td>
             <td>{{$course11[$x][$c]->venue}}</td>
             <td>{{ $course11[$x][$c]->day }}</td>
             <td>{{$course11[$x][$c]->fromTime}}</td>
            <td>{{ $course11[$x][$c]->toTime }}</td>
            <td>{{ $course11[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course12);$x++)
  @if(count($course12[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course12[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course12[$x][$c]->program}}</td>
             <td>{{$course12[$x][$c]->course}}</td>
             <td>{{$course12[$x][$c]->venue}}</td>
             <td>{{ $course12[$x][$c]->day }}</td>
             <td>{{$course12[$x][$c]->fromTime}}</td>
            <td>{{ $course12[$x][$c]->toTime }}</td>
            <td>{{ $course12[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course13);$x++)
  @if(count($course13[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course13[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course13[$x][$c]->program}}</td>
             <td>{{$course13[$x][$c]->course}}</td>
             <td>{{$course13[$x][$c]->venue}}</td>
             <td>{{ $course13[$x][$c]->day }}</td>
             <td>{{$course13[$x][$c]->fromTime}}</td>
            <td>{{ $course13[$x][$c]->toTime }}</td>
            <td>{{ $course13[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course14);$x++)
  @if(count($course14[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course14[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course14[$x][$c]->program}}</td>
             <td>{{$course14[$x][$c]->course}}</td>
             <td>{{$course14[$x][$c]->venue}}</td>
             <td>{{ $course14[$x][$c]->day }}</td>
             <td>{{$course14[$x][$c]->fromTime}}</td>
            <td>{{ $course14[$x][$c]->toTime }}</td>
            <td>{{ $course14[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($courseA);$x++)
  @if(count($courseA[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($courseA[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $courseA[$x][$c]->program}}</td>
             <td>{{$courseA[$x][$c]->course}}</td>
             <td>{{$courseA[$x][$c]->venue}}</td>
             <td>{{ $courseA[$x][$c]->day }}</td>
             <td>{{$courseA[$x][$c]->fromTime}}</td>
            <td>{{ $courseA[$x][$c]->toTime }}</td>
            <td>{{ $courseA[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


 @for($x=0; $x<count($course21);$x++)
  @if(count($course21[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course21[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course21[$x][$c]->program}}</td>
             <td>{{$course21[$x][$c]->course}}</td>
             <td>{{$course21[$x][$c]->venue}}</td>
             <td>{{ $course21[$x][$c]->day }}</td>
             <td>{{$course21[$x][$c]->fromTime}}</td>
            <td>{{ $course21[$x][$c]->toTime }}</td>
            <td>{{ $course21[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course22);$x++)
  @if(count($course22[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course22[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course22[$x][$c]->program}}</td>
             <td>{{$course22[$x][$c]->course}}</td>
             <td>{{$course22[$x][$c]->venue}}</td>
             <td>{{ $course22[$x][$c]->day }}</td>
             <td>{{$course22[$x][$c]->fromTime}}</td>
            <td>{{ $course22[$x][$c]->toTime }}</td>
            <td>{{ $course22[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor


@for($x=0; $x<count($course23);$x++)
  @if(count($course23[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course23[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course23[$x][$c]->program}}</td>
             <td>{{$course23[$x][$c]->course}}</td>
             <td>{{$course23[$x][$c]->venue}}</td>
             <td>{{ $course23[$x][$c]->day }}</td>
             <td>{{$course23[$x][$c]->fromTime}}</td>
            <td>{{ $course23[$x][$c]->toTime }}</td>
            <td>{{ $course23[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course24);$x++)
  @if(count($course24[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course24[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course24[$x][$c]->program}}</td>
             <td>{{$course24[$x][$c]->course}}</td>
             <td>{{$course24[$x][$c]->venue}}</td>
             <td>{{ $course24[$x][$c]->day }}</td>
             <td>{{$course24[$x][$c]->fromTime}}</td>
            <td>{{ $course24[$x][$c]->toTime }}</td>
            <td>{{ $course24[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course25);$x++)
  @if(count($course25[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course25[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course25[$x][$c]->program}}</td>
             <td>{{$course25[$x][$c]->course}}</td>
             <td>{{$course25[$x][$c]->venue}}</td>
             <td>{{ $course25[$x][$c]->day }}</td>
             <td>{{$course25[$x][$c]->fromTime}}</td>
            <td>{{ $course25[$x][$c]->toTime }}</td>
            <td>{{ $course25[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course26);$x++)
  @if(count($course26[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course26[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course26[$x][$c]->program}}</td>
             <td>{{$course26[$x][$c]->course}}</td>
             <td>{{$course26[$x][$c]->venue}}</td>
             <td>{{ $course26[$x][$c]->day }}</td>
             <td>{{$course26[$x][$c]->fromTime}}</td>
            <td>{{ $course26[$x][$c]->toTime }}</td>
            <td>{{ $course26[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course27);$x++)
  @if(count($course27[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course27[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course27[$x][$c]->program}}</td>
             <td>{{$course27[$x][$c]->course}}</td>
             <td>{{$course27[$x][$c]->venue}}</td>
             <td>{{ $course27[$x][$c]->day }}</td>
             <td>{{$course27[$x][$c]->fromTime}}</td>
            <td>{{ $course27[$x][$c]->toTime }}</td>
            <td>{{ $course27[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course28);$x++)
  @if(count($course28[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course28[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course28[$x][$c]->program}}</td>
             <td>{{$course28[$x][$c]->course}}</td>
             <td>{{$course28[$x][$c]->venue}}</td>
             <td>{{ $course28[$x][$c]->day }}</td>
             <td>{{$course28[$x][$c]->fromTime}}</td>
            <td>{{ $course28[$x][$c]->toTime }}</td>
            <td>{{ $course28[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course29);$x++)
  @if(count($course29[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course29[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course29[$x][$c]->program}}</td>
             <td>{{$course29[$x][$c]->course}}</td>
             <td>{{$course29[$x][$c]->venue}}</td>
             <td>{{ $course29[$x][$c]->day }}</td>
             <td>{{$course29[$x][$c]->fromTime}}</td>
            <td>{{ $course29[$x][$c]->toTime }}</td>
            <td>{{ $course29[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course210);$x++)
  @if(count($course210[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course210[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course210[$x][$c]->program}}</td>
             <td>{{$course210[$x][$c]->course}}</td>
             <td>{{$course210[$x][$c]->venue}}</td>
             <td>{{ $course210[$x][$c]->day }}</td>
             <td>{{$course210[$x][$c]->fromTime}}</td>
            <td>{{ $course210[$x][$c]->toTime }}</td>
            <td>{{ $course210[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course211);$x++)
  @if(count($course211[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course211[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course211[$x][$c]->program}}</td>
             <td>{{$course211[$x][$c]->course}}</td>
             <td>{{$course211[$x][$c]->venue}}</td>
             <td>{{ $course211[$x][$c]->day }}</td>
             <td>{{$course211[$x][$c]->fromTime}}</td>
            <td>{{ $course211[$x][$c]->toTime }}</td>
            <td>{{ $course211[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course212);$x++)
  @if(count($course212[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course212[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course212[$x][$c]->program}}</td>
             <td>{{$course212[$x][$c]->course}}</td>
             <td>{{$course212[$x][$c]->venue}}</td>
             <td>{{ $course212[$x][$c]->day }}</td>
             <td>{{$course212[$x][$c]->fromTime}}</td>
            <td>{{ $course212[$x][$c]->toTime }}</td>
            <td>{{ $course212[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course213);$x++)
  @if(count($course213[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course213[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course213[$x][$c]->program}}</td>
             <td>{{$course213[$x][$c]->course}}</td>
             <td>{{$course213[$x][$c]->venue}}</td>
             <td>{{ $course213[$x][$c]->day }}</td>
             <td>{{$course213[$x][$c]->fromTime}}</td>
            <td>{{ $course213[$x][$c]->toTime }}</td>
            <td>{{ $course213[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor

@for($x=0; $x<count($course214);$x++)
  @if(count($course214[$x])>1)
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Program</th>
      <th scope="col">Course</th>
      <th scope="col">Venue</th>
      <th scope="col">Day</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Week</th>
      </tr>
      </thead>
      <tbody>
      @for($c=0; $c<count($course214[$x]); $c++)
         <tr>
           <th scope="row">{{ $i }}</th>
             <td>{{ $course214[$x][$c]->program}}</td>
             <td>{{$course214[$x][$c]->course}}</td>
             <td>{{$course214[$x][$c]->venue}}</td>
             <td>{{ $course214[$x][$c]->day }}</td>
             <td>{{$course214[$x][$c]->fromTime}}</td>
            <td>{{ $course214[$x][$c]->toTime }}</td>
            <td>{{ $course214[$x][$c]->Week}}</td>
        </tr>

      <?php
      $i=$i+1;
      ?>
       @endfor
      </tbody>
    </table>
@endif
@endfor



</div>





@endsection