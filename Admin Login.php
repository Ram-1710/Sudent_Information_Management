<?php

include_once('connection.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Admin_Username = test_input($_POST["myadmin"]);
    $Admin_Password = test_input($_POST["123"]);
    $stmt = $conn->prepare("SELECT * FROM admin_login");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['username'] == $Admin_Username) &&
            ($user['password'] == $Admin_Password)) {
                header("location: dashboard.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<img class="wave" src="images/wave.jpeg">
	<div class="container">
		<div class="img">
			<img src="images/Student.png">
		</div>
		<div class="login-content" action="">
			<form method="POST">
				<img src="images/Avatar.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<input type="text" class="input" placeholder="Username" name="AdminUserId" required="required">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" placeholder="Password" name=AdminPassword required="required">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="Login" value="Login" class="btn">
				</form>
        </div>
    </div>
<body>
</html>
