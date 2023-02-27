<?php
session_start(); // Starting Session
$error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit'])) {
if (empty($_POST['hr_email']) || empty($_POST['hr_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$hr_email=$_POST['hr_email'];
$hr_password=$_POST['hr_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// To protect MySQL injection for Security purpose
$hr_email = stripslashes($hr_email);
$hr_password = stripslashes($hr_password);
$hr_email = mysqli_real_escape_string($connection, $hr_email);
$hr_password = mysqli_real_escape_string($connection, $hr_password);
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection, "select * from hr where  hr_password='$hr_password' AND hr_email='$hr_email'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$hr_email; // Initializing Session
header('Location:../hr/dashboard.php'); // Redirecting To Other Page
} else {
header('Location:../hr/login.php');
echo '<script>alert("Login failed. Invalid username or password")</script>'; 
}

mysqli_close($connection); // Closing Connection
}
}
?>
