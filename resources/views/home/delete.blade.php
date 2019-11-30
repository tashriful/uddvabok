
<!DOCTYPE html>
<html>
<head>
	<title>Delete Student</title>
</head>
<body>

	<h2>Delete Student</h2>

	<a href="/stdList">Back</a> |
	<a href="/logout">logout</a>


	<table border="0">
		<tr>
			<td>Id :</td>
			<td>{{$std[0]}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std[1]}}</td>
		</tr>
		<tr>
			<td>CGPA :</td>
			<td>{{$std[2]}}</td>
		</tr>
		<tr>
			<td>DEPT :</td>
			<td>
				{{$std[3]}}
			</td>
		</tr>
</table>
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">

</body>
</html>