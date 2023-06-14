<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Page</title>
  </head>
  <body>
    <div class="container">
      <div class="login-box">
        <h1>Login</h1>
        <form action="login.php" method="post">
          <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <input type="submit" class="btn" value="Sign in">
        </form>
      </div>
    </div>
  </body>
</html>

