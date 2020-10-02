<?php
	$id = $_GET['id'];
	include ("aconnect.php");
	$sql="DELETE FROM vacancies WHERE id = '$id'";	
	if ($conn->query($sql) === TRUE)
	{
	    header("location:adminstrator.php");
	} 
	else 
	{
	    echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>