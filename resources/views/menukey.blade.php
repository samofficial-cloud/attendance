<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
@php
	use App\program;
	$program=program::orderBy('initial','asc')->get();
	$i=1;
@endphp
<body>
	<style type="text/css">
		table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
	</style>
	
	<table>
		<caption><b>KEY</b></caption>
		<tr>
			<th scope="col">S/N</th>
			<th scope="col">INITIAL</th>
			<th scope="col">FULL</th>
		</tr>
		<tbody>
			@foreach($program as $program)
			<tr>
				<th>{{$i}}.</th>
				<td>{{$program->initial}}</td>
				<td>{{$program->full}}</td>
			</tr>
			@php
				$i=$i +1;
			@endphp
			@endforeach
		</tbody>
	</table>

</body>
</html>