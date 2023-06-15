<?php
require_once 'config.php';
session_start();
$username = $_SESSION['username'];


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bio = $_POST['bio'];

$sql2 = "UPDATE user_info SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone', bio='$bio' WHERE username='$username'";

if (mysqli_query($conn, $sql2)) {
    header("location: profilepage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close();
?>