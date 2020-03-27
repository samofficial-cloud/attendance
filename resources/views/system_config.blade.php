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
<br>
<div class="container">
  <div class="row">




<div class="col-2 ">

<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">System settings</h5>

  <a data-toggle="modal" data-target="#class" class="btn styling button_color active" role="button" aria-pressed="true">Minimum class percentage for students</a> &nbsp;
  <a data-toggle="modal" data-target="#test" class="btn styling button_color active" role="button" aria-pressed="true">Test, class and UE scanning validity duration</a>&nbsp;
      <a data-toggle="modal" data-target="#ue" class="btn styling button_color active" role="button" aria-pressed="true">Semester start date and academic year</a>&nbsp;<br>
      <a data-toggle="modal" data-target="#title" class="btn styling button_color active" role="button" aria-pressed="true">System title</a>&nbsp;

<!-- Classes -->
   <div class="modal fade" id="class" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Change class minimun required percentage for students </h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('change_percentage')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}







                   <div id="DivCheck" style="display:block;">
                       <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-4 col-form-label">Minimum required percentage:</label>
                           <div class="col-sm-8">
                               <input type="text" required name="minimum_percentage" class="form-control" id="inputRegNo"  value="{{$minimum_percentage}}"  >



                           </div>
                       </div>
                   </div>







     <center><button id="generate_btn"  class="btn btn-primary" type="submit">Change</button></center>
     </form>
  </div>

  </div>
  </div>
  </div>

