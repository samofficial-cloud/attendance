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
  if($_GET['category']=='All' and $_GET['semester']=='All'){
      $events=calendar::where('status','HOLIDAY')->orWhere('status','CANCELLATION')->get();
    }
    elseif($_GET['category']!='All' and $_GET['semester']=='All'){
      $events=calendar::where('status',$_GET['category'])->get();
    }
    elseif($_GET['category']!='All' and $_GET['semester']=='All'){
      $events=calendar::where('status',$_GET['category'])->get();
    }
    elseif($_GET['category']!='All' and $_GET['semester']!='All'){
      $events=calendar::where('status',$_GET['category'])->where('Semester',$_GET['semester'])->get();
    }
      $i='1';

      ?>
      <div class="col-xs-9">
        <center><b>UNIVERSITY OF DAR ES SALAAM
                 <br><br><img src="{{public_path('/img/logo_udsm.jpg')}}" height="70px"></img>
                  <br>COLLEGE OF INFORMATION AND COMMUNICATION TECHNOLOGIES
                  <h5>@if(($_GET['category']=='All') and ($_GET['semester']=='All'))
                  LIST OF ALL EVENTS FOR THE ACADEMIC YEAR 2019/2020
                @elseif(($_GET['category']!='All') and ($_GET['semester']=='All'))
                @if(($_GET['category']=='HOLIDAY'))
                LIST OF PUBLIC HOLIDAYS FOR THE ACADEMIC YEAR 2019/2020
                @elseif($_GET['category']=='CANCELLATION')
                LIST OF CLASS CANCELLATIONS FOR THE ACADEMIC YEAR 2019/2020
                @endif
                @elseif($_GET['category']=='All'and ($_GET['semester']!='All'))
                LIST OF ALL EVENTS IN SEMESTER {{$_GET['semester']}} 2019/2020
                 @elseif($_GET['category']!='All'and ($_GET['semester']!='All'))
                 @if(($_GET['category']=='HOLIDAY'))
                LIST OF PUBLIC HOLIDAYS IN SEMESTER {{$_GET['semester']}} 2019/2020
                @elseif($_GET['category']=='CANCELLATION')
                LIST OF CLASS CANCELLATIONS IN SEMESTER {{$_GET['semester']}} 2019/2020
                @endif
                @endif
              </h5>
                 </b>
               </center>  
 
    
      </div>

      <table class="hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col" style="width: 5%;"><center>S/N</center></th>
      <th scope="col"><center>Day</center></th>
      <th scope="col"><center>Date</center></th>
      @if($_GET['category']!='HOLIDAY')
      <th scope="col"><center>Duration</center></th>
      @endif
      @if($_GET['category']=='All')
      <th scope="col"><center>Event</center></th>
      @endif
      @if($_GET['category']=='All' or $_GET['category']=='HOLIDAY')
      <th scope="col"><center>Holiday Name</center></th>
      @endif
    </tr>
  </thead>
  <tbody>
    @foreach($events as $events)
    <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td><center>{{$events->Day}}</center></td>
      <td><center>{{$events->Date}}/{{$events->Month}}/{{$events->Year}}</center></td>
      @if($_GET['category']!='HOLIDAY')
      @if(strtotime($events->FromTime) ==strtotime("07:00") and strtotime($events->ToTime) == strtotime("20:00"))
       <td><center>All Day</center></td>
      @else
       <td><center>{{$events->FromTime}}-{{$events->ToTime}}</center></td>
       @endif
       @endif

       @if($_GET['category']=='All')
       @if($events->status=='HOLIDAY')
      <td><center>Public Holiday</center></td>
      @elseif($events->status=='CANCELLATION')
      <td><center>Cancellation</center></td>
      @else
      <td></td>
      @endif
      @endif
      @if($_GET['category']=='All' or $_GET['category']=='HOLIDAY')
      <td><center>{{$events->holiday_name}}</center></td>
      @endif
      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    </tbody>
  </table>
</body>
</html>