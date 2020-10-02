<?php
    include("connect.php");
    if (isset($_POST['submit'])) 
    {
        session_start();
        $email=$_POST['email'];
        $password=$_POST['password'];
        $status = "Active";
        $sql="select * from users where email='$email' and password='$password'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);

        if ($email == $data['email'] && $password == $data['password'] && $status == $data['status']) 
        {
            $_SESSION['email'] = $email;
            header("location:user_display.php");
        } 
        elseif ($data['status'] == 'Inactive') 
        {
            header("location:user_login.php?msg"); 
        }
        else
        {
            $_SESSION['erromessage']="Please Enter Valid Username or Password";
            header("location:user_login.php");   
        }
    }
?>