<!-- Tests -->
  <div class="modal fade" id="test" role="dialog">

         <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
           <b><h5 class="modal-title">Time parameters for fingeprint device(In minutes) </h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="test_form"  action="{{ route('change_validity_period')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}


                  <div >
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label"> Class validity duration:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="class_validity" required class="form-control" value="{{$class_validity}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Test validity duration:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="test_validity" required class="form-control" value="{{$test_validity}}"  autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>

                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">UE validity duration:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="ue_validity" required class="form-control" value="{{$ue_validity}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Time allowance for tests:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="test_allowance" required class="form-control" value="{{$test_allowance}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Time allowance for classes:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="class_allowance" required class="form-control" value="{{$class_allowance}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Time allowance for UE:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="ue_allowance" required class="form-control" value="{{$ue_allowance}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>




    <center><button id="generate_btnt"  class="btn btn-primary" type="submit">Change</button></center>
    </form>
  </div>

  </div>
  </div>
  </div>


<!-- UE -->
  <div class="modal fade" id="ue" role="dialog">


         <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
           <b><h5 class="modal-title">Set Academic year and semester</h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="ue_form"  action="{{ route('change_academic_year')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}
                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Academic year:</label>
                          <div class="input_radio col-sm-8">
                              <input type="text" name="academic_year" required class="form-control" value="{{$academic_year}}"  autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>

                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Semester:</label>
                          <div class="input_radio col-sm-8">
                              <input type="text" name="semester" required class="form-control" value="{{$semester}}" autocomplete="off" >
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>


                  </div>




    <center><button id="generate_btnu"  class="btn btn-primary" type="submit">Change</button></center>
    </form>
  </div>

  </div>
  </div>
  </div>



      <div class="modal fade" id="title" role="dialog">


          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <b><h5 class="modal-title">Change system title</h5></b>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                      <form id="ue_form"  action="{{ route('change_title')}}" class="form-container form-horizontal" method="get">
                          {{csrf_field()}}
                          <div>
                              <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-4 for_label col-form-label">System title:</label>
                                  <div class="input_radio col-sm-8">
                                      <input type="text" name="title" required class="form-control" value="{{$title}}"  autocomplete="off" >
                                      {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                                  </div>
                              </div>


                          </div>


                          <center><button id="generate_btnu"  class="btn btn-primary" type="submit">Change</button></center>
                      </form>
                  </div>

              </div>
          </div>
      </div>
</div>
</div>
</div>
@php
use App\camis_configuration;
$camistitle=camis_configuration::select('camis_title')->value('camis_title');
@endphp
<div class="col-10">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
  <div class="card hero-image border-info" style="height: 100%;">
  <div class="card-body">
    <center><h1 class="card-title"><b>{{$camistitle}}</b></h1></center>
    <center><h2 class="card-title"><b>COLLEGE OF ICT</b></h2></center>
     
    <div align="center">
<br>
   <img src="img/logo_udsm.jpg" height="180px" width="150px">
<br><br>
 <h1 class="card-title"><b>SYSTEM SETTINGS</b></h1>


</div>


</div>
</div>
</div>
</div>
</div>
@endsection



@section('pagescript')


<script type="text/javascript">

//Normal classes
function SelectCheck(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivCheck").style.display = "none";
          document.getElementById("DivCheckRadio").style.display = "none";
          document.getElementById("coursediv").style.display = "block";
          document.getElementById("programmediv").style.display = "block";
          document.getElementById("DivCheckbox").style.display = "none";
          document.getElementById("staff_programme").style.display = "none";
          document.getElementById("selectDiv").disabled = false;
          document.getElementById("generate_btn").disabled = false;
          $('#selectDiv').html(" <option>Select Course</option>");
          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;

          var input = document.getElementById("inputProg");
          input.value ="";


          var ele7 = document.getElementById("inputProg");
          ele7.required = true;


          var ele4 = document.getElementById("inputRegNo");
          ele4.required = false;

      }else if(nameSelect.value== 2) {
          var ele = document.getElementById("one_course");
          ele.checked = true;
          document.getElementById("DivCheckbox").style.display = "block";
          document.getElementById("selectDiv").disabled = false;
          document.getElementById("DivCheck").style.display = "block";
          document.getElementById("DivCheckRadio").style.display = "block";
          document.getElementById("programmediv").style.display = "none";
          document.getElementById("staff_programme").style.display = "block";

          var input = document.getElementById("inputProg");
          input.value ="";

          document.getElementById("coursediv").style.display = "block";
          var ele7 = document.getElementById("inputProg");
          ele7.required = false;

          var ele4 = document.getElementById("inputRegNo");
          ele4.required = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;

          $('#one_course').change(function(){
              if( $('#one_course').prop('checked') ){
                  document.getElementById("coursediv").style.display = "block";
                  document.getElementById("DivCheckbox").style.display = "block";
                  document.getElementById("programmediv").style.display = "none";
                  document.getElementById("DivCheck").style.display = "block";
                  var input = document.getElementById("inputRegNo");
                  input.value ="";



                  document.getElementById("user_availability").innerHTML ='';
                  $('#selectDiv').html("<option>Select Course</option>");
              } else {
                  document.getElementById("coursediv").style.display = "none";
                  // var ele7 = document.getElementById("inputProg");
                  // ele7.required = false;
                  //
                  // var ele4 = document.getElementById("inputRegNo");
                  // ele4.required = true;

              }
          });



        // document.getElementById("coursediv").style.display = "block";
          document.getElementById("generate_btn").disabled = false;
          $('#selectDiv').html(" <option>Select Course</option>");
          var input = document.getElementById("inputRegNo");
          input.value ="";
          document.getElementById("user_availability").innerHTML ='';







      }
      else {
          document.getElementById("programmediv").style.display = "none";
          document.getElementById("selectDiv").disabled = false;
          document.getElementById("DivCheck").style.display = "block";
          document.getElementById("DivCheckRadio").style.display = "block";
          document.getElementById("DivCheckbox").style.display = "none";
          document.getElementById("coursediv").style.display = "block";
          document.getElementById("generate_btn").disabled = false;
          $('#selectDiv').html(" <option>Select Course</option>");
          var input = document.getElementById("inputRegNo");
          input.value ="";


          var ele2 = document.getElementById("show_all");
          ele2.checked = false;



          document.getElementById("user_availability").innerHTML ='';
          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele7 = document.getElementById("inputProg");
          ele7.required = false;

          var ele4 = document.getElementById("inputRegNo");
          ele4.required = true;


          $('#one_course').change(function(){
              if( $('#one_course').prop('checked') ){
                  document.getElementById("coursediv").style.display = "block";

                  var input = document.getElementById("inputRegNo");
                  input.value ="";
                  document.getElementById("user_availability").innerHTML ='';
                  $('#selectDiv').html(" <option>Select Course</option>");
              } else {
                  document.getElementById("coursediv").style.display = "none";}
          });

      }


}

// Tests
function SelectCheckTest(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivCheckt").style.display = "none";
          document.getElementById("DivCheckRadiot").style.display = "none";
          document.getElementById("programmedivt").style.display = "block";
          document.getElementById("selectDivt").disabled = false;
          document.getElementById("generate_btnt").disabled = false;
          $('#selectDivt').html(" <option>Select Course</option>");
          var ele = document.getElementById("one_courset");
          ele.checked = true;

          var ele7 = document.getElementById("inputProgt");
          ele7.required = true;



          var ele4 = document.getElementById("inputRegNot");
          ele4.required = false;

      }else if(nameSelect.value== 2) {

        document.getElementById("DivCheckt").style.display = "block";
          document.getElementById("selectDivt").disabled = false;
        document.getElementById("DivCheckRadiot").style.display = "block";
          document.getElementById("generate_btnt").disabled = false;
          document.getElementById("programmedivt").style.display = "none";
        document.getElementById("coursedivt").style.display = "block";
        var ele = document.getElementById("one_courset");
        ele.checked = true;
          document.getElementById("user_availabilityt").innerHTML ='';
          $('#selectDivt').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgt");
          ele7.required = false;

          var input = document.getElementById("inputRegNot");
          input.value ="";

        var ele4 = document.getElementById("inputRegNot");
        ele4.required = true;


      }
      else {
          document.getElementById("programmedivt").style.display = "none";
          document.getElementById("selectDivt").disabled = false;
          document.getElementById("DivCheckt").style.display = "block";
          document.getElementById("DivCheckRadiot").style.display = "block";
          document.getElementById("generate_btnt").disabled = false;
          document.getElementById("coursedivt").style.display = "block";
          var ele = document.getElementById("one_courset");
          ele.checked = true;
          document.getElementById("user_availabilityt").innerHTML ='';
          $('#selectDivt').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgt");
          ele7.required = false;




          var input = document.getElementById("inputRegNot");
          input.value ="";

          var ele4 = document.getElementById("inputRegNot");
          ele4.required = true;

      }


}

//UE

function SelectCheckUe(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivChecku").style.display = "none";
          document.getElementById("DivCheckRadiou").style.display = "none";
          document.getElementById("programmedivu").style.display = "block";
          document.getElementById("generate_btnu").disabled = false;
          document.getElementById("selectDivu").disabled = false;
          var ele = document.getElementById("one_courseu");
          ele.checked = true;

          $('#selectDivu').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgu");
          ele7.required = true;

          var ele4 = document.getElementById("inputRegNou");
          ele4.required = false;

      }else if(nameSelect.value== 2) {

          document.getElementById("programmedivu").style.display = "none";
        document.getElementById("DivChecku").style.display = "block";
          document.getElementById("selectDivu").disabled = false;





        document.getElementById("DivCheckRadiou").style.display = "block";
          document.getElementById("generate_btnu").disabled = false;
        document.getElementById("coursedivu").style.display = "block";
        var ele = document.getElementById("one_courseu");
        ele.checked = true;
          document.getElementById("user_availabilityu").innerHTML ='';
          $('#selectDivu').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgu");
          ele7.required = false;

          var input = document.getElementById("inputRegNou");
          input.value ="";

        var ele4 = document.getElementById("inputRegNou");
        ele4.required = true;


      }
      else {
          document.getElementById("programmedivu").style.display = "none";
          document.getElementById("DivChecku").style.display = "block";
          document.getElementById("DivCheckRadiou").style.display = "block";
          document.getElementById("selectDivu").disabled = false;
          document.getElementById("generate_btnu").disabled = false;
          document.getElementById("coursedivu").style.display = "block";
          var ele = document.getElementById("one_courseu");
          ele.checked = true;

          $('#selectDivu').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgu");
          ele7.required = false;
          document.getElementById("user_availabilityu").innerHTML ='';

          var input = document.getElementById("inputRegNou");
          input.value ="";

          var ele4 = document.getElementById("inputRegNou");
          ele4.required = true;

      }


}

//CLASS CHECK IF USER EXISTS START
function checkUser() {

    var inputRegNo=document.getElementById('inputRegNo').value;

    $.ajax({
        url : '{{ route("check_user")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        success : function(data){
            if(data===""){

                document.getElementById('user_availability').style.color = 'red';
                document.getElementById("user_availability").innerHTML ='User does not exist';
                document.getElementById("user_availability").className += "status_back";
                document.getElementById("selectDiv").disabled = true;
                document.getElementById("generate_btn").disabled = true;


            }else {

                document.getElementById('user_availability').style.color = 'green';
                document.getElementById("user_availability").className += "status_back";
                document.getElementById("user_availability").innerHTML =data;
                document.getElementById("selectDiv").disabled = false;
                document.getElementById("generate_btn").disabled = false;

            }

        },
        error : function(data) {

        }
    });


    $.ajax({
        url : '{{ route("check_course")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        dataType:"html",
        success : function(data){


            if(data===""){


            }else {


                $('#selectDiv').html(data);
                // document.getElementById("selectDiv").html(data);
                // console.log(data);


            }

        },
        error : function(data) {

        }
    });



}








