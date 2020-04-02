<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
div.dataTables_filter{
  padding-left:700px;
  padding-bottom:5px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;
    padding-left: 40%;  
}


div.dataTables_length select { 
  height:25px;
  width:10px;
  font-size: 70%;
}
table.dataTable {
font-family: "Nunito", sans-serif;
    font-size: 15px;  
  }
  table.dataTable.no-footer {
    border-bottom: 0px solid #111;
}

hr {
    margin-top: 0rem;
    margin-bottom: 2rem;
    border: 0;
    border: 2px solid #505559;
}
.form-inline .form-control {
    width: 100%;
}
.form-inline .custom-select {
    width: 100%;
}
.form-inline label {
  justify-content: left;
}

</style>
<body>
<?php
	use App\carry_optional_student;
	use App\courses;
	$students=carry_optional_student::where('course',$_GET['courseid'])->orderBy('name','asc')->get();
$full=courses::select('course_name')->where('course',$_GET['courseid'])->value('course_name');
	$i=1;
  use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->get();
?>
<h2>{{$_GET['courseid']}} - {{$full}}</h2>
<br>
<table class=" hover table table-striped table-bordered" id="myTable" style="width: 90%">
	<thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc; width: 1%;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;"><center>REGISTRATION NO.</center></th>
      <th scope="col" style="color:#3490dc;"><center>CATEGORY</center></th>
      <th scope="col" style="color:#3490dc;"><center>ACTION</center></th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
    	<td><center>{{ $i }}.</center></td>
    	<td>{{$student->name}}</td>
    	<td><center>{{$student->reg_no}}</center></td>
    	<td>{{$student->category}}</td>
      <td>
        <a data-toggle="modal" data-target="#edit{{$student->id}}" role="button" aria-pressed="true" id="{{$student->id}}"><i class="fa fa-edit" style="font-size:30px; color: green;"></i></a>
        <div class="modal fade" id="edit{{$student->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h5 class="modal-title">Complete the Form Below</h5></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

           <div class="modal-body">
            <form method="get" action="{{ route('optionstudentsedit') }}" >
  {{csrf_field()}}
  <div class="form-group row">
    <label for="name{{$student->id}}"  class="col-sm-3 col-form-label"><strong>Name:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="name{{$student->id}}" name="name" value="{{$student->name}}" readonly="">
  </div>
  </div>
<br>
<div class="form-group row">
    <label for="regNo{{$student->id}}"  class="col-sm-3 col-form-label"><strong>Registration NO:</strong></label>
    <div class="col-sm-9">
    <input type="text" class="form-control" id="regNo{{$student->id}}" name="regNo" value="{{$student->reg_no}}" readonly="">
  </div>
  </div>
  <br>
  <div class="form-group row">
  <label for="courseid{{$student->id}}" class="col-sm-3 col-form-label"><strong>Course Id:</strong></label>
      <div class="col-sm-9">
      <select name="courseid" id="courseid{{$student->id}}" class="custom-select Reason" required="">
      <option value="{{$student->course}}">{{$student->course}}</option>
       @foreach($mycourse as $mycoursess)
       @if($mycoursess->course != $student->course)
    <option value="{{$mycoursess->course}}">{{$mycoursess->course}}</option>
    @endif
    @endforeach
      </select>
      </div>
  </div>
  <br>
  <div class="form-group row">
  <label for="category{{$student->id}}" class="col-sm-3 col-form-label"><strong>Category:</strong></label>
      <div class="col-sm-9">
      <select name="category" id="category{{$student->id}}" class="custom-select Reason" required="">
   @if($student->category=='Optional')
   <option value="Optional">Optional</option>
    <option value="Carried">Carried</option>
    @else
    <option value="Carried">Carried</option>
     <option value="Optional">Optional</option>
     @endif
      </select>
      </div>
  </div>
  <input type="text" name="id" value="{{$student->id}}" hidden="">
  <br>
  <div align="right">
  <button class="btn btn-primary" type="submit">Submit</button>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>
</div>
</div>

<a data-toggle="modal" data-target="#Delete{{$student->id}}" role="button" aria-pressed="true"><i class="fa fa-trash" aria-hidden="true" style="font-size:30px; color:red;"></i></a>
<div class="modal fade" id="Delete{{$student->id}}" role="dialog">

        <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <b><h3 class="modal-title" style="color: red;">WARNING!!</h3></b>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <p style="font-size: 20px;">Are you sure you want to delete this student?</p>
  <div align="right">
    <a class="btn btn-primary" href="{{route('optionstudentsdelete',$student->id)}}">Proceed</a>
  <button class="btn btn-danger" type="button" class="close" data-dismiss="modal">Cancel</button>
</div>
          </div>
        </div>
      </div>
    </div>
      </td>
    </tr>
    @php
    $i=$i+1;
    @endphp
    @endforeach
</tbody>
</table>
<script type="text/javascript">
 $(document).ready(function() {
    var table = $('#myTable').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>'     
    } );

});
</script>
</body>
</html>