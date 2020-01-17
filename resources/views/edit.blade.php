@extends('layouts.app')

@section('title')
  Edit Profile
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
    <a class="nav-link" style="color:#060606"href="/report">REPORT</a>
  </li>
</ul>

</div>
</nav>
</div>

</br>

<div class="row2 justify-content-center">
  <div class="col-sm-6">

<div class="card">

  <div class="card-header" style="text-align: center;">
    <h4>Edit Profile</h4>
  </div>
  <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Sorry!!</strong> There were some problems with your input. Please ensure acceptable format is followed for each field (Acceptable format is Name: Samson Mero, Email address: samrmero@gmail.com, Phone: 0759233454)<br>
            <ul>
              @foreach ($errors as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
@foreach($users as $users)
<?php $user = $users->id ?>
@endforeach
      <form  method="post" action="{{url('edit1',$user)}}" >
        {{csrf_field()}}
      
        <div class="form-group row">
          <div class="col-sm-3"><strong>Name :</strong></div>
          <div class="col-sm-7">
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}"  readonly>
          </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-3"><strong>ID NO. :</strong></div>
          <div class="col-sm-7"><input type="text" name="email" class="form-control" value="{{ Auth::user()->reg_no }}"  readonly>
          </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-3"><strong>Email Address :</strong></div>
          <div class="col-sm-7"><input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
          </div>
          </div>

          <div class="form-group row">
          <div class="col-sm-3"><strong>Phone Number :</strong></div>
          <div class="col-sm-7"><input type="text" name="phoneNumber" class="form-control" value="{{ Auth::user()->phone_number }}">
          </div>
          </div>


          <div class="form-group">

          <center><button type="submit" class="btn btn-sm btn-primary">Save</button>
          </center>
          </div>

        </div>
      </form>
      </div>
    </div>
  </div>
</div>



@endsection
