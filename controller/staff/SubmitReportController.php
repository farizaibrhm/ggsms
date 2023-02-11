<html>
<body>
<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT staffname FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["staffname"];
$reportdate= $_POST["reportdate"];
$reportongoingtask= $_POST["reportongoingtask"];
$reportdonetask= $_POST["reportdonetask"];

$sql = "INSERT INTO report VALUES ('','$staffname','$reportdate','$reportongoingtask','$reportdonetask')";

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