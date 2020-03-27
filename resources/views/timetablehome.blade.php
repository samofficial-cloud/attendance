<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    
</head>
@php
use App\camis_configuration;
$camistitle=camis_configuration::select('camis_title')->value('camis_title');
$academicyear=camis_configuration::select('current_academic_year')->value('current_academic_year');
  $semester=camis_configuration::select('current_semester')->value('current_semester');
@endphp
<body>
    <div class="hero-image" align="center" style="height:484px">
    	<br>
      <h1 style="text-align: center;"><b>{{$camistitle}}</b></h1>
    <h2 style="text-align: center;"><b>COLLEGE OF ICT</b></h2>
    
   <div><img src="img/logo_udsm.jpg" height="200px" width="170px"></div>
    <br>
    <h1 >SEMESTER {{$semester}} {{$academicyear}}</h1>
    <h1><b>TIMETABLE</b></h1>
</div>
</body>
</html>