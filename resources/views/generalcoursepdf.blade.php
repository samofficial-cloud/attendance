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
if(($_GET['category']=='All') and ($_GET['semester']=='All')){
  $course=courses::where('program',$_GET['dprogram'])->orderBy('semester', 'asc')->get();
  }
  elseif (($_GET['category']!='All') and ($_GET['semester']=='All')) {
      $course=courses::where('program',$_GET['dprogram'])->where('criteria',$_GET['category'])->orderBy('semester', 'asc')->get();
    } 
    elseif (($_GET['category']!='All') and ($_GET['semester']!='All')) {
      $course=courses::where('program',$_GET['dprogram'])->where('criteria',$_GET['category'])->where('semester',$_GET['semester'])->orderBy('semester', 'asc')->get();
    }
    elseif(($_GET['category']=='All') and ($_GET['semester']!='All')){
  $course=courses::where('program',$_GET['dprogram'])->where('semester',$_GET['semester'])->orderBy('semester', 'asc')->get();
  }  
  $full= program::select('full')->where('initial',$_GET['dprogram'])->value('full');

  ?>

  <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING
      </b></center>
      <center>
      @if(($_GET['category']=='All') and ($_GET['semester']=='All'))
      <br>{{$full}} All Courses For The Academic Year 2019/2020
      @elseif(($_GET['category']!='All') and ($_GET['semester']=='All'))
      <br>{{$full}} {{$_GET['category']}} Courses For The Academic Year 2019/2020
      @elseif($_GET['category']=='All'and ($_GET['semester']!='All'))
       <br>{{$full}} All Courses In Semester {{$_GET['semester']}} For The Academic Year 2019/2020
      @elseif($_GET['category']!='All'and ($_GET['semester']!='All'))
      <br>{{$full}} {{$_GET['category']}} Courses In Semester {{$_GET['semester']}} For The Academic Year 2019/2020
      @endif
      </center>
    
  <br>
  @if(count($course)!=0)
     <table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Credit</th>
      <th scope="col">Semester</th>
      <th scope="col">Criteria</th>
      <th scope="col">No. of Hours per Semester</th>
      
    </tr>
  </thead>
  <tbody>

    @foreach($course as $course)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$course->course}}</td>
      <td>{{$course->course_name}}</td>
      <td>{{$course->credit}}</td>
       <td>{{$course->semester}}</td>
      <td>{{$course->criteria}}</td>
      <td>{{$course->lectures_no}}</td>
     
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