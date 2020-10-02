<html>
<head>
    <title>user_display</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <?php
    include('connect.php');
    session_start();
    if(isset($_SESSION['email'])) 
    {
        $sql = "SELECT
        u.id,u.user_name,u.email,u.password,u.phoneno,sc.city,u.status
        FROM
        users u      
        JOIN select_city sc ON
        u.city = sc.id
        GROUP BY
        u.id";
        ?>
        <table border ='1'> 
            <tr>
                <th>id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Password</th>
                <th>MobileNo</th>
                <th>City</th>
                <th>status</th>
                <th>Action</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>logout</th>
            </tr>

            <?php
            $result=mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($result))
            {
                $id=$data['id'];
                echo "<tr>";
                echo"<td>" .$data['id']."</td>";
                echo"<td>" .$data['user_name']."</td>";
                echo"<td>" .$data['email']."</td>";
                echo"<td>" .$data['password']."</td>";
                echo"<td>" .$data['phoneno']."</td>";
                echo"<td>" .$data['city']."</td>";
                echo"<td>" .$data['status']."</td>"; 
                
                if($data['status']=='Active') 
                {
                    $action = 'Inactive';
                }
                else 
                {
                    $action = 'Active';
                }

                echo"<td><a href=active.php?action=".$action."&id=".$id.">$action</a></td>";
                echo"<td><a href=edit_form.php?id=$id>Edit</a></td>";
                echo"<td><a href=delete.php?id=$id>Delete</a></td>";
                echo"<td><a href=logout.php>Logout</a></td>";
                echo "</tr>";
            } 
        echo "</table>";
    }
    else
    {
        header("location:user_login.php");
    }  
    ?>
</body>
</html>