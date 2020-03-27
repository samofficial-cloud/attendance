<html>
<head>
  <title>ADD NEW USER</title>
</head>
<style>
</style>
<body>
<?php
use App\userinfo;
$badgeno=userinfo::select('BADGENUMBER')->orderBy('USERID','desc')->first();
$badge=$badgeno->BADGENUMBER;
$newbadgeno = $badge + 1;
?>

<br>
    <div id="content">
      <div id="loading" style="margin: auto;"></div>
<div class="card mx-auto" style="width: 70%;">
	<div class="card-header">
      <center><h5>Fill the Details Below</h5></center>
  </div>
  <div class="card-body" style="background-color: #f4f7f8e3">
    <form method="post" action= "{{ route('addnewuser') }}" onsubmit="return getdata()" name="myForm">
    	{{csrf_field()}}
    	<div class="form-group row">
    	<label for="title"  class="col-sm-3 col-form-label"><strong>Title:</strong></label>
    	<div class="col-sm-9">
          <select id="title" name="title" class="custom-select" required="">
          	<option value="">Select Title</option>
           <option value="staff">Staff</option>
           <option value="student">Student</option>
        </select>
    </div>
    </div>

    <div class="form-group row">
       <label for="InputName" class="col-sm-3 col-form-label"><strong>Name:</strong></label>
       <div class="col-sm-9">
      <input type="text" class="form-control" id="InputName" name="Name" value="" required="" placeholder="Enter Name"> 
       </div>
    </div>

     <div class="form-group row" id="staffNo" style="display: none;">
       <label for="staffID" class="col-sm-3 col-form-label"><strong>Employee ID:</strong></label>
       <div class="col-sm-9">
      <input type="text" class="form-control" id="staffID" name="staffID" value="" placeholder="Enter Employee Id">
      <span id="message"></span>
       </div>
    </div>
    

    <div class="form-group row" id="studentId" style="display: none;">
       <label for="regNo" class="col-sm-3 col-form-label"><strong>Registration No:</strong></label>
       <div class="col-sm-9">
      <input type="text" class="form-control" id="regNo" name="regNo" value="" placeholder="Enter Registration No.">
      <span id="message1"></span>
       </div>
    </div>
     

    <div class="form-group row">
    	<label for="gender"  class="col-sm-3 col-form-label"><strong>Gender:</strong></label>
    	<div class="col-sm-9">
          <select id="gender" name="gender" class="custom-select" required="">
          	<option value=""> Select Gender</option>
           <option value="Male">M</option>
           <option value="Female">F</option>
        </select>
    </div>
    </div>

    <div class="form-group row" id="staffDepartment" style="display: none;">
    	<label for="department"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
    	<div class="col-sm-9">
          <select id="department" name="department" class="custom-select">
          	<option value=""> Select Department</option>
           <option value="31">Computer Science and Engineering</option>
           <option value="32">Electronics and Telecommunication Engineering</option>
        </select>
        <span id="message2"></span>
    </div>
    </div>

    <div class="form-group row" id="staffrole" style="display: none;">
      <label for="role"  class="col-sm-3 col-form-label"><strong>Role:</strong></label>
      <div class="col-sm-9">
          <select id="role" name="role" class="custom-select">
            <option value=""> Select Role</option>
           <option value="staff">Staff</option>
           <option value="principal">Principal</option>
           <option value="tmaster">Timetable Master</option>
           <option value="HoD">Head of Department</option>
        </select>
        <span id="message10"></span>
    </div>
    </div>

    <div class="form-group row" id="studentDepartmentA" style="display: none;">
<label for="studentdepartmentB"  class="col-sm-3 col-form-label"><strong>Department:</strong></label>
      <div class="col-sm-9">
          <select id="studentdepartmentB" name="studentdepartment" class="custom-select">
            <option value=""> Select Department</option>
           <option value="CSE">Computer Science and Engineering</option>
           <option value="ETE">Electronics and Telecommunication Engineering</option>
        </select>
        <span id="message11"></span>
    </div>
    </div>
     

    <div class="form-group row" id="cseProgramA" style="display: none;">
  <label for="csedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="csedprogram" id="csedgrprogram" >
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
  </select>
  <span id="message3"></span>
  </div>
  </div>

   <div class="form-group row" id="eteProgramA" style="display: none;">
  <label for="etedprogram"  class="col-sm-3 col-form-label"><strong>Degree Program:</strong></label>
    <div class="col-sm-9">
   <select class="custom-select Reason" name="etedprogram" id="etedgrprogram">
    <option value="">Select Degree Program</option>
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
    <option value="17">B.Sc. in Telecommunications Engineering 4</option>
   </select>
   <span id="message30"></span>
 </div>
