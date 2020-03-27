<html>
<head>
	<title>ETE Teaching Staff</title>
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
  Use App\lecturer;

  $instructors1=lecturer::where('dept','ETE')->where('flag','1')->where('academic_year','2019/2020')->orderBy('semester','asc')->get();
  $i='1';
  use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
  ?>

  <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATIONS ENGINEERING
      <br>ASSIGNED INSTRUCTORS FOR THE ACADEMIC YEAR 2019/2020.

    </b></center>
  
  <br>
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><center>S/N</center></th>
      <th scope="col"><center>Course ID</center></th>
      <th scope="col"><center>Course Name</center></th>
      <th scope="col"><center>Instructor 1</center></th>
      <th scope="col"><center>Instructor 2</center></th>
      <th scope="col"><center>Instructor 3</center></th>
      <th scope="col"><center>Instructor 4</center></th>
      <th scope="col"><center>Instructor 5</center></th>
      <th scope="col"><center>Tutorial Assistant</center></th>
      <th scope="col"><center>Technical Staff 1</center></th>
      <th scope="col"><center>Technical Staff 2</center></th>
      <th scope="col"><center>Course Type</center></th>
      <th scope="col"><center>Semester</center></th>
      
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors1 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{ $instructors->course}}</center></td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_staff_2}}</td>
      <td><center>{{ $instructors->course_type}}</center></td>
      <td><center>{{ $instructors->semester}}</center></td>
     
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
