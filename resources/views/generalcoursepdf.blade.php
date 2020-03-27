<html>
<head>
	<title>LIST OF COURSES</title>
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
  use App\courses;
  use App\program;
  $i='1';
  if($_GET['coursedepartment']=='CSE'){
    $dprog=$_GET['csedcourse'];
  }
  elseif($_GET['coursedepartment']=='ETE'){
    $dprog=$_GET['etedcourse'];
  }

if(($_GET['category']=='All') and ($_GET['semester']=='All')){
  $course=courses::where('program',$dprog)->orderBy('semester', 'asc')->get();
  }
  elseif (($_GET['category']!='All') and ($_GET['semester']=='All')) {
      $course=courses::where('program',$dprog)->where('criteria',$_GET['category'])->orderBy('semester', 'asc')->get();
    } 
    elseif (($_GET['category']!='All') and ($_GET['semester']!='All')) {
      $course=courses::where('program',$dprog)->where('criteria',$_GET['category'])->where('semester',$_GET['semester'])->orderBy('semester', 'asc')->get();
    }
    elseif(($_GET['category']=='All') and ($_GET['semester']!='All')){
  $course=courses::where('program',$dprog)->where('semester',$_GET['semester'])->orderBy('semester', 'asc')->get();
  }  
  $full= program::select('full')->where('initial',$dprog)->value('full');

  use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');

  ?>

  <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>@if($_GET['coursedepartment']=='CSE')DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING
      @elseif($_GET['coursedepartment']=='ETE')
      DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATIONS ENGINEERING
      @endif
      </b></center>
      <center>
      @if(($_GET['category']=='All') and ($_GET['semester']=='All'))
      <b>{{$full}}</b><br> All Courses For The Academic Year 2019/2020
      @elseif(($_GET['category']!='All') and ($_GET['semester']=='All'))
      <b>{{$full}}</b><br> {{$_GET['category']}} Courses For The Academic Year 2019/2020
      @elseif($_GET['category']=='All'and ($_GET['semester']!='All'))
       <b>{{$full}}</b><br> All Courses In Semester {{$_GET['semester']}} For The Academic Year 2019/2020
      @elseif($_GET['category']!='All'and ($_GET['semester']!='All'))
      <b>{{$full}}</b><br> {{$_GET['category']}} Courses In Semester {{$_GET['semester']}} For The Academic Year 2019/2020
      @endif
      </center>
    
  <br>
  @if(count($course)!=0)
     <table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col"><center>Course ID</center></th>
      <th scope="col"><center>Course Name</center></th>
      <th scope="col"><center>Credit</center></th>
      <th scope="col"><center>Semester</center></th>
      <th scope="col"><center>Criteria</center></th>
      <th scope="col"><center>No. of Hours per Semester</center></th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($course as $course)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$course->course}}</td>
      <td>{{$course->course_name}}</td>
      <td><center>{{$course->credit}}</center></td>
       <td><center>{{$course->semester}}</center></td>
      <td><center>{{$course->criteria}}</center></td>
      <td><center>{{$course->lectures_no}}</center></td>
     
    </tr>
    <?php
      $i=$i+1;
      ?>
    @endforeach
</tbody>
</table>
@elseif(count($course)==0)
  <h4>Sorry there is no data to display</h4>
@endif
</div>
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