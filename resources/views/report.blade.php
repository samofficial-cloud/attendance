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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
@php
  use App\camis_configuration;
$camistitle=camis_configuration::select('camis_title')->value('camis_title');
@endphp
<br>
<br>
<div class="container">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Type of Report</h5>

  <a data-toggle="modal" data-target="#class" class="btn styling button_color active" role="button" aria-pressed="true">Class attendance reports</a> &nbsp;
  <a data-toggle="modal" data-target="#test" class="btn styling button_color active" role="button" aria-pressed="true">Test attendance reports</a>&nbsp;
  <a data-toggle="modal" data-target="#ue" class="btn styling button_color active" role="button" aria-pressed="true">UE attendance reports</a>&nbsp;

<!-- Classes -->
   <div class="modal fade" id="class" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Class Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('report')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row">
                   <label for="" class="col-sm-4 col-form-label">For:</label>
                   <div class="col-sm-8">
                   <select name="category" id="getSelection" onchange="SelectCheck(this)">

                     <option value="3" id="Option" >One student</option>
                    <option value="1" id="Option">All students</option>
                      <option value="2" id="Option">Lecturer</option>
                  </select>
                </div>
               </div>


               <div id="DivCheckRadio" style="display:block;">
                 <div class="form-group row" >
                   <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                   <div class="col-sm-8">
                     <input id="one_course" class="italian" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                     <input id="All_courses" type="radio" name="selection" value="All courses">All courses
                   </div>
                 </div>
               </div>


                   <div id="DivCheckbox" style="display:none;">
                       <div class="form-group row" >
                           <label for="inputEmail3" class="col-sm-4 col-form-label">Show detailed information of the attendances:</label>
                           <div class="col-sm-8">
                               <input id="show_all" type="checkbox" name="checkbox" value="all cases">
                           </div>
                       </div>
                   </div>



                   <div id="DivCheck" style="display:block;">
                       <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-4 col-form-label">Name:</label>
                           <div class="col-sm-8">
                               <input type="text" name="input_name" class="form-control" id="input_name"  autocomplete="off"  placeholder="">
                               <div id="nameList"></div>


                           </div>
                       </div>

                       <span id="message3"></span>
                   </div>


                   {{--<div id="DivCheckStaff" style="display:none;">--}}
                       {{--<div class="form-group row">--}}
                           {{--<label for="inputEmail3" class="col-sm-4 col-form-label">Employee Id:</label>--}}
                           {{--<div class="col-sm-8">--}}
                               {{--<input type="text" name="input_name" class="form-control" id="inputRegNoStaff"   oninput="checkUser();"  placeholder="Employee id">--}}
                               {{--<p class="pt-1 " id="user_availability"></p>--}}


                           {{--</div>--}}
                       {{--</div>--}}
                   {{--</div>--}}


                   <div id="programmediv"  style="display:none;">
                       <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Programme <span style="display: none;" id="staff_programme">(in which the course belongs)</span></label>
                           <div class="input_radio col-sm-8">

                               <input type="text" name="prog" class="form-control" id="inputProg"  autocomplete="off" placeholder="In short form like CEIT4,TE1 etc">
                               <div id="nameListP"></div>

                           </div>
                       </div>
                       <span id="message2"></span>

                   </div>






     <div id="coursediv"  style="display:block;">
      <div class="form-group row">
     <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
     <div class="input_radio col-sm-8">

         <select class="form-control" name="course_id" id="selectDiv">


         </select>
     {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
     </div>
   </div>
     </div>




     <center><button id="generate_btn"  class="btn btn-primary" type="submit">Generate Report</button></center>
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
           <b><h5 class="modal-title">Fill the Form Below to Generate Tests Report</h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="test_form"  action="{{ route('report_tests')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}
                <div class="form-group row">
                  <label for="" class="col-sm-4 col-form-label">For:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelectiont" onchange="SelectCheckTest(this)">

                    <option value="3" id="Option" >One student</option>
                     <option value="1" id="Option">All students</option>
                 </select>
               </div>
              </div>

              <div id="DivCheckRadiot" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                  <div class="col-sm-8">
                    <input id="one_courset" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                    <input id="All_coursest" type="radio" name="selection" value="All courses">All courses

                  </div>
                </div>
              </div>


                  <div id="DivCheckt" style="display:block;">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Student's name:</label>
                          <div class="col-sm-8">
                              <input type="text" name="input_name" class="form-control"  autocomplete="off"    id="input_namet" placeholder="Name of the student">
                              <div id="nameListt"></div>
                          </div>

                      </div>
                      <span id="message3t"></span>
                  </div>


                  <div id="programmedivt"  style="display:none;">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Programme:</label>
                          <div class="input_radio col-sm-8">

                              <input type="text"  class="form-control" id="inputProgt"  autocomplete="off" placeholder="Programme in short form like CEIT4,TE1 etc">
                              <div id="nameListtP"></div>
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>
                      <span id="message2t"></span>

                  </div>


    <div id="coursedivt" style="display:block;">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
    <div class="input_radio col-sm-8">
        <select class="form-control" name="course_id" id="selectDivt">


        </select>
    </div>
  </div>
    </div>




    <center><button id="generate_btnt"  class="btn btn-primary" type="submit">Generate Report</button></center>
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
           <b><h5 class="modal-title">Fill the Form Below to Generate Examinations Report</h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="ue_form"  action="{{ route('report_ue')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}
                <div class="form-group row">
                  <label for="" class="col-sm-4 col-form-label">For:</label>
                  <div class="col-sm-8">
                  <select name="category" id="getSelectionu" onchange="SelectCheckUe(this)">

                    <option value="3" id="Option" >One student</option>
                     <option value="1" id="Option">All students</option>
                 </select>
               </div>
              </div>

              <div id="DivCheckRadiou" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                  <div class="col-sm-8">
                    <input id="one_courseu" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                    <input id="All_coursesu" type="radio" name="selection" value="All courses">All courses
                  </div>
                </div>
              </div>



                  <div id="DivChecku" style="display:block;">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label">Student's name:</label>
                          <div class="col-sm-8">
                              <input type="text" name="input_name" class="form-control"  autocomplete="off"  id="input_nameu" placeholder="Name of the student">
                              <div id="nameListu"></div>
                          </div>

                      </div>
                      <span id="message3u"></span>

                  </div>

                  <div id="programmedivu"  style="display:none;">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Programme:</label>
                          <div class="input_radio col-sm-8">

                              <input type="text"  class="form-control" id="inputProgu"  autocomplete="off" placeholder="Programme in short form like CEIT4,TE1 etc">
                              <div id="nameListuP"></div>
                              {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                          </div>
                      </div>
                      <span id="message2u"></span>

                  </div>

    <div id="coursedivu"  style="display:block;">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
    <div class="input_radio col-sm-8">
        <select class="form-control" name="course_id" id="selectDivu">


        </select>
    </div>
  </div>
    </div>




    <center><button id="generate_btnu"  class="btn btn-primary" type="submit">Generate Report</button></center>
    </form>
  </div>

  </div>
  </div>
  </div>


</div>
</div>
</div>
<div class="col-10">

  <div class="card hero-image border-info" >
  <div class="card-body">
    <center><h1 class="card-title"><b>{{$camistitle}}</b></h1>
      <h2><b>COLLEGE OF ICT</b></h2></center>
    
    <div align="center">

   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>

    <h2 class="card-title"><b>ATTENDANCE REPORTS GENERATION PORTAL</b></h2>


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

          var input11 = document.getElementById("input_name");
          input11.value ="";

          var ele7 = document.getElementById("inputProg");
          ele7.required = true;


          var ele4 = document.getElementById("input_name");
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

          var ele4 = document.getElementById("input_name");
          ele4.required = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;

          $('#one_course').change(function(){
              if( $('#one_course').prop('checked') ){
                  document.getElementById("coursediv").style.display = "block";
                  document.getElementById("DivCheckbox").style.display = "block";
                  document.getElementById("programmediv").style.display = "none";
                  document.getElementById("DivCheck").style.display = "block";
                  var input = document.getElementById("input_name");
                  input.value ="";




                  $('#selectDiv').html("<option>Select Course</option>");
              } else {
                  document.getElementById("coursediv").style.display = "none";
                  // var ele7 = document.getElementById("inputProg");
                  // ele7.required = false;
                  //
                  // var ele4 = document.getElementById("input_name");
                  // ele4.required = true;

              }
          });



        // document.getElementById("coursediv").style.display = "block";
          document.getElementById("generate_btn").disabled = false;
          $('#selectDiv').html(" <option>Select Course</option>");
          var input = document.getElementById("input_name");
          input.value ="";








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
          var input = document.getElementById("input_name");
          input.value ="";


          var ele2 = document.getElementById("show_all");
          ele2.checked = false;




          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele7 = document.getElementById("inputProg");
          ele7.required = false;

          var ele4 = document.getElementById("input_name");
          ele4.required = true;


          $('#one_course').change(function(){
              if( $('#one_course').prop('checked') ){
                  document.getElementById("coursediv").style.display = "block";

                  var input = document.getElementById("input_name");
                  input.value ="";

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



          var ele4 = document.getElementById("input_namet");
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

          $('#selectDivt').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgt");
          ele7.required = false;

          var input = document.getElementById("input_namet");
          input.value ="";

        var ele4 = document.getElementById("input_namet");
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

          $('#selectDivt').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgt");
          ele7.required = false;




          var input = document.getElementById("input_namet");
          input.value ="";

          var ele4 = document.getElementById("input_namet");
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

          var ele4 = document.getElementById("input_nameu");
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

          $('#selectDivu').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProgu");
          ele7.required = false;

          var input = document.getElementById("input_nameu");
          input.value ="";

        var ele4 = document.getElementById("input_nameu");
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


          var input = document.getElementById("input_nameu");
          input.value ="";

          var ele4 = document.getElementById("input_nameu");
          ele4.required = true;

      }


}

//CLASS CHECK IF USER EXISTS START
{{--function checkUser() {--}}

    {{--var input_name=document.getElementById('input_name').value;--}}

    {{--$.ajax({--}}
        {{--url : '{{ route("check_user")}}',--}}
        {{--type : "GET",--}}
        {{--data: {input_name: input_name},--}}
        {{--success : function(data){--}}
            {{--if(data===""){--}}

                {{--document.getElementById('user_availability').style.color = 'red';--}}
                {{--document.getElementById("user_availability").innerHTML ='User does not exist';--}}
                {{--document.getElementById("user_availability").className += "status_back";--}}
                {{--document.getElementById("selectDiv").disabled = true;--}}
                {{--document.getElementById("generate_btn").disabled = true;--}}


            {{--}else {--}}

                {{--document.getElementById('user_availability').style.color = 'green';--}}
                {{--document.getElementById("user_availability").className += "status_back";--}}
                {{--document.getElementById("user_availability").innerHTML =data;--}}
                {{--document.getElementById("selectDiv").disabled = false;--}}
                {{--document.getElementById("generate_btn").disabled = false;--}}

            {{--}--}}

        {{--},--}}
        {{--error : function(data) {--}}

        {{--}--}}
    {{--});--}}


    {{--$.ajax({--}}
        {{--url : '{{ route("check_course")}}',--}}
        {{--type : "GET",--}}
        {{--data: {input_name: input_name},--}}
        {{--dataType:"html",--}}
        {{--success : function(data){--}}


            {{--if(data===""){--}}


            {{--}else {--}}


                {{--$('#selectDiv').html(data);--}}
                {{--// document.getElementById("selectDiv").html(data);--}}
                {{--// console.log(data);--}}


            {{--}--}}

        {{--},--}}
        {{--error : function(data) {--}}

        {{--}--}}
    {{--});--}}



{{--}--}}








//CHECK IF USER EXISTS END



//TEST CHECK IF USER EXISTS START
function checkUsert() {

    var inputRegNo=document.getElementById('input_namet').value;

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

    var inputRegNo=document.getElementById('input_nameu').value;

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

    //CLASS  NAME SEARCH SUGGESTIONS START
    var a =" ";

    $('#input_name').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.name') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#input_name').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message3').hide();
                        $('#input_name').attr('style','border:1px solid #ced4da');
                        $('#nameList').fadeIn();
                        $('#nameList').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message3').hide();
            $('#input_name').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message3').hide();
        $('#input_name').attr('style','border:1px solid #ced4da');

        $('#input_name').val($(this).text());

        var input_name=$(this).text();

        $.ajax({
            url : '{{ route("check_course")}}',
            type : "GET",
            data: {input_name: input_name},
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


    //CLASS NAME SEARCH SUGGESTIONS END




    //TEST  NAME SEARCH SUGGESTIONS START
    var a =" ";

    $('#input_namet').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.name') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#input_namet').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message3t').hide();
                        $('#input_namet').attr('style','border:1px solid #ced4da');
                        $('#nameListt').fadeIn();
                        $('#nameListt').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message3t').hide();
            $('#input_namet').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message3t').hide();
        $('#input_namet').attr('style','border:1px solid #ced4da');

        $('#input_namet').val($(this).text());

        var input_name=$(this).text();

        $.ajax({
            url : '{{ route("check_course")}}',
            type : "GET",
            data: {input_name: input_name},
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



    //TEST NAME SEARCH SUGGESTIONS END




    //UE  NAME SEARCH SUGGESTIONS START
    var a =" ";

    $('#input_nameu').keyup(function(e){
        e.preventDefault();
        var query = $(this).val();
        if(query != '')
        {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{ route('autocomplete.name') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    if(data=='0'){
                        $('#input_nameu').attr('style','border:1px solid #f00');
                        a = '0';
                    }
                    else{
                        a ='1';
                        $('#message3u').hide();
                        $('#input_nameu').attr('style','border:1px solid #ced4da');
                        $('#nameListu').fadeIn();
                        $('#nameListu').html(data);
                    }
                }
            });
        }
        else if(query==''){
            a ='1';
            $('#message3u').hide();
            $('#input_nameu').attr('style','border:1px solid #ced4da');
        }
    });
    $(document).on('click', '#list', function(){

        a ='1';
        $('#message3u').hide();
        $('#input_nameu').attr('style','border:1px solid #ced4da');

        $('#input_nameu').val($(this).text());

        var input_name=$(this).text();

        $.ajax({
            url : '{{ route("check_course")}}',
            type : "GET",
            data: {input_name: input_name},
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



    //TEST NAME SEARCH SUGGESTIONS END





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
                        $('#nameListP').fadeIn();
                        $('#nameListP').html(data);
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





        $('#nameListP').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameListP').fadeOut();
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
                        $('#nameListtP').fadeIn();
                        $('#nameListtP').html(data);
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





        $('#nameListtP').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameListtP').fadeOut();
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
                        $('#nameListuP').fadeIn();
                        $('#nameListuP').html(data);
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





        $('#nameListuP').fadeOut();
    });

    $(document).on('click', 'form', function(){
        $('#nameListuP').fadeOut();
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
          var input = document.getElementById("input_name");
          input.value ="";

          $('#selectDiv').html(" <option>Select Course</option>");

          var ele7 = document.getElementById("inputProg");
          ele7.required = false;

          var ele4 = document.getElementById("input_name");
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
                var ele21 = document.getElementById("input_name");
                ele21.required = false;


                $('#selectDiv').html(" <option>Select Course</option>");

            } else {

                var input = document.getElementById("input_name");
                input.value ="";
                document.getElementById("DivCheckRadio").style.display = "block";
                document.getElementById("DivCheck").style.display = "block";
                var ele21 = document.getElementById("input_name");
                ele21.required = true;
                document.getElementById("programmediv").style.display = "none";

                $('#selectDiv').html(" <option>Select Course</option>");
            }


        }else{

            // if( $('#show_all').prop('checked') ){
            //     document.getElementById("DivCheckRadio").style.display = "none";
            //     var input = document.getElementById("input_name");
            //     input.value ="";
            //     document.getElementById("user_availability").innerHTML ='';
            //     $('#selectDiv').html(" <option>Select Course</option>");
            // } else {
            //     document.getElementById("DivCheckRadio").style.display = "block";
            //     var input = document.getElementById("input_name");
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



                        var input = document.getElementById("input_namet");
                        input.value ="";

                        $('#selectDivt').html(" <option>Select Course</option>");



                    } else {
                      document.getElementById("coursedivt").style.display = "block";
                    }
                    });

                    $('#one_courset').change(function(){
                        if( $('#one_courset').prop('checked') ){
                          document.getElementById("coursedivt").style.display = "block";
                            var input = document.getElementById("input_namet");
                            input.value ="";

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

                                      var input = document.getElementById("input_nameu");
                                      input.value ="";

                                      $('#selectDivu').html(" <option>Select Course</option>");

                                  } else {
                                    document.getElementById("coursedivu").style.display = "block";
                                  }
                                  });

                                  $('#one_courseu').change(function(){
                                      if( $('#one_courseu').prop('checked') ){
                                        document.getElementById("coursedivu").style.display = "block";
                                          var input = document.getElementById("input_nameu");
                                          input.value ="";

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
