@extends('layouts.app')

@section('title')
  USERS MANAGEMENT
@endsection

@section('style')
<style type="text/css">
</style>
@endsection
<?php
$badge=$badgeno->BADGENUMBER;
$newbadgeno = $badge + 1;
?>

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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
        <a class="nav-link dropdown-toggle active" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
<div class="container2" style="width: 1230px;">
  <div class="row" style="width: 120%;">
  <div class="col-2" >
  <div class="card border-info">
  <div class="card-body" >
  	 <a class="btn btn-light color_nav2 active" id="newuser" href="" role="button"style="background-color: #b0d0ff;">ADD USER
  	 </a>
  <br>
  <br>
  <a data-toggle="modal" data-target="#edituser"  role="button" class="btn btn-light color_nav2" aria-pressed="true" style="background-color: #b0d0ff;">EDIT USER</a>
  	  
     <br>
  <br>
  	 {{-- <a class="btn btn-light color_nav2" id="deactivateuser" href="" role="button"style="background-color: #b0d0ff;">DEACTIVATE USER
  	 </a>
     <br>
     <br> --}}
     <a class="btn btn-light color_nav2" id="activateuser" href="" role="button"style="background-color: #b0d0ff;">ACTIVATE USER
     </a>

     <div class="modal fade" id="edituser" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 135%">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
<form method="get" action="" id="edituserform">
  {{csrf_field()}}

  <div class="form-group row" id="DivTitle">
      <label for="getTitle" class="col-sm-3 col-form-label"><strong>Title:</strong></label>
      <div class="col-sm-9">
      <select name="title" id="getTitle" class="custom-select Reason" required="">
      <option value="" id="">Select Title</option>
      <option value="staff" id="Option" >STAFF</option>
      <option value="student" id="Option">STUDENT</option>
      </select>
      <span id="title_alert"></span>
      </div>
  </div>

  <div class="form-group row" id="DivDept" style="display: none;">
      <label for="" class="col-sm-3 col-form-label"><strong>Department:</strong></label>
      <div class="col-sm-9">
    <select name="dept" id="getDepartment" class="custom-select Reason" >
      <option value="" id="">Select Department</option>
      <option value="31" id="Option" >CSE</option>
      <option value="32" id="Option">ETE</option>
      </select>
      <span id="dept_alert"></span>
      </div>
  </div>

  <div class="form-group row" id="studentDepartment" style="display: none;">
      <label for="studentdepartment"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
      <div class="col-sm-9">
          <select id="studentdepartment" name="studentdepartment" class="custom-select">
            <option value=""> Select Department</option>
           <option value="CSE">Computer Science and Engineering</option>
           <option value="ETE">Electronics and Telecommunication Engineering</option>
        </select>
        <span id="studdept_alert"></span>
    </div>
    </div>

     <div class="form-group row" id="csestudentProgram" style="display: none;">
  <label for="csedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="csedprogram" id="csedprogram" >
    <option value="">Select Degree Program</option>
     <option value="18">BSc. in Business Information Technology year 1</option>
    <option value="19">BSc. in Business Information Technology year 2</option>
    <option value="20">BSc. in Business Information Technology year 3</option>
    <option value="5"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="6">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="7">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="11">B.Sc. in Computer Science year 1</option>
    <option value="12">B.Sc. in Computer Science year 2</option>
    <option value="13">B.Sc. in Computer Science year 3</option>
    <option value="21">B.Sc. with Computer Science 1</option>
    <option value="22">B.Sc. with Computer Science</option>
    <option value="23">B.Sc. with Computer Science 3</option>
    <option value="28">Certificate in Computer Science</option>
    <option value="29">Diploma in Computer Science year 1</option>
    <option value="30">Diploma in Computer Science year 2</option>
  </select>
  <span id="csedprogram_alert"></span>
  </div>
  </div>

   <div class="form-group row" id="etestudentProgram" style="display: none;">
  <label for="etedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="etedprogram" id="etedprogram">
    <option value="">Select Degree Program</option>
    <option value="24">B.Sc. in Electronic Engineering year 1</option>
    <option value="25">B.Sc. in Electronic Engineering year 2</option>
    <option value="26">B.Sc. in Electronic Engineering year 3</option>
    <option value="27">B.Sc. in Electronic Engineering year 4</option>
    <option value="8">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="9">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="10">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="14">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="15">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="16">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="17">B.Sc. in Telecommunications Engineering 4</option>
   </select>
   <span id="etedprogram_alert"></span>
 </div>
</div>

  <div class="form-group row" id="Divdprogram" style="display: none;">
  <label for="dprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="dprogram" id="dprogram">
    <option value="">Select Degree Program</option>
     <option value="18">BSc. in Business Information Technology year 1</option>
    <option value="19">BSc. in Business Information Technology year 2</option>
    <option value="20">BSc. in Business Information Technology year 3</option>
    <option value="5"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="6">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="7">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="11">B.Sc. in Computer Science year 1</option>
    <option value="12">B.Sc. in Computer Science year 2</option>
    <option value="13">B.Sc. in Computer Science year 3</option>
    <option value="21">B.Sc. with Computer Science 1</option>
    <option value="22">B.Sc. with Computer Science</option>
    <option value="23">B.Sc. with Computer Science 3</option>
    <option value="28">Certificate in Computer Science</option>
    <option value="29">Diploma in Computer Science year 1</option>
    <option value="30">Diploma in Computer Science year 2</option>
    <option value="24">B.Sc. in Electronic Engineering year 1</option>
    <option value="25">B.Sc. in Electronic Engineering year 2</option>
    <option value="26">B.Sc. in Electronic Engineering year 3</option>
    <option value="27">B.Sc. in Electronic Engineering year 4</option>
    <option value="8">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="9">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="10">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="14">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="15">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="16">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="17">B.Sc. in Telecommunications Engineering 4</option>
  </select>
  <span id="dprogram_alert"></span>
  </div>
  </div>
  
  <div align="right">
    
     <button type="submit" class="btn btn-primary" id="edituserbutton">SUBMIT</button>
     <button type="button" class="btn btn-danger" onclick="reloadPage();">CLOSE</button>
    </div>
