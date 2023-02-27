
<?php
// Initialize Variables To Null.
$staff_name =""; // Sender's Name
$staff_email =""; // Sender's Email ID
$nameError ="";
$emailError ="";
$successMessage ="";
$passwordMessage ="";
//On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
// Checking Null Values In Message
if (!($_POST["staff_name"]== "")){
$staff_name = $_POST["staff_name"];
// Check Name Only Contains Letters And Whitespace
if (preg_match("/^[a-zA-Z ]*$/",$staff_name)){
if (!($_POST["staff_email"]=="")) {
$staff_email =$_POST["staff_email"]; // Calling Function To Remove Special Characters From Email
// Check If E-mail Address Syntax Is Valid Or Not
$staff_email = filter_var($staff_email, FILTER_SANITIZE_EMAIL); // Sanitizing Email(Remove Unexpected Symbol like <,>,?,#,!, etc.)
if (filter_var($staff_email, FILTER_VALIDATE_EMAIL)){
// Generating Password
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$staff_password = substr( str_shuffle( $chars ), 0, 8 );
$staffpassword1= sha1($staff_password); //Encrypting Password
$connection = mysqli_connect("127.0.0.1", "root", ""); // Establishing Connection With Server..
$db = mysqli_select_db( $connection,"ggsms"); // Selecting Database
$result = mysqli_query($connection,"SELECT * FROM staff WHERE staff_email='$staff_email'");
$data = mysqli_num_rows($result);
if(($data)==0){
// Insert query
$query = mysqli_query($connection,"insert into staff(staff_name, staff_email, staff_password) values ('$staff_name', '$staff_email', '$staffpassword1')");
if($query){
$to = $staff_email;
$subject = 'Welcome, your registration to Global Grandeur Sdn Bhd Staff Management System is completed';
/* Let's Prepare The Message For The E-mail */
$message = 'Hello ' .$staff_name.'
Your email and password is following:
E-mail: '.$staff_email.'
Your new password : '.$staff_password.'
Now you can login with this email and password.';
/* Send The Message Using mail() Function */
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
