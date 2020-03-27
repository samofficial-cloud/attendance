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
 if($_GET['category']!='100'){
 if($_GET['Selection']!='All'){
   $staffs=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID',$_GET['category'])->where('flag',$_GET['Selection'])->orderBy('NAME','asc')->get();
 }
 else{
  $staffs=userinfo::where('TITLE','staff')->where('DEFAULTDEPTID',$_GET['category'])->orderBy('NAME','asc')->get();
 }
}
else{
  if($_GET['Selection']!='All'){
   $staffs=userinfo::where('TITLE','staff')->where('flag',$_GET['Selection'])->orderBy('NAME','asc')->get();
 }
 else{
  $staffs=userinfo::where('TITLE','staff')->orderBy('NAME','asc')->get();
 }
}
   $j='1';
   use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');
  ?>
  <div class="container">
    <center><b>{{$camistitle}}
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br>
      @if($_GET['category']==32)
      DEPARTMENT OF ELECTRONICS AND TELECOMMUNICATIONS ENGINEERING
      @elseif($_GET['category']==31)
      DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING 
      @elseif($_GET['category']=='100' and $_GET['Selection']=='All')
      LIST OF ALL CoICT STAFF
      @elseif($_GET['category']=='100' and $_GET['Selection']=='1')
      LIST OF ALL ACTIVE COICT STAFF
      @elseif($_GET['category']=='100' and $_GET['Selection']=='0')
      LIST OF ALL INACTIVE COICT STAFF
      @endif
      
      @if($_GET['category']!='100')
      @if($_GET['Selection']=='1')
         <br> List of Active Staff
     @elseif($_GET['Selection']=='0')
          <br>List of Inactive Staff
     @elseif($_GET['Selection']=='All')
          <br>List of All Staff
    @endif
    @endif
    </b>
  </center>
<br>
<table class="table table-striped table-bordered" id="myTable" style="width: 100%">
  @if($_GET['category']!=100)
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc; width: 3%;">S/N</th>
     <th scope="col"  style="color:#3490dc;width: 20%;"><center>NAME</center></th>
      <th scope="col"  style="color:#3490dc;width: 13%;"><center>EMPLOYEE ID</center></th>
       <th scope="col"  style="color:#3490dc;width: 10%;"><center>GENDER</center></th>
      <th scope="col"  style="color:#3490dc;"><center>PHONE NUMBER</center></th>
      <th scope="col"  style="color:#3490dc;"><center>EMAIL</center></th>
      @if($_GET['Selection']==0)
      <th scope="col"  style="color:#3490dc;"><center>REASON</center></th>
      <th scope="col"  style="color:#3490dc;"><center>REMARKS</center></th>
      @endif
    </tr>
  </thead>
  <tbody>
     @foreach($staffs as $staff)
     @if($_GET['Selection']=='All' and $staff->flag==0)
     <tr style="color: red;">
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
      <td>{{ $staff->phone_number}}</td>
      <td>{{ $staff->email}}</td>
      @if($_GET['Selection']==0)
      <td><center>{{$staff->reasons}}</center></td>
      <td>{{$staff->remarks}}</td>
      @endif
       </tr>
       @else
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
      <td>{{ $staff->phone_number}}</td>
      <td>{{ $staff->email}}</td>
      @if($_GET['Selection']==0)
      <td><center>{{$staff->reasons}}</center></td>
      <td>{{$staff->remarks}}</td>
      @endif
       </tr>
       @endif
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>

@elseif($_GET['category']==100)
  <thead class="thead-dark">
    <tr>
      <th scope="col"  style="color:#3490dc;">S/N</th>
     <th scope="col"  style="color:#3490dc;">NAME</th>
      <th scope="col"  style="color:#3490dc;">EMPLOYEE ID</th>
       <th scope="col"  style="color:#3490dc;">DEPARTMENT</th>
       <th scope="col"  style="color:#3490dc;">GENDER</th>
      <th scope="col"  style="color:#3490dc;">PHONE NUMBER</th>
      <th scope="col"  style="color:#3490dc;">EMAIL</th>
    </tr>
  </thead>
  <tbody>
     @foreach($staffs as $staff)
     @if($_GET['Selection']!='All')
      <tr>
      <th scope="row">{{ $j }}.</th>
       <td>{{$staff->name}}</td>
      <td>{{ $staff->SSN}}</td>
      @if($staff->DEFAULTDEPTID==31)
      <td>CSE</td>
      @elseif($staff->DEFAULTDEPTID==32)
      <td>ETE</td>
      @endif
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
       @elseif($_GET['Selection']=='All')
       @if($staff->flag==0)
       <tr style="color: red;">
      <th scope="row">{{ $j }}.</th>
       <td>{{$staff->name}}</td>
      <td>{{ $staff->SSN}}</td>
      @if($staff->DEFAULTDEPTID==31)
      <td>CSE</td>
      @elseif($staff->DEFAULTDEPTID==32)
      <td>ETE</td>
      @endif
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
       @elseif($staff->flag==1)
       <tr>
      <th scope="row">{{ $j }}.</th>
       <td>{{$staff->name}}</td>
      <td>{{ $staff->SSN}}</td>
      @if($staff->DEFAULTDEPTID==31)
      <td>CSE</td>
      @elseif($staff->DEFAULTDEPTID==32)
      <td>ETE</td>
      @endif
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
       @endif
       @endif
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
@endif

</table>
</div>
</body>
</html>
