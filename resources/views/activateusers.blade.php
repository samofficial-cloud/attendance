<html>
<title>
  ACTIVATE USERS
</title>

<style>
div.dataTables_filter{
  padding-left:795px;
  padding-bottom:20px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;  
}

div.dataTables_length select { 
  height:25px;
  width:10px;
  font-size: 70%;
}
table.dataTable {
font-family: "Nunito", sans-serif;
    font-size: 0.9rem;
    font-weight: 400;
    
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

div.dt-buttons.buttons{
  padding-left:740px;
  justify-content: right;
}

div.dt-buttons {
        clear: both;
    }

.dataTables_wrapper .dt-buttons {
  float:none;  
  text-align:center;
}

.dataTables_wrapper .dataTables_info {
  padding-top: 0px;
}

.form-inline .form-control {
    width: 100%;
}
.form-inline .custom-select {
    width: 100%;
}

.form-inline label {
  justify-content:left;
}

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}


</style>
 
<body>
  <div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'staff')" id="defaultOpen"><strong>STAFFS</strong></button>
  <button class="tablinks" onclick="openInstructors(event, 'student')"><strong>STUDENTS</strong></button>
</div>
<div id="staff" class="tabcontent">

<br>
<?php
$i='1';
?>
<div id="loading" style="margin: auto;"></div>
  <h4>1. STAFFS</h4>
  <table id="myTable" class="hover table table-striped table-bordered">
     <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">Employee ID.</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">DEPARTMENT</th>
      <th scope="col" style="color:#3490dc;">REASON</th>
      <th scope="col" style="color:#3490dc;">REMARKS</th>
      <th scope="col" style="color:#3490dc;">ACTION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($staff as $staff)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$staff->name}}</td>
      <td>{{$staff->SSN}}</td>
       @if($staff->GENDER=="Male")
       <td>M</td>
       @elseif($staff->GENDER=="Female")
       <td>F</td>
       @endif
      <td>{{$staff->DEPTNAME}}</td>
      <td>{{$staff->reasons}}</td>
      <td>
            @if(count($staff->remarks)>0)

        <center> <a data-toggle="modal" data-target="#Remarks{{$staff->USERID}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW <i class="fa fa-eye" style="font-size:14px; color: black;"></i></a></center>

        <div class="modal fade" id="Remarks{{$staff->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$staff->remarks}}
            

</div>
</div>
</div>
</div>
@endif
        </td>

      <td>
        <a data-toggle="modal" data-target="#Activate{{$staff->USERID}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Activate  <i class="fa fa-check-circle" style="font-size:16px; color: green;"></i></a>

        <div class="modal fade" id="Activate{{$staff->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title" style="color:red;">WARNING!!!</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <h5>Are you sure you want to activate this Staff?</h5>
            <hr style="border: 1px;">
<a class="btn btn-sm btn-secondary" style="float: left;" href="/activateuser">Back</a>
<a class="btn btn-sm btn-info" style="float: right;" href="{{route('ActivateStaff',$staff->USERID)}}">Proceed</a>

</div>
</div>
</div>
</div>


      </td>
    </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
  </table>
</div>

<div id="student" class="tabcontent">
  <br>
 <h4> 2. STUDENTS</h4>
 <?php
