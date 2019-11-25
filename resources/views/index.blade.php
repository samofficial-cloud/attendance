@extends('layouts.app')

@section('title')
  HOME
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
   <a class="nav-link active" style="color:#060606"href="/">HOME</a>
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
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
</ul>

</div>
</nav>
</div>

<br>
<div class="container">
  <div class="row">

    <div class="flex_container">
      <div style="flex-grow: 1" class="card shadow-sm p-4 mb-4 bg-white  flex_container_div">
        <div class="flex_container_inside">

          <div class="heading"><h3>TIMETABLE</h3></div>
          <div class="content">
            <p>This is the localized timetable for the college. Here you can view timetable for the college venue-wise that is for each venue you will get to see different courses or events and their timings arranged in a weekly manner.</p>

          </div>
          <div class="photo"><img class="image_size" src="{{ asset('img/timetable.png') }}"></img></div>
          <div class="down_bar"><center><button class="btn btn-primary" onclick="location.href='/timetable';" type="button">View timetable</button></center></div>

        </div>

      </div>


      <div style="flex-grow: 1" class="card shadow-sm p-4 mb-4 bg-white  flex_container_div">
        <div class="flex_container_inside">

          <div class="heading"><h3>VENUE RESERVATION</h3></div>
          <div class="content">
            <p>Here is where you can reserve a room for a particular event, meeting or class. In the process of reserving a room you will have to specify your particulars, date, time and state the purpose of your reservation.  </p>

          </div>
          <div class="photo"><img class="image_size" src="{{ asset('img/venue.png') }}"></img></div>
          <div class="down_bar"><center><button class="btn btn-primary" onclick="location.href='/venue';" type="button">Reserve Venue</button></center></div>

        </div>

      </div>



      <div style="flex-grow: 2" class="card shadow-sm p-4 mb-4 bg-white  flex_container_wide_div">

        <div class="flex_container_inside">

          <div class="heading"><h3>ATTENDANCE REPORT</h3></div>
          <div class="content">
            <p>Here is where attendance reports for both students and lecturers can be requested for each and every course. Also there is an option for generating students' attendance reports for tests and examinations.  </p>

          </div>
          
          <div class="photo"><img class="image_size_wide" src="{{ asset('img/report.png') }}"></img></div>
          <div class="down_bar"><center><button class="btn btn-primary" onclick="location.href='/report';" type="button">Generate Report</button></center></div>

        </div>
      </div>






    </div>
  </div>
</div>



@endsection
