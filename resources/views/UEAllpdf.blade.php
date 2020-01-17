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

    $reg_no=$_GET['reg_no'];


    if ($_GET['category']== 1) {
      //echo "All students";
      $all_test = DB::table('attendance_ue')->where([['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
      
    }else {

      //echo one student

      if($_GET['selection']=='One course') {

        $data = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->whereRaw("courseId LIKE '%$course%'")->get();
        $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
        $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

      } else {

          //echo one student all courses

          $all_courses = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->get();
          $name = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('name');
          $reg_no = DB::table('attendance_ue')->where([['reg_no', '=', $reg_no],['validity', '=', 'VALID'],['title', '=','student']])->orderBy('id', 'desc')->limit(1)->value('reg_no');

       
    
      }

    }


  ?>

  <br>
<div class="container">


<div class="col-xs-9"><legend>
  <p class="note"><center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>CLASS ATTENDANCE MANAGEMENT INFORMATION SYSTEM
    </b></center><br> UE attendance report for {{strtoupper($_GET['course_id'])}} </p></legend> </div>


<div class="col-xs-6">
  @if(count($all_test)>0)
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>SN</th>
        <th>NAME</th>
        <th>REG NO</th>
        <th>DATE</th>
        <th>STATUS</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td class="counterCell"></td>
        <td>{{$var->name}}</td>
        <td>{{$var->reg_no}}</td>
        <td>{{date("d/m/Y",strtotime($var->datetime)) }}</td>
        <td>PRESENT </td>
      </tr>
      @endforeach
    </tbody>

  </table>
  @else
  <h4>Sorry!! No data could be found for the specified parameters</h4>
  @endif
</div>



    

</div>
</body>
</html>