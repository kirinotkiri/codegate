<?php
include 'config.php';
session_start();

$password = $_POST['password'];
$newpass = $_POST['newpass'];
$newpass2 = $_POST['newpass2'];
if ($_POST['newpass'] != $_POST['newpass2']){
	header('Location: profilepage.php?error=password_mismatch');
}
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

$username=$_SESSION['username'];

$query1 = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($query1);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($hashedPassword);
$stmt->fetch();
$stmt->close();


if (password_verify($password, $hashedPassword)) {
	$passwordNewHash = password_hash(mysqli_real_escape_string($conn, $_POST['newpass']), PASSWORD_DEFAULT);
	$query2 = "UPDATE users SET password=? WHERE username=?"; 
	$stmt = $conn->prepare($query2);
	$stmt->bind_param("ss",$passwordNewHash,$username);$stmt->execute();$stmt->close();
    session_start();
	session_unset();
	session_destroy();
	header("Location: index.php");
	exit;
} else {
    // Password is incorrect, show error message
    $message = "Incorrect password. Please try again.";
    echo "<script type='text/javascript'>alert('$message');";
    echo 'window.location.href = "profilepage.php";</script>';
}

?>