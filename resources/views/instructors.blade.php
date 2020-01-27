@extends('layouts.app')

@section('title')
  INSTRUCTORS
@endsection

@section('style')
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;

  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
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
  <div class="container2">
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
        <a class="nav-link active dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
</div>
</nav>
</div>

<?php
$i='1';
$j='1';
?>



<br>
<div class="container2">
  <h4><b>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATION ENGINEERING</b></h4>
   @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Sorry!!</strong> Something went Wrong<br>
            <ul>
              @foreach ($errors as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
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
    <label for="dept"  class="col-sm-3 col-form-label">Department:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="dept" name="dept" value="ETE" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="course"  class="col-sm-3 col-form-label">Course ID:</label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="course" name="course" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name"  class="col-sm-3 col-form-label">Course Name:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="course_name" name="course_name" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor"  class="col-sm-3 col-form-label">Instructor(s):</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor" name="instructor" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="technical_staff"  class="col-sm-3 col-form-label">Technical Staff(s):</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff" name="technical_staff" value="">
  </div>
  </div>


  <div class="form-group row">
    <label for="course_type"  class="col-sm-3 col-form-label">Course Type:</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="course_type" id="course_type">
    <option value="Core">Core</option>
    <option value="Elective">Elective</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="semester"  class="col-sm-3 col-form-label">Semester:</label>
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

  

  <input type="text" onblur="this.value=removeSpaces(this.value);" id="myInput" onkeyup="myFunction()" placeholder="Search for Course ID.." title="Type in Course ID">
  <br>
  <br>
  
<table class="table table-striped table-bordered" style="width: 105%" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">@sortablelink('course')</th>
      <th scope="col">@sortablelink('course_name')</th>
      <th scope="col">@sortablelink('instructor')</th>
      <th scope="col">@sortablelink('technical_staff')</th>
      <th scope="col">@sortablelink('course_type')</th>
      <th scope="col">@sortablelink('semester')</th>
      <th scope="col">Change</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors1 as $instructors)
      <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->technical_staff }}</td>
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
    <label for="course{{$instructors->id}}"  class="col-sm-3 col-form-label">Course ID:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$instructors->id}}" name="course" value="{{$instructors->course}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name{{$instructors->id}}"  class="col-sm-3 col-form-label">Course Name:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="course_name{{$instructors->id}}" name="course_name" value="{{$instructors->course_name}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="instructor{{$instructors->id}}"  class="col-sm-3 col-form-label">Instructor Name(s):</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="instructor{{$instructors->id}}" name="instructor" value="{{$instructors->instructor}}" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="technical_staff{{$instructors->id}}"  class="col-sm-3 col-form-label">Technical Staff(s):</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="technical_staff{{$instructors->id}}" name="technical_staff" value="{{$instructors->technical_staff}}">
  </div>
  </div>

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

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
@endsection