<html>
<body>
<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT staff_name FROM staff";
$sendsql=mysqli_query($connection,$sql);

$employee_name= $row["staff_name"];
$report_date= $_POST["report_date"];
$report_ongoingtask= $_POST["report_ongoingtask"];
$report_donetask= $_POST["report_donetask"];

$sql = "INSERT INTO report(employee_name,report_date,report_ongoingtask,report_donetask)
VALUES ('$employee_name','$report_date','$report_ongoingtask','$report_donetask')";
$sendsql = mysqli_query($connection, $sql);
$link="../staff/report.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Report Submitted Successfully');document.location='../../view/staff/report.php'</script>"; } ?>";

  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>