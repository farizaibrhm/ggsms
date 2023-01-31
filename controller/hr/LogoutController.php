<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../../view/hr/login.php"); // Redirecting To Home Page
}
?>
