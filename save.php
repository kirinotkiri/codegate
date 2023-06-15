<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
      header("Location: levelmain.php");
      exit;
    }
$username=$_SESSION['username'];
$lvl = $_POST['lvl'];
$query = "UPDATE user_progress SET $lvl=1 WHERE username='$username'"; 

mysqli_query($conn,$query);mysqli_close($conn);
header("Location: levelmain.php");
?>