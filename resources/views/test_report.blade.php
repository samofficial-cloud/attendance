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

@if($_GET['selection']=='All courses')
@if(count($all_courses)>0)
      <div class="col-xs-9"><legend>
        <p class="note">Test attendance report for {{$name}} ({{$reg_no}})</p>
      <h5 class="note">Course(s): All </h5>
      </legend> </div>
@else

@endif
@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')
@if(count($data)>0)
      <div class="col-xs-9"><legend>
        <p class="note">Test attendance report for {{$name}} ({{$reg_no}})</p>
      <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
      </legend> </div>
@else

@endif
@else
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{strtoupper($_GET['course_id'])}}({{$course_name}}) </p></legend> </div>
@endif

<br>

@if ($_GET['selection']=='All courses')

<!-- TEST 1 -->
<div class="col-xs-6">
  <h5>TEST 1 </h5>
  @if(count($all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>
<br>
<br>
<h6><u>KEY</u></h6>
<?php
foreach($all_courses as $values){
 $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
 $val = (iterator_to_array($iterator,true));
 print($val['courseId'].' - '.$val['course_name'].'<br>');

}
?>


  <br>
      <form action="{{route('testpdf')}}" class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>



  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>

<!-- TEST 2 -->
<div class="col-xs-6">
  <h5>TEST 2 </h5>
  @if(count($all_courses2)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses2 as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  <br>
      <form action="{{route('testpdf')}}" class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>



  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->
<div class="col-xs-6">
  <h5>TEST 3 </h5>
  @if(count($all_courses3)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses3 as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  <br>
      <form action="{{route('testpdf')}}" class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>



  @else
  <h4>No data to display</h4>
  @endif
</div>



@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">
  @if(count($data)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>TYPE OF TEST</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->test_type}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
      <form action="{{route('testpdf')}}" class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>

  @else
  <h4>No data to display</h4>
  @endif
</div>


@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
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
  <h4>No data to display</h4>
  @endif
</div>

@endif

<br>


<div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>
</div>





@endsection


@section('pagescript')

<script>
        $(document).ready( function () {
                $("#myTable").tablesorter();
        });
    </script>

<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>

@endsection
