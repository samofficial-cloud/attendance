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
<!-- Detailed case -->
@if(!empty($_GET['checkbox']))

@if(count($dataSingle_all)>0)
<div class="col-xs-9"><legend>
  <p class="note"> Class attendance report for {{$name}} ({{$reg_no}}) </p>
  <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}})</h5>
</legend> </div>

@else

@endif

<!-- One student all courses -->
@elseif($_GET['selection']=='All courses')
@if(count($all_courses)>0)
    <div class="col-xs-9"><legend>
      <p class="note">Class attendance report for {{$name}} ({{$reg_no}}) </p>
    <h5 class="note">Course(s): All </h5>
    </legend> </div>

    @else

    @endif

<!-- All students for a particular course -->
@elseif ($_GET['category']== 1)


@if(count($all_students)>0)
    <div class="col-xs-9"><legend>
      <p class="note">Class attendance report for all students </p>
    <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}})</h5>
    </legend> </div>

    @else

    @endif


<!-- Last case -->
@else
@if(!empty($name))
<div class="col-xs-9"><legend>
  <p class="note"> Class attendance report for {{$name}} ({{$reg_no}}) </p>
<h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
</legend> </div>
  @else

  @endif
@endif

<!-- Show also invalid cases -->
@if(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

<div class="col-xs-6">
  @if(count($dataSingle_all)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>Date</th>
        <th>Sign in time</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($dataSingle_all as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
        <td>{{ date("H:i",strtotime($var->datetime))}}</td>

        <td>@if($var->validity=='VALID')
          ARRIVED EARLY
          @else
          ARRIVED LATE
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>


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


@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">


@if (!empty($name))
<p>Minimum required percentage: 75% </p>
<center><span class="chart " data-percent="{{$percentage}}">
		<span class="percent"></span>
	</span></center>
<br>

<div class="center location"><p>Your current percantage so far</p></div>
  <br>

  <!-- <form action="{{route('classpdf')}} " class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="category" value="{{$_GET['category']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="selection" value="{{$_GET['selection']}}" hidden>

        <input type="text" class="form-control" id="show_all" name="checkbox" value="{{$_GET['checkbox']}}" hidden>

    <input type="text" class="form-control" id="inputCourse" name="course_id" value="{{$_GET['course_id']}}" hidden>


    <input type="text" class="form-control" id="inputRegNo" name="reg_no" value="{{$_GET['reg_no']}}" hidden>


       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form> -->


  @else
  <h4>No data to display</h4>
  @endif
</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
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
<br>
<br>
<!-- course key -->

<h6><u>KEY</u></h6>
<?php
foreach($all_courses as $values){
 $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
 $val = (iterator_to_array($iterator,true));
 print($val['courseId'].' - '.$val['course_name'].'<br>');

}
?>


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


@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable" class="table table-bordered table-striped" >
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>Registration number</th>
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

@endif




      <div class="col-xs-3">
      <button class="btn btn-dark " onclick="window.location.href='/report';">Back</button>
    </div>

</div>



@endsection

@section('pagescript')
<script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.easypiechart.min.js') }}" defer></script>

<script>
	$(function() {
		$('.chart').easyPieChart({
			easing: 'easeOutBounce',
      scaleColor:	false,
      trackColor:	'#e9ecef',
      barColor: '#72b4ea',
      lineCap:	'square',
      lineWidth:	'20',
      size: '160',
      animate:{
					duration:2000,
					enabled:true
				},
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});

	});
	</script>

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
