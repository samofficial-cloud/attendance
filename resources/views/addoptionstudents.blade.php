<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 @php
use App\lecturer;
$mycourse=lecturer::select('course')->where('instructor', Auth::user()->name)->orWhere('Instructor_2',Auth::user()->name)->orWhere('Instructor_3',Auth::user()->name)->orWhere('Instructor_4',Auth::user()->name)->orWhere('Instructor_5',Auth::user()->name)->orWhere('Tutorial_Assistant',Auth::user()->name)->orWhere('technical_staff',Auth::user()->name)->orWhere('Technical_Staff_2',Auth::user()->name)->get();
@endphp
<br>
<div class="container">
	<br>
	@if ($errors=Session::get('errors'))
          <div class="alert alert-danger">
            <p>{{$errors}}</p>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
<form action="{{ route('optionstudentsadd') }}" onsubmit="return submitdata()">
<table id="my-table" class="hover table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col" style="color:#3490dc;">S/N</th>
      <th scope="col" style="color:#3490dc;"><center>REGISTRATION NO.</center></th>
      <th scope="col" style="color:#3490dc;"><center>NAME</center></th>
      <th scope="col" style="color:#3490dc;"><center>COURSE ID</center></th>
      <th scope="col" style="color:#3490dc;"><center>STATUS</center></th>
</tr>
</thead>
<tbody>
<tr>
<td>1.</td>
<td><input type="text" class="form-control" id="2" name="regNo2" value="" required onblur="getdata((((document.getElementById('my-table').rows.length)-2)*5)+2)" onkeypress="if(this.value.length<=13){return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 45} else return false;"></td>
<td><input type="text" class="form-control" id="3" name="Name3" value="" readonly=""></td>
<td>
  <input type="text" class="form-control" id="4" name="courseid4" value="{{$_GET['courseid']}}" readonly=""></td>
  {{-- <select class="custom-select Reason" name="courseid4" id="4">
    <option value="">Select Course Id</option>
    @foreach($mycourse as $mycoursess)
    <option value="{{$mycoursess->course}}">{{$mycoursess->course}}</option>
    @endforeach
  </select> --}}
</td>
<td><select class="custom-select Reason" name="Reason5" id="5" required="">
	<option value="">Select Status</option>
    <option value="Optional">Optional</option>
    <option value="Carried">Carried</option>
</select>
</td>
</tr>
</tbody>
</table>
<input type="number" name="totalrows" id="totalrows" value="1" hidden=""/>
<span id="message1"></span>
<div align="left">
<button type="button" class="btn btn-success" onclick="javascript:validate();">Add New Row</button>
<button type="button" class="btn btn-danger" onclick="javascript:deleteRows();" style="display: none;" id="deleterowbutton">Delete Row</button>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
 <span id="error_message"></span>
</form>
</div>

<script type="text/javascript">
  var y=0;
  function validate(){
    var a=document.getElementById('my-table').rows.length,
    b=a-1,
    i,
    j=2;
    console.log(a);
    if(b==1){
      var reg=document.getElementById(j).value;
      j++;
      var name=document.getElementById(j).value;
      j++;
      var course=document.getElementById(j).value;
      j++;
      var category=document.getElementById(j).value;
      if(reg=='' || course=='' || category==''){
        var message=document.getElementById('error_message');
        message.style.color='red';
        message.innerHTML="Please fill all fields first"
        return false;
      }
      else{
        var message=document.getElementById('error_message');
        message.innerHTML="";
        if(y!=0){
        appendRow();
        var message=document.getElementById('message1');
        message.innerHTML="";
      }
      else{
        var message=document.getElementById('message1');
        message.style.color='red';
        message.innerHTML="Please correct the information above to continue."
        return false;
      }
      }
    }

    else if(b>1){
      var c= b-1,
      j=(c*5)+2;
      var reg=document.getElementById(j).value;
      j++;
      var name=document.getElementById(j).value;
      j++;
      var course=document.getElementById(j).value;
      j++;
      var category=document.getElementById(j).value;
      j=j+2;
      if(reg=='' || course=='' || category==''){
        var message=document.getElementById('error_message');
        message.style.color='red';
        message.innerHTML="Please fill all fields first"
        return false;
      }
      else{
        if(y!=0){
        var message=document.getElementById('error_message');
        message.innerHTML="";
        appendRow();
      }
      else{
        var message=document.getElementById('message1');
        message.style.color='red';
        message.innerHTML="Please correct the information above to continue."
        return false;
      }
      }
    }
  }
	function appendRow() {
    var tbl = document.getElementById('my-table'), // table reference
        row = tbl.insertRow(tbl.rows.length),      // append table row
        i;
    // insert table cells to the new row
    for (i = 0; i < tbl.rows[0].cells.length; i++) {
    	createCell(row.insertCell(i), i);
    }
  document.getElementById('deleterowbutton').style.display='inline-block';
  gettotalrows();
  y=0;
}

