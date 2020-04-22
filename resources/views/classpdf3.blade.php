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
 $today=date('Y-m-d');

        $current_academic_year=DB::table('camis_configuration')->where('id', 1)->value('current_academic_year');
        $current_semester=DB::table('camis_configuration')->where('id', 1)->value('current_semester');

          $semday1=DB::table('camis_configuration')->where('id', 1)->value('semester_startDate');

        $percentage=$_GET['percentage'];
        $course=strtoupper($_GET['courseValue']);

        $minimum_percentage=DB::table('camis_configuration')->where('id', 1)->value('minimum_class_percentage');

        $course_name= DB::table('courses')->whereRaw("course LIKE '%$course%'")->value('course_name');
        $program_initial=DB::select('EXEC getProgrammeInitial ?',[$course]);

        foreach($program_initial as $var2){

            $program_full[]=DB::select('EXEC getProgrammeFull ?',[$var2->program]);

        }


        //Echo "All students";
        $all = DB::select('EXEC getAllCoursesAndLectures_noAllStudents ?',[$course]);



        foreach ($all as $val) {
            $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
            $all_students[] = DB::select('EXEC getAttendanceAll ?,?,?,?,?',$values);
            array_multisort($all_students);
        }


        foreach ($all as $val) {
            $values=[$course,$val->reg_no,$val->lectures_no,$today,$semday1];
            $all_studentsProgKey[] = DB::select('EXEC getAttendanceAllProgKey ?,?,?,?,?',$values);
            array_multisort($all_studentsProgKey);
        }



if($_GET['sort_criteria']==1) {
    foreach ($all_students as $values) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($values));
        $val = (iterator_to_array($iterator, true));

        if (round($val['PERCENTAGE']) < $percentage) {

            $all_studentsFilter[] = $values;

        } else {


        }

    }

}elseif ($_GET['sort_criteria']==2){


    foreach ($all_students as $values) {
        $iterator = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($values));
        $val = (iterator_to_array($iterator, true));

        if (round($val['PERCENTAGE']) > $percentage) {

            $all_studentsFilter[] = $values;

        } else {


        }

    }

} 
else{

}
use App\camis_configuration;
 $camistitle=camis_configuration::select('camis_title')->value('camis_title');
?>

<div class="container">

<!-- All students for a particular course -->

@if($_GET['sort_criteria']==1)
@if(count($all_studentsFilter)>0)
    <div class="col-xs-9"><legend>
      <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
              <p class="note" style="float: right; font-size: 15px;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note" style="font-size: 15px;">Academic year:  <b>{{$current_academic_year}}</b></p>


            <p class="note">Programme(s):
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
    <p class="note">Course: <b>{{$_GET['fullCourse']}}</b></p>
    <p class="note"><b>Attendance report for all students whose class attendance is below {{$percentage}}% </b></p>

    </legend> </div>

    @else

    @endif

@elseif($_GET['sort_criteria']==2)

        @if(count($all_studentsFilter)>0)
             <div class="col-xs-9"><legend>
      <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
    </b>
  </center>
  </legend> </div>
              <p class="note" style="float: right; font-size: 15px;">Semester: <b>{{$current_semester}}</b></p>
                <p class="note" style="font-size: 15px;">Academic year:  <b>{{$current_academic_year}}</b></p>

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
                  <p class="note">Course: <b>{{$_GET['fullCourse']}}</b></p>
                   <p class="note"><b>Attendance report for all students whose class attendance is above {{$percentage}}% </b></p>

                

        @else

        @endif


    @else


    @endif






<div class="col-xs-6">
  @if(count($all_studentsFilter)>0)
  <br>


  <table id="myTable1" class="table table-bordered table-striped" >
    <thead class="thead-dark">
      <tr>
        <th>S/N</th>
          <th><center>Surname</center></th>
          <th><center>Other Names</center></th>
          <th><center>Registration number</center></th>
          <th><center>Programme</center></th>
          <th><center>Percentage</center></th>
      </tr>
    </thead>

    <tbody>
      <?php
foreach($all_studentsFilter as $values){
       $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($values));
       $val = (iterator_to_array($iterator,true));

    $temp1=explode(',', $val['name']);
    $surname=$temp1[0];
    $temp2 = preg_split('/\s+/', $temp1[1]);
    $first_name=$temp2[1];
    $middle_name=$temp2[2];
    $other_names=$temp1[1];
    print('<tr><td class="counterCell">.</td>'.'<td>'.$surname.'</td><td>'.$other_names.'</td><td><center>'.$val['reg_no'].'</center></td><td><center>'.$val['program'].'</center></td><td><center>'.round($val['PERCENTAGE']).'%'.'</center></td></tr>');

}
?>

    </tbody>

  </table>

  <br>
        <b><p>Minimum required percentage: {{$minimum_percentage}}% </p></b>

<br>

        <!-- course key -->

        <h6><u>KEY</u></h6>
        <?php

        $tempOut = array();
        foreach($all_studentsProgKey as $values){
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


        <br>

  @else
  <h4>No data could be found for the specified parameters</h4>
  @endif
</div>

</div>
</body>
</html>