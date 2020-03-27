<html>
<head>
	<title>STUDENTS LIST</title>
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
$i='1';
use App\courses;
use App\department;
use App\userinfo;
use App\program;
use App\lecturer;
$course=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->where('course_type','core')->get();
$program=courses::select('program','course_name')->where('course',$_GET['rid'])->where('criteria','Core')->get();
$course_name=courses::select('course_name')->where('course',$_GET['rid'])->where('criteria','Core')->value('course_name');
$total=count($program);
$a='1';
$id=$_GET['rid'];
?>

        <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br> <h4>{{$_GET['rid']}}- {{$course_name}}</h4>
    </b>
  </center>
 
    @foreach($program as $program)
    <?php
    $i='1';
      $deptId=department::select('DEPTID')->where('DEPTNAME',$program->program)->value('DEPTID');
      
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->orderby('name','asc')->get();
        $full= program::select('full')->where('initial',$program->program)->value('full');

    ?>

    <h4>{{$a}}. {{$full}}</h4>
    <table class=" hover table table-striped table-bordered" id="example{{$a}}">
  <thead class="thead-dark">
     <tr>
      <th scope="col">S/N</th>
      <th scope="col">NAME</th>
      <th scope="col"><center>REGISTRATION NUMBER</center></th>
      <th scope="col"><center>GENDER</center></th>
      @if($_GET['feescheckbox']=='true')
      <th scope="col"><center>FEES STATUS</center></th>
      <th scope="col"><center>FEES DURATION</center></th>
      @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($student->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      @if($_GET['feescheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
</table>
    
    <br>
    <?php
    $a= $a+1;
    ?>
    @endforeach
    <div><h5><u>NOTE:</u></h5>
      <p>Please note the students listed above are only those who this course is core to them. To get list of students who have opted this course please visit <a href="https://aris2.udsm.ac.tz/">ARIS.</a> </p></div>
</div>
</body>
</html>