function submitdata(){
  if(y=='0'){
    return false;
  }
}

function createCell(cell, text) {
	if(text==0){
	var	a=document.getElementById('my-table').rows.length;
	var b=a-1;
	txt = document.createTextNode(b+'.');
	cell.appendChild(txt);
	}

	if(text == 1){
    var a=document.getElementById('my-table').rows.length,
    b=a-2,
    c=b*5,
    pointer=c+2;
	var div = document.createElement('input'); 
    div.setAttribute('type', 'text');
    div.setAttribute('class', 'form-control');
    div.setAttribute('name', 'regNo'+pointer);
    div.setAttribute('id', pointer);
    div.setAttribute('required', ' ');
    // var e=document.getElementById(pointer).value;
    div.setAttribute('onblur', "getdata((((document.getElementById('my-table').rows.length)-2)*5)+2)");
    cell.appendChild(div); 
	}

	if(text == 2){
    var a=document.getElementById('my-table').rows.length,
    b=a-2,
    c=b*5,
    pointer=c+3;
	var div = document.createElement('input'); 
    div.setAttribute('type', 'text');
    div.setAttribute('class', 'form-control');
    div.setAttribute('name', 'Name'+pointer);
     div.setAttribute('id', pointer);
    div.setAttribute('readonly', ' ');
    cell.appendChild(div); 
	}

	if(text == 3){
    var a=document.getElementById('my-table').rows.length,
    b=a-2,
    c=b*5,
    pointer=c+4;
	var div = document.createElement('input'); 
    div.setAttribute('type', 'text');
    div.setAttribute('class', 'form-control');
    div.setAttribute('name', 'courseid'+pointer);
     div.setAttribute('id', pointer);
     div.setAttribute('value', "{{$_GET['courseid']}}");
     div.setAttribute('readonly', ' '); 
    cell.appendChild(div); 
	}

	if(text == 4){
    var a=document.getElementById('my-table').rows.length,
    b=a-2,
    c=b*5,
    pointer=c+5;
	var div = document.createElement('select');
	var array = ["","Optional","Carried"]; 
    div.setAttribute('type', 'text');
    div.setAttribute('class', 'form-control');
    div.setAttribute('name', 'Reason'+pointer);
    div.setAttribute('id', pointer);
    for (var i = 0; i < array.length; i++) {
    var option = document.createElement("option");
    option.value=array[i];
    if(i==0){
    	  option.text='Select Status'
    }
    else{
    option.text=array[i];
}
    div.appendChild(option);
}
div.setAttribute('required', ' ');
    cell.appendChild(div); 
	}
                    
}

function deleteRows() {
    var tbl = document.getElementById('my-table'),
        lastRow = tbl.rows.length - 1;
        tbl.deleteRow(lastRow);
        var newlastRow=tbl.rows.length - 1;
        if(newlastRow<=1){
 document.getElementById('deleterowbutton').style.display='none';
     }
    gettotalrows();
    y=1;
    var message=document.getElementById('message1');
    message.innerHTML="";
}
//var pointer;
function getdata(z){
  var query = document.getElementsByName('regNo'+z)[0].value
  x=z+1,
  strlength=query.length;
  
        if(query!=''){
        if(strlength>=13)
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.student') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
            if(data != 0){
            $('#'+z).attr('style','border:1px solid #ced4da');
            var message=document.getElementById('message1');
            message.innerHTML=""
            $("#"+x).val(data);
            y=1;
          }
          else{
            $('#'+z).attr('style','border:1px solid #f00');
            $("#"+x).val('');
            y=0;
        var message=document.getElementById('message1');
        message.style.color='red';
        message.innerHTML="This student isn't registered."
          }
          }
         });
        }
        else{
           $('#'+z).attr('style','border:1px solid #f00');
            $("#"+x).val('');
          y=0;
        var message=document.getElementById('message1');
        message.style.color='red';
        message.innerHTML="Invalid Registration Number."
        }
      }
}

function gettotalrows(){
  var x= ((document.getElementById('my-table').rows.length)-1);
  document.getElementById('totalrows').value=x;
}
</script>

</body>
</html>