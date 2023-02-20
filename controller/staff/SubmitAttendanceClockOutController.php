<html>
<body>
<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT * FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);


date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockouttime= date("h:i:s");

$sql = "UPDATE attendance SET clockouttime=NOW() WHERE date=curdate() AND employeename='$employeename'";

$sendsql = mysqli_query($connection, $sql);
$link="../staff/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo"<br>";
   echo "<script>alert('Clocked Out Successfully');document.location='../../view/staff/attendance.php'</script>";
  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>