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

    $dataSingle="";
    $data="";
    $course=strtoupper($_GET['course_id']);
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $reg_no=$_GET['reg_no'];


    if ($_GET['category']== 1) {
      //echo "All students";
      $all_test = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $date = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $FromTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
      $ToTime = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');


    }else {

      //echo one student

      if($_GET['checkbox']=='all cases') {

        $date=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
     

    }else if($_GET['selection']=='One course') {

        $data = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $date=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('datetime');
        $FromTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeFrom');
        $ToTime=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('courseTimeTo');
        $validity=DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->value('validity');
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['validity', '=', 'VALID']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->get();
          $all_courses_names = DB::select('EXEC getAllCoursesUe ?',[$reg_no]);

          $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      }

    }

  ?>

 
<div class="container">


  @if(count($all_test)>0)
        <div class="col-xs-9">
          <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
          <p class="note">UE attendance report for all students</p>
        <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}} </h5>
         </div>
  @else

  @endif
<div class="col-xs-6">
  @if(count($all_test)>0)
  <p>Date: {{date("d/m/Y",strtotime($date)) }} </p>
  <p>From: {{ date("H:i",strtotime($FromTime))}}</p>
  <p>To: {{ date("H:i",strtotime($ToTime))}} </p>
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>REGISTRATION NUMBER</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->name}}</td>
        <td>{{$var->reg_no}}</td>
        <td>PRESENT </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>




</div>
</body>
</html>