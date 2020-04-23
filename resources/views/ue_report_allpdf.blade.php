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

      $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
      $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

      $temp_course=explode('-', strtoupper($_GET['course_id']));

      $course=$temp_course[0];

    $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
    $name=$_GET['input_name'];
      $program_fullAllCourses=DB::select('EXEC getProgrammeFullAllCourses ?',[$name]);

    if ($_GET['category']== 1) {
      //echo "All students";

        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }

        $all_test=DB::select('EXEC  all_testUe ?',[$course]);

      $date = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('date');
      $FromTime = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeFrom');
      $ToTime = DB::table('attendance_ue')->where([['title', '=','student'],['name', '!=','DUMMY NAME']])->whereRaw("courseId LIKE '%$course%'")->limit(1)->value('courseTimeTo');
    }
    use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');


  ?>
  <div class="container">


  @if(count($all_test)>0)
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


        <p class="note">Course: <b>{{$_GET['course_id']}}</b> </p>
        <p class="note">UE Attendance Report for: <b>All Students</b></p>
        
  @else

  @endif
<div class="col-xs-6">
  @if(count($all_test)>0)
      <div class="major">

          <?php
          $temp_course1=strtoupper($_GET['course_id']);

          $temp_course2=explode('-', strtoupper($temp_course1));

          $course=$temp_course2[0];
          ?>
      </div>
  <p>Date: <b>{{date("d/m/Y",strtotime($date)) }}</b> </p>
  <p>Exam time: <b>{{ date("H:i",strtotime($FromTime))}} hours  to  {{ date("H:i",strtotime($ToTime))}} hours </b></p>

  <table class="hover table table-bordered table-striped" id="myTable1">
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th><center>SURNAME</center></th>
          <th style="width: 15%"><center>OTHER NAMES</center></th>
          <th><center>REGISTRATION NUMBER</center></th>
          <th><center>PROGRAMME</center></th>
          <th style="width: 23%"><center>SIGNING TIME</center></th>
          <th><center>STATUS</center></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($all_test as $var)
      <tr>
        <td class="counterCell">.</td>
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
      @endforeach
    </tbody>

  </table>
  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

<br>

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
      ?>

</div>
</body>
</html>