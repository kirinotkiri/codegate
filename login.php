<?php
include 'config.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Function to hash the password
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Query the database for the user
$query = "SELECT password FROM users WHERE username = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($hashedPassword);
$stmt->fetch();

// Verify the password
if (password_verify($password, $hashedPassword)) {
    // Password is correct, perform login actions here
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    // Password is incorrect, show error message
    $message = "Incorrect login. Please try again.";
    echo "<script type='text/javascript'>alert('$message');";
    echo 'window.location.href = "login_page.php";</script>';
}

// Close the database connection
$stmt->close();
$conn->close();
?>
