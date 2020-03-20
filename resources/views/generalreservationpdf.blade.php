<html>
<head>
	<title>RESERVATIONS</title>
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
  $i=1;
  use App\reservation;
  if($_GET['category']=='name' && $_GET['Selection'] != 'All' && $_GET['Selection'] != '0' && $_GET['checkbox']=='true' ){
  $reservations=reservation::where('Name',$_GET['Name'])->where('rstatus',$_GET['Selection'])->where('flag','1')->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}
elseif($_GET['category']=='name' && $_GET['Selection'] == 'All' && $_GET['Selection'] != '0' && $_GET['checkbox']=='true'){
  $reservations=reservation::where('Name',$_GET['Name'])->where('flag','1')->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}
elseif($_GET['category']=='name' && $_GET['Selection'] != 'All' && $_GET['Selection'] == '0' && $_GET['checkbox']=='true'){
  $reservations=reservation::where('flag',$_GET['Selection'])->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
  }
elseif($_GET['category']=='1' && $_GET['checkbox']=='true'){
  $reservations=reservation::where('rstatus',$_GET['category'])->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}
elseif($_GET['category']=='0' && $_GET['checkbox']=='true'){
$reservations=reservation::where('flag',$_GET['category'])->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}
elseif($_GET['category']=='-1' && $_GET['checkbox']=='true'){
$reservations=reservation::where('flag',1)->where('rstatus',-1)->whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}
elseif($_GET['category']=='All' && $_GET['checkbox']=='true'){
$reservations=reservation::whereBetween('combined_date',[$_GET['FromDate'],$_GET['ToDate']])->get();
}

elseif($_GET['category']=='name' && $_GET['Selection'] != 'All' && $_GET['Selection'] != '0'  ){
  $reservations=reservation::where('Name',$_GET['Name'])->where('rstatus',$_GET['Selection'])->where('flag','1')->get();
}
elseif($_GET['category']=='name' && $_GET['Selection'] == 'All' && $_GET['Selection'] != '0' ){
  $reservations=reservation::where('Name',$_GET['Name'])->where('flag','1')->get();
}
elseif($_GET['category']=='name' && $_GET['Selection'] != 'All' && $_GET['Selection'] == '0' ){
  $reservations=reservation::where('flag',$_GET['Selection'])->get();
  }
elseif($_GET['category']=='1' ){
  $reservations=reservation::where('rstatus',$_GET['category'])->get();
}
elseif($_GET['category']=='0' ){
$reservations=reservation::where('flag',$_GET['category'])->get();
}
elseif($_GET['category']=='-1' ){
$reservations=reservation::where('flag',1)->where('rstatus',-1)->get();
}
elseif($_GET['category']=='All'){
$reservations=reservation::get();
}

$today=date('j');
$tmonth=date('n');
$tyear=date('Y');
  ?>

@if($_GET['category']=='name')
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br><br>
      @if($_GET['Selection'] != 'All'  && $_GET['checkbox']=='true') 
      @if($_GET['Selection'] =='1')
      Approved Reservations For  {{$_GET['Name']}} From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @elseif($_GET['Selection'] =='-1')
      Pending Reservations For  {{$_GET['Name']}} From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @elseif($_GET['Selection'] =='0')
      Declined Reservations For  {{$_GET['Name']}} From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @endif
      @elseif($_GET['Selection'] == 'All' && $_GET['checkbox']=='true')
      Reservations For {{$_GET['Name']}} From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @elseif($_GET['Selection'] != 'All') 
      @if($_GET['Selection'] =='1')
      Approved Reservations For  {{$_GET['Name']}}
      @elseif($_GET['Selection'] =='-1')
      Pending Reservations For  {{$_GET['Name']}}
      @elseif($_GET['Selection'] =='0')
      Declined Reservations For  {{$_GET['Name']}}
      @endif
      @elseif($_GET['Selection'] == 'All')
      Reservations For {{$_GET['Name']}}
      @endif
      </b></center>
    
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%"><center>S/N</center></th>
      <th scope="col"><center>Venue</center></th>
      <th scope="col"><center>Date</center></th>
      <th scope="col"><center>Time</center></th>
      <th scope="col"><center>Reason</center></th>
      <th scope="col"><center>Remarks</center></th>
       @if($_GET['Selection'] == 'All')
      <th scope="col"><center>Status</center></th>
      @endif
    </tr>
  </thead>
  <tbody>

    @foreach($reservations as $reservation)
    @if($_GET['Selection']=='-1')
    @if(new DateTime($reservation->combined_date) < new DateTime(date('Y-m-d')))
    <tr style="color: red;">
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
      @if($_GET['Selection'] == 'All')
      @if($reservation->rstatus==1)
      <td><center>Approved</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==1))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==0))
      <td><center>Declined</center></td>
      @endif
      @endif
    </tr>
    @else
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
      @if($_GET['Selection'] == 'All')
      @if($reservation->rstatus==1)
      <td><center>Approved</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==1))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==0))
      <td><center>Declined</center></td>
      @endif
      @endif
    </tr>
    @endif
    @elseif($_GET['Selection']=='All')
    @if($reservation->rstatus=='-1' && new DateTime($reservation->combined_date) < new DateTime(date('Y-m-d')))
    <tr style="color: red;">
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
      @if($_GET['Selection'] == 'All')
      @if($reservation->rstatus==1)
      <td><center>Approved</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==1))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==0))
      <td><center>Declined</center></td>
      @endif
      @endif
    </tr>
    @else
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
      @if($_GET['Selection'] == 'All')
      @if($reservation->rstatus==1)
      <td><center>Approved</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==1))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==0))
      <td><center>Declined</center></td>
      @endif
      @endif
    </tr>
    @endif
    @else
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
      @if($_GET['Selection'] == 'All')
      @if($reservation->rstatus==1)
      <td><center>Approved</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==1))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag==0))
      <td><center>Declined</center></td>
      @endif
      @endif
    </tr>
    @endif
    <?php
      $i=$i+1;
      ?>

    @endforeach
