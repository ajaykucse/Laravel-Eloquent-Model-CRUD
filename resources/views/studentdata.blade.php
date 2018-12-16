<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<form method="POST" action="/add">
				<div class="card-header">
					<h4>Laravel CRUD: Eloquent Model</h4>
				</div>
				<div class="card-body">
					<h5 class="card-title">Insert Student Data</h5>
				</div>
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Enter Student Name</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Student Name">
				</div>
				<div class="form-group">
					<label for="">Enter Course</label>
					<input type="text" class="form-control" name="course" placeholder="Enter Course">
				</div>
				<div class="form-group">
					<label for="">Student Address</label>
					<input type="text" class="form-control" name="address" placeholder="Student Address">
				</div>
				<div class="form-group">
					<label for="">Sudent Mobile Number</label>
					<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile Number">
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>