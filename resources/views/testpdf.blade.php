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

@if($_GET['selection']=='All courses')
@if((count($all_courses)>0) OR (count($all_courses2)>0) OR (count($all_courses3)>0))
      <div class="col-xs-9">
        <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>  
 
    <p>Test attendance report for <b> {{$name}} ({{$reg_no}})</b></p>
      <h5>Course(s): All </h5>
      </div>
@else

@endif
@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')
@if(count($data)>0)
      <div >
        <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
 
        <p>Test attendance report for <b>{{$name}} ({{$reg_no}})</b></p>
      <h5 >Course(s): {{strtoupper($_GET['course_id'])}} - {{$course_name}} </h5>
      </div>
@else

@endif
@else
<div class="col-xs-9"><legend>
  <center><b><br><br>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
                 </b>
               </center>
  
</legend> 
  <p class="note"> Attendance report for {{strtoupper($_GET['course_id'])}}({{$course_name}}) </p> </div>
@endif


@if ($_GET['selection']=='All courses')

<!-- TEST 1 -->
<div class="col-xs-6">
  <h5>TEST 1 </h5>
  @if(count($all_courses)>0)
  <table class="hover table table-bordered table-striped" id="myTable2">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>
<br>
<br>
<h6><u>KEY</u></h6>
<?php
foreach($all_courses as $values){
 $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
 $val = (iterator_to_array($iterator,true));
 print($val['courseId'].' - '.$val['course_name'].'<br>');

}
?>


  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>
<hr>
<!-- TEST 2 -->
<div class="col-xs-6">
  <h5>TEST 2 </h5>
  @if(count($all_courses2)>0)
  <table class="hover table table-bordered table-striped" id="myTable3">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses2 as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses2 as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

  @else
  <h4>No data to display</h4>
  @endif
</div>

<br>
<br>
<!-- TEST 3 -->
<hr>
<div class="col-xs-6">
  <h5>TEST 3 </h5>
  @if(count($all_courses3)>0)
  <table class="hover table table-bordered table-striped" id="myTable4">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>COURSE</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_courses3 as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->courseId}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>

  <br>
  <br>
  <h6><u>KEY</u></h6>
  <?php
  foreach($all_courses3 as $values){
   $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
   $val = (iterator_to_array($iterator,true));
   print($val['courseId'].' - '.$val['course_name'].'<br>');

  }
  ?>

 
  @else
  <h4>No data to display</h4>
  @endif
</div>



@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">
  @if(count($data)>0)
  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
        <th>TYPE OF TEST</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $var)
      <tr>
        <td class="counterCell">.</td>
        <td>{{$var->test_type}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime))  }}</td>
        <td>PRESENT</td>
      </tr>
      @endforeach
    </tbody>

  </table>


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
       print('<tr><td class="counterCell">.</td>'.'<td>'.$val['name'].'</td><td>'.$val['reg_no'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>

    </tbody>

  </table>
  @else
  <h4>No data to display</h4>
  @endif
</div>

@endif

<br>

</div>


</body>
</html>