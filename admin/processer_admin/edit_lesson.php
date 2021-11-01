<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
				<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="id" name="id" value="<?=$s_id?>">
					</div>
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="Name" name="Name" value="<?=$s_Name?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Age:</label>
					  <input type="number" class="form-control" id="Age" name="age" value="<?=$s_Age?>">
					</div>
					<div class="form-group">
					  <label for="address">bgrp:</label>
					  <input type="text" class="form-control" id="address" name="pgrp" value="<?=$s_pgrp?>">
					</div>
					<div class="form-group">
					  <label for="address">bpnty:</label>
					  <input type="text" class="form-control" id="address" name="bpnty" value="<?=$s_bpnty?>">
					</div>
					<div class="form-group">
					  <label for="address">sex:</label>
					  <input type="text" class="form-control" id="address" name="sex" value="<?=$s_sex?>">
					</div>
					<div class="form-group">
					  <label for="address">sex:</label>
					  <input type="text" class="form-control" id="address" name="date" value="<?=$s_date?>">
					</div>
					<div class="form-group">
					  <label for="address">sex:</label>
					  <input type="text" class="form-control" id="address" name="phno" value="<?=$s_date?>">
					</div>
					
					
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>