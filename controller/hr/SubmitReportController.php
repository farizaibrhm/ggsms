<html>
<body>
<?php
include('../../controller/hr/HRController.php');
$sql="SELECT hrname FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["hrname"];
$reportdate= $_POST["reportdate"];
$reportongoingtask= $_POST["reportongoingtask"];
$reportdonetask= $POST["reportdonetask"];

$sql = "INSERT INTO report(staffname,reportdate,reportongoingtask,reportdonetask)
VALUES ('$staffname','$reportdate','$reportongointask','$reportdonetask')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/report.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Report Submitted Successfully');document.location='../../view/hr/report.php'</script>"; } ?>";

  }
else   
  {
   echo"Query failed";
  }
 ?>

</body>
</html>