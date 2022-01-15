<?php
include 'config.php';
session_start();
if (isset($_POST['summary'])){
    $first_name=$_SESSION["first_name"];
    $last_name=$_SESSION["last_name"];
    $summary=mysqli_real_escape_string($conn,$_POST["summ"]);
    $insert_q="INSERT INTO `cvbuilder`.`summary` (first_name,last_name,summary) VALUES ('$first_name','$last_name','$summary')";
    $insertion=mysqli_query($conn, $insert_q);
    header("Location:index.html");
}
?>