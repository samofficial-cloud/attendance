@extends('layouts.app')

@section('title')
  My Tests
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
    <a class="nav-link active" style="color:#060606" href="/timetable">TIMETABLE</a>
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
</ul>
 
</div>
</nav>
</div>

</br>
<?php
  $date=date('Y-m-d');
  $time=date("h:i");
   $i='1';

use App\test;
$mytest=test::where('name', Auth::user()->name)->get();

use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->get();

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
    
<a data-toggle="modal" data-target="#mytest" class="btn button_color active" role="button" aria-pressed="true"><i class="fa fa-plus" style="font-size:36px;color:green"></i></a>

 <div class="modal fade" id="mytest" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="post" action="{{route('addtest')}}" onsubmit="return getdata()"  name="myForm">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Name"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Name" name="name" value="{{ Auth::user()->name }}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Date"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-7">
    <input type="date" min="{{$date}}"class="form-control" id="Date" name="Date" max="2020-12-31" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="Venue"  class="col-sm-3 col-form-label"><strong>Venue(s):</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value);" class="form-control" id="Venue" name="Venue" value="" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="inputTimeFrom" name="fromTime" value="" required>
  </div>
   <label for="inputTimeTo"  class="col-sm-1 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="inputTimeTo" name="toTime" value="" required>
  </div>
  </div>

  <span id="message"></span>

 
<div class="form-group row">
    <label for="courseid"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="courseid" id="courseid">
    @foreach($mycourse as $mycourse)
    <option value="{{$mycourse->course}}">{{$mycourse->course}}</option>
    @endforeach
  </select>
  </div>
  </div>



  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Test No:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="type" id="inlineFormCustomSelectPref">
    <option value="Test 1">Test 1</option>
    <option value="Test 2">Test 2</option>
    <option value="Test 3">Test 3</option>
     <option value="Test 4">Test 4</option>
     <option value="Make Up">Make Up</option>
    <option value="Special Test 1">Special Test 1</option>
     <option value="SpecialTest 2">Special Test 2</option>
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
<table class="table table-striped table-bordered" style="width: 108%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Test No.</th>
      <th scope="col">Course</th>
      <th scope="col">Date</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Change</th>
    </tr>
  </thead>
  <tbody>

    @foreach($mytest as $mytests)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td>{{$mytests->type}}</td>
      <td>{{$mytests->course}}</td>
      <td>{{$mytests->date}}</td>
       <td>{{$mytests->fromTime}}</td>
      <td>{{$mytests->toTime}}</td>
     <td><a class="btn btn-sm btn-success" href="{{route('canceltest',$mytests->id)}}">Cancel</a></td>
    </tr>
    <?php
      $i=$i+1;
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

<script>
function getdata(){
       var txtone = document.forms["myForm"]["toTime"].value;
        var txttwo = document.forms["myForm"]["fromTime"].value;


      if (txtone<txttwo) {
        var message=document.getElementById('message');
        message.style.color='red';
        message.innerHTML="To time cannot be less than From time";
        return false;
      }
}
</script>

@endsection