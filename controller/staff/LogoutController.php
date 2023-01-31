
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../../view/staff/login.php"); // Redirecting To Home Page
}
?>
