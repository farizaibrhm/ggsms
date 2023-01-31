
<?php
session_start(); // Starting Session
$Error =""; // Initialize Variables To Null.
$successMessage ="";
if (isset($_POST['submit']))
{
if ( !( $_POST['staffemail'] == "" && $_POST['staffpassword'] == "" ) )
{
$staffemail=$_POST['staffemail']; // Fetching Values From URL
$staffpassword= sha1($_POST['staffpassword']); // Password Encryption, If you like you can also leave sha1
$staffemail = filter_var($staffemail, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($staffemail, FILTER_VALIDATE_EMAIL)) // Check if E-mail Address Syntax is Valid or Not
{
$connection = mysqli_connect("127.0.0.1", "root", ""); // Establishing Connection with Server..
$db = mysqli_select_db( $connection,"ggsms"); // Selecting Database
// Matching User Input E-mail and Password with stored E-mail and Password in Database
$result = mysqli_query($connection,"SELECT * FROM staffregistration WHERE staffemail='$staffemail' AND staffpassword='$staffpassword'");
$data = mysqli_num_rows($result);
if($data==1){
$_SESSION['login_user']=$staffemail; // Initializing Session
header('Location: dashboardstaff.php');
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
