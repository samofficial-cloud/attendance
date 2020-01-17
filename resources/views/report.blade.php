@extends('layouts.app')

@section('title')
  REPORT
@endsection


@section('content')
<div class="classname">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <div class="container">
 <ul class="nav nav-tabs">
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
    <a class="nav-link active" style="color:#060606"href="/report">ATTENDANCE REPORTS</a>
  </li>


  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/approval">APPROVAL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/TimetableManagement">TIMETABLE MANAGEMENT</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" style="color:#060606" href="/VenueCapacity">ROOMS CAPACITY</a>
  </li>
</ul>

</div>
</nav>
</div>
<br>
<br>
<div class="container">
  <div class="row">
<div class="col-2 ">
<div class="card border-info">
  <div class="card-body">
    <h5 class="card-title">Choose Type of Report</h5>

  <a data-toggle="modal" data-target="#class" class="btn styling button_color active" role="button" aria-pressed="true">Class attendance reports</a> &nbsp;
  <a data-toggle="modal" data-target="#test" class="btn styling button_color active" role="button" aria-pressed="true">Test attendance reports</a>&nbsp;
  <a data-toggle="modal" data-target="#ue" class="btn styling button_color active" role="button" aria-pressed="true">UE attendance reports</a>&nbsp;

<!-- Classes -->
   <div class="modal fade" id="class" role="dialog">

          <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <b><h5 class="modal-title">Fill the Form Below to Generate Class Report</h5></b>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

             <div class="modal-body">
               <form id="class_form" action="{{ route('report')}}" class="form-container form-horizontal" method="get">
                 {{csrf_field()}}
                 <div class="form-group row">
                   <label for="" class="col-sm-4 col-form-label">For:</label>
                   <div class="col-sm-8">
                   <select name="category" id="getSelection" onchange="SelectCheck(this)">

                     <option value="3" id="Option" >One student</option>
                    <option value="1" id="Option">All students</option>
                      <option value="2" id="Option">Lecturer</option>
                  </select>
                </div>
               </div>


               <div id="DivCheckRadio" style="display:block;">
                 <div class="form-group row" >
                   <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                   <div class="col-sm-8">
                     <input id="one_course" class="italian" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                     <input id="All_courses" type="radio" name="selection" value="All courses">All courses
                   </div>
                 </div>
               </div>

               <div id="DivCheckbox" style="display:block;">
                 <div class="form-group row" >
                   <label for="inputEmail3" class="col-sm-4 col-form-label">Show detailed information of the attendances:</label>
                   <div class="col-sm-8">
                     <input id="show_all" type="checkbox" name="checkbox" value="all cases">
                   </div>
                 </div>
               </div>

     <div id="coursediv"  style="display:block;">
      <div class="form-group row">
     <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
     <div class="input_radio col-sm-8">
     <input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourse"  placeholder="Course ID">
     </div>
   </div>
     </div>

     <div id="DivCheck" style="display:block;">
     <div class="form-group row">
     <label for="inputEmail3" class="col-sm-4 col-form-label">Identification Number:</label>
     <div class="col-sm-8">
     <input type="text" name="reg_no" class="form-control" id="inputRegNo" placeholder="Registration number or Employee id">
     </div>
     </div>
     </div>


     <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
     </form>
  </div>

  </div>
  </div>
  </div>

<!-- Tests -->
  <div class="modal fade" id="test" role="dialog">

         <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
           <b><h5 class="modal-title">Fill the Form Below to Generate Tests Report</h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="test_form"  action="{{ route('report_tests')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}
                <div class="form-group row">
                  <label for="" class="col-sm-4 col-form-label">For:</label>
                   <div class="col-sm-8">
                  <select name="category" id="getSelectiont" onchange="SelectCheckTest(this)">

                    <option value="3" id="Option" >One student</option>
                     <option value="1" id="Option">All students</option>
                 </select>
               </div>
              </div>

              <div id="DivCheckRadiot" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                  <div class="col-sm-8">
                    <input id="one_courset" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                    <input id="All_coursest" type="radio" name="selection" value="All courses">All courses

                  </div>
                </div>
              </div>



              <div id="DivCheckboxt" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Show detailed information of the attendances:</label>
                  <div class="col-sm-8">
                    <input id="show_allt" type="checkbox" name="checkbox" value="all cases">

                  </div>
                </div>
              </div>


    <div id="coursedivt" style="display:block;">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
    <div class="input_radio col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourset"  placeholder="Course ID">
    </div>
  </div>
    </div>

    <div id="DivCheckt" style="display:block;">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Identification Number:</label>
    <div class="col-sm-8">
    <input type="text" name="reg_no" class="form-control" id="inputRegNot" placeholder="Registration number or Employee id">
    </div>

    </div>
    </div>


    <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
    </form>
  </div>

  </div>
  </div>
  </div>


