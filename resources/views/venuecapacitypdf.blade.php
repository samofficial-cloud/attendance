@extends('layouts.app')

@section('title')
  VENUE CAPACITIES
@endsection

<style>
table {
  border-collapse: collapse;
   width: 100%;
}

table, td, th {
  border: 1px solid black;
}
table {
  counter-reset: tableCount;
  }

  .counterCell:before {
  content: counter(tableCount);
  counter-increment: tableCount;
  }
</style>

@section('content')

<br>

<?php
use App\capacityvenue;
 $venue = capacityvenue::where('criteria','Lecture')->orderBy('Venue','asc')->get();
 $venue1 = capacityvenue::where('criteria','Test')->orderBy('Venue','asc')->get();
  $venue2 = capacityvenue::where('criteria','Practical')->orderBy('Venue','asc')->get();
 $i=1;
 $j=1;
 $k=1;
?>

<div class="container">
  
  <h3><b>ROOMS CAPACITY</b></h3>
  <h4>1. Lectures</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    
      @foreach($venue as$venue)
      <tr>
      <th  scope="row">{{ $i }}.</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>

      </tr>
      <?php
      $i=$i+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>2. Tests and Examinations</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue1 as$venue)
      <tr>
      <th scope="row">{{ $j }}.</th>
      <td><strong>{{$venue->Venue}}</strong></td>
      <td><strong>{{ $venue->Capacity }}</strong></td>
      </tr>
      <?php
      $j=$j+1;
      ?>
      @endforeach
    

</tbody>
</table>

<h4>3. Practicals</h4>
<table class="table table-striped table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Venue</th>
      <th scope="col">Capacity</th>
    </tr>
  </thead>
  <tbody>
    @foreach($venue2 as$venue)
      <tr>
      <th scope="row">{{ $k }}.</th>
      <td ><strong>{{$venue->Venue}}</strong></td>
      <td ><strong>{{ $venue->Capacity }}</strong></td>

      </tr>
      <?php
      $k=$k+1;
      ?>
      @endforeach
    

</tbody>
</table>
</div>


@endsection

