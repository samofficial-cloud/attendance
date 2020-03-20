@extends('layouts.app')

@section('title')
  My Tests
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:1050px;
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

</br>
<?php
  $date=date('Y-m-d');
  $time=date("h:i");
   $i='1';

use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->get();

?>
<div class="container3">
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
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue" name="Venue" value="" required>
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
    <option value="">Select Course</option>
    @foreach($mycourse as $mycoursess)
    <option value="{{$mycoursess->course}}">{{$mycoursess->course}}</option>
    @endforeach
  </select>
  </div>
  </div>



  <div class="form-group row">
    <label for="Select"  class="col-sm-3 col-form-label"><strong>Test No:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="type" id="inlineFormCustomSelectPref">
    <option value="">Select Test Type</option>
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
<div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'Upcoming')" id="defaultOpen"><strong>UPCOMING TESTS</strong></button>
  <button class="tablinks" style="float: right;" onclick="openInstructors(event, 'Previous')"><strong>PREVIOUS TESTS</strong></button>
</div>
<div id="Upcoming" class="tabcontent">
    <br>
  <h4>1. UPCOMING TESTS</h4>
  <br>
<table class="table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">VENUE(S)</th>
      <th scope="col" style="color:#3490dc;">TEST NO.</th>
      <th scope="col" style="color:#3490dc;">COURSE</th>
      <th scope="col" style="color:#3490dc;">DATE</th>
      <th scope="col" style="color:#3490dc;">FROM</th>
      <th scope="col" style="color:#3490dc;">TO</th>
      <th scope="col" style="color:#3490dc;">ACTION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($mytest as $mytests)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$mytests->venue}}</td>
      <td>{{$mytests->type}}</td>
      <td>{{$mytests->course}}</td>
      <td>{{$mytests->date}}</td>
       <td>{{$mytests->fromTime}}</td>
      <td>{{$mytests->toTime}}</td>
     <td>
      <center><a data-toggle="modal" data-target="#edit{{$mytests->id}}" role="button" aria-pressed="true" name="editC"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>
        <div class="modal fade" id="edit{{$mytests->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

  <div class="modal-body">
        <form method="get" action="{{ route('edittests') }}">
  {{csrf_field()}}

   <div class="form-group row">
    <label for="Name{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-7">
    <input type="text" class="form-control" id="Name{{$mytests->id}}" name="name" value="{{ Auth::user()->name }}" readonly>
  </div>
  </div>

   <div class="form-group row">
    <label for="Date{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>Date:</strong></label>
    <div class="col-sm-7">
    <input type="date" min="{{$date}}"class="form-control" id="Date{{$mytests->id}}" name="Date" max="2020-12-31" value="{{$mytests->date}}" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="Venue{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>Venue(s):</strong></label>
    <div class="col-sm-7">
    <input type="text" onblur="this.value=removeSpaces(this.value); javascript:this.value=this.value.toUpperCase();" class="form-control" id="Venue{{$mytests->id}}" name="Venue" value="{{$mytests->venue}}" required>
  </div>
  </div>

  <div class="form-group row">
    <label for="inputTimeFrom{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>From:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="07:00" max="19:00"class="form-control" id="fromTime{{$mytests->id}}" name="fromTime" value="{{$mytests->fromTime}}" required>
  </div>
   <label for="inputTimeTo{{$mytests->id}}"  class="col-sm-1 col-form-label"><strong>To:</strong></label>
    <div class="col-sm-3">
    <input type="time" min="08:00" max="20:00"class="form-control" id="toTime{{$mytests->id}}" name="toTime" value="{{$mytests->toTime}}" required>
  </div>
  </div>
  <span id="messageA{{$mytests->id}}"></span>

 