//CHECK IF USER EXISTS END



//TEST CHECK IF USER EXISTS START
function checkUsert() {

    var inputRegNo=document.getElementById('inputRegNot').value;

    $.ajax({
        url : '{{ route("check_user")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        success : function(data){
            if(data===""){

                document.getElementById('user_availabilityt').style.color = 'red';
                document.getElementById("user_availabilityt").className += "status_back";
                document.getElementById("user_availabilityt").innerHTML ='User does not exist';
                document.getElementById("selectDivt").disabled = true;
                document.getElementById("generate_btnt").disabled = true;


            }else {

                document.getElementById('user_availabilityt').style.color = 'green';
                document.getElementById("user_availabilityt").className += "status_back";
                document.getElementById("user_availabilityt").innerHTML =data;
                document.getElementById("selectDivt").disabled = false;
                document.getElementById("generate_btnt").disabled = false;

            }

        },
        error : function(data) {

        }
    });


    $.ajax({
        url : '{{ route("check_course")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        dataType:"html",
        success : function(data){


            if(data===""){


            }else {


                $('#selectDivt').html(data);
                // document.getElementById("selectDiv").html(data);
                // console.log(data);


            }

        },
        error : function(data) {

        }
    });



}








//CHECK IF USER EXISTS END





//UE CHECK IF USER EXISTS START
function checkUseru() {

    var inputRegNo=document.getElementById('inputRegNou').value;

    $.ajax({
        url : '{{ route("check_user")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        success : function(data){
            if(data===""){

                document.getElementById('user_availabilityu').style.color = 'red';
                document.getElementById("user_availabilityu").className += "status_back";
                document.getElementById("user_availabilityu").innerHTML ='User does not exist';
                document.getElementById("selectDivu").disabled = true;
                document.getElementById("generate_btnu").disabled = true;


            }else {

                document.getElementById('user_availabilityu').style.color = 'green';
                document.getElementById("user_availabilityu").className += "status_back";
                document.getElementById("user_availabilityu").innerHTML =data;
                document.getElementById("selectDivu").disabled = false;
                document.getElementById("generate_btnu").disabled = false;

            }

        },
        error : function(data) {

        }
    });


    $.ajax({
        url : '{{ route("check_course")}}',
        type : "GET",
        data: {inputRegNo: inputRegNo},
        dataType:"html",
        success : function(data){


            if(data===""){


            }else {


                $('#selectDivu').html(data);
                // document.getElementById("selectDiv").html(data);
                // console.log(data);


            }

        },
        error : function(data) {

        }
    });



}








