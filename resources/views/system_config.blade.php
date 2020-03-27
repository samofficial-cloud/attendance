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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
   <a class="dropdown-item" style="color:#060606" href="/system_settings">SYSTEM SETTINGS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
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
<br>
<div class="container">
  <div class="row">




<div class="col-2 ">

<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">System settings</h5>

  <a data-toggle="modal" data-target="#class" class="btn styling button_color active" role="button" aria-pressed="true">Minimum required class percentage for students</a> &nbsp;
  <a data-toggle="modal" data-target="#test" class="btn styling button_color active" role="button" aria-pressed="true">Time parameters for fingerprint device</a>&nbsp;
      <a data-toggle="modal" data-target="#ue" class="btn styling button_color active" role="button" aria-pressed="true">Semester start date and academic year</a>&nbsp;<br>
      <a data-toggle="modal" data-target="#title" class="btn styling button_color active" role="button" aria-pressed="true">University name</a>&nbsp;

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
                               <input type="number" required name="minimum_percentage" oninput="validatePercentage()" autocomplete="off" class="form-control" id="inputPercentage" value="{{$minimum_percentage}}"  >
                                <p class="mt-2 p-1"  id="messagePercentage"></p>


                           </div>
                       </div>
                   </div>






 <div style="margin-left: 35.5%;"><button id="percentage_btn"  class="btn btn-primary" type="submit">Save</button>        <button type="button" style="margin-left: 5%;" class="btn btn-danger" id="btnclose" data-dismiss="modal">Cancel</button></div>

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
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label"> Class validity period:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="class_validity" required id="class_validity_input" oninput="validateClassValidityDuration()"  class="form-control" value="{{$class_validity}}" autocomplete="off" >
                              <p class="mt-2 p-1"  id="messageValidityPeriodClass"></p>
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Test validity period:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="test_validity" id="test_validity_input"  required oninput="validateTestValidityDuration()" class="form-control" value="{{$test_validity}}"  autocomplete="off" >
                              <p class="mt-2 p-1"  id="messageValidityPeriodTest"></p>
                          </div>
                      </div>


                  </div>

                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">UE validity period:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="ue_validity"  id="ue_validity_input"   oninput="validateUeValidityDuration()" required class="form-control" value="{{$ue_validity}}" autocomplete="off" >
                              <p class="mt-2 p-1"  id="messageValidityPeriodUe"></p>
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Scanning time allowance for tests:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="test_allowance" required id="allowance_tests" oninput="validateTestsAllowance()"  class="form-control" value="{{$test_allowance}}" autocomplete="off" >
                              <p class="mt-2 p-1"  id="messageAllowanceTests"></p>
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Scanning time allowance for classes:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="class_allowance" id="allowance_classes" required class="form-control" value="{{$class_allowance}}"  oninput="validateClassesAllowance()" autocomplete="off" >
                            <p class="mt-2 p-1"  id="messageAllowanceClasses"></p>
                          </div>
                      </div>


                  </div>


                  <div>
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Scanning time allowance for UE:</label>
                          <div class="input_radio col-sm-8">
                              <input type="number" name="ue_allowance" id="allowance_ue" oninput="validateUeAllowance()"  required class="form-control" value="{{$ue_allowance}}" autocomplete="off" >
  <p class="mt-2 p-1"  id="messageAllowanceUe"></p>
                          </div>
                      </div>


                  </div>



 <div style="margin-left: 35.5%;"><button id="time_btn"  class="btn btn-primary" type="submit">Save</button>        <button type="button" style="margin-left: 5%;" class="btn btn-danger" id="btnclose" data-dismiss="modal">Cancel</button></div>

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
                              <input type="text" name="academic_year" id="input_academic_year" maxlength="9" oninput="countCharacters()" required class="form-control" value="{{$academic_year}}"  autocomplete="off" >
  <p class="mt-2 p-1"  id="messageAcademicYear"></p>
                          </div>
                      </div>


                  </div>

                  <div>
                      <!-- <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Semester:</label>
                          <div class="input_radio col-sm-8">

                              <input type="text" name="semester" required class="form-control" value="{{$semester}}" autocomplete="off" >

                          </div>
                      </div> -->

                      <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label">Semester:</label>
                        <div class="col-sm-8">
                        <select name="semester" >
                          <option value="1">1</option>
                         <option value="2">2</option>
                       </select>
                      </div>
                      </div>


                  </div>



 <div style="margin-left: 35.5%;"><button id="academicSeason_btn"  class="btn btn-primary"  type="submit">Save</button>        <button type="button" style="margin-left: 5%;" class="btn btn-danger" id="btnclose" data-dismiss="modal">Cancel</button></div>

    </form>
  </div>

  </div>
  </div>
  </div>



      <div class="modal fade" id="title" role="dialog">


          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <b><h5 class="modal-title">Change University name</h5></b>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                      <form id="ue_form"  action="{{ route('change_title')}}" class="form-container form-horizontal" method="get">
                          {{csrf_field()}}
                          <div>
                              <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-4 for_label col-form-label">University name:</label>
                                  <div class="input_radio col-sm-8">
                                      <input type="text" name="title" id="university_name" required class="form-control" value="{{$title}}"  autocomplete="off" >
                                      {{--<input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">--}}
                                  </div>
                              </div>


                          </div>

 <div style="margin-left: 35.5%;"><button id="generate_btn"  class="btn btn-primary" type="submit">Save</button>        <button type="button" style="margin-left: 5%;" class="btn btn-danger" id="btnclose" data-dismiss="modal">Cancel</button></div>

                      </form>
                  </div>

              </div>
          </div>
      </div>









</div>
</div>
</div>
<div class="col-10">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
  <div class="card hero-image border-info" >
  <div class="card-body">
    <center><h1 class="card-title"><b>UNIVERSITY OF DAR ES SALAAM</b></h1></center>
    <center><h2 class="card-title"><b>COLLEGE OF ICT</b></h2></center>
      <center><h2 class="card-title"><b>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM</b></h2></center>
      <center><h2 class="card-title"><b>SYSTEM SETTINGS</b></h2></center>
    <div align="center">

   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>




</div>


</div>
</div>
</div>
</div>
</div>
@endsection



@section('pagescript')


<script type="text/javascript">
function validatePercentage(){
var percentage=document.getElementById("inputPercentage").value;
console.log(percentage);
if(percentage <=0 || percentage>100){

    document.getElementById("messagePercentage").style.backgroundColor ='#ccd8e263';
    document.getElementById("messagePercentage").style.color ='red';
    document.getElementById("messagePercentage").innerHTML ='Invalid input';
    document.getElementById("percentage_btn").disabled=true;


}

else{
    document.getElementById("messagePercentage").innerHTML ='';
    document.getElementById("percentage_btn").disabled=false;
    document.getElementById("messagePercentage").style.backgroundColor ='';
}

}



function validateClassValidityDuration(){
    var value=document.getElementById("class_validity_input").value;

    if(value <=0 || value>30){

        document.getElementById("messageValidityPeriodClass").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageValidityPeriodClass").style.color ='red';
        document.getElementById("messageValidityPeriodClass").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageValidityPeriodClass").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageValidityPeriodClass").style.backgroundColor ='';
    }

}


function validateTestValidityDuration(){
    var value=document.getElementById("test_validity_input").value;

    if(value <=0 || value>30){

        document.getElementById("messageValidityPeriodTest").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageValidityPeriodTest").style.color ='red';
        document.getElementById("messageValidityPeriodTest").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageValidityPeriodTest").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageValidityPeriodTest").style.backgroundColor ='';
    }

}



