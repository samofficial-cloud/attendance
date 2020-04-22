@extends('layouts.app')

@section('title')
  REPORT
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:710px;
  padding-bottom:20px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;
}

div.dataTables_length select {
  height:25px;
  width:10px;
  font-size: 70%;
}
table.dataTable {
font-family: "Nunito", sans-serif;
    font-size: 15px;



  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}
.form-inline .form-control {
    width: 100%;
}

</style>

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
 <center><ul class="nav1 nav-tabs" style="width: 98%">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>

</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container3" style="padding-left: 154px;">
  <ul class="nav1 nav-tabs">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" style="color:#060606" href="manage/users">USERS</a>
           <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
           <a class="dropdown-item" style="color:#060606" href="manage/courses">COURSES</a>
           <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
           <a class="dropdown-item" style="color:#060606" href="/approval">RESERVATIONS</a>
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-ETE">ETE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606" href="/system_settings">SYSTEM SETTINGS</a>
          
        </div>
      </li>

</ul>
</div>
@elseif(Auth::user()->Timetable_Master==1)
<div class="container3" style="padding-left: 153px;">
  
    <ul class="nav1 nav-tabs">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
           <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
           <a class="dropdown-item" style="color:#060606" href="/approval">RESERVATIONS</a>
          
        </div>
      </li>

  </ul>
  
</div>
@elseif(Auth::user()->HoD==1)
<div class="container">
  <center><ul class="nav1 nav-tabs" style="align-content: center;">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/generalReports">REPORTS</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color:#060606" href="manage/users">USERS</a>
          <a class="dropdown-item" style="color:#060606" href="manage/courses">COURSES</a>
          @if(Auth::user()->DEFAULTDEPTID==31)
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-CSE">INSTRUCTORS</a>
          @elseif(Auth::user()->DEFAULTDEPTID==32)
          <a class="dropdown-item" style="color:#060606"href="manage/instructors-ETE">INSTRUCTORS</a>
          @endif
         {{--  <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS MANAGEMENT</a> --}}
        </div>
      </li>
    
</ul>
</center>
</div>
@elseif(Auth::user()->admin==1)
<div class="container">
  <ul class="nav1 nav-tabs">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
<li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/staffs">STAFF</a>
  </li>
  
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSTRUCTORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="manage/instructors-CSE">CSE</a>
          <a class="dropdown-item" href="manage/instructors-ETE">ETE</a>
        </div>
      </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="manage/courses">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/managestudents">MANAGE STUDENTS</a>
  </li>


</ul>
</div>
@endif


</nav>
</div>
<br>
<div class="container">



<!-- All students for a particular course -->


@if($_GET['sort_criteria']==1)
@if(count($all_studentsFilter)>0)
    <div class="col-xs-9"><legend>
            <div style="float: right;">
                <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                <h6 class="note">Semester: {{$current_semester}}</h6></div>

            <h6 class="note">Programme:

                <?php
                $i=0;
                $length=count($program_full);
                foreach($program_full as $values){
                    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                    $val = (iterator_to_array($iterator,true));


                    if($i!=($length-1)){
                        print($val['full'].', ');
                    }else{

                        print($val['full'].' ');

                    }
                    $i++;
                }
                ?>

            </h6>
    <h5 class="note">Course: {{$fullCourse}}</h5>
           <b><p class="note">Attendance report for all students whose class attendance is below {{$percentage}}% </p></b>

    </legend> </div>

    @else

    @endif

@elseif($_GET['sort_criteria']==2)

        @if(count($all_studentsFilter)>0)
            <div class="col-xs-9"><legend>
                    <div style="float: right;">
                        <h6 class="note">Academic year: {{$current_academic_year}}</h6>
                        <h6 class="note">Semester: {{$current_semester}}</h6></div>

                    <h6 class="note">Programme:

                        <?php
                        $i=0;
                        $length=count($program_full);
                        foreach($program_full as $values){
                            $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                            $val = (iterator_to_array($iterator,true));


                            if($i!=($length-1)){
                                print($val['full'].', ');
                            }else{

                                print($val['full'].' ');

                            }
                            $i++;
                        }
                        ?>

                    </h6>
                    <h5 class="note">Course: {{$fullCourse}}</h5>

                   <b><p class="note">Attendance report for all students whose class attendance is above {{$percentage}}% </p></b>

                </legend> </div>

        @else

        @endif


    @else


    @endif






<div class="col-xs-6">
  @if(count($all_studentsFilter)>0)
  <br>


  <table id="myTable1" class="table table-bordered table-striped" >
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th class="order">SURNAME</th>
          <th class="order">OTHER NAMES</th>
          <th>Registration number</th>
          <th>Programme</th>
          <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_studentsFilter as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));

    $temp1=explode(',', $val['name']);
    $surname=$temp1[0];
    $temp2 = preg_split('/\s+/', $temp1[1]);
    $first_name=$temp2[1];
    $middle_name=$temp2[2];
    $other_names=$temp1[1];
    print('<td class="counterCell">.</td>'.'<td>'.$surname.'</td><td>'.$other_names.'</td><td>'.$val['reg_no'].'</td><td>'.$val['program'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');


//       print('<tr><td class="counterCell">.</td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>

  <br>
        <b><p>Minimum required percentage: {{$minimum_percentage}}% </p></b>

<br>

        <!-- course key -->

        <h6><u>KEY</u></h6>
        <?php

        $tempOut = array();
        foreach($all_studentsProgKey as $values){
            $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
            $val = (iterator_to_array($iterator,true));
            $tempoIn=$val['program'];

            if(!in_array($tempoIn, $tempOut))
            {
                print($val['program'].' - '.$val['full'].'<br>');
                array_push($tempOut,$tempoIn);
            }




        }
        ?>


        <br>


  <form action="{{route('classpdf3')}} " class="form-container form-horizontal" method="get">
                   {{csrf_field()}}

      <input type="text" class="form-control" id="getSelection" name="sort_criteria" value="{{$_GET['sort_criteria']}}" hidden>

      <input type="text" class="form-control" id="one_course" name="percentage" value="{{$_GET['percentage']}}" hidden>

       <input type="text" class="form-control" id="fullCourse" name="fullCourse" value="{{$fullCourse}}" hidden>

      <input type="text" class="form-control" id="courseValue" name="courseValue" value="{{$courseValue}}" hidden>

       <center><button class="btn btn-primary" type="submit">Download</button></center>
       </form>


  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>






      <div class="col-xs-3">
      <button class="btn btn-dark " onclick="history.back(-1)">Back</button>
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

<script type="text/javascript">
 $(document).ready(function() {

     // $('tr').each(
     //     function(){
     //         $(this).find('td:gt(11)').hide();
     //     });



  // console.log(x);
    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );






});

</script>

@endsection
