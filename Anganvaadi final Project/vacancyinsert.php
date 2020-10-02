<?php
include("aconnect.php");
if (isset($_POST['submit']))  
{
    $cn=$_POST['UserName'];
    $post = $_POST['post'];
    $vacancy = $_POST['vacancy'];
    $skill = $_POST['skill'];
    
    $sql = "INSERT INTO vacancies (company_name,post,vacancies,key_skills) VALUES ('$cn','$post','$vacancy','$skill')";

    $result = mysqli_query($conn, $sql);
    header("location:adminstrator.php");
}
?>