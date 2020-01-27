@extends('layouts.app')

@section('title')
   COURSE - CS3
@endsection
@section('style')
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/img/search_icon.jpg');
  background-size: 3%;
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
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          INSTRUCTORS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/instructors-CSE">CSE</a>
          <a class="dropdown-item" href="/instructors-ETE">ETE</a>
        </div>
      </li>

      <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/courses">COURSES</a>
  </li>



</ul>

</div>
</nav>
</div>
<?php
$i='1';
?>
<br>
<br>
<div class="container2">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Degree Program</h5>
    <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesCS1?rid=CS1" class="list-group-item list-group-item-action dropdown-item">CS1</a>
     <a href="/coursesCS2?rid=CS2" class="list-group-item list-group-item-action dropdown-item">CS2</a>
    <a href="/coursesCS3?rid=CS3" class="list-group-item list-group-item-action dropdown-item">CS3</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesTE1?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/coursesTE2?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/coursesTE3?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/coursesTE4?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesESC1?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/coursesESC2?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/coursesESC3?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/coursesCEIT1?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/coursesCEIT2?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/coursesCEIT3?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/coursesCEIT4?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

</div>
</div>
</div>

<div cclass="col-10">
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
    <a data-toggle="modal" data-target="#newcourse" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>
<div class="modal fade" id="newcourse" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newcourses')}}">
  {{csrf_field()}}

 
    <div class="form-group row">
    <label for="program"  class="col-sm-3 col-form-label">Degree Program:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="program" name="program" value="CS3" readonly>
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
    <label for="credit"  class="col-sm-3 col-form-label">Credit:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="credit" name="credit" value="" required="">
  </div>
  </div>


  <div class="form-group row">
    <label for="criteria"  class="col-sm-3 col-form-label">Criteria:</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria">
    <option value="Core">Core</option>
    <option value="Optional">Optional</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="semester"  class="col-sm-3 col-form-label">Semester:</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester">
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="lecture_no"  class="col-sm-3 col-form-label">Lecture No:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="lecture_no" name="lecture_no" value="" required="">
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

    <table class="table table-striped table-bordered" style="width: 128%" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">@sortablelink('course')</th>
      <th scope="col">@sortablelink('course_name')</th>
      <th scope="col">@sortablelink('credit')</th>
      <th scope="col">@sortablelink('semester')</th>
      <th scope="col">@sortablelink('criteria')</th>
      <th scope="col">lecture_no</th>
      <th scope="col">Change</th>
    </tr>
  </thead>
  <tbody>

    @foreach($courses as $course)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$course->course}}</td>
      <td>{{$course->course_name}}</td>
      <td>{{$course->credit}}</td>
       <td>{{$course->semester}}</td>
      <td>{{$course->criteria}}</td>
      <td>{{$course->lectures_no}}</td>
     <td ><a data-toggle="modal" data-target="#edit{{$course->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$course->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editcourse')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="course{{$course->id}}"  class="col-sm-3 col-form-label">Course ID:</label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="course{{$course->id}}" name="course" value="{{$course->course}}" >
  </div>
  </div>

  <div class="form-group row">
    <label for="course_name{{$course->id}}"  class="col-sm-3 col-form-label">Course Name:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="course_name{{$course->id}}" name="course_name" value="{{$course->course_name}}" >
  </div>
  </div>

  <div class="form-group row">
    <label for="credit{{$course->id}}"  class="col-sm-3 col-form-label">Credit:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="credit{{$course->id}}" name="credit" value="" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="semester{{$course->id}}"  class="col-sm-3 col-form-label">Semester:</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="semester" id="semester{{$course->id}}">
    <option value="1">Semester 1</option>
    <option value="2">Semester 2</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$course->id}}"  class="col-sm-3 col-form-label">Criteria:</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria{{$course->id}}">
    <option value="Core">Core</option>
    <option value="Optional">Optional</option>
  </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="lecture_no{{$course->id}}"  class="col-sm-3 col-form-label">Lecture No:</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="lecture_no{{$course->id}}" name="lecture_no" value="">
  </div>
  </div>

  <input type="hidden" id="id{{$course->id}}" name="id" value="{{$course->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a class="btn btn-sm btn-danger" href="{{route('DeleteCourse',$course->id)}}">Delete</a>



      </td>
    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
<nav class="page-navigation">
 
{!! $courses->appends(\Request::except('page'))->render() !!}
</nav>

</div>



</div>
</div>
<center><a class="btn btn-sm btn-success" href="{{route('CS3pdf')}}">PRINT</a></center>
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