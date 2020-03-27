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

  $deptId=department::select('DEPTID')->where('DEPTNAME',$_GET['rid'])->value('DEPTID');
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','0')->orderBy('NAME','asc')->get();
        $full= program::select('full')->where('initial',$_GET['rid'])->value('full');
        $i='1';

        use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
        ?>

        <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>{{$full}} <br>List of Inactive Students
    </b>
  </center>
<br>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
     <tr>
      <th scope="col">S/N</th>
      <th scope="col">NAME</th>
      <th scope="col">SSN</th>
      <th scope="col">GENDER</th>
      <th scope="col">FEES STATUS</th>
      <th scope="col">REASON</th>
      <th scope="col">REMARKS</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
      <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td>{{$student->SSN}}</td>
      @if($student->GENDER=="Male")
       <td>M</td>
       @elseif($student->GENDER=="Female")
       <td>F</td>
       @endif
      <td>{{$student->Fees_Status}}</td>
      <td>{{$student->reasons}}</td>
      <td>{{$student->remarks}}</td>
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