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
    <a class="nav-link active" style="color:#060606"href="/report">CLASS ATTENDANCE REPORTS</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>
<div class="container">

@if(!empty($_GET['checkbox']))
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{$name}} ({{strtoupper($_GET['course_id'])}})</p></legend> </div>
@elseif($_GET['selection']=='All courses')
  <div class="col-xs-9"><legend>
    <p class="note"> Attendance report for {{$name}} (All courses) </p></legend> </div>

@else
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{strtoupper($_GET['course_id'])}} </p></legend> </div>
@endif

<!-- Show also invalid cases -->
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
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>


@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">
@if (!empty($percentage))
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
  @else
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach($all_courses as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell"></td>'.'<td>'.$val['courseId'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>


@else

<div class="col-xs-6">
  @if(count($all_students)>0)
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
      <?php
foreach($all_students as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell"></td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>
  @else
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>

@endif

<br>
<form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 
    <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>
                          
    <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>
                
      <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>
               
  <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>
               
              
  <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>
                

     <center><button class="btn btn-primary" type="submit">Download</button></center>
     </form>

      <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>



@endsection
