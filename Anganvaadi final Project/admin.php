<?php
    include("connect.php");
    if (isset($_POST['submit'])) 
    {
        session_start();
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM admin_login WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);

        if ($email==$data['email'] && $password==$data['password']) 
        {
            $_SESSION['email']=$email;
            header("location:show_property.php");
        }   
        else
        {
            $_SESSION['erromessage']="Please Enter Valid Username or Password";
            header("location:index1.php");   
        }
    }
?>