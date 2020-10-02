<?php
include("aconnect.php");
if (isset($_POST['submit']))  
{
    $name=$_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['phonenumber'];

    $sql = "INSERT INTO user_registration (User_name,email,password,contact) VALUES ('$name','$email','$password',
    '$contact')";
    $result = mysqli_query($conn, $sql);
    header("location:anganvaadi_regi.php");
}
?>