<?php
$staff_name =""; 
$staff_email =""; 
$nameError ="";
$emailError ="";
$successMessage ="";
$passwordMessage ="";
if(isset($_POST['submit']))
{
if (!($_POST["staff_name"]== "")){
$staff_name = $_POST["staff_name"];
if (preg_match("/^[a-zA-Z ]*$/",$staff_name)){
if (!($_POST["staff_email"]=="")) {
$staff_email =$_POST["staff_email"]; 
$staff_email = filter_var($staff_email, FILTER_SANITIZE_EMAIL); 
if (filter_var($staffemail, FILTER_VALIDATE_EMAIL)){
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$staff_password = substr( str_shuffle( $chars ), 0, 8 );
$staff_password1= sha1($staffpassword); 
$connection = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db( $connection,"ggsms"); //
$result = mysqli_query($connection,"SELECT * FROM staff WHERE staff_email='$staff_email'");
$data = mysqli_num_rows($result);
if(($data)==0){
// Insert query
$query = mysqli_query($connection,"insert into staff(staff_name, staff_email, staff_password) values ('$staff_name', '$staff_email', '$staff_password1')");
if($query){
$to = $staff_email;
$subject = 'Welcome, your registration to Global Grandeur Sdn Bhd Staff Management System is completed';
$message = 'Hello ' .$staff_name.'
Your email and password is following:
E-mail: '.$staff_email.'
Your new password : '.$staff_password.'
Now you can login with this email and password.';
if(mail($to, $subject, $message))
{
$successMessage = "Password has been sent to staff's email, staff able to login to the system.";
}
}
}
else{
$emailError = "This email is already registered, Please try another email...";
}
}
else{
$emailError = "Invalid Email"; }
}
else{
$emailError = "Email is required";
}
}
else{
$nameError = "Only letters and white space allowed";
}
}
else {
$nameError = "Name is required";
}
}
?>
