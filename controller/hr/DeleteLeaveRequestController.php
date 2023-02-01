<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM leaverequest WHERE leaveid =? ";
$paramType = "i";
$paramValue = array(
    $_GET["leaveid"]
);
$database->delete($sql, $paramType, $paramValue);
echo" <script>alert('Leave Request Deleted Successfully');document.location='../../view/hr/leaverequest.php'</script>";?>";
exit();
?>