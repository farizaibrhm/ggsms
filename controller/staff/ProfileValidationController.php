<?php
include('staffsession.php');
$Error ="";  // Initialize Variables to Null.
$successMessage ="";
if (isset($_POST['submit']))
{
if ( !($_POST['newpassword'] == "" && $_POST['cnewpassword'] == "" ))
{
$newpassword=$_POST['newpassword'];  // Fetching Values from URL
$cnewpassword=$_POST['cnewpassword'];
if( $newpassword == $cnewpassword )
{
$staffpassword= sha1($cnewpassword);
$connection = mysqli_connect("127.0.0.1", "root", "");  // Establishing Connection with Server..
$db = mysqli_select_db($connection,"ggsms");  // Selecting Database
$query = mysqli_query($connection,"UPDATE staffregistration SET staffpassword='$staffpassword' WHERE staffpassword='$login_password'");
if($query)
{
$successMessage ="Password Changed Successfully.";
}
}
else{
$Error ="Password not match.";
}
}
else{
$Error ="Password should not be empty.";
}
}
?>
