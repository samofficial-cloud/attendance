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


@if(!empty($FromTime))
      <div class="col-xs-9"><legend>
        <p class="note">UE attendance report for {{$name}} ({{$reg_no}})</p>
      <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
      </legend> </div>
@else

@endif


<div class="col-xs-6">


@if (!empty($FromTime))
<p>Date: {{date("d/m/Y",strtotime($date)) }} </p>
<p>From time: {{ date("H:i",strtotime($FromTime))}}</p>
<p>To time: {{ date("H:i",strtotime($ToTime))}} </p>
<p>Sign in time: {{ date("H:i",strtotime($date))}} (@if($validity=='VALID')
ARRIVED EARLY
  @else
  ARRIVED LATE
  @endif)</p>
<p>STATUS: PRESENT</p>


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


  @else
  <h4>No data to display</h4>
  @endif
</div>




<br>
    <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>
</div>




@endsection

@section('pagescript')
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
