
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from manager where mngr_email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$mngr_id =$row['mngr_id'];
$mngr_email =$row['mngr_email'];
$mngr_name= $row['mngr_name'];
$mngr_phoneNum= $row['mngr_phoneNum'];
$mngr_deptName= $row['mngr_deptName'];
if(!isset($mngr_email)){
mysqli_close($connection); // Closing Connection
header('Location: ../manager/dashboard.php'); // Redirecting To Home Page
}
?>
