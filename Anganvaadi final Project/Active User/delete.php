<?php
	$id = $_GET['id'];
	include ("connect.php");
	$sql="DELETE FROM users  WHERE id = '$id'" ;	
	if ($conn->query($sql) === TRUE)
	{
	    echo "Record deleted successfully";
	    header("location:user_display.php");
	} 
	else 
	{
	    echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>
