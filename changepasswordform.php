<?php
  require "session_auth.php";
?>
/<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH- Change password</title>
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
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    form {
      margin-top: 20px;
    }
    .text_field {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .button {
      background-color: #1877f2;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    .button:hover {
      background-color: #166fe5;
    }
    #digit-clock {
      font-size: 14px;
      margin-top: 10px;
    }
  </style>
  <script type="text/javascript">
    function displayTime() {
      document.getElementById('digit-clock').innerHTML = "Current time: " + new Date();
    }
    setInterval(displayTime, 500);
  </script>
</head>
<body>
  <div class="container">
    <div id="top">
      <h1>WAPH-Individual Project</h1>
    </div>
    <div id="main">
      <h1>Change Password, WAPH</h1>
      <div id="digit-clock"></div>  
      <?php
        //some code here
        echo "Visited time: " . date("Y-m-d h:i:sa");
        $rand = bin2hex(openssl_random_pseudo_bytes(16));
        $_SESSION['nocsrftoken'] = $rand;
      ?>
      <form action="changepassword.php" method="POST" class="form login">
        Username: <?php echo htmlentities($_SESSION['username']); ?> <br>
        Password: <input type="password" class="text_field" name="newpassword" /> <br>
        <input type="hidden" class="text_field" name="nocsrftoken" value="<?php echo $rand; ?>" /> <br>
        <button class="button" type="submit">Change Password</button>
      </form>
    </div>
  </div>
</body>
</html>