function validateUeValidityDuration(){
    var value=document.getElementById("ue_validity_input").value;

    if(value <=0 || value>30){

        document.getElementById("messageValidityPeriodUe").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageValidityPeriodUe").style.color ='red';
        document.getElementById("messageValidityPeriodUe").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageValidityPeriodUe").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageValidityPeriodUe").style.backgroundColor ='';
    }

}



function validateClassesAllowance(){
    var value=document.getElementById("allowance_classes").value;

    if(value <=0 || value>30){

        document.getElementById("messageAllowanceClasses").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageAllowanceClasses").style.color ='red';
        document.getElementById("messageAllowanceClasses").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageAllowanceClasses").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageAllowanceClasses").style.backgroundColor ='';
    }

}


function validateTestsAllowance(){
    var value=document.getElementById("allowance_tests").value;

    if(value <=0 || value>30){

        document.getElementById("messageAllowanceTests").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageAllowanceTests").style.color ='red';
        document.getElementById("messageAllowanceTests").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageAllowanceTests").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageAllowanceTests").style.backgroundColor ='';
    }

}


function validateUeAllowance(){
    var value=document.getElementById("allowance_ue").value;

    if(value <=0 || value>30){

        document.getElementById("messageAllowanceUe").style.backgroundColor ='#ccd8e263';
        document.getElementById("messageAllowanceUe").style.color ='red';
        document.getElementById("messageAllowanceUe").innerHTML ='Invalid input';
        document.getElementById("time_btn").disabled=true;


    }

    else{
        document.getElementById("messageAllowanceUe").innerHTML ='';
        document.getElementById("time_btn").disabled=false;
        document.getElementById("messageAllowanceUe").style.backgroundColor ='';
    }

}






