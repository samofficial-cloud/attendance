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
  use App\department;
  use App\userinfo;
  use App\program;
  use App\courses;
if($_GET['category']==1){
  $depname=department::select('DEPTNAME')->where('DEPTID',$_GET['dprogram'])->value('DEPTNAME');
  if(($_GET['Selection']) != 'All'){
        $students=userinfo::where('DEFAULTDEPTID',$_GET['dprogram'])->where('flag',$_GET['Selection'])->orderBy('NAME','asc')->get();
      }
      elseif($_GET['Selection'] == 'All'){
        $students=userinfo::where('DEFAULTDEPTID',$_GET['dprogram'])->orderBy('NAME','asc')->get();
      }
        $full= program::select('full')->where('initial',$depname)->value('full');
        $i='1';
      }
elseif ($_GET['category']==2) {
$program = courses::select('program')->where('course',$_GET['courseid'])->where('criteria','Core')->get();
$course_name=courses::select('course_name')->where('course',$_GET['courseid'])->where('criteria','Core')->value('course_name');
$total=count($program);
$a='1';
}
        ?>

@if($_GET['category']==1)
@if((!is_null($_GET['dprogram'])) and ($_GET['Selection']==1))
        <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>{{$full}} Active Student List
    </b>
  </center>
<br>
  <table class="table table-striped table-bordered">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="width:5%;"><center>S/N</center></th>
      <th scope="col"><center>NAME</center></th>
      <th scope="col"><center>REGISTRATION NO.</center></th>
      <th scope="col"><center>GENDER</center></th>
      @if($_GET['studentcheckbox']=='true')
      <th scope="col"><center>FEES STATUS</center></th>
       <th scope="col"><center>FEES DURATION</center></th>
       @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
      <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($student->GENDER=="Female")
       <td><center>F</center></td>
       @endif
       @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      <?php
      $i=$i+1;
      ?>
    @endforeach
  </tbody>
</table>
</div>
@elseif((!is_null($_GET['dprogram'])) and ($_GET['Selection']== '0'))
        <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>{{$full}} Inactive Student List
    </b>
  </center>
<br>
  <table class="table table-striped table-bordered">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="width:5%;"><center>S/N</center></th>
      <th scope="col"><center>NAME</center></th>
      <th scope="col"><center>REGISTRATION NO.</center></th>
      <th scope="col"><center>GENDER</center></th>
      <th scope="col"><center>REASON</center></th>
       <th scope="col"><center>REMARKS</center></th>
       @if($_GET['studentcheckbox']=='true')
      <th scope="col"><center>FEES STATUS</center></th>
       <th scope="col"><center>FEES DURATION</center></th>
       @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
      <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($student->GENDER=="Female")
       <td><center>F</center></td>
       @endif
      <td>{{$student->reasons}}</td>
      <td>{{$student->remarks}}</td>
      @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      <?php
      $i=$i+1;
      ?>
    @endforeach
  </tbody>
</table>
</div>
@elseif((!is_null($_GET['dprogram'])) and ($_GET['Selection']=='All'))
        <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>{{$full}} All Student List
    </b>
  </center>
<br>
  <table class="table table-striped table-bordered">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="width:5%;"><center>S/N</center></th>
      <th scope="col"><center>NAME</center></th>
      <th scope="col"><center>REGISTRATION NO.</center></th>
      <th scope="col"><center>GENDER</center></th>
      @if($_GET['studentcheckbox']=='true')
      <th scope="col"><center>FEES STATUS</center></th>
       <th scope="col"><center>FEES DURATION</center></th>
       @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    @if($student->flag==0)
      <tr style="color: red;">
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($student->GENDER=="Female")
       <td><center>F</center></td>
       @endif
       @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      @else
      <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($student->GENDER=="Female")
       <td><center>F</center></td>
       @endif
       @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      @endif
      <?php
      $i=$i+1;
      ?>
    @endforeach
  </tbody>
</table>
</div>
@endif

@elseif($_GET['category']==2)
<div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br> <h4>{{$_GET['courseid']}} - {{$course_name}}</h4>
       @if($_GET['Selection']=='1')
          List of Active Students
     @elseif($_GET['Selection']=='0')
          List of Inactive Students
     @elseif($_GET['Selection']=='All')
          List of All Students
    @endif
    </b>
  </center>
 
    @foreach($program as $program)
    <?php
    $i='1';
      $deptId=department::select('DEPTID')->where('DEPTNAME',$program->program)->value('DEPTID');
      if($_GET['Selection']!='All'){
      $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag',$_GET['Selection'])->orderby('name','asc')->get();
    }
    else{
      $students=userinfo::where('DEFAULTDEPTID',$deptId)->orderby('name','asc')->get();
    }
        $full= program::select('full')->where('initial',$program->program)->value('full');
    ?>
   
    <h4>{{$a}}. {{$full}}</h4>
    <table class=" hover table table-striped table-bordered" id="example{{$a}}">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="width:5%;"><center>S/N</center></th>
      <th scope="col"><center>NAME</center></th>
      <th scope="col"><center>REGISTRATION NUMBER</center></th>
      <th scope="col"><center>GENDER</center></th>
      @if($_GET['studentcheckbox']=='true')
      <th scope="col"><center>FEES STATUS</center></th>
      <th scope="col"><center>FEES DURATION</center></th>
      @endif
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    @if($_GET['Selection']=='All')
    @if($student->flag==0)
    <tr style="color: red;">
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($student->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>

      @else
      <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($student->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      @endif
      @else
      <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
      @if($student->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($student->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      @if($_GET['studentcheckbox']=='true')
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      @endif
      </tr>
      @endif
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
@endif
<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>
 
</body>
</html>