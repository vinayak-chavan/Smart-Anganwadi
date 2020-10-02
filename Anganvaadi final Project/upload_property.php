<!DOCTYPE html>
<html lang="en">
<head>
	<title>select property type</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/javasc.js"></script>
	<style type="text/css">
		body 
		{
			background-color: powderblue;
		}
	</style>
</head>
<body>

	<div class="container">
		<h2 align="center"> Select Property Type </h2>
		<br>
		<form class="form-horizontal" action="pro_type.php" name="form" id="form" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Name">Property Name*:</label>
				<div class="col-sm-10">
					<input type="text" method="post" class="form-control" onkeypress="return AvoidSpace(event)" id="username" 	name="UserName" placeholder="UserName" onblur="my_user()">
					<span id="user" class=" text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">Select property type*:</label>
				<div class="col-sm-6 radio">
					<label><input type="radio" name="type" value="2 BHK">2 BHK</label>
					<label><input type="radio" name="type" value="3 BHK">3 BHK</label>
					<span id="type" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-10">
    				<input type="file" name="file" class="form-control" id="file" value="submit" 
    				onchange="return filename(img)">
    				<span id="files" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-6">
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
				</div>
			</div>
		</form>
	</div>
</body>
</html>