<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jscript.js"></script>
	<style type="text/css">
	div 
	{
	alignment-baseline: central;
    font: 400 15px Lato, sans-serif;
    line-height: 1.5;
    color: #fff;
    background-image: url(image/dubai.JPG);
	}
	.bimg 
	{
		padding: 170px;
	}	
	</style>
</head>
	<body>
		<?php
        include('aconnect.php');
        $id = $_GET['id'];
        $sql="SELECT * FROM vacancies where id='$id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result))
    ?>

	<div class="container bimg">
		<h2 align="center" style="color: blue">Registration Form</h2><br>
		<form class="form-horizontal" action="update_vacancies.php"  name="id" id="form" method="post">
			<input type="hidden" name="id" value="<?php echo isset($id)?$id:0; ?>">
			<div class="form-group">
				<label class="control-lable col-sm-2" for="Name" style="color: blue">Compnay Name*:</label>
				<div class="col-sm-10">
					<input type="text" method="post" class="form-control" id="username" name="UserName" placeholder="Compnay Name" onblur="my_user()" value="<?php echo $row['company_name'];?>">
					<span id="user" class=" text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<lable class="control-lable col-sm-2" style="color: blue"><b>Post*:</b></lable>
				<div class="col-sm-10">
					<input type="text" name="post" id="post" class="form-control" placeholder="Post" value="<?php echo $row['post'];?>">
					<span id="email" class="text-danger"></span>	
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2"style="color: blue">vacancy*:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" placeholder="How many vacancies are available..?" id="vacancy" name="vacancy" value="<?php echo $row['vacancies'];?>">
					<span id="password" class="text-danger"></span>
				</div>
			</div>
			<div class="form-group">
				<label class="control-lable col-sm-2" style="color: blue">Key Skills*:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Key Skill" id="skill" name="skill" value="<?php echo $row['key_skills'];?>">
					<span id="mno" class="text-danger"></span>
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
	<?php 
	if(isset($_GET['email'])) 
	{
		echo "<h1>This email is already being used<h1>";
		}
		?>
	</body>
	</html>