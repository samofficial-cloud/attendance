@extends('layouts.app')

@section('title')
  VENUE RESERVATION
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>

<?php
use App\capacityvenue;
 $venue = capacityvenue::where('criteria','Lecture')->get();
 $venue1 = capacityvenue::where('criteria','Test')->get();
  $venue2 = capacityvenue::where('criteria','Practical')->get();
 $i=1;
 $j=1;
 $k=1;
?>

<div class="container">
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
    <label for="Venue"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="Venue" name="Venue" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity"  class="col-sm-3 col-form-label">Capacity</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="capacity" name="capacity" value="" required="">
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria"  class="col-sm-3 col-form-label">Criteria</label>
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
      <th width="10%" scope="row">{{ $i }}</th>
      <td width="30%"><strong>{{$venue->Venue}}</strong></td>
      <td width="30%"><strong>{{ $venue->Capacity }}</strong></td>
      <td width="10%"><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a></center>

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
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label">Capacity</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}">
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label">Criteria</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria{{$venue->id}}">
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    <option value="Practical">Practical</option>
  </select>
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
      <th width="10%" scope="row">{{ $j }}</th>
      <td width="30%"><strong>{{$venue->Venue}}</strong></td>
      <td width="30%"><strong>{{ $venue->Capacity }}</strong></td>
      <td width="10%"><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a></center>

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
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label">Capacity</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}">
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label">Criteria</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria{{$venue->id}}">
    <option value="Test">Test</option>
    <option value="Lecture">Lecture</option>
    <option value="Practical">Practical</option>
  </select>
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
      <th width="10%"scope="row">{{ $k }}</th>
      <td width="30%"><strong>{{$venue->Venue}}</strong></td>
      <td width="30%"><strong>{{ $venue->Capacity }}</strong></td>
      <td width="10%"><center><a data-toggle="modal" data-target="#edit{{$venue->id}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Edit</a></center>

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
    <label for="Venue{{$venue->id}}"  class="col-sm-3 col-form-label">Venue</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Venue{{$venue->id}}" name="Venue" value="{{$venue->Venue}}" readonly>
  </div>
  </div>

  <div class="form-group row">
    <label for="capacity{{$venue->id}}"  class="col-sm-3 col-form-label">Capacity</label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="capacity{{$venue->id}}" name="capacity" value="{{$venue->Capacity}}">
  </div>
  </div>

  <div class="form-group row">
    <label for="criteria{{$venue->id}}"  class="col-sm-3 col-form-label">Criteria</label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="criteria" id="criteria{{$venue->id}}">
    <option value="Practical">Practical</option>
    <option value="Lecture">Lecture</option>
    <option value="Test">Test</option>
    
  </select>
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
