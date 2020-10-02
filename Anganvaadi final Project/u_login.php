<?php session_start();?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<title> User Login Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/javasc.js"></script>
</head>
	<style type="text/css">
	div 
	{
	alignment-baseline: central;
    font: 400 15px Lato, sans-serif;
    line-height: 1.5;
    color: black;
    background-color: lightblue;
	}
	.pad 
	{
		padding: 170px;
	}	
	</style>
	<body>
	<div class="container pad">
		<h2 align="center">User Login</h2>
			<form class="form-horizontal" action="aonlyreguser.php"  name="form" id="form" method="post" enctype="multipart/form-data">
			<input type="hidden" name="erromessage">
			<div class="form-group">
				<lable class="control-lable col-sm-2" for="Email"><b>Email*:</b></lable>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="mail" placeholder="Email" onblur="my_email()" required="">
					<span id="email" class="text-danger"></span>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="passw">Password*:</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" placeholder="Password" id="psw" name="password" onblur="my_password()">
					<span id="password" class="text-danger"></span>
				</div>
				<div class="col-sm-6">
					<input type="submit" id="submit" name="submit" class="btn btn-primary" value="Signin">
				</div>
			</div>
			<div id="erromessage">
				<?php if(isset($_SESSION['erromessage'])) { echo $_SESSION['erromessage']; } ?>
			</div>
			<?php unset($_SESSION['erromessage']); ?>
		</form>
	</div>
	<?php
  	if(isset($_SESSION['email']))
  	{
   		header("location:");
   	}
	?>
</body>
</html>