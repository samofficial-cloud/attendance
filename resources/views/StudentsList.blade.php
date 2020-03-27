@extends('layouts.app')

@section('title')
  STUDENTS
@endsection

@section('style')
<style>
div.dataTables_filter{
  padding-left:760px;
  padding-bottom:20px;
}

div.dataTables_length label {
    font-weight: normal;
    text-align: left;
    white-space: nowrap;
    display: inline-block;  
}

div.dataTables_length select { 
  height:30px;
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

</style>

@endsection 

@section('content')

<div class="classname">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  
    @if(Auth::user()->staff==1)
    <div class="container">
 <center><ul class="nav1 nav-tabs" style="width: 84%">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
  </li>
</ul>
</center>
</div>
@elseif(Auth::user()->principal==1)
<div class="container" style="max-width: 1165px;">
  <center><ul class="nav1 nav-tabs">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">CSE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">ETE-INSTRUCTORS</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS</a>
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES</a>
          <a class="dropdown-item" style="color:#060606" href="/TimetableManagement">TIMETABLE</a>
          <a class="dropdown-item" style="color:#060606" href="/events">EVENTS</a>
        </div>
      </li>

</ul>
</center>
</div>
@elseif(Auth::user()->Timetable_Master==1)
<div class="container2">
  <center><ul class="nav1 nav-tabs" style="padding-left: 35px;">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>
      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/events">EVENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>

  </ul>
  </center>
</div>
@elseif(Auth::user()->HoD==1)
<div class="container">
  <center><ul class="nav1 nav-tabs" style="align-content: center; width: 93%">
  <li class="nav-item">
   <a class="nav-link" style="color:#060606"href="/">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/timetable">TIMETABLE</a>
    </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/venue">VENUE RESERVATION</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link active" style="color:#060606" href="/students">STUDENTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606"href="/CSE-instructors">INSTRUCTORS</a>
  </li>

      <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/coursee">COURSES</a>
  </li>
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color:#060606" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MANAGE
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::user()->DEFAULTDEPTID==31)
          <a class="dropdown-item" style="color:#060606"href="/instructors-CSE">INSTRUCTORS MANAGEMENT</a>
          @elseif(Auth::user()->DEFAULTDEPTID==32)
          <a class="dropdown-item" style="color:#060606"href="/instructors-ETE">INSTRUCTORS MANAGEMENT</a>
          @endif
          <a class="dropdown-item" style="color:#060606" href="/courses">COURSES MANAGEMENT</a>
          <a class="dropdown-item" style="color:#060606" href="/managestudents">STUDENTS MANAGEMENT</a>
        </div>
      </li>
    
</ul>
</center>
</div>

@endif


</nav>
</div>
<br>

<?php
$i='1';
use App\courses;
use App\department;
use App\userinfo;
use App\program;
use App\lecturer;
$course=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->where('course_type','core')->get();
$program=courses::select('program','course_name')->where('course',$_GET['rid'])->where('criteria','Core')->get();
$course_name=courses::select('course_name')->where('course',$_GET['rid'])->where('criteria','Core')->value('course_name');
$total=count($program);
$a='1';
$id=$_GET['rid'];
?>




<div class="container2">
  <div class="row">