</form>
</div>
</div>
</div>
</div>
     


  </div>
</div>
</div>

<div class="col-10">

  

<div id="error">
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
  </div>
    <div id="content">
<div class="card hero-image border-info" style="height: 100%">
  <div class="card-body">
    <div align="center">
      <h1 style="text-align: center;"><b>UNIVERSITY OF DAR ES SALAAM</b></h1>
    <h2 style="text-align: center;"><b>COLLEGE OF ICT</b></h2>
    <div id="loading"></div>
   <div><img src="{{asset('img/logo_udsm.jpg')}}" height="200px" width="170px"></div>
    <br>
    <br>
    <h1><b>SYSTEM USERS MANAGEMENT</b></h1>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

@section('pagescript')
<script type="text/javascript">
   $(document).ajaxSend(function(){
    $("#loading").fadeIn(250);
});
$(document).ajaxComplete(function(){
    $("#loading").fadeOut(250);
});
  $(document).ready(function() {

  $("#newuser").click(function(e){
    $("#error").hide();
    $.ajax({
      url: "getnewuser",
      context: document.body
    }).done(function(fragment) { 
      $("#content").html(fragment);
    });
    return false;
});

  $("#activateuser").click(function(e){
    $("#error").hide();
    $.ajax({
      url: "getactivateuser",
      context: document.body
    }).done(function(fragment) { 
      $("#content").html(fragment);
    });
    return false;
});

  $("#deactivateuser").click(function(e){
    $("#error").hide();
    $.ajax({
      url: "getdeactivateuser",
      context: document.body
    }).done(function(fragment) { 
      $("#content").html(fragment);
    });
    return false;
});

  

  $('#getTitle').click(function(){
     var query=$(this).val();
     if (query=='staff') {
      $('#DivDept').show();
      $('#studentDepartment').hide();
      $('#etestudentProgram').hide();
      $('#csestudentProgram').hide();
     }
     else if(query=='student'){
      $('#DivDept').hide();
      $('#studentDepartment').show();
     $("#studentdepartment").click(function(e) {
      var query3=$(this).val();
        if(query3=='CSE'){
          $('#etestudentProgram').hide();
          $('#csestudentProgram').show();
        }
        else if(query3=='ETE'){
           $('#csestudentProgram').hide();
          $('#etestudentProgram').show();
        }
        else{
          $('#etestudentProgram').hide();
          $('#csestudentProgram').hide();
        }
       });
     }
     else{
      $('#DivDept').hide();
      $('#studentDepartment').hide();
      $('#etestudentProgram').hide();
      $('#csestudentProgram').hide();

     }

    });

  $("#edituserbutton").click(function(e) {
    $("#error").hide();
    if($('#getTitle').val()==''){
      $('#title_alert').show();
       var message=document.getElementById('title_alert');
        message.style.color='red';
        message.innerHTML="This Field is Required.";
      return false;
    }
    else{
      $('#title_alert').hide();
    }

     if($('#getTitle').val()=='staff'){
      if($('#getDepartment').val()==''){
        $('#dept_alert').show();
        var message=document.getElementById('dept_alert');
        message.style.color='red';
        message.innerHTML="This Field is Required.";
      return false;
      }
      else{
         $('#dept_alert').hide();
      }
     }

     else if ($('#getTitle').val()=='student'){
      var query=$('#studentdepartment').val();
      if(query==''){
        $('#studdept_alert').show();
        var message=document.getElementById('studdept_alert');
        message.style.color='red';
        message.innerHTML="This Field is Required.";
      return false;
      }
      else if(query=='CSE'){
        $('#studdept_alert').hide();
        var textfive = document.getElementById('csedprogram').value;
         if(textfive==''){
          var message=document.getElementById('csedprogram_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
         }
         else if (textfive != ''){
          var message=document.getElementById('csedprogram_alert');
          message.innerHTML="";
         }
      }
      else if(query=='ETE'){
        var textfive = document.getElementById('etedprogram').value;
         if(textfive==''){
          var message=document.getElementById('etedprogram_alert');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
         }
         else if (textfive != ''){
          var message=document.getElementById('etedprogram_alert');
          message.innerHTML="";
         }
      }

     }
    $('#edituser').modal('hide');
    var title = $('#getTitle').val();
    var dept= $('#getDepartment').val();
    var studentdepartment=$('#studentdepartment').val();
    var csedprogram=$('#csedprogram').val();
    var etedprogram=$('#etedprogram').val();
    var _token = $('input[name="_token"]').val();
    $.ajax({
      url: "getedituser",
      method:"Get",
      data:{title:title, dept:dept, studentdepartment:studentdepartment, csedprogram:csedprogram, etedprogram:etedprogram, _token:_token},
      context: document.body
    }).done(function(fragment) { 
      $("#content").html(fragment);
    });
    return false;
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

<script>
    function reloadPage(){
        location.reload(true);
    }
</script>

@endsection
