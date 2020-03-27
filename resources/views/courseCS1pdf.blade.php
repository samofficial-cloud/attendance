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
   $course=courses::where('program',$_GET['rid'])->orderBy('semester', 'asc')->get();
   $i='1';

   use App\program;
   $full= program::select('full')->where('initial',$_GET['rid'])->value('full');

   use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');

  ?>

  <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING
      <br>{{$full}} Courses

    </b></center>
  <br>
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
      <td><center>{{$course->course}}</center></td>
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
</div>



</body>
</html>