<html>
<title>RegisterDisplay</title>
<body>
    <?php
    include('connect.php');
    
    $sql = "SELECT email,status FROM users ";
    $result = mysqli_query($conn,$sql);
    $msg = "Your Registration Is Successfull:";

    while($data = mysqli_fetch_array($result))
    {  
        if($data['status']=='Active') 
        {
            echo $msg;
            echo $data['email']."<br>";
            echo "<a href='user_login.php'>Active user</a><br>";
        }
    }
    ?>
</body>
</html>