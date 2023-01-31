<html>
<body>
<?php
include('../../controller/hr/HRController.php');
$sql="SELECT hrname FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["hrname"];
$leavestartdate= $_POST["leavestartdate"];
$leaveenddate= $_POST["leaveenddate"];
$department= $_POST["department"];
$leavereason =$_POST["leavereason"];
$leavenotes =$_POST["leavenotes"];
$leavestatus =$_POST["leavestatus"];


$sql = "INSERT INTO attendance(staffname,leavestartdate,leaveenddate,department,leavereason,leavenotes,leavestatus)
VALUES ('$staffname','$leavestartdate','$leaveenddate','$department','$leavereason','$leavenotes','$leavestatus')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/leaverequest.php";
if($sendsql) 
{
   echo"<br>";
   echo"Leave Request Application Submitted";
   echo"<a href=../hr/leaverequest.php".$link."View the data</a>";
  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>