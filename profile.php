<?php
    require "session_auth.php";
    require "database.php";

    $username = $_SESSION['username'];
    $userInfo = getUserInfo($username);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the form
    $name = isset($_POST["fullname"]) ? $_POST["fullname"] : $userInfo['fullname'];
    $additionalEmail = isset($_POST["additional_email"]) ? $_POST["additional_email"] : $userInfo['additional_email'];
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : $userInfo['phone'];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Change Profile</title>
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
    h1, h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }
    form {
      margin-top: 20px;
    }
    .text_field, .email, .phone {
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
      <h1>Change Profile, Facebook</h1>
      <h2>Facebook Application</h2>
      <div id="digit-clock"></div>  
      <?php
        //some code here
        echo "Visited time: " . date("Y-m-d h:i:sa")
      ?>
      <br>
      <form action="changeprofile.php" method="POST" class="form login">
        New Fullname: <input type="text" class="text_field" name="fullname" placeholder="Enter your fullname" id="fullname" value="<?php echo isset($userInfo['fullname']) ? $userInfo['fullname'] : ''; ?>"/> <br>
        New Email: <input type="text" class="email" name="additional_email" placeholder="Enter your email" id="additional_email" value="<?php echo isset($userInfo['additional_email']) ? $userInfo['additional_email'] : ''; ?>"/> <br>
        New Phone: <input type="text" class="phone" name="phone" placeholder="Enter your phone number" id="phone" value="<?php echo isset($userInfo['phone']) ? $userInfo['phone'] : ''; ?>"/> <br>
        <button class="button" type="submit">Change Profile</button>
      </form>
    </div>
  </div>
</body>
</html>