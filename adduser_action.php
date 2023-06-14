<?php

include 'config.php';

// Check if the required fields are filled
if (empty($_POST['username']) || empty($_POST['password'])) {
  // Redirect back to the add user form and show an error message
  header('Location: adduser.php?error=empty_fields');
  exit;
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);


// Insert the new user into the database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if (!mysqli_query($conn, $query)) {
  // If there's an error, redirect back to the add user form and show an error message
  header('Location: adduser.php?error=query_error');
  exit;
}

// Redirect back to the manage user page and show a success message
header('Location: manageuser.php?success=user_added');

mysqli_close($conn);

?>