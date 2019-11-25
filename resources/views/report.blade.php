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
