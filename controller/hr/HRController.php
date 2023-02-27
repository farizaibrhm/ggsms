
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("127.0.0.1", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection,"ggsms");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from hr where hr_email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$hr_ID =$row['hr_ID'];
$hr_email =$row['hr_email'];
$hr_name= $row['hr_name'];
$hr_phoneNum= $row['hr_phoneNum'];
$hr_deptName= $row['hr_deptName'];
$hr_password= $row['hr_password'];
if(!isset($hr_email)){
mysqli_close($connection); // Closing Connection
header('Location: ../hr/dashboard.php'); // Redirecting To Home Page
}
?>