<div class="form-group row">
    <label for="courseid{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>Course ID:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="courseid" id="courseid{{$mytests->id}}">
    <option value="{{$mytests->course}}">{{$mytests->course}}</option>
    @foreach($mycourse as $mycourses)
    @if($mycourses->course != $mytests->course)
    <option value="{{$mycourses->course}}">{{$mycourses->course}}</option>
    @endif
    @endforeach
  </select>
  <span id="messageB{{$mytests->id}}"></span>
  </div>
  </div>



  <div class="form-group row">
    <label for="Select{{$mytests->id}}"  class="col-sm-3 col-form-label"><strong>Test No:</strong></label>
    <div class="col-sm-7">
   <select class="custom-select Reason" name="type" id="testType{{$mytests->id}}">
    <option value="{{$mytests->type}}">{{$mytests->type}}</option>
    @if($mytests->type!='Test 1')
    <option value="Test 1">Test 1</option>
    @endif
    @if($mytests->type!='Test 2')
    <option value="Test 2">Test 2</option>
    @endif
    @if($mytests->type!='Test 3')
    <option value="Test 3">Test 3</option>
    @endif
    @if($mytests->type!='Test 4')
     <option value="Test 4">Test 4</option>
     @endif
     @if($mytests->type!='Make Up')
     <option value="Make Up">Make Up</option>
     @endif
     @if($mytests->type!='Special Test 1')
    <option value="Special Test 1">Special Test 1</option>
    @endif
    @if($mytests->type!='Special Test 2')
     <option value="Special Test 2">Special Test 2</option>
     @endif
  </select>
  <span id="messageC{{$mytests->id}}"></span>
  </div>
  </div>

  <input type="text" name="idA" value="{{$mytests->id}}" hidden="">

  <div class="form-group">
    <center><button type="submit" class="btn btn-primary"id="buttonA{{$mytests->id}}" name="buttonA">SUBMIT</button></center>
    </div>

  </form>
</div>

</div>
</div>
</div>
        <a data-toggle="modal" data-target="#Deactivate{{$mytests->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
        <div class="modal fade" id="Deactivate{{$mytests->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color:red;">WARNING!!!</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <h5>Are you sure you want to delete this test?</h5>
            <br>

<center><a class="btn btn-sm btn-danger" href="{{route('canceltest',$mytests->id)}}">Proceed</a></center>

</div>
</div>
</div>
</div>
</center>
</td>

    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
</div>
<div id="Previous" class="tabcontent">
    <br>
  <h4>2. PREVIOUS TESTS</h4>
  <br>
  <?php
$i=1;
  ?>
<table class="table table-striped table-bordered" id="myTable1">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">VENUE(S)</th>
      <th scope="col" style="color:#3490dc;">TEST NO.</th>
      <th scope="col" style="color:#3490dc;">COURSE</th>
      <th scope="col" style="color:#3490dc;">DATE</th>
      <th scope="col" style="color:#3490dc;">FROM</th>
      <th scope="col" style="color:#3490dc;">TO</th>
    </tr>
  </thead>
  <tbody>

    @foreach($mytestA as $mytests)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$mytests->venue}}</td>
      <td>{{$mytests->type}}</td>
      <td>{{$mytests->course}}</td>
      <td>{{$mytests->date}}</td>
       <td>{{$mytests->fromTime}}</td>
      <td>{{$mytests->toTime}}</td>
    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
</div>
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

    var table = $('#myTable1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});

</script>

<script>
function getdata(){
       var txtone = document.forms["myForm"]["toTime"].value;
        var txttwo = document.forms["myForm"]["fromTime"].value;


      if (txtone<=txttwo) {
        var message=document.getElementById('message');
        message.style.color='red';
        message.innerHTML=" 'To' time cannot be less than or equal to 'From' time";
        return false;
      }
}
</script>
<script>
$(document).ready(function(){
  var a="";
  var b="";
  var c="";
   $('[name="buttonA"]').click(function(e){
    console.log(0);
  var id = $("#"+e.target.id).val();
  let reg = e.target.id.replace(/\D/g,'');
  var cours= $('#courseid'+reg).val();
  var tes=$('#testType'+reg).val();
  var t1=$('#toTime'+reg).val();
  var t2=$('#fromTime'+reg).val();
  if (cours=='') {
    $('#messageB'+reg).show();
    var message=document.getElementById('messageB'+reg);
    message.style.color='red';
    message.innerHTML="Course Id is Required";
    a=0;
    return false;
  }
  else{
     $('#messageB'+reg).hide();
     a=1;
  }

  if (tes==''){
    $('#messageC'+reg).show();
    var message=document.getElementById('messageC'+reg);
    message.style.color='red';
    message.innerHTML="Test Type is Required";
    b=0;
    return false;
  }
  else{
     $('#messageC'+reg).hide();
     b=1;
  }
  if(t1<=t2){
    var message=document.getElementById('messageA'+reg);
    message.style.color='red';
    message.innerHTML="'To Time' cannot be less than or equal to 'From Time'";
    c=0;
    return false;
  }
  else{
    $('#messageA'+reg).hide();
     c=1;
  }
  if(a==1 && b==1&&c==1){
    return true;
  }

  });
});
</script>

<script type="text/javascript">
  function openInstructors(evt, evtName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(evtName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

@endsection