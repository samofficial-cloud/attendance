<html>
<head>
	<title>Report</title>
</head>
<style>
table {
  border-collapse: collapse;
   width: 100%;
}

table, td, th {
  border: 1px solid black;
}
table {
  counter-reset: tableCount;
  }

  .counterCell:before {
  content: counter(tableCount);
  counter-increment: tableCount;
  }
</style>

<body>
  <?php

  use App\timetable;
  $timetabled1 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled2 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled3 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled4 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled5 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled6 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled7 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled8 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled9 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled10 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabledC = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabledA = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabledB = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Monday')
       ->where('timetables.fromTime','19:00')
       ->get();
  

  $timetabled11 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled12 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled13 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled14 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled15 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled16 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled17 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled18 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled19 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled110 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled111 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled112 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled113 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Tuesday')
       ->where('timetables.fromTime','19:00')
       ->get();



       $timetabled21 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled22 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled23 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled24 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled25 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled26 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled27 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled28 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled29 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled210 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled211 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled212 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled213 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Wednesday')
       ->where('timetables.fromTime','19:00')
       ->get();



       $timetabled31 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled32 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled33 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled34 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled35 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled36 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled37 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled38 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled39 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled310 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled311 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled312 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled313 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Thursday')
       ->where('timetables.fromTime','19:00')
       ->get();


       $timetabled41 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','07:00')
       ->get();
  $timetabled42 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','08:00')
       ->get();
       $timetabled43 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','09:00')
       ->get();
       $timetabled44 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','10:00')
       ->get();
       $timetabled45 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','11:00')
       ->get();
       $timetabled46 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','12:00')
       ->get();
       $timetabled47 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','13:00')
       ->get();
       $timetabled48 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','14:00')
       ->get();
       $timetabled49 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','15:00')
       ->get();
       $timetabled410 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','16:00')
       ->get();
       $timetabled411 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','17:00')
       ->get();
       $timetabled412= timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','18:00')
       ->get();
       $timetabled413 = timetable::select ('timetables.course', 'timetables.venue', 'timetables.criteria')
      ->join('courses','timetables.course','LIKE', DB::RAW("'%'+dbo.courses.course+'%'"))
       ->where ('courses.program' ,$_GET['rid'])
       ->where ('courses.semester' ,'1')
       ->where('timetables.day','Friday')
       ->where('timetables.fromTime','19:00')
       ->get();


       Use App\program;
       $full= program::select('full')->where('initial',$_GET['rid'])->value('full');


  ?> 

  <div class="card hero-image border-info">
  <div class="card-body">

    {{-- <h5 class="card-title"><b>PROGRAM:{{$full}}</b></h5> --}}
    
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      
    </b></center>
<div style="color: #29234a"><H3><CENTER>{{$full}} Timetable</CENTER></H3></div>
<table border="4" cellspacing="3" align="center" id="tid">
<tr style="background-color:#afbbc5">
<th align="center"></th>
 <th>7:00-8:00</th>
 <th>8:00-9:00</th>
 <th>9:00-10:00</th>
 <th>10:00-11:00</th>
 <th>11:00-12:00</th>
 <th>12:00-13:00</th>
 <th>13:00-14:00</th>
 <th>14:00-15:00</th>
 <th>15:00-16:00</th>
   <th>16:00-17:00</th>
     <th>17:00-18:00</th>
       <th>18:00-19:00</th>
         <th>19:00-20:00</th>
</tr>


<tr align="center">

 <th  style="background-color:#f79d45">M<br>O<br>N</th>
@if(count($timetabled1)==0)
<td></td>
@else
  @foreach ($timetabled1 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled2)==0)
<td></td>
@else
  @foreach ($timetabled2 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled3)==0)
<td></td>
@else
  @foreach ($timetabled3 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled4)==0)
<td></td>
@else
  @foreach ($timetabled4 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif



  @if(count($timetabled5)==0)
<td></td>
@else
  @foreach ($timetabled5 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled6)==0)
<td></td>
@else
 @foreach ($timetabled6 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled7)==0)
<td></td>
@else
  @foreach ($timetabled7 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled8)==0)
<td></td>
@else
  @foreach ($timetabled8 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled9)==0)
<td></td>
@else
  @foreach ($timetabled9 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabled10)==0)
<td></td>
@else
  @foreach ($timetabled10 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabledC)==0)
<td></td>
@else
  @foreach ($timetabledC as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif


@if(count($timetabledA)==0)
<td></td>
@else
  @foreach ($timetabledA as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabledB)==0)
