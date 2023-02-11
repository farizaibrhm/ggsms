
<?php
// Initialize Variables To Null.
$staffname =""; // Sender's Name
$staffemail =""; // Sender's Email ID
$nameError ="";
$emailError ="";
$successMessage ="";
$passwordMessage ="";
//On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
// Checking Null Values In Message
if (!($_POST["staffname"]== "")){
$staffname = $_POST["staffname"];
// Check Name Only Contains Letters And Whitespace
if (preg_match("/^[a-zA-Z ]*$/",$staffname)){
if (!($_POST["staffemail"]=="")) {
$staffemail =$_POST["staffemail"]; // Calling Function To Remove Special Characters From Email
// Check If E-mail Address Syntax Is Valid Or Not
$staffemail = filter_var($staffemail, FILTER_SANITIZE_EMAIL); // Sanitizing Email(Remove Unexpected Symbol like <,>,?,#,!, etc.)
if (filter_var($staffemail, FILTER_VALIDATE_EMAIL)){
// Generating Password
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
$staffpassword = substr( str_shuffle( $chars ), 0, 8 );
$staffpassword1= sha1($staffpassword); //Encrypting Password
$connection = mysqli_connect("127.0.0.1", "root", ""); // Establishing Connection With Server..
$db = mysqli_select_db( $connection,"ggsms"); // Selecting Database
$result = mysqli_query($connection,"SELECT * FROM staffregistration WHERE staffemail='$staffemail'");
$data = mysqli_num_rows($result);
if(($data)==0){
// Insert query
$query = mysqli_query($connection,"insert into staffregistration(staffname, staffemail, staffpassword) values ('$staffname', '$staffemail', '$staffpassword1')");
if($query){
$to = $staffemail;
$subject = 'Welcome, your registration to Global Grandeur Sdn Bhd Staff Management System is completed';
/* Let's Prepare The Message For The E-mail */
$message = 'Hello ' .$staffname.'
Your email and password is following:
E-mail: '.$staffemail.'
Your new password : '.$staffpassword.'
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