//CHECK IF USER EXISTS END






$(document).ready(function() {

//CLASS  PROGRAMME SEARCH SUGGESTIONS START
    var a =" ";

    $('#inputProg').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.prog') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#inputProg').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message2').hide();
                        $('#inputProg').attr('style','border:1px solid #ced4da');
                        $('#nameList').fadeIn();
                        $('#nameList').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message2').hide();
            $('#inputProg').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message2').hide();
        $('#inputProg').attr('style','border:1px solid #ced4da');

        $('#inputProg').val($(this).text());

        var inputProg=$(this).text();

        $.ajax({
            url : '{{ route("checkDegreeCourses")}}',
            type : "GET",
            data: {inputProg: inputProg},
            dataType:"html",
            success : function(data){


                if(data===""){
                    console.log('empty');

                }else {

                    // console.log(data);
                    $('#selectDiv').html(data);
                    // document.getElementById("selectDiv").html(data);



                }

            },
            error : function(data) {

            }
        });





        $('#nameList').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameList').fadeOut();
    });

    //PROGRAMME SEARCH SUGGESTIONS END



    //TEST  PROGRAMME SEARCH SUGGESTIONS START
    var a =" ";

    $('#inputProgt').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.prog') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#inputProgt').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message2t').hide();
                        $('#inputProgt').attr('style','border:1px solid #ced4da');
                        $('#nameListt').fadeIn();
                        $('#nameListt').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message2t').hide();
            $('#inputProgt').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message2t').hide();
        $('#inputProgt').attr('style','border:1px solid #ced4da');

        $('#inputProgt').val($(this).text());

        var inputProg=$(this).text();

        $.ajax({
            url : '{{ route("checkDegreeCourses")}}',
            type : "GET",
            data: {inputProg: inputProg},
            dataType:"html",
            success : function(data){


                if(data===""){
                    console.log('empty');

                }else {

                    // console.log(data);
                    $('#selectDivt').html(data);
                    // document.getElementById("selectDiv").html(data);



                }

            },
            error : function(data) {

            }
        });





        $('#nameListt').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameListt').fadeOut();
    });

    //PROGRAMME SEARCH SUGGESTIONS END






    //UE  PROGRAMME SEARCH SUGGESTIONS START
    var a =" ";

    $('#inputProgu').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.prog') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#inputProgu').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message2u').hide();
                        $('#inputProgu').attr('style','border:1px solid #ced4da');
                        $('#nameListu').fadeIn();
                        $('#nameListu').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message2u').hide();
            $('#inputProgu').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message2u').hide();
        $('#inputProgu').attr('style','border:1px solid #ced4da');

        $('#inputProgu').val($(this).text());

        var inputProg=$(this).text();

        $.ajax({
            url : '{{ route("checkDegreeCourses")}}',
            type : "GET",
            data: {inputProg: inputProg},
            dataType:"html",
            success : function(data){


                if(data===""){
                    console.log('empty');

                }else {

                    // console.log(data);
                    $('#selectDivu').html(data);
                    // document.getElementById("selectDiv").html(data);



                }

            },
            error : function(data) {

            }
        });





        $('#nameListu').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameListu').fadeOut();
    });

    //PROGRAMME SEARCH SUGGESTIONS END









