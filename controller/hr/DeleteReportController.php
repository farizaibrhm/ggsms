<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM report WHERE reportid =? ";
$paramType = "i";
$paramValue = array(
    $_GET["reportid"]
);
$database->delete($sql, $paramType, $paramValue);
echo" <script>alert('Report Deleted Successfully');document.location='../../view/hr/report.php'</script>";?>";
exit();
?>