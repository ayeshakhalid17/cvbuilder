<?php
include 'config.php';
session_start();
if (isset($_POST['summary'])){
    $username=$_SESSION["username"];
    $summary=mysqli_real_escape_string($conn,$_POST["summ"]);
    $insert_q="INSERT INTO `cvbuilder`.`summary` (username,summary) VALUES ('$username','$summary')";
    $insertion=mysqli_query($conn, $insert_q);
    header("Location:index.html");
}
?>