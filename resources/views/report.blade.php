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
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
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
                  <form>
                    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Course ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Course ID" required>
    </div>
  </div>

 <!--  ******************* -->
 <!-- <fieldset class="form-group"> -->
    <div class="form-group row">
      <legend class="col-form-label col-sm-5 pt-0">For:</legend>

      
  <!-- <div class="form-row align-items-center col-sm-7">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose..</option>
        <option value="1">Student</option>
        <option value="2">Lecturer</option>
      </select>
    </div>
  </div> -->
  <head>
   
    <script src=
"https://code.jquery.com/jquery-1.12.4.min.js">
    </script>
    <style type="text/css">
        .select {
            color: #fff;
            padding: 30px;
            margin-top: 30px;
            width: 100%;
            background: green
        }
       
       /* label {
            margin-right: 20px;
        }*/
    </style>
</head>

<div>
  
            <label>
                <input type="radio" name="colorCheckbox"
                    value="D"> Lecturer </label>
           
        

         <div>
            <label>
                <input type="radio" name="colorCheckbox"
                    value="E">Student </label>
           
        </div>
        <div>
            <label>
                <input type="radio" name="colorCheckbox"
                    value="C"> All Students </label>
           
        </div>


</div>

 <div class="D">


        <div class="C">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-5 col-form-label">Registration No:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Registration No">
    </div>
  </div>
  </div>

  </div>


</div>



   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">From:</legend>

      
  <div class="form-row align-items-center col-sm-4">
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
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
</fieldset>
 <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
</form>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
            $(document).ready(function() {
                $('input[type="radio"]').click(function() {
                    var inputValue = $(this).attr("value");
                    $("." + inputValue).toggle();

                });
            });
        </script>


@endsection