@extends('layouts.app')

@section('title')
  STUDENTS
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:760px;
  padding-bottom:20px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;  
}

div.dataTables_length select { 
  height:30px;
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
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
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/course_instructors">INSTRUCTORS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
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
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/managestudents">MANAGE STUDENTS</a>
  </li>


</ul>
</div>
@endif


</nav>
</div>
<?php
$i='1';
if($_GET['studentdepartment']=='CSE'){
  $dprog=$_GET['csedprogram'];
}
else if($_GET['studentdepartment']=='ETE'){
  $dprog=$_GET['etedprogram'];
}
use App\userinfo;
use App\department;
Use App\program;
use App\lecturer;
$course=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->where('course_type','core')->get();
$deptId=department::select('DEPTID')->where('DEPTNAME',$dprog)->value('DEPTID');
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->orderBy('name','asc')->get();
        $full= program::select('full')->where('initial',$dprog)->value('full');
?>

<br>
<div class="container2">
  <div class="row">
    <div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5>GET BY:</h5>
    <a data-toggle="modal" data-target="#courses" class="btn styling color_nav3 active" role="button" aria-pressed="true">COURSE ID</a>
    <div class="modal fade" id="courses" role="dialog">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Choose Course ID</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

        <div class="modal-body">
      <form action="/studentsList" method="get">
      {{csrf_field()}}
  <div class="form-group row" id="program">
  <label for="courseid"  class="col-sm-4 col-form-label">COURSE ID:</label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="rid" id="courseid" required="">
    <option value="">Select Course ID</option>
    @foreach($course as $course)
    <option value="{{$course->course}}">{{$course->course}}</option>
    @endforeach
  </select>
</div>
</div>

<div id="StudentCheckbox">
      <div class="form-group row" >
      <label for="fees_status" class="col-sm-4 col-form-label">Show Fees Status</label>
      <div class="col-sm-8">
      <input id="fees_status" type="checkbox" name="feescheckbox" value="true">
      </div>
      </div>
    </div>
<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>
</div>
</div>

<br>
<br>

 <a data-toggle="modal" data-target="#DProgram" class="btn styling color_nav3 active" role="button" aria-pressed="true">DEGREE PROGRAM</a>
 <div class="modal fade" id="DProgram" role="dialog">
      <div class="modal-dialog" role="document">
      <div class="modal-content" style="width: 135%">
          <div class="modal-header">
            <b><h5 class="modal-title">Choose Degree Program</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

        <div class="modal-body">
      <form action="/studentsList2" method="get" onsubmit="return getdata()">
                 {{csrf_field()}}
  <div class="form-group row" id="studentDepartment">
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
     <option value="BIT1">BSc. in Business Information Technology year 1</option>
    <option value="BIT2">BSc. in Business Information Technology year 2</option>
    <option value="BIT3">BSc. in Business Information Technology year 3</option>
    <option value="CIT1"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="CIT2">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="CIT3">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="CIT4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="CS1(in)">B.Sc. in Computer Science year 1</option>
    <option value="CS2(in)">B.Sc. in Computer Science year 2</option>
    <option value="CS3(in)">B.Sc. in Computer Science year 3</option>
    <option value="CS1(with)">B.Sc. with Computer Science 1</option>
    <option value="CS2(with)">B.Sc. with Computer Science</option>
    <option value="CS3(with)">B.Sc. with Computer Science 3</option>
    <option value="CS(Cert)">Certificate in Computer Science</option>
    <option value="CS1(Dipl.)">Diploma in Computer Science year 1</option>
    <option value="CS2(Dipl.)">Diploma in Computer Science year 2</option>
  </select>
  <span id="csedprogram_alert"></span>
  </div>
  </div>

   <div class="form-group row" id="etestudentProgram" style="display: none;">
  <label for="etedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="etedprogram" id="etedprogram">
    <option value="">Select Degree Program</option>
   <option value="EE1">B.Sc. in Electronic Engineering year 1</option>
    <option value="EE2">B.Sc. in Electronic Engineering year 2</option>
    <option value="EE3">B.Sc. in Electronic Engineering year 3</option>
    <option value="EE4">B.Sc. in Electronic Engineering year 4</option>
    <option value="ESC1">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="ESC2">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="ESC3">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="TE1">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="TE2">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="TE3">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="TE4">B.Sc. in Telecommunications Engineering 4</option>
   </select>
   <span id="etedprogram_alert"></span>
 </div>
</div>

  <div id="StudentCheckbox">
      <div class="form-group row" >
      <label for="fees_status2" class="col-sm-3 col-form-label"><strong>Show Fees Status</strong></label>
      <div class="col-sm-9">
      <input id="fees_status2" type="checkbox" name="feescheckbox" value="true">
      </div>
      </div>
    </div>

<div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>
</form>

</div>
</div>
</div>
</div>

    </div>
 </div>
</div>
@if($_GET['feescheckbox']=='true')
<div class="col-10">
  @else
<div class="col-9">
  @endif
<div class="card border-info">
  <div class="card-body">
<h2>{{$full}}</h2>
<br>
 <a class="btn btn-sm btn-success" style="float: right;" href="/generate-Students-PDF?rid={{$dprog}}&feescheckbox={{$_GET['feescheckbox']}}">PRINT</a>
   <br>
   <br>
    <table class=" hover table table-striped table-bordered" id="example">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;width: 5%">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;"><center>REGISTRATION No.</center></th>
      <th scope="col" style="color:#3490dc;"><center>GENDER</center></th>
      @if($_GET['feescheckbox']=='true')
      <th scope="col" style="color:#3490dc;"><center>FEES STATUS</center></th>
       <th scope="col" style="color:#3490dc;"><center>FEES DURATION</center></th>
       @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($student->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      @if($_GET['feescheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
    </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
</table>


    </div>
  </div>

</div>
</div>
</div>
@endsection

@section('pagescript')


<script type="text/javascript">
 $(document).ready(function() {
  var x = {!! json_encode($full) !!};
  
  // console.log(x);
    var table = $('#example').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x, 
            },

            {
                extend: 'copyHtml5',className: 'btn-success',
            },
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example_wrapper").find($(".dt-buttons")).css("width", "300px");
$("div#example_wrapper").find($(".dt-buttons")).css(styles);
});

</script>

<script type="text/javascript">
  $(document).ready(function() {
  $('#studentdepartment').click(function(){
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
  });
  function getdata(){
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
  
</script>

@endsection