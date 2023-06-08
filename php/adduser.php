<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style_main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Edit User</title>
</head>
<body>
  <?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header("Location: login.php");
      exit;
    }
    
    if (!preg_match("/^admin/", $_SESSION['username'])) {
      header("Location: main.php");
      exit;
    }
  ?>
<div class="container">
    <h1>Add User</h1>
	
	<form action="adduser_action.php" method="post">
	  <div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required> 
	  </div>
	  <div class="form-group">
		<label for="password">Password:</label>
		<input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	  </div>
</body>
</html>