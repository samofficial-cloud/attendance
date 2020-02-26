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

  <br>
<div class="container">

@if($_GET['selection']=='All courses')
@if(count($all_courses)>0)
      <div class="col-xs-9">
        <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
        <p>UE attendance report for <b>{{$name}} ({{$reg_no}})</b></p>
      <h5>Course(s): All </h5>
       </div>
@else

@endif
@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')
@if(count($data)>0)
      <div class="col-xs-9">
        <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
        <p>UE attendance report for {{$name}} ({{$reg_no}})</p>
      <h5>Course(s): {{strtoupper($_GET['course_id'])}}({{$course_name}}) </h5>
      </div>
@else

@endif
@else
<div class="col-xs-9">
  <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  <p class="note"> UE attendance report for {{strtoupper($_GET['course_id'])}} - {{$course_name}} </p></div>
@endif



@if ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="hover table table-bordered table-striped" id="myTable2">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>FROM TIME</th>
        <th>TO TIME</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
        <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses_names as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>


   <br>

  @else
  <h4>No data to display</h4>
  @endif
</div>



@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')


<div class="col-xs-6">


@if (!empty($FromTime))
<p>Date: {{date("d/m/Y",strtotime($date)) }} </p>
<p>Time: {{ date("H:i",strtotime($FromTime))}}  to  {{ date("H:i",strtotime($ToTime))}} </p>
<span>STATUS: PRESENT</span> <span><i class="fa fa-check-square-o" style="font-size:18px;color:#3e8ed0"></i></span>



  @else
  <h4>No data to display</h4>
  @endif
</div>



@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table id="myTable" class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th class="order">Name</th>
        <th>Identification number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_students as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell"></td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>

  <br>
  @else
  <h4>No data to display</h4>
  @endif
</div>

@endif


</div>
</body>
</html>