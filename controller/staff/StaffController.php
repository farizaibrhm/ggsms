
<?php
//  Establishing Connection with Server by Passing server_name, user_id and password as a Parameter.
$connection = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db($connection,"ggsms", );  // Selecting Database
session_start();  // Starting Session
$email_check=$_SESSION['login_user'];  // Storing Session
//  SQL Query to Fetch Complete Information of User.
$ses_sql=mysqli_query( $connection,"select * from staff where staff_email='$email_check'");
$row = mysqli_fetch_assoc($ses_sql);
$staff_ID =$row['staff_ID'];
$staff_name =$row['staff_name'];
$staff_email =$row['staff_email'];
$staff_password =$row['staff_password'];
$staff_phoneNum =$row['staff_phoneNum'];
$staff_deptName =$row['staff_deptName'];
if(!isset($staff_email))
{
mysqli_close($connection); // Closing Connection
header('Location:../staff/dashboard.php'); // Redirecting to Home Page
}
?>
