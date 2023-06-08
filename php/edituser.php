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
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Katalia_Inventory</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <?php
          if (substr($_SESSION['username'], 0, 5) == "admin") {
            echo '<li><a href="manageuser.php">Manage Users</a></li>';
          }
        ?>
        <li><a href="inventory.php">Inventory</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Hello, <?php echo $_SESSION['username']; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h1>Edit User</h1>
    <?php
      include 'config.php';
      $id = $_GET["id"];
      $sql = "SELECT * FROM users WHERE id=$id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $username = $row["username"];
          $password = $row["password"];
        }
      } else {
        echo "0 results";
      }
      $conn->close();
    ?>
    <form action="updateuser.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  </div>
</body>
</html>