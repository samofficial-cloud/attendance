@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@section('title')
  INSTRUCTORS ETE
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:975px;
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
    font-size: 0.9rem;
    font-weight: 400;
    
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

div.dt-buttons.buttons{
  padding-left:740px;
  justify-content: right;
}

div.dt-buttons {
        clear: both;
    }

.dataTables_wrapper .dt-buttons {
  float:none;  
  text-align:center;
}

.dataTables_wrapper .dataTables_info {
  padding-top: 0px;
}
.form-inline .form-control {
  width: 100%;
}
.form-inline label {
  justify-content:left;
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

<?php
$i='1';
$j='1';
?>



<br>
<div class="container3">
  @if(Auth::user()->DEFAULTDEPTID==32 or Auth::user()->principal==1 )
  <h4><b>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATION ENGINEERING</b></h4>
   @if ($errors=Session::get('errors'))
          <div class="alert alert-danger">
            <p>{{$errors}}</p>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

<a data-toggle="modal" data-target="#newinstructor" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>
<div class="modal fade" id="newinstructor" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newinstructor')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="dept"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="dept" name="dept" value="ETE" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="course"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="course" name="course" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="course_name" name="course_name" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor"  class="col-sm-3 col-form-label"><strong>Instructor 01:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor" name="instructor" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor2"  class="col-sm-3 col-form-label"><strong>Instructor 02:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor2" name="instructor2" value="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor3"  class="col-sm-3 col-form-label"><strong>Instructor 03:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor3" name="instructor3" value="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor4"  class="col-sm-3 col-form-label"><strong>Instructor 04:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor4" name="instructor4" value="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor5"  class="col-sm-3 col-form-label"><strong>Instructor 05:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor5" name="instructor5" value="">
  </div>
  </div>

  <div class="form-group row">
    <label for="TA"  class="col-sm-3 col-form-label"><strong>Tutorial Assistant:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="TA" name="TA" value="" >
  </div>
  </div>

  <div class="form-group row">
    <label for="technical_staff"  class="col-sm-3 col-form-label"><strong>Technical Staff 01:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff" name="technical_staff" value="">
  </div>
  </div>

  <div class="form-group row">
    <label for="technical_staff2"  class="col-sm-3 col-form-label"><strong>Technical Staff 02:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff2" name="technical_staff2" value="">
  </div>
  </div>


  <div class="form-group row">
    <label for="course_type"  class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type">
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="semester"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester">
    <option value="1">Semester 1</option>
    <option value="2">semester 2</option>
  </select>
  </div>
  </div>


  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
  
<table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
     <th scope="col" style="color:#3490dc;">Course ID</th>
      <th scope="col" style="color:#3490dc;">Course Name</th>
      <th scope="col"  style="color:#3490dc;">Instructor_1</th>
      <th scope="col"  style="color:#3490dc;">Instructor_2</th>
      <th scope="col"  style="color:#3490dc;">Instructor_3</th>
      <th scope="col"  style="color:#3490dc;">Instructor_4</th>
      <th scope="col"  style="color:#3490dc;">Instructor_5</th>
      <th scope="col"  style="color:#3490dc;">Tutorial Assistant</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff 1</th>
      <th scope="col"  style="color:#3490dc;">Technical Staff 2</th>
      <th scope="col" style="color:#3490dc;">Course Type</th>
      <th scope="col" style="color:#3490dc;">Semester</th>
       <th scope="col" style="width: 108px; color:#3490dc;">Change</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors1 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_Staff_2}}</td>
      <td>{{ $instructors->course_type}}</td>
      <td>{{ $instructors->semester}}</td>
      <td><a data-toggle="modal" data-target="#edit{{$instructors->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$instructors->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editinstructor')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="course{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course ID: </strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="Venue{{$instructors->id}}" name="course" value="{{$instructors->course}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="course_name{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Name:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="course_name{{$instructors->id}}" name="course_name" value="{{$instructors->course_name}}" readonly>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor{{$instructors->id}}" name="instructor" value="{{$instructors->instructor}}" required>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor2{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor2{{$instructors->id}}" name="instructor2" value="{{$instructors->Instructor_2}}" >
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor3{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 03:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor3{{$instructors->id}}" name="instructor3" value="{{$instructors->Instructor_3}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor4{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 04:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor4{{$instructors->id}}" name="instructor4" value="{{$instructors->Instructor_4}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="instructor5{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Instructor 05:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="instructor5{{$instructors->id}}" name="instructor5" value="{{$instructors->Instructor_5}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="TA{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Tutorial Assistant:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="TA{{$instructors->id}}" name="TA" value="{{$instructors->Tutorial_Assistant}}" >
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="technical_staff{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 01:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staff{{$instructors->id}}" name="technical_staff" value="{{$instructors->technical_staff}}">
  </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="technical_staff2{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Technical Staff 02:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="technical_staff2{{$instructors->id}}" name="technical_staff2" value="{{$instructors->Technical_Staff_2}}">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="course_type{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Course Type:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type{{$instructors->id}}">
    @if($instructors->course_type=="Core")
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @elseif($instructors->course_type=="Elective")
    <option value="Elective">Elective</option>
    <option value="Core">Core</option>
    @else
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
    @endif
  </select>
  </div>
  </div>
<br>
  <div class="form-group row">
    <label for="semester{{$instructors->id}}"  class="col-sm-3 col-form-label"><strong>Semester:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester{{$instructors->id}}">
    @if($instructors->semester == 1)
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @elseif($instructors->semester == 2)
    <option value="2">Semester 2</option>
    <option value="1">Semester 1</option>
    @else
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <input type="hidden" id="id{{$instructors->id}}" name="id" value="{{$instructors->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>


<a class="btn btn-sm btn-danger" href="{{route('DeleteLecturer',$instructors->id)}}">Delete</a>


      </td>
       </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>

<center><a class="btn btn-sm btn-success" href="{{route('ETEpdf')}}">PRINT</a></center>
@else
<h3 style="color: red;">SORRY!!!YOU DO NOT HAVE PERMISSION TO VIEW THIS PAGE</h3>
@endif

</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('pagescript')

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>

<script type="text/javascript">
 $(document).ready(function() {
  
  
  // console.log(x);
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'
    } );
//     var styles = {
//     position: "relative",
//     float: "right"
// };
$("div#myTable_wrapper").find($(".dt-buttons")).css("width", "53%").css("position", "relative");
// $("div#myTable_wrapper").find($(".dt-buttons")).find($("a")).css(styles);
});

</script>
@endsection