
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from hrlogin where hremail='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$hrid =$row['hrid'];
$hremail =$row['hremail'];
$hrname= $row['hrname'];
$hrphonenum= $row['hrphonenum'];
$hrdeptname= $row['hrdeptname'];
if(!isset($hremail)){
mysqli_close($connection); // Closing Connection
header('Location: dashboardhr.php'); // Redirecting To Home Page
}
?>
