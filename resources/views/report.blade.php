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
</ul>

</div>
</nav>
</div>
<br>
<div class="container">
 <div class="row justify-content-center">
<div class="col-md-5 shadow-lg p-3 bg-light rounded">
  <div class="card border-light mb-3">
     <div class="card-header card text-center border-light bg-info"><b>{{ __('Fill the Form Below to Generate Report.') }}</b></div>
                <div class="card-body">

                  <form action="{{ route('report')}}" class="form-container form-horizontal" method="get">
                    {{csrf_field()}}
                    <div class="form-group row">
                      <label for="" class="col-sm-4 col-form-label">For:</label>
                      <select name="category" id="getFname" onchange="SelectCheck(this)">
                        <option value="2" >One student</option>
                         <option value="1" id="Option">All students</option>
                         <option value="2">Lecturer</option>
                     </select>
                  </div>



  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Course ID:</label>
    <div class="col-sm-8">
      <input type="text" name="course_id" class="form-control" id="inputEmail3" placeholder="Course ID" required>
    </div>
  </div>

<div id="DivCheck" style="display:block;">
  <div class="form-group row" >
    <label for="inputEmail3" class="col-sm-4 col-form-label">Identification Number:</label>
    <div class="col-sm-8">
      <input type="text" name="reg_no" class="form-control" id="inputEmail3" placeholder="Registration number or Employee id">
    </div>
  </div>
</div>



<div class="row">
      <legend class="col-form-label col-sm-2 pt-0">From:</legend>

  <div class="form-row align-items-center col-sm-4">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select name="week_no" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Wk...</option>
        <option value="1">wk1</option>
        <option value="2">wk2</option>
        <option value="3">wk3</option>
        <option value="4">wk4</option>
        <option value="5">wk5</option>
        <option value="6">wk6</option>
        <option value="7">wk7</option>
        <option value="8">wk8</option>
        <option value="9">wk9</option>
        <option value="10">wk10</option>
        <option value="11">wk11</option>
        <option value="12">wk12</option>
        <option value="13">wk13</option>
        <option value="14">wk14</option>
        <option value="15">wk15</option>
      </select>
    </div>
  </div>
  <legend class="col-form-label col-sm-2 pt-0">To:</legend>
  <div class="form-row align-items-center col-sm-4">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select name="week_no_2" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Wk...</option>
        <option value="1">wk1</option>
        <option value="2">wk2</option>
        <option value="3">wk3</option>
        <option value="4">wk4</option>
        <option value="5">wk5</option>
        <option value="6">wk6</option>
        <option value="7">wk7</option>
        <option value="8">wk8</option>
        <option value="9">wk9</option>
        <option value="10">wk10</option>
        <option value="11">wk11</option>
        <option value="12">wk12</option>
        <option value="13">wk13</option>
        <option value="14">wk14</option>
        <option value="15">wk15</option>
      </select>
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
      }
      else{
          document.getElementById("DivCheck").style.display = "block";
      }
  }
  else{
      document.getElementById("DivCheck").style.display = "block";
  }
}
</script>


@endsection
