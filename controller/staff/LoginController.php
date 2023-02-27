
<?php
session_start(); // Starting Session
$Error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit']))
{
if ( !( $_POST['staff_email'] == "" && $_POST['staff_password'] == "" ) )
{
$staff_email=$_POST['staff_email']; // Fetching Values From URL
$staff_password= sha1($_POST['staff_password']); // Password Encryption, If you like you can also leave sha1
$staff_email = filter_var($staff_email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($staff_email, FILTER_VALIDATE_EMAIL)) // Check if E-mail Address Syntax is Valid or Not
{
$connection = mysqli_connect("127.0.0.1", "root", ""); // Establishing Connection with Server..
$db = mysqli_select_db( $connection,"ggsms"); // Selecting Database
// Matching User Input E-mail and Password with stored E-mail and Password in Database
$result = mysqli_query($connection,"SELECT * FROM staff WHERE staff_email='$staff_email' AND staff_password='$staff_password'");
$data = mysqli_num_rows($result);
if($data!==1){
$_SESSION['login_user']=$staff_email; // Initializing Session
header('Location:../staff/dashboard.php');
}
else{
$Error ="Email or Password is wrong.";
}
mysqli_close ($connection); // Connection Closed
}
else{
$Error ="Invalid Email Format.";
}
}
else{
$Error ="Email or Password is Empty.!";
}
}
?>