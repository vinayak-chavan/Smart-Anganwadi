<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/javasc.js"></script>
</head>
<body>
	<div class="container">
		<h2 align="center">CRUD</h2>
			<form class="form-horizontal" action="process.php" name="form" id="form" method="post" 
			enctype="multipart/form-data">
			<input type="hidden" name="erromessage">
			<div class="form-group">
				<lable class="control-lable col-sm-2" for="Email"><b>First Name*:</b></lable>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="first_name" id="mail" placeholder="Enter Your First Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="passw">Last Name*:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Your Last name" id="lname" name="last_name">
				</div>
			</div>
				<div class="form-group">
				<label class="control-lable col-sm-2">Email Address*:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" placeholder="Enter Your Email Address" id="email" 
					name="email">
				</div>
				<br><br>
				<div class="col-sm-9">
				</div>
				<div class="col-sm-3">
				<a href="#" class="btn btn-primary" name="Cancel" value="submit">Cancel</a>
				<button type="submit" class="btn btn-info" value="submit">Add record</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>