<!-- UE -->
  <div class="modal fade" id="ue" role="dialog">


         <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
           <b><h5 class="modal-title">Fill the Form Below to Generate Examinations Report</h5></b>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

            <div class="modal-body">
              <form id="ue_form"  action="{{ route('report_ue')}}" class="form-container form-horizontal" method="get">
                {{csrf_field()}}
                <div class="form-group row">
                  <label for="" class="col-sm-4 col-form-label">For:</label>
                  <div class="col-sm-8">
                  <select name="category" id="getSelectionu" onchange="SelectCheckUe(this)">

                    <option value="3" id="Option" >One student</option>
                     <option value="1" id="Option">All students</option>
                 </select>
               </div>
              </div>

              <div id="DivCheckRadiou" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Specification:</label>
                  <div class="col-sm-8">
                    <input id="one_courseu" type="radio" name="selection" checked="checked" value="One course">One course &nbsp
                    <input id="All_coursesu" type="radio" name="selection" value="All courses">All courses
                  </div>
                </div>
              </div>

              <div id="DivCheckboxu" style="display:block;">
                <div class="form-group row" >
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Show detailed information of the attendances:</label>
                  <div class="col-sm-8">
                    <input id="show_allu" type="checkbox" name="checkbox" value="all cases">
                  </div>
                </div>
              </div>

    <div id="coursedivu"  style="display:block;">
      <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 for_label col-form-label">Course ID:</label>
    <div class="input_radio col-sm-8">
    <input type="text" onblur="this.value=removeSpaces(this.value);" name="course_id" class="form-control" id="inputCourseu"  placeholder="Course ID">
    </div>
  </div>
    </div>

    <div id="DivChecku" style="display:block;">
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 col-form-label">Identification Number:</label>
    <div class="col-sm-8">
    <input type="text" name="reg_no" class="form-control" id="inputRegNou" placeholder="Registration number or Employee id">
    </div>

    </div>
    </div>


    <center><button class="btn btn-primary" type="submit">Generate Report</button></center>
    </form>
  </div>

  </div>
  </div>
  </div>


</div>
</div>
</div>
<div class="col-10">

  <div class="card hero-image border-info" >
  <div class="card-body">
    <center><h1 class="card-title"><b>WELCOME TO COLLEGE OF ICT</b></h1></center>
    <center><h2 class="card-title"><b>ATTENDANCE REPORTS GENERATION PORTAL</b></h2></center>

    <div align="center">

   <div><img src="img/logo_udsm.jpg" height="180px" width="150px"></div>

    <h1 >SEMESTER 1 2019/20</h1><br>
    <h2>WEEK: 1-17</h2>


</div>


</div>
</div>
</div>
</div>
</div>
@endsection



@section('pagescript')


<script type="text/javascript">

