
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit Student</h2>

	<a href="/stdList">Back</a> |
	<a href="/logout">logout</a>


	<table border="0">
		<tr>
			<td>Id</td>
			<td>{{$std[0]}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std[1]}}"></td>
		</tr>
		<tr>
			<td>CGPA</td>
			<td><input type="text" name="cgpa" value="{{$std[2]}}"></td>
		</tr>
		<tr>
			<td>DEPT</td>
			<td>
				<select name="dept">
					<option 
						@if($std[3] == 'CSE')
							selected
						@endif
					 value="CSE">CSE</option>
					<option 
						@if($std[3] == 'SE')
							selected
						@endif
					value="SE">SE</option>
					<option 
						@if($std[3] == 'CSSE')
							selected
						@endif

					value="CSSE">CSSE</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>

</body>
</html>