<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5>Choose Course ID</h5>
    @foreach($course as $course)
    <a class="btn btn-light color_nav2" href="/studentsList?rid={{$course->course}}" role="button"style="background-color: #d6d6d6;">
    {{$course->course}}
  </a>
    <br>
    @endforeach
    <br>

    <h5>Choose Degree Program</h5>
     <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CS
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=CS1(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS1</a>
     <a href="/studentsList2?rid=CS2(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS2</a>
    <a href="/studentsList2?rid=CS3(in)" class="list-group-item list-group-item-action dropdown-item">BSc. in CS3</a>
    <a href="/studentsList2?rid=CS1(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS1</a>
     <a href="/studentsList2?rid=CS2(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS2</a>
    <a href="/studentsList2?rid=CS3(with)" class="list-group-item list-group-item-action dropdown-item">BSc. with CS3</a>
     <a href="/studentsList2?rid=CS(Cert)" class="list-group-item list-group-item-action dropdown-item">Cert. in CS</a>
      <a href="/studentsList2?rid=CS1(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS1</a>
       <a href="/studentsList2?rid=CS2(Dipl.)" class="list-group-item list-group-item-action dropdown-item">Dipl. in CS2</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    TE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=TE1" class="list-group-item list-group-item-action dropdown-item">TE1</a>
     <a href="/studentsList2?rid=TE2" class="list-group-item list-group-item-action dropdown-item">TE2</a>
    <a href="/studentsList2?rid=TE3" class="list-group-item list-group-item-action dropdown-item">TE3</a>
    <a href="/studentsList2?rid=TE4" class="list-group-item list-group-item-action dropdown-item">TE4</a>
</div>
</div>

 <div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    ESC
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=ESC1" class="list-group-item list-group-item-action dropdown-item">ESC1</a>
     <a href="/studentsList2?rid=ESC2" class="list-group-item list-group-item-action dropdown-item">ESC2</a>
    <a href="/studentsList2?rid=ESC3" class="list-group-item list-group-item-action dropdown-item">ESC3</a>
  </div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    CEIT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=CEIT1" class="list-group-item list-group-item-action dropdown-item">CEIT1</a>
     <a href="/studentsList2?rid=CEIT2" class="list-group-item list-group-item-action dropdown-item">CEIT2</a>
    <a href="/studentsList2?rid=CEIT3" class="list-group-item list-group-item-action dropdown-item">CEIT3</a>
    <a href="/studentsList2?rid=CEIT4" class="list-group-item list-group-item-action dropdown-item">CEIT4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    EE
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=EE1" class="list-group-item list-group-item-action dropdown-item">EE1</a>
     <a href="/studentsList2?rid=EE2" class="list-group-item list-group-item-action dropdown-item">EE2</a>
    <a href="/studentsList2?rid=EE3" class="list-group-item list-group-item-action dropdown-item">EE3</a>
    <a href="/studentsList2?rid=EE4" class="list-group-item list-group-item-action dropdown-item">EE4</a>
</div>
</div>

<div class="dropright">
  <a class="btn btn-light dropdown-toggle color_nav2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #d6d6d6;">
    B-IT
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a href="/studentsList2?rid=BIT1" class="list-group-item list-group-item-action dropdown-item">B-IT1</a>
     <a href="/studentsList2?rid=BIT2" class="list-group-item list-group-item-action dropdown-item">B-IT2</a>
    <a href="/studentsList2?rid=BIT3" class="list-group-item list-group-item-action dropdown-item">B-IT3</a>
  </div>
</div>


    </div>
 </div>
</div>


<div class="col-10">
<div class="card border-info">
  <div class="card-body">
   <center><h4>{{$_GET['rid']}}- {{$course_name}} </h4></center>

   <a class="btn btn-sm btn-success" style="float: right;" href="/generate-Students/courses-PDF?rid={{$_GET['rid']}}">PRINT</a>
   <br>
    @foreach($program as $program)
    <?php
    $i='1';
      $deptId=department::select('DEPTID')->where('DEPTNAME',$program->program)->value('DEPTID');
      
        $students=userinfo::where('DEFAULTDEPTID',$deptId)->where('flag','1')->orderby('name','asc')->get();
        $full= program::select('full')->where('initial',$program->program)->value('full');

    ?>

    <h5>{{$a}}.{{$full}}</h5>
    <table class=" hover table table-striped table-bordered" id="example{{$a}}">
  <thead class="thead-dark">
     <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;">NAME</th>
      <th scope="col" style="color:#3490dc;">REGISTRATION No.</th>
      <th scope="col" style="color:#3490dc;">GENDER</th>
      <th scope="col" style="color:#3490dc;">FEES STATUS</th>
      <th scope="col" style="color:#3490dc;">FEES DURATION</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{ $i }}.</th>
      <td>{{$student->name}}</td>
      <td>{{$student->SSN}}</td>
      @if($student->GENDER =='Male')
      <td>M</td>
      @elseif($student->GENDER =='Female')
      <td>F</td>
      @else
      <td></td>
      @endif
      <td>{{$student->Fees_Status}}</td>
       <td>{{$student->Fees_Duration}}</td>
      </tr>
    <?php
    $i= $i+1;
    ?>
     @endforeach
  </tbody>
</table>
    
    <br>
    <?php
    $a= $a+1;
    ?>
    @endforeach
    <div><h5><u>NOTE:</u></h5>
      <p>Please note the students listed above are only those who this course is core to them. To get list of students who have opted this course please visit <a href="https://aris2.udsm.ac.tz/">ARIS.</a> </p></div>


    </div>
  </div>

</div>
</div>
</div>

@endsection

@section('pagescript')


<script type="text/javascript">
 $(document).ready(function() {
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  
  // console.log(x);
    var table = $('#example1').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            }

           
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example1_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example1_wrapper").find($(".dt-buttons")).find($("a")).css(styles);
});


$(document).ready(function() {
  
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  // console.log(x);
    var table = $('#example2').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            }

             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example2_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example2_wrapper").find($(".dt-buttons")).css(styles);
});


$(document).ready(function() {
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  
  // console.log(x);
    var table = $('#example3').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            },

           
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example3_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example3_wrapper").find($(".dt-buttons")).css(styles);
});


$(document).ready(function() {
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  
  // console.log(x);
    var table = $('#example4').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            },

           
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example4_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example4_wrapper").find($(".dt-buttons")).css(styles);
});


$(document).ready(function() {
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  
  // console.log(x);
    var table = $('#example5').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            },

           
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example5_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example5_wrapper").find($(".dt-buttons")).css(styles);
});

$(document).ready(function() {
  var x= "<?php echo $id ?>";
  var y ="<?php echo $course_name ?>"
  
  
  
  // console.log(x);
    var table = $('#example6').DataTable( {
        dom: '<"top"fl>rt<"bottom"pi>B',
         buttons: [
             {

                extend: 'excelHtml5',className: 'btn-success',
                title:x+'-'+y, 
                exportOptions: {
                    columns: [1, 2, 3]
                }
            },

           
             ]     
    } );
    var styles = {
    position: "relative",
    float: "right"
};
$("div#example6_wrapper").find($(".dt-buttons")).css("width", "230px");
$("div#example6_wrapper").find($(".dt-buttons")).css(styles);
});


</script>

@endsection