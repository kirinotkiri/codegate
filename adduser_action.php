<?php

include 'config.php';

// Check if the required fields are filled
if (empty($_POST['username']) || empty($_POST['password'])) {
  // Redirect back to the add user form and show an error message
  header('Location: registerpage.php?error=empty_fields');
  exit;
}

if ($_POST['password'] != $_POST['passwordcon']){
	header('Location: registerpage.php?error=password_mismatch');
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$password = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);


// Insert the new user into the database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password');"; 

if (!mysqli_query($conn, $query)) {
	
  // If there's an error, redirect back to the add user form and show an error message
  header('Location: registerpage.php?error=query_error');
  exit;
}


  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();



$uuid = $row['UUID'];
$query2= "INSERT INTO user_info (UUID, username,first_name,last_name,phone,email,bio) VALUES ('$uuid','$username','$first_name','$last_name','$phone','$email','Enter your biodata here');";


mysqli_query($conn, $query2);
// Redirect back to the manage user page and show a success message
$query3 = "INSERT INTO user_progress (username,lv1,lv2,lv3,lv4,lv5,lv6) VALUES(?,0,0,0,0,0,0)"; 
	$stmt = $conn->prepare($query3);
	$stmt->bind_param("s",$username);$stmt->execute();$stmt->close();
header('Location: login_page.php?success=user_added');
mysqli_close($conn);


?>