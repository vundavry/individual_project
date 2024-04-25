<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Login page</title>
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
    #top {
      text-align: center;
    }
    h1 {
      font-size: 24px;
      margin-bottom: 20px;
      color: #1877f2;
    }
    #main {
      text-align: center;
    }
    h1, h2 {
      margin-bottom: 10px;
    }
    #digit-clock {
      margin-bottom: 20px;
    }
    .text_field {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f0f2f5;
      font-size: 16px;
    }
    .button {
      width: 100%;
      padding: 10px;
      background-color: #1877f2;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    .button:hover {
      background-color: #166fe5;
    }
  </style>
  <script type="text/javascript">
    function displayTime() {
      document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
    }
    setInterval(displayTime, 500);
  </script>
</head>
<body>
  <div class="container wrapper">
    <div id="top"><!-- put any top content between here -->
      <h1>WAPH-Individual Project</h1>
    </div>
    <div class="wrapper">
      <div id="main">
        <h1>A login form, WAPH</h1>
        <h2>Team project-31</h2>
        <div id="digit-clock"></div>
        <?php
          //some code here
          echo "Visited time: " . date("Y-m-d h:i:sa")
        ?>
        <form action="index.php" method="POST" class="form login">
          Username:<input type="text" class="text_field" name="username" /> <br>
          Password: <input type="password" class="text_field" name="password" /> <br>
          <button class="button" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>