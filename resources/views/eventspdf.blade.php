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
  use App\calendar;
      $events=calendar::where('status','HOLIDAY')->orWhere('status','CANCELLATION')->get();
      $i='1';
      use App\camis_configuration;
   $camistitle=camis_configuration::select('camis_title')->value('camis_title');

      ?>
      <div class="col-xs-9">
        <center><b>{{$camistitle}}
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <h5>LIST OF EVENTS IN SEMESTER 2</h5>
                 </b>
               </center>  
 
    
      </div>

      <table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Day</th>
      <th scope="col">Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Event</th>
      <th scope="col">Holiday Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($events as $events)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$events->Day}}</td>
      <td>{{$events->Date}}/{{$events->Month}}/{{$events->Year}}</td>
      @if(strtotime($events->FromTime) ==strtotime("07:00") and strtotime($events->ToTime) == strtotime("20:00"))
       <td>All Day</td>
      @else
       <td>{{$events->FromTime}}-{{$events->ToTime}}</td>
       @endif
      @if($events->status=='HOLIDAY')
       <td>Public Holiday</td>
       @elseif($events->status=='CANCELLATION')
       <td>Class Cancellation</td>
       @else
       <td></td>
       @endif
      <td>{{$events->holiday_name}}</td>
      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    </tbody>
  </table>
</body>
</html>