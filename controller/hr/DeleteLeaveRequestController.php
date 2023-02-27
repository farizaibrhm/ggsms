<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM leaverequest WHERE leave_ID =? ";
$paramType = "i";
$paramValue = array(
    $_GET["leave_ID"]
);
$database->delete($sql, $paramType, $paramValue);
echo" <script>alert('Leave Request Deleted Successfully');document.location='../../view/hr/leaverequest.php'</script>";?>";
exit();
?>