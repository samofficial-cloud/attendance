<html>
<head>
	<title>CSE Teaching Staff</title>
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

  $instructors1=lecturer::where('dept','CSE')->orderBy('semester','asc')->get();
  $i='1';
  ?>

  <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING
      <br>TEACHING STAFF

    </b></center>
  
  
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Instructor 1</th>
      <th scope="col">Instructor 2</th>
      <th scope="col">Instructor 3</th>
      <th scope="col">Instructor 4</th>
      <th scope="col">Instructor 5</th>
      <th scope="col">Tutorial Assistant</th>
      <th scope="col">Technical Staff 1</th>
      <th scope="col">Technical Staff 2</th>
      <th scope="col">Course Type</th>
      <th scope="col">Semester</th>
      
    </tr>
  </thead>
  <tbody>
    
      @foreach($instructors1 as $instructors)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td style="align-content: center;">{{ $instructors->course}}</td>
      <td>{{$instructors->course_name}}</td>
      <td>{{ $instructors->instructor }}</td>
      <td>{{ $instructors->Instructor_2}}</td>
      <td>{{ $instructors->Instructor_3}}</td>
      <td>{{ $instructors->Instructor_4}}</td>
      <td>{{ $instructors->Instructor_5}}</td>
      <td>{{ $instructors->Tutorial_Assistant}}</td>
      <td>{{ $instructors->technical_staff }}</td>
      <td>{{ $instructors->Technical_staff_2}}</td>
      <td>{{ $instructors->course_type}}</td>
      <td>{{ $instructors->semester}}</td>
     
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