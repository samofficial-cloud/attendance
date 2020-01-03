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
    <a class="nav-link active" style="color:#060606"href="/report">REPORT</a>
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
<br>
<div class="container">
 <div class="row justify-content-center">
<div class="col-7 shadow-lg p-3 bg-light rounded">
  <div class="card border-light mb-3">
     <div class="card-header card text-center border-light bg-info"><b>{{ __('Fill the Form Below to Generate Report.') }}</b></div>
                <div class="card-body">

                  <form action="{{ route('report')}}" class="form-container form-horizontal" method="get">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label for="" class="col-sm-3 col-form-label"><b>For:</b></label>
                      <div class="col-sm-6">
                      <select name="category" id="getFname" onchange="SelectCheck(this)">
                        <option value="3" >One student</option>
                         <option value="1" id="Option">All students</option>
                         <option value="2">Lecturer</option>
                     </select>
                   </div>
                  </div>

                  <div id="DivCheckRadio" style="display:block;">
                    <div class="form-group row" >
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Specification:</b></label>
                      <div class="col-sm-8">
                        <input id="one_course" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                        <input id="All_courses" type="radio" name="selection" value="All courses">All courses
                      </div>
                    </div>
                  </div>

                  <div id="DivCheckbox" style="display:block;">
                    <div class="form-group row" >
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Include Invalid Attendances:</b></label>
                      <div class="col-sm-8">
                        <input id="show_all" type="checkbox" name="checkbox" value="all cases">
                      </div>
                    </div>
                  </div>

  <div id="coursediv" class="form-group row" style="display:block;">
    <label for="inputEmail3" class="col-sm-3 for_label col-form-label"><b>Course ID:</b></label>
    <div class="input_radio col-sm-6">
      <input type="text" name="course_id" class="form-control" id="inputEmail3" placeholder="Course ID">
    </div>
  </div>

<div id="DivCheck" style="display:block;">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Identification Number:</b></label>
    <div class="col-sm-6">
      <input type="text" name="reg_no" class="form-control" id="inputEmail3" placeholder="Registration number or Employee id">
    </div>
  </div>
</div>


 <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">

function SelectCheck(nameSelect){
  if(nameSelect){
      OptionValue = document.getElementById("Option").value;
      if(OptionValue == nameSelect.value){
          document.getElementById("DivCheck").style.display = "none";
          document.getElementById("DivCheckRadio").style.display = "none";
          document.getElementById("DivCheckbox").style.display = "none";

          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;
      }
      else{
          document.getElementById("DivCheck").style.display = "block";
          document.getElementById("DivCheckRadio").style.display = "block";
          document.getElementById("DivCheckbox").style.display = "block";
          document.getElementById("coursediv").style.display = "block";
          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;
      }
  }
  else{
      document.getElementById("DivCheck").style.display = "block";
      document.getElementById("DivCheckRadio").style.display = "block";
      document.getElementById("DivCheckbox").style.display = "block";
      var ele = document.getElementById("All_courses");

      ele.checked = false;
  }
}


$(document).ready(function() {

  $('#All_courses').change(function(){
    OptionValue = document.getElementById("Option").value;
      if( $('#All_courses').prop('checked')){
        document.getElementById("coursediv").style.display = "none";
          document.getElementById("DivCheckbox").style.display = "none";
      } else {
        document.getElementById("coursediv").style.display = "block";
      }
      });

      $('#one_course').change(function(){
          if( $('#one_course').prop('checked') ){
            document.getElementById("coursediv").style.display = "block";
            document.getElementById("DivCheckbox").style.display = "block";
          } else {
            document.getElementById("coursediv").style.display = "none";}
          });


          $('#show_all').change(function(){
              if( $('#show_all').prop('checked') ){
                document.getElementById("DivCheckRadio").style.display = "none";
              } else {
                document.getElementById("DivCheckRadio").style.display = "block";}
              });



});


</script>


@endsection