//RESET ON CLOSE FOR CLASS
  $(".modal").on("hidden.bs.modal", function(){
    // $('select').prop('selectedIndex', 0);
      location.reload();
    $('#class_form').trigger("reset");
    $("#getSelection").trigger('change');
  });

  //RESET ON CLOSE FOR TEST
    $(".modal").on("hidden.bs.modal", function(){
      // $('select').prop('selectedIndex', 0);
        location.reload();
      $('#test_form').trigger("reset");
      $("#getSelectiont").trigger('change');
    });

    //RESET ON CLOSE FOR UE
      $(".modal").on("hidden.bs.modal", function(){
        // $('select').prop('selectedIndex', 0);
          location.reload();
        $('#ue_form').trigger("reset");
        $("#getSelectionu").trigger('change');
      });


//class
$("#getSelection").trigger('change');

  $('#All_courses').change(function(){
    OptionValue = document.getElementById("Option").value;
      if( $('#All_courses').prop('checked')){
        document.getElementById("coursediv").style.display = "none";
          document.getElementById("programmediv").style.display = "none";
          document.getElementById("DivCheckbox").style.display = "none";
          document.getElementById("DivCheck").style.display = "block";
          var input = document.getElementById("inputRegNo");
          input.value ="";
          document.getElementById("user_availability").innerHTML ='';
          $('#selectDiv').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProg");
          ele7.required = false;

          var ele4 = document.getElementById("inputRegNo");
          ele4.required = true;

      } else {
        document.getElementById("coursediv").style.display = "block";
      }
      });







    $('#show_all').change(function(){
        OptionValua = document.getElementById("getSelection").value;
        if(OptionValua== 2) {

            if( $('#show_all').prop('checked') ){
                document.getElementById("DivCheckRadio").style.display = "none";
                document.getElementById("DivCheck").style.display = "none";
                document.getElementById("programmediv").style.display = "block";
                var ele21 = document.getElementById("inputRegNo");
                ele21.required = false;

                document.getElementById("user_availability").innerHTML ='';
                $('#selectDiv').html(" <option>Select Course</option>");

            } else {

                var input = document.getElementById("inputRegNo");
                input.value ="";
                document.getElementById("DivCheckRadio").style.display = "block";
                document.getElementById("DivCheck").style.display = "block";
                var ele21 = document.getElementById("inputRegNo");
                ele21.required = true;
                document.getElementById("programmediv").style.display = "none";
                document.getElementById("user_availability").innerHTML ='';
                $('#selectDiv').html(" <option>Select Course</option>");
            }


        }else{

            // if( $('#show_all').prop('checked') ){
            //     document.getElementById("DivCheckRadio").style.display = "none";
            //     var input = document.getElementById("inputRegNo");
            //     input.value ="";
            //     document.getElementById("user_availability").innerHTML ='';
            //     $('#selectDiv').html(" <option>Select Course</option>");
            // } else {
            //     document.getElementById("DivCheckRadio").style.display = "block";
            //     var input = document.getElementById("inputRegNo");
            //     input.value ="";
            //     document.getElementById("user_availability").innerHTML ='';
            //     $('#selectDiv').html(" <option>Select Course</option>");
            // }

        }


    });





