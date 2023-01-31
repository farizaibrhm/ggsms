
<?php
//  Establishing Connection with Server by Passing server_name, user_id and password as a Parameter.
$connection = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db($connection,"ggsms", );  // Selecting Database
session_start();  // Starting Session
$email_check=$_SESSION['login_user'];  // Storing Session
//  SQL Query to Fetch Complete Information of User.
$ses_sql=mysqli_query( $connection,"select * from staffregistration where staffemail='$email_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['staffname'];
$login_email =$row['staffemail'];
$login_password =$row['staffpassword'];
if(!isset($login_session))
{
mysqli_close($connection); // Closing Connection
header('Location:dashboardstaff.php'); // Redirecting to Home Page
}
?>
