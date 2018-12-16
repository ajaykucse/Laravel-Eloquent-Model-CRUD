<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Edit Data</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="card-header">
				<h4>Laravel CRUD: Eloquent Model</h4>
			</div>
			<div class="card-body">
				<h5 class="card-title">Update Student Data</h5>
			</div>
			<form method="POST" action="/update/{{ $students->id}}">
				
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				<input type="hidden" name="method" value="UPDATE">
				<input type="hidden" name="id" value="{{ $students->id }}">

				<div class="form-group">
					<label for="">Enter Student Name</label>
					<input type="text" class="form-control" name="name" value="{{ $students->name }}" id="name">
				</div>
				<div class="form-group">
					<label for="">Enter Course</label>
					<input type="text" class="form-control" name="course" value="{{ $students->course }}" id="course">
				</div>
				<div class="form-group">
					<label for="">Student Address</label>
					<input type="text" class="form-control" name="address" value="{{ $students->address }}" id="address">
				</div>
				<div class="form-group">
					<label for="">Sudent Mobile Number</label>
					<input type="text" class="form-control" name="mobile" value="{{ $students->mobile }}" id="mobile">
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary">Update</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>