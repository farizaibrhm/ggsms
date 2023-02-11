<html>
<body>
<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT staffname FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["staffname"];
$leavestartdate= $_POST["leavestartdate"];
$leaveenddate= $_POST["leaveenddate"];
$department= $row["staffdeptname"];
$leavereason =$_POST["leavereason"];
$leavenotes =$_POST["leavenotes"];
$leavestatus =$_POST["leavestatus"];


$sql = "INSERT INTO leaverequest(staffname,leavestartdate,leaveenddate,department,leavereason,leavenotes,leavestatus)
VALUES ('$staffname','$leavestartdate','$leaveenddate','$department','$leavereason','$leavenotes','$leavestatus')";

$sendsql = mysqli_query($connection, $sql);
$link="../staff/leaverequest.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Leave Request Submitted Successfully');document.location='../../view/staff/leaverequest.php'</script>"; } ?>";

  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>