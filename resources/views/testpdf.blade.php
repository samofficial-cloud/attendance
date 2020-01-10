
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
</style>

<body>
	
	<?php
	 $dataSingle="";
    $data="";
    $course=strtoupper($_GET['course_id']);

    $reg_no=$_GET['course_id'];

$lectures_no = DB::table('programme')->where([['course', '=', $course]])->value('lectures_no');

    if ($_GET['category']== 1) {
      //echo "All students";
      $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);
      // $all = DB::table('attendance')->select('reg_no')->where([['courseId', '=', $course],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('reg_no')->get();
      // $all_students = array();

      foreach ($all as $val) {
        $values=[$course,$val->reg_no,$val->lectures_no];
        $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?',$values);
      }

      }elseif ($_GET['category']== 2) {
      //echo one lecturer
      if ($_GET['checkbox']=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','staff']])->get();
      return View('testpdf')->with('dataSingle_all',$dataSingle_all)->with('name',$name);
      }
      elseif ($_GET['selection'] =="One course") {
        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','staff']])->get();


      $percentage=round($CountSingle*100/$lectures_no);

        }

         else {

      $all = DB::select('EXEC getAllCoursesAndLectures_noStaff ?',[$reg_no]);
       $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','staff'],['validity', '=', 'VALID']])->limit(1)->value('name');
       foreach ($all as $val) {
         $values=[$reg_no,$val->courseId,$val->lectures_no];
         $all_courses[] = DB::select('EXEC getAllCoursesStaff ?,?,?',$values);
       }
      }

       }else {

      

      if ($_GET['checkbox']=='all cases') {
      $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
      $dataSingle_all = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['title', '=','student']])->get();
      
      }
      elseif($_GET['selection']=='One course') {

        $CountSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->count('status');
        $name = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');
        $dataSingle = DB::table('attendance')->where([['courseId', '=', $course],['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();


          $percentage=round($CountSingle*100/$lectures_no);

      } else {
      	 //echo one student all courses
        $all = DB::select('EXEC getAllCoursesAndLectures_noStudent ?',[$reg_no]);
        // $all = DB::table('attendance')->select('courseId')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->groupBy('courseId')->get();
        $name = DB::table('attendance')->where([['reg_no', '=', $reg_no],['title', '=','student'],['validity', '=', 'VALID']])->limit(1)->value('name');
        foreach ($all as $val) {
          $values=[$reg_no,$val->courseId,$val->lectures_no];
          $all_courses[] = DB::select('EXEC getAllCourses ?,?,?',$values);
        }
        
      }

    }

	?>
	<div class="container">

@if(!empty($_GET['checkbox']))
<div class="col-xs-9 pt-3"><legend>
  <p class="note">
  	<center>UNIVERSITY OF DAR ES SALAAM<br>
  		<br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="100px"></img>
<br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM<br> 
ATTENDANCE REPORT FOR {{$name}} ({{strtoupper($_GET['course_id'])}})
  	</center>
  </p>
</legend> 
</div>
@elseif($_GET['selection']=='All courses')
  <div class="col-xs-9 pt-3"><legend>
    <p class="note">
    	<center>UNIVERSITY OF DAR ES SALAAM<br><br>
    		<img src="{{public_path('/img/logo_udsm.jpg')}}" height="100px"></img><br>
CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM<br> ATTENDANCE REPORT FOR {{$name}} (All courses)
</center> </p></legend> </div>

@else
<div class="col-xs-9 pt-3"><h3><legend>
  <p class="note"><center>UNIVERSITY OF DAR ES SALAAM<br>
  	<br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="100px"></img>

  	<br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM<br> ATTENDANCE REPORT FOR {{strtoupper($_GET['course_id'])}} </center></p></legend> </div>
@endif

<!-- Show also invalid cases -->
@if(!empty($_GET['reg_no']) AND !empty($_GET['checkbox']))

<div class="col-xs-6">
  @if(count($dataSingle_all)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Date</th>
        <th>Time</th>
        <th>Attendance status</th>
        <th>Arrival time</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($dataSingle_all as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{date("d-m-Y",strtotime($var->datetime))  }}</td>
        <td>{{ date("H:i",strtotime($var->datetime))}}</td>
        <td>@if($var->status==1)
          PRESENT
          @else
          NOT PRESENT
          @endif
        </td>
        <td>@if($var->validity=='VALID')
          EARLY
          @else
          LATE
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>


@elseif(!empty($_GET['reg_no']) AND $_GET['selection']=='One course')

<div class="col-xs-6">

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Identification number</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td class="counterCell"></td>
        <td>{{$name}}</td>
        <td>{{$reg_no}}</td>
        <td> {{$percentage}}%</td>
      </tr>

    </tbody>

  </table>

</div>




@elseif ($_GET['selection']=='All courses')

<div class="col-xs-6">
  @if(count($all_courses)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Course</th>
        <th>Percentage</th>
      </tr>
    </thead>

    <tbody>
      <?php
      foreach($all_courses as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));
       print('<tr><td class="counterCell"></td>'.'<td>'.$val['courseId'].'</td><td>'.round($val['PERCENTAGE']).'%'.'</td></tr>');

}
?>
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>


@else

<div class="col-xs-6">
  @if(count($all_students)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Name</th>
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
  @else
  <h4>Sorry!! No data to display at the moment</h4>
  @endif
</div>

@endif

</div>
</body>
</html>