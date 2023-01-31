<html>
<body>
<?php
include('../../controller/hr/HRController.php');
$sql="SELECT * FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);

// $employeename= $row["hrname"];
// $employeeemail= $row["hremail"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockouttime= date("h:i:s");
// $longitude =$_POST["longitude"];
// $latitude =$_POST["latitude"];


$sql = "UPDATE attendance SET clockouttime=NOW()";

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

</body>
</html>