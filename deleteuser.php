<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style_main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Delete User</title>
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
    <h1>Delete User</h1>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
      header("Location: manageuser.php");
    } else {
      echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
    ?>
  </div>
</body>
</html>