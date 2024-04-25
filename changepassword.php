<?php
	require "session_auth.php";
	require "database.php";
	$token =$_POST['nocsrftoken'];
	if(!isset($token) or $token!=$_SESSION['nocsrftoken']){
		echo "<script>alert('CSRF Attack is detected!')</script>";
		die();
	}  
	$username = $_SESSION["username"];
	$password = $_REQUEST["newpassword"]; 
	if (isset($username) and isset($password)){
		echo "Debug> changepassword.php got username=$username;newpassword=$password";
		if(changepassword($username,$password)){
			echo "<script>alert('password has been changed!')</script>";
		}else{
			echo "<script>alert('change password failed!')</script>";
		}
	}else{
		echo "<script>alert('No username/password provided!')</script>";
	}
  	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Website</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    #top {
      text-align: center;
      margin-bottom: 20px;
    }
    h1 {
      font-size: 24px;
    }
    #main {
      text-align: center;
    }
    p {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .button {
      background-color: #1877f2;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      text-decoration: none;
      transition: background-color 0.3s;
    }
    .button:hover {
      background-color: #166fe5;
    }
  </style>
</head>
<body>
  <div class="container">
    <div id="top">
      <h1>WAPH-Individual Project</h1>
    </div>
    <div id="main">
      <p>Hi, your changes have been made. Please login again below.</p>
      <button class="button"><a href="form.php" style="color: inherit; text-decoration: none;">Login</a></button>
    </div>
  </div>
</body>
</html>