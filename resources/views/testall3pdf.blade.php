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
  $temp_course1=strtoupper($_GET['courseValue']);

        $temp_course2=explode('-', strtoupper($temp_course1));

        $course=$temp_course2[0];
        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');
        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }

        $all_test=DB::select('EXEC all_testPresent ?',[$course]);
        $all_test2=DB::select('EXEC all_test2Present ?',[$course]);
        $all_test3=DB::select('EXEC all_test3Present ?',[$course]);


        $date = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date2 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
        $date3 = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');

        $times = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time2s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
        $time3s = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');

        $timee = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 1']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time2e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 2']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
        $time3e = DB::table('attendance')->where([['title', '=','student'],['category', '=','TEST'],['status', '=',1],['name', '!=','DUMMY NAME'],['test_type', '=','Test 3']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');

        use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');

  ?>
  <div class="container">

  @if((count($all_test)>0) OR (count($all_test2)>0) OR (count($all_test3)>0))
  <div class="col-xs-9"><legend>
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
    </legend> </div>
           <p class="note" style="float: right;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note">Academic year: <b>{{$current_academic_year}}</b></p>
          <p class="note">Programme:
            <b>

              <?php
              $i=0;
              $length=count($program_full);
              foreach($program_full as $values){
                  $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                  $val = (iterator_to_array($iterator,true));


                  if($i!=($length-1)){
                      print($val['full'].', ');
                  }else{

                      print($val['full'].' ');

                  }
                  $i++;
              }
              ?>
            </b>

          </p>


    <P class="note">Course
        : <b>{{$_GET['fullCourse']}}</b> </P>
    <p class="note"> <b>Test Attendance Report Showing Only Students Who Are Present</b></p>
  


<!-- TEST 1 -->
<div class="col-xs-6">  
  @if(count($all_test)>0)
  <p style="font-size: 18px;"><b>TEST 1 </b></p>
Date: <b>{{date("d/m/Y",strtotime($date)) }}</b><br>
<span>Test start time: <b>{{date("H:i",strtotime($times))}}</b> </span><br> 
<span>Test end time: <b>{{date("H:i",strtotime( $timee))}}</b></span>
<?php
$i='1';
?>
  <table id="myTable" class="table table-bordered table-striped" style="width: 95%">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%">S/N</th>
          <th><center>SURNAME</center></th>
          <th style="width: 20%"><center>OTHER NAMES</center></th>
            <th><center>REGISTRATION NUMBER</center></th>
          <th><center>PROGRAMME</center></th>
          <th style="width: 20%"><center>SIGNING TIME</center></th>
        <th><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td>{{$i}}.</td>

          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
              $temp2 = preg_split('/\s+/', $temp1[1]);
              $first_name=$temp2[1];
              $middle_name=$temp2[2];
              $other_names=$temp1[1];
              print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>

        <td><center>{{$var->reg_no}}</center></td>
          <td><center>{{$var->program}}</center></td>
          <td>
              @if($var->status==1)
                  @if($var->validity=='VALID')
                      {{ date("H:i",strtotime($var->datetime))}}
                  @else
                      <?php

                      $datetime1 = new DateTime($var->courseTimeFrom);//start time
                      $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                      $interval = $datetime1->diff($datetime2);


                      if($interval->format('%h')=='0'){
                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                      } else if ($interval->format('%h')=='1'){

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                      else {

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                      }


                      ?>
                  @endif
              @else
                  N/A
              @endif
          </td>

          <td>@if($var->status==1)
                  <center>PRESENT</center>
              @else
                  <center>ABSENT</center>
              @endif </td>



      </tr>
      <?php
$i=$i+1;
?>
      @endforeach
    </tbody>

  </table>
  <br>
<br>
  @endif
</div>


<!-- TEST 2 -->
<div class="col-xs-6">
  @if(count($all_test2)>0)
  <p style="font-size: 18px;"><b>TEST 2 </b></p>
Date: <b>{{date("d/m/Y",strtotime($date2)) }}</b><br>
<span>Test start time: <b>{{date("H:i",strtotime($time2s))}}</b> </span><br>
<span>Test end time: <b>{{date("H:i",strtotime( $time2e))}}</b></span>
<?php
$i='1';
?>
  <table id="myTable2" class="table table-bordered table-striped" style="width: 95%">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%">S/N</th>
          <th><center>SURNAME</center></th>
          <th style="width: 20%"><center>OTHER NAMES</center></th>
            <th><center>REGISTRATION NUMBER</center></th>
          <th><center>PROGRAMME</center></th>
          <th style="width: 20%"><center>SIGNING TIME</center></th>
        <th><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test2 as $var)
      <tr>
        <td>{{$i}}.</td>
          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
          $temp2 = preg_split('/\s+/', $temp1[1]);
          $first_name=$temp2[1];
          $middle_name=$temp2[2];
          $other_names=$temp1[1];
          print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>
        <td><center>{{$var->reg_no}}</center></td>
          <td><center>{{$var->program}}</center></td>
          <td>
              @if($var->status==1)
                  @if($var->validity=='VALID')
                      {{ date("H:i",strtotime($var->datetime))}}
                  @else
                      <?php

                      $datetime1 = new DateTime($var->courseTimeFrom);//start time
                      $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                      $interval = $datetime1->diff($datetime2);


                      if($interval->format('%h')=='0'){
                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                      } else if ($interval->format('%h')=='1'){

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                      else {

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                      }


                      ?>
                  @endif
              @else
                  N/A
              @endif
          </td>

          <td>@if($var->status==1)
                  <center>PRESENT</center>
              @else
                  <center>ABSENT</center>
              @endif </td>
      </tr>
      <?php
$i=$i+1;
?>
      @endforeach
    </tbody>

  </table>
  <br>
<br>
  @endif
</div>


<!-- TEST 3 -->
<div class="col-xs-6">
  @if(count($all_test3)>0)
<p style="font-size: 18px;"><b>TEST 3 </b></p>
Date: <b>{{date("d/m/Y",strtotime($date3)) }}</b><br>
<span>Test start time: <b>{{date("H:i",strtotime($time3s))}}</b> </span><br>
<span>Test end time: <b>{{date("H:i",strtotime( $time3e))}}</b></span>
<?php
$i='1';
?>
  <table id="myTable3" class="table table-bordered table-striped" style="width: 95%;">
    <thead class="thead-dark">
      <tr>
        <th style="width: 5%">S/N</th>
          <th><center>SURNAME</center></th>
          <th style="width: 20%"><center>OTHER NAMES</center></th>
            <th><center>REGISTRATION NUMBER</center></th>
          <th><center>PROGRAMME</center></th>
          <th style="width: 20%"><center>SIGNING TIME</center></th>
        <th><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test3 as $var)
      <tr>
        <td>{{$i}}.</td>
          <?php
          $temp1=explode(',', $var->name);
          $surname=$temp1[0];
          $temp2 = preg_split('/\s+/', $temp1[1]);
          $first_name=$temp2[1];
          $middle_name=$temp2[2];
          $other_names=$temp1[1];
          print('<td>'.$surname.'</td><td>'.$other_names.'</td>');
          ?>
        <td><center>{{$var->reg_no}}</center></td>
          <td><center>{{$var->program}}</center></td>
          <td>
              @if($var->status==1)
                  @if($var->validity=='VALID')
                      {{ date("H:i",strtotime($var->datetime))}}
                  @else
                      <?php

                      $datetime1 = new DateTime($var->courseTimeFrom);//start time
                      $datetime2 = new DateTime(date("H:i",strtotime($var->datetime)));//end time
                      $interval = $datetime1->diff($datetime2);


                      if($interval->format('%h')=='0'){
                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%i minutes')." late)";


                      } else if ($interval->format('%h')=='1'){

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hour and %i minutes')." late)";  }
                      else {

                          echo date("H:i",strtotime($var->datetime))."  (".$interval->format('%h hours and %i minutes')." late)";
                      }


                      ?>
                  @endif
              @else
                  N/A
              @endif
          </td>

          <td>@if($var->status==1)
                  <center>PRESENT</center>
              @else
                  <center>ABSENT</center>
              @endif </td>
      </tr>
      <?php
$i=$i+1;
?>
      @endforeach
    </tbody>

  </table>
  <br>
  <br>
  @endif
</div>

        @if((count($all_test)>0) OR (count($all_test2)>0) OR (count($all_test3)>0))
        <!-- course key -->

            <h6><u>KEY</u></h6>
            <?php

            $tempOut = array();
            foreach($all_test as $values){
                $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                $val = (iterator_to_array($iterator,true));
                $tempoIn=$val['program'];

                if(!in_array($tempoIn, $tempOut))
                {
                    print($val['program'].' - '.$val['full'].'<br>');
                    array_push($tempOut,$tempoIn);
                }




            }

            foreach($all_test2 as $values){
                $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                $val = (iterator_to_array($iterator,true));
                $tempoIn=$val['program'];

                if(!in_array($tempoIn, $tempOut))
                {
                    print($val['program'].' - '.$val['full'].'<br>');
                    array_push($tempOut,$tempoIn);
                }




            }

            foreach($all_test3 as $values){
                $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
                $val = (iterator_to_array($iterator,true));
                $tempoIn=$val['program'];

                if(!in_array($tempoIn, $tempOut))
                {
                    print($val['program'].' - '.$val['full'].'<br>');
                    array_push($tempOut,$tempoIn);
                }




            }

            ?>

        @else

        @endif
        <br>

    @else
        <h4>All students were absent</h4>
    @endif

</div>
</body>
</html>