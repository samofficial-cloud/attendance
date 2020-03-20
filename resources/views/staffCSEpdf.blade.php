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
 use App\userinfo;
   $staffCSE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','31')->orderBy('NAME','asc')->get();
   $j='1';
  ?>
  <div class="container">
    <center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING STAFF LIST
    </b>
  </center>
<br>
<table class="table table-striped table-bordered" id="myTable" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
     <th scope="col"  style="color:#3490dc;">NAME</th>
     <th scope="col"  style="color:#3490dc;">EMPLOYEE ID</th>
     <th scope="col"  style="color:#3490dc;">GENDER</th>
      <th scope="col"  style="color:#3490dc;">PHONE NUMBER</th>
      <th scope="col"  style="color:#3490dc;">EMAIL</th>
    </tr>
  </thead>
  <tbody>
     @foreach($staffCSE as $staff)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td>{{$staff->name}}</td>
      <td>{{ $staff->SSN}}</td>
      @if($staff->GENDER =='Male')
      <td>M</td>
      @elseif($staff->GENDER =='Female')
      <td>F</td>
      @else
      <td></td>
      @endif
      <td>{{ $staff->phone_number}}</td>
      <td>{{ $staff->email}}</td>
       </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>
</body>
</html>
