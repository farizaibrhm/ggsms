
<?php
// Initialize Variables to Null.
$staffemail =""; // Sender's E-mail ID
$Error ="";
$successMessage ="";
// On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
if (!($_POST["staffemail"]==""))
{
$staffemail =$_POST["staffemail"];  // Calling Function To Remove Special Characters From E-mail
$staffemail = filter_var($staffemail, FILTER_SANITIZE_EMAIL);  // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($staffemail, FILTER_VALIDATE_EMAIL))
{
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
$staffpassword = substr( str_shuffle( $chars ), 0, 8 );
$password1= sha1($staffpassword);
$connection = mysqli_connect("127.0.0.1", "root", "");  // Establishing Connection With Server..
$db = mysqli_select_db($connection,"ggsms");  // Selecting Database
$query = mysqli_query($connection,"UPDATE staffregistration SET staffpassword='$password1' WHERE staffemail='$staffemail'");
if($query)
{
$to = $staffemail;
$subject = 'Your New Password...';
// Let's Prepare The Message For E-mail.
$message = 'Hello User
Your new password : '.$staffpassword.'
E-mail: '.$staffemail.'
Now you can login with this email and password.';
// Send The Message Using mail() Function.
if(mail($to, $subject, $message ))
{
$successMessage = "New Password has been sent to your mail, Please check your mail and SignIn.";
}
}
}
else{
$Error = "Invalid Email";
}
}
else{
$Error = "Email is required";
}
}
?>
