<html>
<body>
<?php
include('../../controller/hr/HRController.php');
$sql="SELECT hrname FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["hrname"];
$leavestartdate= $_POST["leavestartdate"];
$leaveenddate= $_POST["leaveenddate"];
$department= $row["hrdeptname"];
$leavereason =$_POST["leavereason"];
$leavenotes =$_POST["leavenotes"];
$leavestatus =$_POST["leavestatus"];


$sql = "INSERT INTO leaverequest(staffname,leavestartdate,leaveenddate,department,leavereason,leavenotes,leavestatus)
VALUES ('$staffname','$leavestartdate','$leaveenddate','$department','$leavereason','$leavenotes','$leavestatus')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/leaverequest.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Leave Request Submitted Successfully');document.location='../../view/hr/leaverequest.php'</script>"; } ?>";

  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>