//Normal classes
function SelectCheck(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivCheck").style.display = "none";
          document.getElementById("DivCheckRadio").style.display = "none";
          document.getElementById("DivCheckbox").style.display = "none";

          var ele = document.getElementById("one_course");
          ele.checked = true;


          var ele2 = document.getElementById("show_all");
          ele2.checked = false;

          var ele3 = document.getElementById("inputCourse");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNo");
          ele4.required = false;

      }else if(nameSelect.value== 2) {

        document.getElementById("DivCheck").style.display = "block";
        document.getElementById("DivCheckRadio").style.display = "block";
        document.getElementById("DivCheckbox").style.display = "block";
        document.getElementById("coursediv").style.display = "block";
        var ele = document.getElementById("one_course");
        ele.checked = true;

        var ele2 = document.getElementById("show_all");
        ele2.checked = false;

        var ele3 = document.getElementById("inputCourse");
        ele3.required = true;

        var ele4 = document.getElementById("inputRegNo");
        ele4.required = true;

      }
      else {
          document.getElementById("DivCheck").style.display = "block";
          document.getElementById("DivCheckRadio").style.display = "block";
          document.getElementById("DivCheckbox").style.display = "block";
          document.getElementById("coursediv").style.display = "block";
          var ele = document.getElementById("one_course");
          ele.checked = true;

          var ele2 = document.getElementById("show_all");
          ele2.checked = false;

          var ele3 = document.getElementById("inputCourse");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNo");
          ele4.required = true;

      }


}

// Tests
function SelectCheckTest(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivCheckt").style.display = "none";
          document.getElementById("DivCheckRadiot").style.display = "none";
          document.getElementById("DivCheckboxt").style.display = "none";

          var ele = document.getElementById("one_courset");
          ele.checked = true;

          var ele2 = document.getElementById("show_allt");
          ele2.checked = false;

          var ele3 = document.getElementById("inputCourset");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNot");
          ele4.required = false;

      }else if(nameSelect.value== 2) {

        document.getElementById("DivCheckt").style.display = "block";
        document.getElementById("DivCheckRadiot").style.display = "block";
        document.getElementById("DivCheckboxt").style.display = "block";
        document.getElementById("coursedivt").style.display = "block";
        var ele = document.getElementById("one_courset");
        ele.checked = true;

        var ele2 = document.getElementById("show_allt");
        ele2.checked = false;

        var ele3 = document.getElementById("inputCourset");
        ele3.required = true;

        var ele4 = document.getElementById("inputRegNot");
        ele4.required = true;


      }
      else {
          document.getElementById("DivCheckt").style.display = "block";
          document.getElementById("DivCheckRadiot").style.display = "block";
          document.getElementById("DivCheckboxt").style.display = "block";
          document.getElementById("coursedivt").style.display = "block";
          var ele = document.getElementById("one_courset");
          ele.checked = true;

          var ele2 = document.getElementById("show_allt");
          ele2.checked = false;

          var ele3 = document.getElementById("inputCourset");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNot");
          ele4.required = true;

      }


}

//UE

function SelectCheckUe(nameSelect){

      if(nameSelect.value== 1){
          document.getElementById("DivChecku").style.display = "none";
          document.getElementById("DivCheckRadiou").style.display = "none";
          document.getElementById("DivCheckboxu").style.display = "none";

          var ele = document.getElementById("one_courseu");
          ele.checked = true;

          var ele2 = document.getElementById("show_allu");
                    ele2.checked = false;

          var ele3 = document.getElementById("inputCourseu");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNou");
          ele4.required = false;

      }else if(nameSelect.value== 2) {

        document.getElementById("DivChecku").style.display = "block";
        document.getElementById("DivCheckRadiou").style.display = "block";
        document.getElementById("DivCheckboxu").style.display = "block";
        document.getElementById("coursedivu").style.display = "block";
        var ele = document.getElementById("one_courseu");
        ele.checked = true;

        var ele2 = document.getElementById("show_allu");
                ele2.checked = false;

        var ele3 = document.getElementById("inputCourseu");
        ele3.required = true;

        var ele4 = document.getElementById("inputRegNou");
        ele4.required = true;


      }
      else {
          document.getElementById("DivChecku").style.display = "block";
          document.getElementById("DivCheckRadiou").style.display = "block";
          document.getElementById("DivCheckboxu").style.display = "block";
          document.getElementById("coursedivu").style.display = "block";
          var ele = document.getElementById("one_courseu");
          ele.checked = true;

          var ele2 = document.getElementById("show_allu");
                    ele2.checked = false;

          var ele3 = document.getElementById("inputCourseu");
          ele3.required = true;

          var ele4 = document.getElementById("inputRegNou");
          ele4.required = true;

      }


}



