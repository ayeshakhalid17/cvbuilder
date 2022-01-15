<?php
include "config.php";
if (isset($_POST["signup"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $username = mysqli_real_escape_string($conn, $_POST["uname"]);
    $pass = mysqli_real_escape_string($conn, $_POST["password"]);
    $check_username = mysqli_num_rows(mysqli_query($conn, "SELECT username from `cvbuilder`.`users` where username='$username'"));
    $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email from `cvbuilder`.`users` where email='$email'"));
    if ($check_email > 0) {
        echo ("<script>alert(\"User already exists. Enter a new email.\")</script>");
    } 
    else if ($check_username > 0) {
        echo ("<script>alert(\"This username already exists. Enter a new one.\")</script>");
    } 
    else {
        $_SESSION["username"]=$username;
        $insert_q = "INSERT INTO `cvbuilder`.`users` (username,email,password) VALUES ('$username','$email','$pass');";
        $insertion = mysqli_query($conn, $insert_q);
        if ($insertion) {
            echo ("<script>alert(\"Your account has been made successfully.\")
            window.location.href='temp.html';</script>");
        } 
        else {
             echo ("<script>alert(\"User registration unsuccessful.\")</script>");
        }
    }    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
		<div class="login-content">
			<form action="" method="post">
				<img src="avatar.png">
				<h2 class="title">Sign Up</h2>
                <div class="input-div email">
                    <div class="i"> 
                         <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                         <h5>Email</h5>
                         <input type="email" class="input" name="email">
                 </div>
              </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="uname">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<input type="submit" class="btn" value="Sign Up" name="signup">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
