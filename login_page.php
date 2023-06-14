<!DOCTYPE php>
<html>

<?php
    session_start();
    if (isset($_SESSION['username'])) {
      header("Location: index.php");
      exit;
    }
  ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="login-card">
    <div class="card-header">
      <div class="log">Login</div>
    </div>
    <form action="login.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input required="" name="username" id="username" type="text">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input required="" name="password" id="password" type="password">
      </div>
      <div class="form-group">
        <input value="Login" type="submit" name="submit">
      </div>
    </form>
  </div>

</body>

</html>