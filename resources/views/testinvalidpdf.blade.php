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
use Illuminate\Support\Facades\DB;
 $dataSingle="";
    $data="";
    $course=strtoupper($_GET['course_id']);
    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $reg_no=$_GET['reg_no'];


    if ($_GET['category']== 1) {
      //echo "All students";
      $all_test = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();
      $all_test3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->orderBy('name', 'asc')->get();

      $date = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date2 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $date3 = DB::table('attendance')->where([['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      
    }else {

      //echo one student

      if($_GET['checkbox']=='all cases' AND $_GET['selection']=='All courses'){


        $checkbox_all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


      }elseif($_GET['checkbox']=='all cases') {
        $dataSingle_all = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
    }

      elseif($_GET['selection']=='One course') {

        $data = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['status', '=', 1],['title', '=','student'],['category', '=','TEST']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


      } else {

          //echo one student all courses


          $all_courses = DB::select('EXEC getAllCoursesTest1 ?',[$reg_no]);
          $all_courses2 = DB::select('EXEC getAllCoursesTest2 ?',[$reg_no]);
          $all_courses3 = DB::select('EXEC getAllCoursesTest3 ?',[$reg_no]);

          $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['status', '=', 1],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
    
      }

    }

?>
<br>
<div class="container">




@if($_GET['selection']=='All courses' AND $_GET['checkbox']=='all cases')
<div class="col-xs-9"><legend>

  <p class="note"> Attendance report for {{$name}} (All courses) </p></legend> </div>
@elseif(!empty($_GET['checkbox']))
@if(count($dataSingle_all)>0)
<div class="col-xs-9">
   <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center> 
  <p class="note"> Test attendance report for <b>{{$name}} ({{$reg_no}})</b></p>
  <h5 class="note">Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}} </h5>
 </div>

@else

@endif

@else
<div class="col-xs-9"><legend>
  <p class="note"> Attendance report for {{strtoupper($_GET['course_id'])}} - {{$course_name}} </p>

</legend> </div>
@endif

@if($_GET['selection']=='All courses' AND $_GET['checkbox']=='all cases')

<div class="col-xs-6">
  @if(count($checkbox_all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>TYPE OF TEST</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($checkbox_all_courses as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->courseId}}</td>
        <td>{{$var->test_type}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>ARRIVED LATE </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>


<!-- Show also invalid cases -->
@elseif(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

<div class="col-xs-6">
  @if(count($dataSingle_all)>0)
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>TEST TYPE</th>
        <th>DATE</th>
        <th>FROM</th>
        <th>TO</th>
        <th>SIGN IN TIME</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($dataSingle_all as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->test_type}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>{{ date("H:i",strtotime($var->courseTimeFrom))}}</td>
        <td>{{ date("H:i",strtotime($var->courseTimeTo))}}</td>
        <td>{{ date("H:i",strtotime($var->datetime))}}</td>
        <td>@if($var->validity=='VALID')
          ARRIVED EARLY
          @else
          ARRIVED LATE
          @endif</td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>

@else
<div></div>
@endif


</div>
</body>
</html>