<?php
session_start(); // Starting Session
$error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit'])) {
if (empty($_POST['mngr_email']) || empty($_POST['mngr_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$mngr_email=$_POST['mngr_email'];
$mngr_password=$_POST['mngr_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// To protect MySQL injection for Security purpose
$mngr_email = stripslashes($mngr_email);
$mngr_password = stripslashes($mngr_password);
$mngr_email = mysqli_real_escape_string($connection, $mngr_email);
$mngr_password = mysqli_real_escape_string($connection, $mngr_password);
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection, "select * from manager where  mngr_password='$mngr_password' AND mngr_email='$mngr_email'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$mngr_email; // Initializing Session
header('Location:../manager/dashboard.php'); // Redirecting To Other Page
} else {
header('Location:../manager/login.php');
echo '<script>alert("Login failed. Invalid username or password")</script>'; 
}

mysqli_close($connection); // Closing Connection
}
}
?>
