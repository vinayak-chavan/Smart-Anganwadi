<?php
include("connect.php");
if (isset($_POST['submit']))  
{
    $name=$_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['phonenumber'];

    $sql = "INSERT INTO agent_regi (User_name,email,password,contact) VALUES ('$name','$email','$password',
    '$contact')";
    $result = mysqli_query($conn, $sql);
    header("location:aregi_succ.php");
}
?>