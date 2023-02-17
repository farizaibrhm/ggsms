<html>
<body>
<?php
include('../../controller/hr/HRController.php');

$employeename= $row["hrname"];
$sql="SELECT * FROM hrlogin where hrname='$hrname'";
$sendsql=mysqli_query($connection,$sql);

// $employeeemail= $row["hremail"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockouttime= date("h:i:s");
// $longitude =$_POST["longitude"];
// $latitude =$_POST["latitude"];


$sql = "UPDATE attendance SET clockouttime=NOW() WHERE date=curdate()";

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