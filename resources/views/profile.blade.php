@extends('layouts.app')

@section('title')
  Profile
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
    <h4>My Profile</h4>
  </div>
  <div class="card-body">
        

      <form>
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
          <div class="col-sm-7"><input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
          </div>
          </div>


          {{-- <div class="form-group row">
          <div class="col-sm-3"><strong>Mobile number :</strong></div>
          <div class="col-sm-7">
            <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}" readonly>
          </div>
          </div> --}}
        </form>



          
        </div>
      </div>
    </div>
  </div>



@endsection