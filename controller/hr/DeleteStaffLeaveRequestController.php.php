<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM leaverequest WHERE leave_ID =? ";
$paramType = "i";
$paramValue = array(
    $_GET["leave_ID"]
);
$database->delete($sql, $paramType, $paramValue);
$delmessage = "Leave request deleted successfully";
header("Location:../hr/staffleaverequest.php");
exit();
?>