</div>
   

         <div class="form-group row">
          <div class="col-sm-3"><strong>Email Address :</strong></div>
          <div class="col-sm-9">
            <input style="color: black;"  type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" onblur="validateEmail(this);" maxlength="25" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email address">
          </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-3"><strong>Phone Number :</strong></div>
          <div class="col-sm-9">
            <input style="color: black;"  type="text" name="phoneNumber"
maxlength = "10" minlength = "10"
class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter phone number" onkeypress="return (event.charCode >= 48 && event.charCode <= 57 ) || event.charCode==43 " value="">

          </div>
          </div>

          <input type="text" name="BADGENUMBER" value="{{$newbadgeno}}" hidden="">

          <div class="form-group row" id="feesStatus" style="display: none;">
           <label for="Fees"  class="col-sm-3 col-form-label"><strong>Fees Status:</strong></label>
             <div class="col-sm-9">
          <select class="custom-select Reason" name="Fees_Status" id="Fees">
          <option value="">Select Fees Status</option>
          <option value="PAID">PAID</option>
          <option value="NOT PAID">NOT PAID</option>
          </select>
          <span id="message4"></span>
          </div>
         </div>
          

         <div class="form-group row" id="duration" style="display: none;">
         <label for="Fees_Duration"  class="col-sm-3 col-form-label"><strong>Fees Duration:</strong></label>
         <div class="col-sm-9">
         <select class="custom-select Reason" name="Fees_Duration" id="Fees_Duration">
          <option value="">Select Fees Duration</option>
         <option value="PAID HALF">PAID HALF</option>
         <option value="PAID FULL">PAID FULL</option>
         </select>
         <span id="message5"></span>
          </div>
          </div>
           
           <br>
  


<div align="right">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" onclick="reloadPage();">CLOSE</button>
    </div>
  </div>

    </form>
  </div>
</div>
</div>




</body>

<script>
$(document).ready(function() {
  $("#resetbutton").click(function(e){
    $("#error").hide();
    $.ajax({
      url: "getnewuser",
      context: document.body
    }).done(function(fragment) { 
      $("#content").html(fragment);
    });
    return false;
});
	$('#title').click(function(){
		var query=$(this).val();
		if(query=='staff'){
			$('#studentId').hide();
			$('#cseProgramA').hide();
      $('#eteProgramA').hide();
			$('#feesStatus').hide();
			$('#duration').hide();
      $('#studentDepartmentA').hide();
      $('#message11').hide();
			$('#message1').hide();
			$('#message3').hide();
			$('#message4').hide();
			$('#message5').hide();
			$('#staffNo').show();
			$('#message').show();
			$('#message2').show();
			$('#staffDepartment').show();
      $('#staffrole').show();
		}
		else if(query=='student'){
			$('#staffNo').hide();
			$('#staffDepartment').hide();
			$('#message').hide();
			$('#message2').hide();
      $('#staffrole').hide();
			$('#message1').show();
			$('#message3').show();
			$('#message4').show();
			$('#message5').show();
			$('#studentId').show();
			$('#feesStatus').show();
      $('#studentDepartmentA').show();
      $('#message11').show();
			$('#Fees').click(function(){
			var query2=$(this).val();
			if(query2=='PAID'){
				$('#duration').show();
			}
			else {
				$('#duration').hide();
			}
			});

      $('#studentdepartmentB').click(function(){
        console.log(2);
        var query3=$(this).val();
        if(query3=='CSE'){
          console.log(3);
          $('#eteProgramA').hide();
          $('#cseProgramA').show();
        }
        else if(query3=='ETE'){
          console.log(4);
           $('#cseProgramA').hide();
          $('#eteProgramA').show();
        }
        else{
          $('#eteProgramA').hide();
          $('#cseProgramA').hide();
        }
			});
		}
    else{
      $('#staffNo').hide();
      $('#message').hide();
      $('#message2').hide();
      $('#staffDepartment').hide();
      $('#message1').hide();
      $('#message3').hide();
      $('#message4').hide();
      $('#message5').hide();
      $('#studentId').hide();
      $('#cseProgramA').hide();
      $('#eteProgramA').hide();
      $('#feesStatus').hide();
      $('#duration').hide();
      $('#staffrole').hide();
      $('#studentDepartmentA').hide();
      $('#message11').hide();
      $('#message10').hide();
    }

		});


});

