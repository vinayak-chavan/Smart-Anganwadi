<!DOCTYPE html>
<html lang="en">
<head>
	<title>form1</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jscript.js"></script>
</head>
<body>
	<?php
	include("connect.php");
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	
		$sql="SELECT * FROM users where id='$id'";
		$result = mysqli_query($conn,$sql);
		while($data = mysqli_fetch_array($result)) 
        {
            $city=$data['city'];
            $city=explode(" ",$city);
    ?>

	<div class="container">
		<h2 align="center">Registration Form</h2>
		<form class="form-horizontal" action="edit.php"  name="form" id="form" method="post">
			<input type="hidden" name="id" value="<?php echo isset($id)?$id:0; ?>"> 
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Name">UserName*:</label>
				<div class="col-sm-10">
					<input type="text" method="post" value="<?php echo $data['user_name']; ?>" class="form-control" onkeypress="return AvoidSpace(event)" id="username" name="UserName" placeholder="UserName" onblur="my_user()">
					<span id="user" class=" text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<lable class="control-lable col-sm-2" for="email"><b>Email*:</b></lable>
				<div class="col-sm-10">
					<input type="email" class="form-control" value="<?php echo $data['email']; ?>" name="email" id="mail" placeholder="Email" onblur="my_email()">
					<span id="email" class="text-danger"></span>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="passw">Password*:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Password" id="psw" value="<?php echo $data['password']; ?>"name="password" onblur="my_password()">
					<span id="password" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Mobile No">Mobile Number*:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="<?php echo $data['phoneno']; ?>" onkeyup="return phone(event,this)" placeholder="Mobile number" 
					id="mno1" name="phonenumber" onblur="mobileNumber()">
					<span id="mno" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2">City*:</label>
				<div class="col-sm-10">
			
		    <?php
            	include("connect.php");
            	$sql="select * from select_city";
            	$result = mysqli_query($conn,$sql);
            	$option='';
            	while($data = mysqli_fetch_array($result))
            	{
                	$option .= '<option value = "'.$data['id'].'">'.$data['city'].'</option>';
            	}
        	?>
        	<select name="city[]"> 
            	<?php echo $option; ?>
        	</select>
				<span id="select" class="text-danger"></span>
			</div>
			</div>
			<div class="form-group">
				<div class="col-sm-2">
			</div>
				<div class="col-sm-6">
					<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
	<?php }
}
?>
</body>
</html>