<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Goals</title>
</head>
<body>
	
	<table>
		<tbody>
			@foreach($goals as $goal)
				<tr>
					<td>{{ $goal->name }}</td>
					<td>{{ $goal->description }}</td>
					<td>
						<form action="{{ URL('goals') }}/{{ $goal->id }}" method="POST">
							<input type="hidden" name="_method" value="DELETE">
							{{ csrf_field() }}
							<input type="submit" value="Delete"> 
						</form>
						<a href="{{ URL("goals") }}/{{ $goal->id }}/edit">Edit</a>
						<a href="{{ URL("goals") }}/{{ $goal->id }}">Show</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<a href="goals/create">Add Goal</a>

</body>
</html>