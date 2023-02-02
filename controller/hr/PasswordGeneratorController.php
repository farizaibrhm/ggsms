
<?php
// Initialize Variables to Null.
$hremail =""; // Sender's E-mail ID
$Error ="";
$successMessage ="";
// On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
if (!($_POST["hremail"]==""))
{
$hremail =$_POST["hremail"];  // Calling Function To Remove Special Characters From E-mail
$hremail = filter_var($hremail, FILTER_SANITIZE_EMAIL);  // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($hremail, FILTER_VALIDATE_EMAIL))
{
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
$hrpassword = substr( str_shuffle( $chars ), 0, 8 );
$password1= sha1($hrpassword);
$connection = mysqli_connect("127.0.0.1", "root", "");  // Establishing Connection With Server..
$db = mysqli_select_db($connection,"ggsms");  // Selecting Database
$query = mysqli_query($connection,"UPDATE hrlogin SET hrpassword='$password1' WHERE hremail='$hremail'");
if($query)
{
$to = $hremail;
$subject = 'Your New Password...';
// Let's Prepare The Message For E-mail.
$message = 'Hello User
Your new password : '.$hrpassword.'
E-mail: '.$hremail.'
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
