<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM leaverequest WHERE leaveid =? ";
$paramType = "i";
$paramValue = array(
    $_GET["leaveid"]
);
$database->delete($sql, $paramType, $paramValue);
$delmessage = "Leave request deleted successfully";
header("Location:../hr/staffleaverequest.php");
exit();
?>