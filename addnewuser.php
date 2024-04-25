


<?php  
  require "database.php";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $Fullname = $_POST["fullname"]; 
  $Email = $_POST["additional_email"];  
  if (isset($username) && isset($password) && isset($Fullname) && isset($Email)){
    if(addnewuser($username,$password,$Fullname,$Email)){
    echo "Debug> got username=$username;password=$password";
    echo "<script>alert('Registration succeed!')</script>";
    }else{
      echo "<script>alert('Registration failed!')</script>";
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
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
      color: #1877f2;
    }
    #main {
      text-align: center;
    }
    #main h2 {
      font-size: 20px;
      margin-bottom: 10px;
    }
    #main p {
      font-size: 16px;
      margin-bottom: 20px;
    }
    .button {
      padding: 10px 20px;
      background-color: #1877f2;
      color: #fff;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
    }
    .button:hover {
      background-color: #166fe5;
    }
  </style>
</head>
<body>
<div class="container wrapper">
  <div id="top"><!-- put any top content between here -->
    <h1>WAPH-Individual Project</h1>
  </div>
  <div class="wrapper">
    <div id="main">
      <h2> Hi <?php echo htmlentities($_POST['username']); ?> !</h2>
      <p> Please Login below now! </p>
      <button class="button"><a href="form.php">Login</a></button>
    </div>
  </div>
</div>
</body>
</html>
