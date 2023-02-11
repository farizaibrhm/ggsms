<?php
session_start(); // Starting Session
$error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit'])) {
if (empty($_POST['hremail']) || empty($_POST['hrpassword'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$hremail=$_POST['hremail'];
$hrpassword=$_POST['hrpassword'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// To protect MySQL injection for Security purpose
$hremail = stripslashes($hremail);
$hrpassword = stripslashes($hrpassword);
$hremail = mysqli_real_escape_string($connection, $hremail);
$hrpassword = mysqli_real_escape_string($connection, $hrpassword);
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection, "select * from hrlogin where  hrpassword='$hrpassword' AND hremail='$hremail'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$hremail; // Initializing Session
header('Location:../hr/dashboard.php'); // Redirecting To Other Page
} else {
header('Location:../hr/login.php');
echo '<script>alert("Login failed. Invalid username or password")</script>'; 
}

mysqli_close($connection); // Closing Connection
}
}
?>
