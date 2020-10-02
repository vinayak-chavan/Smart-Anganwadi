<?php
include("aconnect.php");
if (isset($_POST['submit'])) 
{
	$name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $sql = "INSERT INTO feedback (name,email,feedback) VALUES ('$name','$email','$feedback')";
    $result = mysqli_query($conn, $sql);
    
    header("location:athanksnote.php");
}
?>