<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Record</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h4>Laravel CRUD: Eloquent Model</h4>
			</div>
			<div class="card-body">
				<h5 class="card-title">Fetch / Display Student Data</h5>

				@if(count($errors) > 0)

				<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
				</div>
				@endif

				@if(\Session::has('success'))
				<div class="alert alert-success">
					<p>{{ \Session::get('success')}}</p>
				</div>
				@endif
				
			    <div class="row">
			    	<div class="col-md-12 text-right">
			    		<a href="/insert-data" class="btn btn-success badge-pill" style="width: 80px;"> ADD</a>
			    	</div>
			    </div>
			    <br>
				<table class="table table-dark table-hover table-bordered">
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
	</div>
	</div>
	</div>
</body>
</html>