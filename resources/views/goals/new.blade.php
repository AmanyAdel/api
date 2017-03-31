<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Goal</title>
</head>
<body>
	
	<form action="{{ URL("goals") }}" method="POST">
		{{ csrf_field() }}
		<input type="text" name="name" id="">
		<input type="text" name="description" id="">
		<input type="submit" value="Add">
	</form>

</body>
</html>