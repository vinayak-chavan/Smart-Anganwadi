<html>
<title>successMsg</title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    body 
    {
        text-align: center;
        font: 500 20px Lato, sans-serif;
        line-height: 1.8;
        color: black;
        padding: 100px;
        background-color: yellow;
        background-image: url(image/watch.jpg);
    }
</style>
<body>
    <?php
    include('connect.php');
    $sql = "SELECT email FROM agent_regi ";
    $result = mysqli_query($conn,$sql);
    $msg = "Your Registration Is Successfull:";

    while($data = mysqli_fetch_array($result))
    {  
            echo $msg;
            echo $data['email']."<br>";
    }
    ?>
    <a href="seller_login.php">Login</a>
</body>
</html>