</script>

<script type="text/javascript">
   $(document).ajaxSend(function(){
    $("#loading").fadeIn(250);
});
$(document).ajaxComplete(function(){
    $("#loading").fadeOut(250);
});
	function getdata(){
       var textone = document.forms["myForm"]["title"].value;

       if(textone=='staff'){
       	  var texttwo = document.forms["myForm"]["staffID"].value;
       	  if(texttwo==''){
           var message=document.getElementById('message');
            message.style.display = "block";
            message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
       	   }
           else {
           document.getElementById('message').style.display = "none";
            }

        	var textthree=document.forms["myForm"]["department"].value;
         	if(textthree==''){
       		var message=document.getElementById('message2');
            message.style.display = "block";
            message.style.color = 'red';
            message.innerHTML="Please fill out this field";
            return false;
       	    }
            else{
            document.getElementById('message2').style.display="none";
            }

            var textten=document.forms["myForm"]["role"].value;
            if(textten==''){
              var message=document.getElementById('message10');
            message.style.display = "block";
            message.style.color = 'red';
            message.innerHTML="Please fill out this field";
            return false;
            }
            else{
               document.getElementById('message10').style.display="none";
            }

       }

       else if (textone=='student'){
       	 var textfour = document.forms["myForm"]["regNo"].value;
       	 if(textfour==''){
       	   var message=document.getElementById('message1');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
       	 }
       	 else if (textfour != ''){
       	 	var message=document.getElementById('message1');
       	 	message.innerHTML="";
       	 }

         var textnine=document.forms["myForm"]["studentdepartmentB"].value;
         if(textnine==''){
          var message=document.getElementById('message11');
          message.style.display = "block";
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
         }
         else if(textnine=='CSE'){
          document.getElementById('message11').style.display="none";
  var textfiven = document.getElementById('csedgrprogram').value;
         if(textfiven==''){
          var message=document.getElementById('message3');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
         }
         else if (textfiven != ''){
          var message=document.getElementById('message3');
          message.innerHTML="";
         }
         }

         else if(textnine=='ETE'){
          console.log(8);
          document.getElementById('message11').style.display="none";
          var textfive = document.getElementById('etedgrprogram').value;
         if(textfive==''){
          console.log(9);
          var message=document.getElementById('message30');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
         }
         else if (textfive != ''){
          console.log(10);
          var message=document.getElementById('message30');
          message.innerHTML="";
         }
         }
         
       	 var textsix = document.forms["myForm"]["Fees_Status"].value;
       	 if(textsix==''){
       	 	var message=document.getElementById('message4');
           message.style.color='red';
            message.innerHTML="Please fill out this field";
           return false;
       	 }
       	 
       
       	 else if(textsix =='PAID'){
          var message=document.getElementById('message4');
          message.innerHTML="";
       	 	var textseven = document.forms["myForm"]["Fees_Duration"].value;
       	 	if(textseven== ''){
       	 	var message=document.getElementById('message5');
           message.style.color='red';
           message.innerHTML="Please fill out this field";
           return false;
       	 	}
       	 	else if (textseven != ''){
       	 	var message=document.getElementById('message5');
       	 	message.innerHTML="";
       	 }
       	 }

       	else if (textsix != 'PAID'){
       	 	var message=document.getElementById('message4');
       	 	message.innerHTML="";
       	 }

       
   }
   }
</script>
<script>
    function reloadPage(){
        location.reload(true);
    }
</script>
</html>
