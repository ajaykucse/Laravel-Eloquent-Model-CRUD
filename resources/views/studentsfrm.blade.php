<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Record</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th scope="col"> ID</th>
				<th scope="col"> Name</th>
				<th scope="col"> Course</th>
				<th scope="col"> Address</th>
				<th scope="col"> Mobile</th>
				<th class="text"> Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($students as $student)
			<tr>
				<td>{{ $student->id}}</td>
				<td>{{ $student->name}}</td>
				<td>{{ $student->course}}</td>
				<td>{{ $student->address}}</td>
				<td>{{ $student->mobile}}</td>
				
				<td class="text-right">
					<a href="/students/$student->id" class="btn btn-primary badge-pill">Edit</a>
					<a href="/students/{$student->id}" class="btn btn-danger badge-pill"> Delete</a>
				</td>
			</tr>
			@endforeach
		</tbody>

	</table>
</body>
</html>