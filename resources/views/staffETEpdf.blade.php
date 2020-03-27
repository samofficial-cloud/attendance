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
   $staffETE=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID','32')->orderBy('NAME','asc')->get();
   $j='1';
   use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
  ?>
  <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATIONS ENGINEERING STAFF LIST
    </b>
  </center>
<br>
<table class="table table-striped table-bordered" id="myTable" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
     <th scope="col"  style="color:#3490dc;">NAME</th>
      <th scope="col"  style="color:#3490dc;"><center>EMPLOYEE ID</center></th>
       <th scope="col"  style="color:#3490dc;"><center>GENDER</center></th>
      <th scope="col"  style="color:#3490dc;"><center>PHONE NUMBER</center></th>
      <th scope="col"  style="color:#3490dc;"><center>EMAIL</center></th>
    </tr>
  </thead>
  <tbody>
     @foreach($staffETE as $staff)
      <tr>
      <th scope="row">{{ $j }}.</th>
       <td>{{$staff->name}}</td>
      <td><center>{{ $staff->SSN}}</center></td>
      @if($staff->GENDER =='Male')
      <td><center>M</center></td>
      @elseif($staff->GENDER =='Female')
      <td><center>F</center></td>
      @else
      <td></td>
      @endif
      <td><center>{{ $staff->phone_number}}</center></td>
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
