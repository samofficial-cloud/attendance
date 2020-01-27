<html>
<head>
	<title>TE2 COURSES</title>
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
   $course=courses::where('program','TE2')->orderBy('semester', 'asc')->get();
   $i='1';

  ?>

  <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATION ENGINEERING
      <br>TELECOMMUNICATION ENGINEERING 2 COURSES

    </b></center>
  <br>
     <table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">course</th>
      <th scope="col">course_name</th>
      <th scope="col">credit</th>
      <th scope="col">semester</th>
      <th scope="col">criteria</th>
      <th scope="col">lecture_no</th>
      
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
</div>



</body>
</html>