<html>
<title>DEACTIVATE USERS</title>

<style>
div.dataTables_filter{
  padding-left:730px;
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

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}
</style>

<body>
  
<br>
<?php
$i='1';
?>
<div class="tab">
  <button class="tablinks" onclick="openInstructors(event, 'staff')" id="defaultOpen"><strong>STAFFS</strong></button>
  <button class="tablinks" style="float: right;" onclick="openInstructors(event, 'student')"><strong>STUDENTS</strong></button>
</div>
<div id="staff" class="tabcontent">
   <br>
  <h4>1. STAFFS</h4>
  <table id="myTable" class="hover table table-striped table-bordered">
     <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">Employee ID.</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">DEPARTMENT</th>
      <th scope="col" style="color:#3490dc;">ACTION</th>
    </tr>
  </thead>
  <div id="loading" style="margin: auto;"></div>
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
      <td>
        <center><a data-toggle="modal" data-target="#Deactivate{{$staff->USERID}}" class="btn btn-sm btn-danger" role="button" aria-pressed="true">Deactivate <i class="fa fa-trash" aria-hidden="true" style="font-size:16px; color:white;"></i></a></center>
 <div class="modal fade" id="Deactivate{{$staff->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Please Provide Reason Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
{{-- {{route('Deactivatestaff',$staff->USERID)}} --}}
           <div class="modal-body">
        <form method="get" action="{{route('DeactivateStudent',$staff->USERID)}}" id="form{{$staff->USERID}}">
  {{csrf_field()}}

    <div class="form-group row">
    <label for="reason{{$staff->USERID}}"  class="col-sm-2 col-form-label"><strong>Reason:</strong></label>
    <div class="col-sm-10">
   <select class="custom-select Reason" name="reasons" id="reason{{$staff->USERID}}" required="">
    <option value=""></option>
     <option value="Studies">Studies</option>
    <option value="Holiday">Holiday</option>
    <option value="Training">Training</option>
    <option value="Others">Others</option>
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="remarks{{$staff->USERID}}"  class="col-sm-2 col-form-label"><strong>Remarks(s):</strong></label>
    <div class="col-sm-10">
    <textarea class="form-control" name="remarks" id="remarks{{$staff->USERID}}" rows="3"></textarea>
  </div>
  </div>
  <span id="message{{$staff->USERID}}"></span>

  <input type="hidden" id="idA{{$staff->USERID}}" name="idA" value="{{$staff->USERID}}"/>

  <div class="form-group">
     <center><button type="submit" id="uy{{$staff->USERID}}" name="buttonA" class="btn btn-primary">SUBMIT</button></center>
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

<div id="student" class="tabcontent">
 <h4> 2. STUDENTS</h4>
 <?php
$i='1';

 ?>
 <table id="myTable1" class="hover table table-striped table-bordered" style="width: 100%">
     <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">Employee ID.</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">PROGRAM</th>
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
      <td>
       <center><a data-toggle="modal" data-target="#Deactivate{{$student->USERID}}" class="btn btn-sm btn-danger" role="button" aria-pressed="true">Deactivate <i class="fa fa-trash" aria-hidden="true" style="font-size:16px; color:white;"></i></a></center>
       <div class="modal fade" id="Deactivate{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Please Provide Reason Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
{{-- {{route('Deactivatestudent',$student->USERID)}} --}}
           <div class="modal-body">
        <form method="get" action="{{route('DeactivateStudent',$student->USERID)}}" id="form1{{$student->USERID}}">
  {{csrf_field()}}

    <div class="form-group row">
    <label for="reason{{$student->USERID}}"  class="col-sm-2 col-form-label"><strong>Reason:</strong></label>
    <div class="col-sm-10">
   <select class="custom-select Reason" name="reasons" id="reason{{$student->USERID}}" required="">
    <option value=""></option>
     <option value="Postponed Semester">Postponed Semester</option>
     <option value="Postponed Year">Postponed Year</option>
    <option value="Discontinued">Discontinued</option>
    <option value="Others">Others</option>
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="remarks{{$student->USERID}}"  class="col-sm-2 col-form-label"><strong>Remarks(s):</strong></label>
    <div class="col-sm-10">
    <textarea class="form-control" name="remarks" id="remarks{{$student->USERID}}" rows="3"></textarea>
  </div>
  </div>
  <span id="messageA{{$student->USERID}}"></span>

  <input type="hidden" id="idA{{$student->USERID}}" name="idA" value="{{$student->USERID}}"/>

  <div class="form-group">
     <center><button type="submit" id="uy{{$student->USERID}}" name="buttonB" class="btn btn-primary">SUBMIT</button></center>
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
  $(document).ready(function() {
    $(document).ajaxSend(function(){
    $("#loading").fadeIn(250);
});
$(document).ajaxComplete(function(){
    $("#loading").fadeOut(250);
});
 
    var table = $('#myTable').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'
         
    } );


    var table = $('#myTable1').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'
        
         
    } );
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
<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').on('click', '[name="buttonA"]', function(e){
      var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
      var reason= $('#reason'+reg).val();
      var remark = $('#remarks'+reg).val();
     if((reason == 'Others') && (remark == '')){
       $('#message'+reg).show();
      var message=document.getElementById('message'+reg);
        message.style.color='red';
        message.innerHTML="Remark is required";
        return false;
     }
     else{
      $('#message'+reg).hide();
      return true;
     }


    });

    $('#myTable1').on('click', '[name="buttonB"]', function(e){
      var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
      var reason= $('#reason'+reg).val();
      var remark = $('#remarks'+reg).val();
     if((reason == 'Others') && (remark == '')){
       $('#messageA'+reg).show();
      var message=document.getElementById('messageA'+reg);
        message.style.color='red';
        message.innerHTML="Remark is required";
        return false;
     }
     else{
      $('#messageA'+reg).hide();
      return true;
     }


    });


     });
</script>




