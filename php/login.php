<?php
  include 'config.php';

  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
	
  $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header("Location: main.php");
  } else {
	$message = "Incorrect login. Please try again.";
	echo "<script type='text/javascript'>alert('$message');";
	echo 'window.location.href = "index.php";</script>';


  }

  mysqli_close($conn);
?>