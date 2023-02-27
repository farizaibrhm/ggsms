<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../../view/manager/login.php"); // Redirecting To Home Page
}
?>
