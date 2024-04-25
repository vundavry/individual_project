<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Waph - Individual Project</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
      color: #1877f2;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: calc(100% - 22px);
      padding: 10px;
      margin: 0 0 10px;
      border: 1px solid #dadde1;
      border-radius: 5px;
      background-color: #f0f2f5;
      font-size: 14px;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #1877f2;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #1877f2;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #166fe5;
    }
    .already-registered {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
      color: #4b4f56;
    }
    .already-registered a {
      color: #1877f2;
      text-decoration: none;
    }
    .already-registered a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Sign Up</h2>
    <form action="addnewuser.php" method="POST" class="form login">
      <input type="text" name="fullname" required placeholder="Full Name">
      <input type="email" name="additional_email" required placeholder="Mobile number or email">
      <input type="email" name="username" required placeholder="New email">
      <input type="password" id="password" name="password" required placeholder="New password">
      <input type="password" name="repassword" id="repassword" placeholder="Confirm password" required>
      <button type="submit">Sign Up</button>
      <div class="already-registered">
        Already have an account? <a href="https://waph-team31.minifacebook.com/form.php">Log In</a>
      </div>
    </form> 
  </div>
</body>
</html>