$(document).ready(function() {


//RESET ON CLOSE FOR CLASS
  $(".modal").on("hidden.bs.modal", function(){
    // $('select').prop('selectedIndex', 0);
    $('#class_form').trigger("reset");
    $("#getSelection").trigger('change');
  });

  //RESET ON CLOSE FOR TEST
    $(".modal").on("hidden.bs.modal", function(){
      // $('select').prop('selectedIndex', 0);
      $('#test_form').trigger("reset");
      $("#getSelectiont").trigger('change');
    });

    //RESET ON CLOSE FOR UE
      $(".modal").on("hidden.bs.modal", function(){
        // $('select').prop('selectedIndex', 0);
        $('#ue_form').trigger("reset");
        $("#getSelectionu").trigger('change');
      });


//class
$("#getSelection").trigger('change');

  $('#All_courses').change(function(){
    OptionValue = document.getElementById("Option").value;
      if( $('#All_courses').prop('checked')){
        document.getElementById("coursediv").style.display = "none";
          document.getElementById("DivCheckbox").style.display = "none";
          var ele4 = document.getElementById("inputCourse");
          ele4.required = false;

      } else {
        document.getElementById("coursediv").style.display = "block";
      }
      });

      $('#one_course').change(function(){
          if( $('#one_course').prop('checked') ){
            document.getElementById("coursediv").style.display = "block";
            document.getElementById("DivCheckbox").style.display = "block";
          } else {
            document.getElementById("coursediv").style.display = "none";}
          });


          $('#show_all').change(function(){
              if( $('#show_all').prop('checked') ){
                document.getElementById("DivCheckRadio").style.display = "none";
              } else {
                document.getElementById("DivCheckRadio").style.display = "block";}
              });

//Test
              $("#getSelectiont").trigger('change');

                $('#All_coursest').change(function(){
                  OptionValue = document.getElementById("Option").value;
                    if( $('#All_coursest').prop('checked')){
                      document.getElementById("coursedivt").style.display = "none";
                        document.getElementById("DivCheckboxt").style.display = "none";
                        var ele4 = document.getElementById("inputCourset");
                        ele4.required = false;

                    } else {
                      document.getElementById("coursedivt").style.display = "block";
                    }
                    });

                    $('#one_courset').change(function(){
                        if( $('#one_courset').prop('checked') ){
                          document.getElementById("coursedivt").style.display = "block";
                          document.getElementById("DivCheckboxt").style.display = "block";
                        } else {
                          document.getElementById("coursedivt").style.display = "none";}
                        });


                        $('#show_allt').change(function(){
                            if( $('#show_allt').prop('checked') ){
                              document.getElementById("DivCheckRadiot").style.display = "none";
                            } else {
                              document.getElementById("DivCheckRadiot").style.display = "block";}
                            });


//UE
                            $("#getSelectionu").trigger('change');

                              $('#All_coursesu').change(function(){
                                OptionValue = document.getElementById("Option").value;
                                  if( $('#All_coursesu').prop('checked')){
                                    document.getElementById("coursedivu").style.display = "none";
                                    document.getElementById("DivCheckboxu").style.display = "none";
                                      var ele4 = document.getElementById("inputCourseu");
                                      ele4.required = false;

                                  } else {
                                    document.getElementById("coursedivu").style.display = "block";
                                  }
                                  });

                                  $('#one_courseu').change(function(){
                                      if( $('#one_courseu').prop('checked') ){
                                        document.getElementById("coursedivu").style.display = "block";
                                        document.getElementById("DivCheckboxu").style.display = "block";

                                      } else {
                                        document.getElementById("coursedivu").style.display = "none";}
                                      });


                                      $('#show_allu').change(function(){
                                                                if( $('#show_allu').prop('checked') ){
                                                                  document.getElementById("DivCheckRadiou").style.display = "none";
                                                                } else {
                                                                  document.getElementById("DivCheckRadiou").style.display = "block";}
                                                                });



});


</script>

<script language="javascript" type="text/javascript">
function removeSpaces(string) {
 return string.split(' ').join('');
}
</script>

<script>
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted ||
                         ( typeof window.performance != "undefined" &&
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});
</script>








@endsection
