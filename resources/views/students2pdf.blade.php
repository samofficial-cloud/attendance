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
      <th scope="col">REGISTRATION NUMBER</th>
      <th scope="col">GENDER</th>
      <th scope="col">FEES STATUS</th>
      <th scope="col">FEES DURATION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td>{{$student->SSN}}</td>
      @if($student->GENDER =='Male')
      <td>M</td>
      @elseif($student->GENDER =='Female')
      <td>F</td>
      @else
      <td></td>
      @endif
      <td>{{$student->Fees_Status}}</td>
      <td>{{$student->Fees_Duration}}</td>
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