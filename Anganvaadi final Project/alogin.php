
<?php
    include("connect.php");
    if (isset($_POST['submit'])) 
    {
        session_start();
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="SELECT * FROM agent_regi WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($result);

        if ($email==$data['email'] && $password==$data['password']) 
        {
            $_SESSION['email']=$email;
            header("location:adisplay.php");
        }   
        else
        {
            $_SESSION['erromessage']="Please Enter Valid Username or Password";
            header("location:buyer_login.php");   
        }
    }
?>