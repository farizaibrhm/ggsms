<html>
<body>
<?php
include('staffsession.php');
$sql="SELECT staffname FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["staffname"];
$leavestartdate= $_POST["leavestartdate"];
$leaveenddate= $_POST["leaveenddate"];
$department= $_POST["department"];
$leavereason =$_POST["leavereason"];
$leavenotes =$_POST["leavenotes"];
$leavestatus =$_POST["leavestatus"];


$sql = "INSERT INTO leaverequest(staffname,leavestartdate,leaveenddate,department,leavereason,leavenotes,leavestatus)
VALUES ('$staffname','$leavestartdate','$leaveenddate','$department','$leavereason','$leavenotes','$leavestatus')";

$sendsql = mysqli_query($connection, $sql);
$link="staffviewleaverequest.php";
if($sendsql) 
{
   echo"<br>";
   echo"Leave Request Application Submitted";
   echo"<a href='".$link."'>View the data</a>";
  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>