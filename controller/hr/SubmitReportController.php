<?php
include('../../controller/hr/HRController.php');
$sql="SELECT hr_name FROM hr";
$sendsql=mysqli_query($connection,$sql);

$employee_name= $row["hr_name"];
$report_date= $_POST["report_date"];
$report_ongoingtask= $_POST["report_ongoingtask"];
$report_donetask= $_POST["report_donetask"];

$sql = "INSERT INTO report(employee_name,report_date,report_ongoingtask,report_donetask)
VALUES ('$employee_name','$report_date','$report_ongoingtask','$report_donetask')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/report.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Report Submitted Successfully');document.location='../../view/hr/report.php'</script>";
  }
else   
  {
   echo"Query failed";
  }
 ?>