//Test
              $("#getSelectiont").trigger('change');

                $('#All_coursest').change(function(){
                  OptionValue = document.getElementById("Option").value;
                    if( $('#All_coursest').prop('checked')){
                      document.getElementById("coursedivt").style.display = "none";



                        var input = document.getElementById("inputRegNot");
                        input.value ="";
                        document.getElementById("user_availabilityt").innerHTML ='';
                        $('#selectDivt').html(" <option>Select Course</option>");



                    } else {
                      document.getElementById("coursedivt").style.display = "block";
                    }
                    });

                    $('#one_courset').change(function(){
                        if( $('#one_courset').prop('checked') ){
                          document.getElementById("coursedivt").style.display = "block";
                            var input = document.getElementById("inputRegNot");
                            input.value ="";
                            document.getElementById("user_availabilityt").innerHTML ='';
                            $('#selectDivt').html(" <option>Select Course</option>");

                        } else {
                          document.getElementById("coursedivt").style.display = "none";}
                        });





//UE
                            $("#getSelectionu").trigger('change');

                              $('#All_coursesu').change(function(){
                                OptionValue = document.getElementById("Option").value;
                                  if( $('#All_coursesu').prop('checked')){
                                    document.getElementById("coursedivu").style.display = "none";

                                      var input = document.getElementById("inputRegNou");
                                      input.value ="";
                                      document.getElementById("user_availabilityu").innerHTML ='';
                                      $('#selectDivu').html(" <option>Select Course</option>");

                                  } else {
                                    document.getElementById("coursedivu").style.display = "block";
                                  }
                                  });

                                  $('#one_courseu').change(function(){
                                      if( $('#one_courseu').prop('checked') ){
                                        document.getElementById("coursedivu").style.display = "block";
                                          var input = document.getElementById("inputRegNou");
                                          input.value ="";
                                          document.getElementById("user_availabilityu").innerHTML ='';
                                          $('#selectDivu').html(" <option>Select Course</option>");

                                      } else {
                                        document.getElementById("coursedivu").style.display = "none";}
                                      });






});


</script>

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
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
