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
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
<br>
<div class="container">

  @if(count($all_test)>0)
  <div class="col-xs-9"><legend>
    <p class="note"> Test attendance report for all students</p>
    <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
  </legend> </div>

  @else

  @endif

<br>

<!-- TEST 1 -->
<div class="col-xs-6">
<h5>TEST 1 </h5>
  @if(count($all_test)>0)
Date: {{date("d/m/Y",strtotime($date)) }}
  <table id="myTable" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>REGISTRATION NUMBER</th>

        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->name}}</td>
        <td>{{$var->reg_no}}</td>


        <td>PRESENT </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>
<br>
<br>

<!-- TEST 2 -->
<div class="col-xs-6">
<h5>TEST 2</h5>
  @if(count($all_test2)>0)
Date: {{date("d/m/Y",strtotime($date2)) }}
  <table id="myTable2" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>REGISTRATION NUMBER</th>


        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test2 as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->name}}</td>
        <td>{{$var->reg_no}}</td>


        <td>PRESENT </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->
<div class="col-xs-6">

<h5>TEST 3 </h5>
  @if(count($all_test3)>0)
Date: {{date("d/m/Y",strtotime($date3)) }}
  <table id="myTable3" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>REGISTRATION NUMBER</th>


        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test3 as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->name}}</td>
        <td>{{$var->reg_no}}</td>
        <td>PRESENT </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>


<form action="{{route('testallpdf')}}" class="form-container form-horizontal" method="get">
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
</div>




@endsection

@section('pagescript')

<script>
        $(document).ready( function () {
                $("#myTable").tablesorter();
                $("#myTable2").tablesorter();
                $("#myTable3").tablesorter();
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
