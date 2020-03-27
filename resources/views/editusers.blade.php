<html>
<title>
  EDIT USERS
</title>

<style>
div.dataTables_filter{
  padding-left: 65%;
  padding-bottom: 10px;
}

div.dataTables_length label {
  padding-left: 0%;
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
  @php
  $i='1';
  @endphp
  <br>
  @if($title=='student')
  <h3>{{$full}} Students</h3>
  <table class=" hover table table-striped table-bordered" id="myTable">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc; width: 1%;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;"><center>REGISTRATION No.</center></th>
      <th scope="col" style="color:#3490dc; width: 8%;"><center>GENDER</center></th>
      <th scope="col" style="color:#3490dc;"><center>FEES STATUS</center></th>
      <th scope="col" style="color:#3490dc;"><center>FEES DURATION</center></th>
      <th scope="col" style="color:#3490dc;width: 10%">ACTION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($student as $student)
    <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$student->name}}</td>
      <td><center>{{$student->SSN}}</center></td>
       @if($student->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($student->GENDER=="Female")
       <td><center>F</center></td>
       @endif
      <td><center>{{$student->Fees_Status}}</center></td>
      <td><center>{{$student->Fees_Duration}}</center></td>
      <td>
        <a data-toggle="modal" data-target="#edit{{$student->USERID}}" role="button" aria-pressed="true" id="{{$student->USERID}}"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editstudent')}}" name="form1">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="name{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="name{{$student->USERID}}" name="name" value="{{$student->name}}" required="">
  </div>
  </div>
<br>

  <div class="form-group row">
    <label for="regNo{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Registration Number:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="regNo{{$student->USERID}}" name="regNo" value="{{$student->SSN}}" required="">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="Gender{{$student->USERID}}"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Gender" id="Gender{{$student->USERID}}" required="">
    @if($student->GENDER=="Male")
    <option value="Male">M</option>
    <option value="Female">F</option>
    @elseif($student->GENDER=="Female")
    <option value="Female">F</option>
    <option value="Male">M</option>
    @else
    <option value="Male">M</option>
    <option value="Female">F</option>
    @endif
  </select>
  </div>
  </div>
  <br>

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
    @if($student->Fees_Duration=="PAID HALF")
    <option value="PAID HALF">PAID HALF</option>
    <option value="PAID FULL">PAID FULL</option>
    @elseif($student->Fees_Duration=="PAID FULL")
    <option value="PAID FULL">PAID FULL</option>
    <option value="PAID HALF">PAID HALF</option>
    @else
    <option value="PAID HALF">PAID HALF</option>
    <option value="PAID FULL">PAID FULL</option>
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

 <a data-toggle="modal" data-target="#Deactivate{{$student->USERID}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
 <div class="modal fade" id="Deactivate{{$student->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Please Provide Reason Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
{{-- {{route('DeactivateStudent',$student->USERID)}} --}}
           <div class="modal-body">
        <form method="get" action="{{route('DeactivateStudent',$student->USERID)}}">
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
  <span id="message{{$student->USERID}}"></span>

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
@elseif ($title == 'staff')
<h3>{{$full}} Staff</h3>
<table class=" hover table table-striped table-bordered" id="myTable1">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc; width: 1%;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;"><center>EMPLOYEE ID</center></th>
      <th scope="col" style="color:#3490dc; width: 8%;"><center>GENDER</center></th>
      <th scope="col" style="color:#3490dc;">ROLE</th>
      <th scope="col" style="color:#3490dc;"><center>PHONE NUMBER</center></th>
      <th scope="col" style="color:#3490dc;"><center>EMAIL</center></th>
      <th scope="col" style="color:#3490dc;width: 10%">ACTION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($staff as $staff)
    <tr>
      <th scope="row"><center>{{ $i }}.</center></th>
      <td>{{$staff->name}}</td>
      <td><center>{{$staff->SSN}}</center></td>
       @if($staff->GENDER=="Male")
       <td><center>M</center></td>
       @elseif($staff->GENDER=="Female")
       <td><center>F</center></td>
       @endif
       @if($staff->principal=='1')
       <td>Principal</td>
       @elseif($staff->staff=='1')
       <td>Staff</td>
       @elseif($staff->HoD=='1')
       <td>Head of Department</td>
       @elseif($staff->Timetable_Master=='1')
       <td>Timetable Master</td>
       @else
       <td></td>
       @endif
      <td><center>{{$staff->phone_number}}</center></td>
      <td><center>{{$staff->email}}</center></td>
      <td>
        <a data-toggle="modal" data-target="#edit{{$staff->USERID}}" role="button" aria-pressed="true" id="{{$staff->USERID}}"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>

        <div class="modal fade" id="edit{{$staff->USERID}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
        <form method="get" action="{{route('editstudent')}}" name="form1">
  {{csrf_field()}}

  <div class="form-group row">
    <label for="name{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="name{{$staff->USERID}}" name="name" value="{{$staff->name}}" required="">
  </div>
  </div>
<br>

  <div class="form-group row">
    <label for="regNo{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Employee Id:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="regNo{{$staff->USERID}}" name="regNo" value="{{$staff->SSN}}" required="">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="Gender{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    <div class="col-sm-8">
   <select class="custom-select Reason" name="Gender" id="Gender{{$staff->USERID}}">
    @if($staff->GENDER=="Male")
    <option value="Male">M</option>
    <option value="Female">F</option>
    @elseif($staff->GENDER=="Female")
    <option value="Female">F</option>
    <option value="Male">M</option>
    @else
    <option value="Male">M</option>
    <option value="Female">F</option>
    @endif
  </select>
  </div>
  </div>
  <br>

  <div class="form-group row">
      <label for="role{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Role:</strong></label>
      <div class="col-sm-8">
          <select id="role{{$staff->USERID}}" name="role" class="custom-select" required="">
            @if($staff->principal=='1')
          <option value="principal">Principal</option>
           <option value="staff">Staff</option>
           <option value="tmaster">Timetable Master</option>
           <option value="HoD">Head of Department</option>
           @elseif($staff->staff=='1')
           <option value="staff">Staff</option>
            <option value="principal">Principal</option>
           <option value="tmaster">Timetable Master</option>
           <option value="HoD">Head of Department</option>
           @elseif($staff->HoD=='1')
           <option value="HoD">Head of Department</option>
           <option value="staff">Staff</option>
           <option value="principal">Principal</option>
           <option value="tmaster">Timetable Master</option>
           @elseif($staff->Timetable_Master)
           <option value="tmaster">Timetable Master</option>
           <option value="HoD">Head of Department</option>
           <option value="staff">Staff</option>
           <option value="principal">Principal</option>
           @else
            <option value="">Select Role</option>
           <option value="staff">Staff</option>
            <option value="principal">Principal</option>
           <option value="tmaster">Timetable Master</option>
           <option value="HoD">Head of Department</option>
           @endif  
        </select>
    </div>
    </div>
    <br>

  <div class="form-group row">
    <label for="phone{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Phone No.:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="phone{{$staff->USERID}}" name="phone" value="{{$staff->phone_number}}" maxlength = "10" minlength = "10" onkeypress="return (event.charCode >= 48 && event.charCode <= 57 ) || event.charCode==43">
  </div>
  </div>
  <br>

  <div class="form-group row">
    <label for="email{{$staff->USERID}}"  class="col-sm-3 col-form-label"><strong>Email:</strong></label>
    <div class="col-sm-8">
    <input type="text" class="form-control" id="email{{$staff->USERID}}" name="email" value="{{$staff->email}}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onblur="validateEmail(this);" maxlength="25">
  </div>
  </div>
  <br>
  <input type="hidden" id="id{{$staff->USERID}}" name="id" value="{{$staff->USERID}}"/>

  <div class="form-group">
     <center><button type="submit" class="btn btn-primary">SUBMIT</button></center>
    </div>
</form>
</div>
</div>
</div>
</div>

<a data-toggle="modal" data-target="#Deactivate{{$staff->USERID}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
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
@endif

</body>
<script type="text/javascript">
 $(document).ready(function() {
    var table = $('#myTable').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'    
    } );

    var table = $('#myTable1').DataTable( {
        dom: '<"top"l>frt<"bottom"pi>'    
    } );

    $("a").click(function(e) {
      let reg = e.target.id.replace(/\D/g,'');
      var id = $("#Fees"+reg).val();
      console.log(id);
     // var query = $(this).val();
     if (id === 'PAID'){
        $('#durat'+reg) .show();
     }
     else{
        $('#durat'+reg).hide();
     }

});




  $('[name="Fees"]').click(function(e){ 
      var id = $("#"+e.target.id).val();
      let reg = e.target.id.replace(/\D/g,'');
     // var query = $(this).val();
     if (id=='PAID'){
        $('#durat'+reg) .show();
     }
     else{
        $('#durat'+reg).hide();
     }
  });


    $('#myTable').on('click', '[name="buttonB"]', function(e){
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

    $('#myTable1').on('click', '[name="buttonA"]', function(e){
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

});

</script>

</html>