</tbody>
</table>

@elseif($_GET['category']=='-1')
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br><br>
      @if($_GET['checkbox']=='true') 
      Pending Reservations From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @else
      Pending Reservations
      @endif
      </b></center>
    
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%"><center>S/N</center></th>
      <th scope="col"><center>Name</center></th>
      <th scope="col"><center>Venue</center></th>
      <th scope="col"><center>Date</center></th>
      <th scope="col"><center>Time</center></th>
      <th scope="col"><center>Reason</center></th>
      <th scope="col"><center>Remarks</center></th>
    </tr>
  </thead>
  <tbody>

    @foreach($reservations as $reservation)
     @if(new DateTime($reservation->combined_date) < new DateTime(date('Y-m-d')))
    <tr style="color: red;">
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Name}}</center></td>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
    </tr>
    @else
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      <td><center>{{$reservation->Remarks}}</center></td>
    </tr>
    @endif
    <?php
      $i=$i+1;
      ?>

    @endforeach
</tbody>
</table>
@elseif($_GET['category']=='0')
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br><br>
      @if($_GET['checkbox']=='true') 
      Declined Reservations From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @else
      Declined Reservations
      @endif
      </b></center>
    
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%"><center>S/N</center></th>
      <th scope="col"><center>Name</center></th>
      <th scope="col"><center>Venue</center></th>
      <th scope="col"><center>Date</center></th>
      <th scope="col"><center>Time</center></th>
      <th scope="col"><center>Decline Reason</center></th>
      {{-- <th scope="col"><center>Remarks</center></th> --}}
    </tr>
  </thead>
  <tbody>

    @foreach($reservations as $reservation)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Name}}</center></td>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->decline_reason}}</center></td>
      {{-- <td><center>{{$reservation->Remarks}}</center></td> --}}
    </tr>
    <?php
      $i=$i+1;
      ?>

    @endforeach
</tbody>
</table>
@elseif($_GET['category']=='1')
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br><br>
      @if($_GET['checkbox']=='true') 
      Approved Reservations From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @else
      Approved Reservations
      @endif
      </b></center>
    
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%"><center>S/N</center></th>
      <th scope="col"><center>Name</center></th>
      <th scope="col"><center>Venue</center></th>
      <th scope="col"><center>Date</center></th>
      <th scope="col"><center>Time</center></th>
      <th scope="col"><center>Reason</center></th>
      {{-- <th scope="col"><center>Remarks</center></th> --}}
    </tr>
  </thead>
  <tbody>

    @foreach($reservations as $reservation)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Name}}</center></td>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      {{-- <td><center>{{$reservation->Remarks}}</center></td> --}}
    </tr>
    <?php
      $i=$i+1;
      ?>

    @endforeach
</tbody>
</table>
@elseif($_GET['category']=='All')
<center><b>UNIVERSITY OF DAR ES SALAAM
      <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
      <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
      <br><br>
      @if($_GET['checkbox']=='true') 
      Reservations From {{$_GET['FromDate']}} To {{$_GET['ToDate']}}
      @else
      Reservations
      @endif
      </b></center>
    
<table class="table table-striped table-bordered" style="width: 100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%"><center>S/N</center></th>
      <th scope="col"><center>Name</center></th>
      <th scope="col"><center>Venue</center></th>
      <th scope="col"><center>Date</center></th>
      <th scope="col"><center>Time</center></th>
      <th scope="col"><center>Reason</center></th>
      <th scope="col"><center>Remarks</center></th>
    </tr>
  </thead>
  <tbody>

    @foreach($reservations as $reservation)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td><center>{{$reservation->Name}}</center></td>
      <td><center>{{$reservation->Venue}}</center></td>
      <td><center>{{$reservation->Date}}/{{$reservation->Month}}/{{$reservation->Year}}</center></td>
      <td><center>{{$reservation->fromTime}} - {{$reservation->toTime}}</center></td>
      <td><center>{{$reservation->Reason}}</center></td>
      @if($reservation->rstatus=='1')
      <td><center>Approved</center></td>
      @elseif(new DateTime($reservation->combined_date) > new DateTime(date('Y-m-d')))
      @if(($reservation->rstatus=='-1') and ($reservation->flag=='1'))
      <td><center>Pending</center></td>
      @elseif(($reservation->rstatus=='-1') and ($reservation->flag=='0'))
      <td><center>Declined</center></td>
      @endif
      @elseif(new DateTime($reservation->combined_date) < new DateTime(date('Y-m-d')) and ($reservation->rstatus=='-1'))
      <td><center>Not Processed</center></td>
      @endif
    </tr>
    <?php
      $i=$i+1;
      ?>

    @endforeach
</tbody>
</table>
@endif




</body>
</html>