<td></td>
@else
  @foreach ($timetabledB as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>

<tr align="center">

 <th style="background-color:#88eab2">T<br>U<br>E</th>
@if(count($timetabled11)==0)
<td></td>
@else
  @foreach ($timetabled11 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled12)==0)
<td></td>
@else
  @foreach ($timetabled12 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled13)==0)
<td></td>
@else
  @foreach ($timetabled13 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled14)==0)
<td></td>
@else
  @foreach ($timetabled14 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled15)==0)
<td></td>
@else
  @foreach ($timetabled15 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled16)==0)
<td></td>
@else
  @foreach ($timetabled16 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled17)==0)
<td></td>
@else
  @foreach ($timetabled17 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled18)==0)
<td></td>
@else
  @foreach ($timetabled18 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled19)==0)
<td></td>
@else
  @foreach ($timetabled19 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled110)==0)
<td></td>
@else
  @foreach ($timetabled110 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled111)==0)
<td></td>
@else
  @foreach ($timetabled111 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled112)==0)
<td></td>
@else
  @foreach ($timetabled112 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled113)==0)
<td></td>
@else
  @foreach ($timetabled113 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>

<tr align="center">

 <th style="background-color:#ef6c68">W<br>E<br>D</th>
@if(count($timetabled21)==0)
<td></td>
@else
  @foreach ($timetabled21 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled22)==0)
<td></td>
@else
  @foreach ($timetabled22 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled23)==0)
<td></td>
@else
  @foreach ($timetabled23 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled24)==0)
<td></td>
@else
  @foreach ($timetabled24 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled25)==0)
<td></td>
@else
  @foreach ($timetabled25 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled26)==0)
<td></td>
@else
  @foreach ($timetabled26 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled27)==0)
<td></td>
@else
  @foreach ($timetabled27 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled28)==0)
<td></td>
@else
  @foreach ($timetabled28 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled29)==0)
<td></td>
@else
  @foreach ($timetabled29 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled210)==0)
<td></td>
@else
  @foreach ($timetabled210 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled211)==0)
<td></td>
@else
  @foreach ($timetabled211 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled212)==0)
<td></td>
@else
  @foreach ($timetabled212 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled213)==0)
<td></td>
@else
  @foreach ($timetabled213 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>


<tr align="center">

 <th style="background-color:#b5f66d">T<br>H<br>U<br>R</th>
@if(count($timetabled31)==0)
<td></td>
@else
  @foreach ($timetabled31 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled32)==0)
<td></td>
@else
  @foreach ($timetabled32 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled33)==0)
<td></td>
@else
  @foreach ($timetabled33 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled34)==0)
<td></td>
@else
  @foreach ($timetabled34 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled35)==0)
<td></td>
@else
  @foreach ($timetabled35 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled36)==0)
<td></td>
@else
  @foreach ($timetabled36 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled37)==0)
<td></td>
@else
  @foreach ($timetabled37 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled38)==0)
<td></td>
@else
  @foreach ($timetabled38 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled39)==0)
<td></td>
@else
  @foreach ($timetabled39 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled310)==0)
<td></td>
@else
  @foreach ($timetabled310 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled311)==0)
<td></td>
@else
  @foreach ($timetabled311 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled312)==0)
<td></td>
@else
  @foreach ($timetabled312 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled313)==0)
<td></td>
@else
  @foreach ($timetabled313 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

</tr>


<tr align="center">

 <th style="background-color:#ffed4a">F<br>R<br>I</th>
@if(count($timetabled41)==0)
<td></td>
@else
  @foreach ($timetabled41 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled42)==0)
<td></td>
@else
  @foreach ($timetabled42 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled43)==0)
<td></td>
@else
  @foreach ($timetabled43 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled44)==0)
<td></td>
@else
  @foreach ($timetabled44 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled45)==0)
<td></td>
@else
  @foreach ($timetabled45 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled46)==0)
<td></td>
@else
  @foreach ($timetabled46 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled47)==0)
<td></td>
@else
  @foreach ($timetabled47 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled48)==0)
<td></td>
@else
  @foreach ($timetabled48 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled49)==0)
<td></td>
@else
  @foreach ($timetabled49 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled410)==0)
<td></td>
@else
  @foreach ($timetabled410 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled411)==0)
<td></td>
@else
  @foreach ($timetabled411 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled412)==0)
<td></td>
@else
  @foreach ($timetabled412 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif

@if(count($timetabled413)==0)
<td></td>
@else
  @foreach ($timetabled413 as $times)
<td bgcolor="#ffffff">{{ $times['venue']}}<br><font color="green">{{ $times['criteria']}}</font><br>{{ $times['course']}}</td>
@endforeach
@endif
</tr>

</table>


    

</div>
</div>

</body>
</html>