$i='1';

 ?>
 <table id="myTable1" class="hover table table-striped table-bordered" style="width: 100%">
     <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">REGISTRATION No.</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">PROGRAM</th>
      <th scope="col" style="color:#3490dc;">REASON</th>
      <th scope="col" style="color:#3490dc;">REMARKS</th>
      <th scope="col" style="color:#3490dc;">ACTION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($student as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td>{{$student->SSN}}</td>
       @if($student->GENDER=="Male")
       <td>M</td>
       @elseif($student->GENDER=="Female")
       <td>F</td>
       @endif
      <td>{{$student->DEPTNAME}}</td>
      <td>{{$student->reasons}}</td>
      <td>
         @if(count($student->remarks)>0)
        <center> <a data-toggle="modal" data-target="#Remarks{{$student->USERID}}" role="button" aria-pressed="true" class="btn btn-sm btn-info">VIEW <i class="fa fa-eye" style="font-size:14px; color: black;"></i></a></center>

        <div class="modal fade" id="Remarks{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">REMARKS</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            {{$student->remarks}}
            

</div>
</div>
</div>
</div>
@endif
      </td>
      <td>
       <center><a data-toggle="modal" data-target="#edit{{$student->USERID}}" class="btn btn-sm btn-success" role="button" aria-pressed="true">Activate <i class="fa fa-check-circle" style="font-size:16px; color: green;"></i></a></center>

        <div class="modal fade" id="edit{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('ActivateStudent')}}">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="regNo{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Registration Number:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="regNo{{$student->USERID}}" name="regNo" value="{{$student->SSN}}" readonly="">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="name{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="name{{$student->USERID}}" name="name" value="{{$student->name}}" readonly="">
  </div>
  </div>
<br>

<div class="form-group row">
    <label for="Gender{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="Gender{{$student->USERID}}" name="Gender" value="{{$student->GENDER}}" readonly="">
  </div>
  </div>
  <br>

  <div class="form-group row">
  <label for="dprogram{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="dprogram" id="dprogram{{$student->USERID}}" required="">
    <option value="">Select Degree Program</option>
     <option value="18">BSc. in Business Information Technology year 1</option>
    <option value="19">BSc. in Business Information Technology year 2</option>
    <option value="20">BSc. in Business Information Technology year 3</option>
    <option value="5"> B.Sc. in Computer Engineering and Information Technology year 1</option>
    <option value="6">B.Sc. in Computer Engineering and Information Technology year 2</option>
    <option value="7">B.Sc. in Computer Engineering and Information Technology year 3</option>
    <option value="4">B.Sc. in Computer Engineering and Information Technology year 4</option>
    <option value="11">B.Sc. in Computer Science year 1</option>
    <option value="12">B.Sc. in Computer Science year 2</option>
    <option value="13">B.Sc. in Computer Science year 3</option>
    <option value="21">B.Sc. with Computer Science 1</option>
    <option value="22">B.Sc. with Computer Science</option>
    <option value="23">B.Sc. with Computer Science 3</option>
    <option value="28">Certificate in Computer Science</option>
    <option value="29">Diploma in Computer Science year 1</option>
    <option value="30">Diploma in Computer Science year 2</option>
    <option value="24">B.Sc. in Electronic Engineering year 1</option>
    <option value="25">B.Sc. in Electronic Engineering year 2</option>
    <option value="26">B.Sc. in Electronic Engineering year 3</option>
    <option value="27">B.Sc. in Electronic Engineering year 4</option>
    <option value="8">B.Sc. in Electronic Science and Communication year 1</option>
    <option value="9">B.Sc. in Electronic Science and Communication year 2</option>
    <option value="10">B.Sc. in Electronic Science and Communication year 3</option>
    <option value="14">B.Sc. in Telecommunications Engineering year 1</option>
    <option value="15">B.Sc. in Telecommunications Engineering year 2</option>
    <option value="16">B.Sc. in Telecommunications Engineering year 3</option>
    <option value="17">B.Sc. in Telecommunications Engineering year 4</option>
  </select>
  </div>
  </div>


  <div class="form-group row">
    <label for="Fees{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Fees Status:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Fees" id="Fees{{$student->USERID}}" required="">
    @if($student->Fees_Status=="PAID")
    <option value="PAID">PAID</option>
    <option value="NOT PAID">NOT PAID</option>
    @elseif($student->Fees_Status=="NOT PAID")
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @else
    <option value="NOT PAID">NOT PAID</option>
    <option value="PAID">PAID</option>
    @endif
  </select>
  </div>
  </div>
  <br>

   <div class="form-group row" id="durat{{$student->USERID}}">
    <label for="Fees_Duration{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Fees Duration:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Fees_Duration" id="Fees_Duration{{$student->USERID}}">
    @if($student->Fees_Status=="SEMESTER 1")
    <option value="SEMESTER 1">SEMESTER 1</option>
    <option value="FULL">FULL</option>
    @elseif($student->Fees_Duration=="FULL")
    <option value="FULL">FULL</option>
    <option value="SEMESTER 1">SEMESTER 1</option>
    @else
    <option value="SEMESTER 1">SEMESTER 1</option>
    <option value="FULL">FULL</option>
    @endif
  </select>
  </div>
  </div>
  
  <br>


  <input type="hidden" id="id{{$student->USERID}}" name="id" value="{{$student->USERID}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>

</form>
</div>
</div>
</div>
</div>
      </td>
    </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
  </table>
</div>
</body>

<script type="text/javascript">
  $(document).ajaxSend(function(){
    $("#loading").fadeIn(250);
});
$(document).ajaxComplete(function(){
    $("#loading").fadeOut(250);
});
  $(document).ready(function() {
 
    var table = $('#myTable').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'
        
         
    } );


    var table = $('#myTable1').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'
        
         
    } );

  
  $('[name="Fees"]').click(function(e){ 
      var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
     if (id=='PAID'){
        $('#durat'+reg) .show();
     }
     else{
        $('#durat'+reg).hide();
     }
  });






});
</script>
<script type="text/javascript">
  function openInstructors(evt, evtName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(evtName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
</html>
