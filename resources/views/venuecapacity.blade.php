@extends('layouts.app')

@section('title')
  VENUE CAPACITIES
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
    <a class="nav-link active" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
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

<?php
use App\capacityvenue;
 $venue = capacityvenue::where('criteria','Lecture')->orderBy('Venue','asc')->get();
 $venue1 = capacityvenue::where('criteria','Test')->orderBy('Venue','asc')->get();
  $venue2 = capacityvenue::where('criteria','Practical')->orderBy('Venue','asc')->get();
 $i=1;
 $j=1;
 $k=1;
?>

<div class="container">
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

    <a data-toggle="modal" data-target="#newcapacity" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

    <div class="modal fade" id="newcapacity" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('newcapacity')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue" name="Venue" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity" name="capacity" value="" min="1" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Practical">Practical</option>
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





  <h3><b>ROOMS CAPACITY</b></h3>
  <h4>1. Lectures</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($venue as$venue)
      <tr>
      <th  scope="row">{{ $i }}.</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>
      <td><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Lecture" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}" min="1">
  </div>
  </div>

  

  

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>

<a class="btn btn-sm btn-danger" href="{{route('DeleteVenue',$venue->id)}}">Delete</a>



      </td>

      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>2. Tests and Examinations</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
       <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue1 as$venue)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>
      <td><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Test" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" min="1" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}">
  </div>
  </div>

  

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>


<a class="btn btn-sm btn-danger" href="{{route('DeleteVenue',$venue->id)}}">Delete</a>


      </td>

      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>3. Practicals</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
       <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue2 as$venue)
      <tr>
      <th scope="row">{{ $k }}.</th>
      <td ><strong>{{$venue->Venue}}</strong></td>
      <td ><strong>{{ $venue->Capacity }}</strong></td>
      <td><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a>

        <div class="modal fade" id="edit{{$venue->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editvenue')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Venue:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Criteria:</strong></label>
    <div class="col-sm-7">
   <input type="text" class="form-control" name="criteria" id="criteria{{$venue->id}}" value="Practical" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label"><strong>Capacity:</strong></label>
    <div class="col-sm-7">
    <input type="number" min="1" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}">
  </div>
  </div>


  

  <input type="hidden" id="id{{$venue->id}}" name="id" value="{{$venue->id}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>



<a class="btn btn-sm btn-danger" href="{{route('DeleteVenue',$venue->id)}}">Delete</a>

      </td>

      </tr>
      <?php
      $k=$k+1;
      ?>
      @endforeach
    

</tbody>
</table>
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
@endsection
