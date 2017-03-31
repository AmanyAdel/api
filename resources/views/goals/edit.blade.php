<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Goal</title>
</head>
<body>
	
	<form action="{{ URL('goals') }}/{{ $goal->id }}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
		<input type="text" name="name"  value="{{ $goal->name }}">
		<input type="text" name="description" value="{{ $goal->description }}">
		<input type="submit" value="Update">
	</form>

</body>
</html>