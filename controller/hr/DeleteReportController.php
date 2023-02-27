<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM report WHERE report_ID =? ";
$paramType = "i";
$paramValue = array(
    $_GET["report_ID"]
);
$database->delete($sql, $paramType, $paramValue);
echo" <script>alert('Report Deleted Successfully');document.location='../../view/hr/report.php'</script>";?>";
exit();
?>