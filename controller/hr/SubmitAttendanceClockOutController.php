<?php
include('../../controller/hr/HRController.php');

$employee_name= $row["hr_name"];
$sql="SELECT * FROM hr where hr_name='$hr_name'";
$sendsql=mysqli_query($connection,$sql);

date_default_timezone_set("Asia/Kuala_Lumpur");
$att_date= date("y-m-d");
$att_clockouttime= date("h:i:sa");


$sql = "UPDATE attendance SET att_clockouttime=NOW() WHERE att_date=curdate() AND employee_name='$employee_name'";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo"<br>";
   echo "<script>alert('Clocked Out Successfully');document.location='../../view/hr/attendance.php'</script>";
  }
else   
  {
   echo"Query failed";
  }
 ?>
