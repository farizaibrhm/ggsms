
<?php
// Initialize Variables to Null.
$staff_email =""; // Sender's E-mail ID
$Error ="";
$successMessage ="";
// On Submitting Form Below Function Will Execute
if(isset($_POST['submit']))
{
if (!($_POST["staff_email"]==""))
{
$staff_email =$_POST["staff_email"];  // Calling Function To Remove Special Characters From E-mail
$staff_email = filter_var($staff_email, FILTER_SANITIZE_EMAIL);  // Sanitizing E-mail(Remove unexpected symbol like <,>,?,#,!, etc.)
if (filter_var($staff_email, FILTER_VALIDATE_EMAIL))
{
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_"; // Generating Password
$staff_password = substr( str_shuffle( $chars ), 0, 8 );
$password1= sha1($staff_password);
$connection = mysqli_connect("127.0.0.1", "root", "");  // Establishing Connection With Server..
$db = mysqli_select_db($connection,"ggsms");  // Selecting Database
$query = mysqli_query($connection,"UPDATE staff SET staff_password='$password1' WHERE staff_email='$staff_email'");
if($query)
{
$to = $staff_email;
$subject = 'Your New Password...';
// Let's Prepare The Message For E-mail.
$message = 'Hello User
Your new password : '.$staff_password.'
E-mail: '.$staff_email.'
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
