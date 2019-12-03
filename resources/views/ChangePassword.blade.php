@extends('layouts.app')

@section('title')
  Change Password
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
    <h4>Change Password</h4>
  </div>
  <div class="card-body">
    @if (session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        <form class="form" method="POST" action="{{url('changepassword') }}">
          {{ csrf_field() }}

                  <div class="form-group row{{ $errors->has('current-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-sm-3 control-label"><strong>Current Password :</strong></label>

            <div class="col-sm-7">
              <input id="current-password" type="password" class="form-control" name="current-password" required>

              @if ($errors->has('current-password'))
              <span class="help-block">
                <strong>{{ $errors->first('current-password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
            <label for="new-password" class="col-sm-3 control-label"><strong>New Password :</strong></label>

            <div class="col-sm-7">
              <input id="new-password" type="password" class="form-control" name="new-password" required>

              @if ($errors->has('new-password'))
              <span class="help-block">
                <strong>{{ $errors->first('new-password') }}</strong>
              </span>
              @endif
            </div>
          </div>

          <div class="form-group row">
            <label for="new-password-confirm" class="col-sm-3 control-label"><strong>Confirm New Password :</strong></label>

            <div class="col-sm-7">
              <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
            </div>
          </div>

           <div class="form-group">
              <center><button type="submit" class="btn btn-primary">Submit</button>
              </center>
          </div>
        </form>


    </div>
  </div>
</div>
</div>

@endsection