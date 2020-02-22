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

    $reg_no=$_GET['reg_no'];


    if ($_GET['category']== 1) {
      //echo "All students";
      $all_test = DB::table('attendance')->where([['courseId', '=', $course],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
      


      



    }else {

      //echo one student

      if($_GET['checkbox']=='all cases' AND $_GET['selection']=='All courses'){


        $checkbox_all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');


        return View('test_report_invalid')->with('checkbox_all_courses',$checkbox_all_courses)->with('name',$name)->with('reg_no',$reg_no);
      }elseif($_GET['checkbox']=='all cases') {
        $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'INVALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
      

    }

      elseif($_GET['selection']=='One course') {

        $data = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

        // return View('attendance_report')->with('percentage',$percentage)->with('reg_no',$reg_no)->with('name',$name);
        


      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->get();
          $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student'],['category', '=','TEST']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

          


       
      }

    }

?>
<br>
<div class="container">




@if($_GET['selection']=='All courses' AND $_GET['checkbox']=='all cases')
<div class="col-xs-9"><legend>
  <p class="note"><center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
    </b></center> <br>ATTENDANCE REPORT FOR {{$name}} (All courses) </p></legend> </div>
@elseif(!empty($_GET['checkbox']))
<div class="col-xs-9"><legend>
  <p class="note"> <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
    </b></center><br>ATTENDANCE REPORT FOR {{$name}} ({{strtoupper($_GET['course_id'])}})</p></legend> </div>

@else
<div class="col-xs-9"><legend>
  <p class="note"> <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
    </b></center><br>ATTENDANCE REPORT FOR {{strtoupper($_GET['course_id'])}} </p></legend> </div>
@endif

@if($_GET['selection']=='All courses' AND $_GET['checkbox']=='all cases')

<div class="col-xs-6">
  @if(count($checkbox_all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>SN</th>
        <th>COURSE</th>
        <th>TEST TYPE</th>
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
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>


<!-- Show also invalid cases -->
@elseif(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

<div class="col-xs-6">
  @if(count($dataSingle_all)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>SN</th>
        <th>TEST TYPE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($dataSingle_all as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->test_type}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>ARRIVED LATE </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>

@else
<div></div>
@endif

    

</div>