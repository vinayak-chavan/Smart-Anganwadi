<html>
<head>
<title>user_display</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    table
    {
        width: 90%;
        margin-left: 65px;
        text-align: center;
    }
    .bg 
    {
        background-image: url(image_upload/Capture.jpg);
    }

</style>
<body class="bg">
    <?php
    include('aconnect.php');
        $sql = "SELECT * FROM vacancies";   
        echo "<table border ='1'> 
        <br><br><br>
            <tr>
                <th>Number</th>
                <th>Company Name</th>
                <th>Post</th>
                <th>Vacancies</th>
                <th>Key Skills</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>";

            $result=mysqli_query($conn,$sql);
            while($data = mysqli_fetch_array($result))
            {
                $id = $data['id'];
                echo"<tr>";
                echo"<td>" .$data['id']."</td>";
                echo"<td>" .$data['company_name']."</td>";
                echo"<td>" .$data['post']."</td>";
                echo"<td>".$data['vacancies']."</td>";
                echo"<td>".$data['key_skills']."</td>";
                echo"<td><a href=vacanciesupdate.php?id=$id>Edit</a></td>";
                echo"<td><a href=delete.php?id=$id>Delete</a></td>"; 
                echo "</tr>";
            } 
        echo "</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo"<button><a href=vacancy_edit.php?id=$id>Add</a></button>";
        echo"<button><a href=anganvaadi_index.php>BACK</a></button>";
    ?>
</body>
</html>