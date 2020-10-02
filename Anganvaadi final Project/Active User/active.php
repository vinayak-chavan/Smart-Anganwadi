<?php

include("connect.php");

$status = $_GET['action'];
$id = $_GET['id'];

if($status == 'Active') 
{
	$sql = "UPDATE users SET status = 'Active' where id=".$id.""; 
} 
else 
{
	$sql = "UPDATE users SET status = 'Inactive' where id=".$id.""; 
}
$result = mysqli_query($conn,$sql);
 header("location:user_display.php");
?>