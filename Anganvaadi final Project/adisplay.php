<html>
<head>
<title>user_display</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
    body 
    {
        background-image: url(image/clr.jpg);
    }
    table 
    {
        width: 100%;
    }
</style>
</head>
<body>
    <?php
    include('connect.php');
        $sql = "SELECT * FROM agent_regi";   
        echo "<table border ='1'>
        <br><br> 
            <tr>
                <th>id</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";

            $result=mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($result))
            {
                $id = $data['id'];
                echo"<tr>";
                echo"<td>" .$data['id']."</td>";
                echo"<td>" .$data['user_name']."</td>";
                echo"<td>" .$data['email']."</td>";
                echo"<td>".$data['password']."</td>";
                echo"<td>".$data['contact']."</td>";
                echo"<td><a href=seller_edit.php?id=$id>Edit</a></td>";
                echo"<td><a href=sdelete.php?id=$id>Delete</a></td>"; 
                echo "</tr>";
            } 
        echo "</table>";
        echo"<td><a href=slogout.php>Logout</a></td>";
    ?>
</body>
</html>                 