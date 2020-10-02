<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<?php
		include ("connect.php");
		if (isset($_POST['submit']))  
		{
			$id = $_POST['id'];
		    $name=$_POST['UserName'];
		    $email=$_POST['email'];
		    $password= $_POST['password'];
		    $phoneno=$_POST['phonenumber'];
		    $city = $_POST['city'];
		    $scity = implode(" ", $city);

			$sql = "UPDATE users SET user_name='$name', email='$email', password='$password', phoneno='$phoneno',city = '$scity' WHERE id = '$id' ";

			if (mysqli_query($conn, $sql)) 
			{
			    header("location:user_display.php");
			} 
			else 
			{
			    echo "Error updating record: " . mysqli_error($conn);
			}
		}
		mysqli_close($conn);
	?>
</body>
</html>