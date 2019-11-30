<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<h2>Student List:</h2>
	
	<a href="/home">Back</a> |
	<a href="/logout">logout</a>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>CGPA</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value[0]}}</td>
			<td>{{$value[1]}}</td>
			<td>{{$value[2]}}</td>
			<td>
				<a href="/edit/{{$value[0]}}">Edit</a> |
				<a href="/delete/{{$value[0]}}">Delete</a> |
				<a href="/details/{{$value[0]}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

</body>
</html>