</script>



<script>

window.onload = function() {
 const myInput = document.getElementById('input_academic_year');
 myInput.onpaste = function(e) {
   e.preventDefault();
 }
}




function countCharacters() {
  var myInput = document.getElementById('input_academic_year');
if(myInput.length===9){

  document.getElementById("academicSeason_btn").disabled=false;


}else{

  document.getElementById("academicSeason_btn").disabled=true;



}

}


    $(document).ready(function() {



      //Put our input DOM element into a jQuery Object
      var $input = jQuery('input[name="academic_year"]');

      //Bind keyup/keydown to the input
      $input.bind('keyup','keydown', function(e){

        //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
      	if(e.which !== 8) {
          var value=$input.val();

          if(value.charAt(0)==0 ||value.charAt(0)==1){

              document.getElementById("messageAcademicYear").style.backgroundColor ='#ccd8e263';
              document.getElementById("messageAcademicYear").style.color ='red';
              document.getElementById("messageAcademicYear").innerHTML ='Invalid input';
              document.getElementById("academicSeason_btn").disabled=true;


          }

          else{
              document.getElementById("messageAcademicYear").innerHTML ='';
              document.getElementById("academicSeason_btn").disabled=false;
              document.getElementById("messageAcademicYear").style.backgroundColor ='';

              if(value.length===4){
          document.getElementById("input_academic_year").value =value+'/';
              }

if(value.length<9){
  // document.getElementById("messageAcademicYear").style.backgroundColor ='#ccd8e263';
  // document.getElementById("messageAcademicYear").style.color ='red';
  // document.getElementById("messageAcademicYear").innerHTML ='Invalid input';
  document.getElementById("academicSeason_btn").disabled=true;

}


if(value.length===9){

  var value2=$input.val();
  var small=Number(value2.slice(0, 4));
  var big=Number(value2.slice(-4));
  var difference=big-small;


  if (difference===1){

    document.getElementById("messageAcademicYear").innerHTML ='';
    document.getElementById("academicSeason_btn").disabled=false;
    document.getElementById("messageAcademicYear").style.backgroundColor ='';


  }
  else {

    document.getElementById("messageAcademicYear").style.backgroundColor ='#ccd8e263';
    document.getElementById("messageAcademicYear").style.color ='red';
    document.getElementById("messageAcademicYear").innerHTML ='Invalid input';
    document.getElementById("academicSeason_btn").disabled=true;


  }

}


          }




        }
      });

    




    $('#university_name').filter_input({
      regex:'[a-zA-Z ]',
      events:'keypress paste'
    });


    $(".modal").on("hidden.bs.modal", function(){
        // $('select').prop('selectedIndex', 0);
        location.reload();

    });

    });

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
