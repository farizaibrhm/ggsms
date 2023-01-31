<html>
<body>

<?php
include('../../controller/hr/HRController.php');
$sql="SELECT * FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);


$employeename= $row["hrname"];
$employeeemail= $row["hremail"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockintime= date("h:i:s");
$clockouttime= date("0:0:0");
$longitude =$_POST["longitude"];
$latitude =$_POST["latitude"];


$sql = "INSERT INTO attendance(employeename,employeeemail,date,clockintime,clockouttime,longitude,latitude)
VALUES ('$employeename','$employeeemail','$date','$clockintime','$clockouttime','$longitude','$latitude')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo "<script>alert('Clocked In Successfully');document.location='../../view/hr/attendance.php'</script>";

  }

else   
  {
   echo"Query failed";
  }


 ?>
	  
</body>
</html>