<html>
<body>
<?php
include('staffsession.php');
$sql="SELECT staffname FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);

$staffname= $row["staffname"];
$reportdate= $_POST["reportdate"];
$reportongoingtask= $_POST["reportongoingtask"];
$reportdonetask= $_POST["reportdonetask"];


$sql = "INSERT INTO report (staffname,reportdate,reportongoingtask,reportdonetask)
VALUES ('$staffname','$reportdate','$reportongoingtask','$reportdonetask')";
$sendsql=mysqli_query($connection,$sql);
$link="staffviewdailyactivityreport.php";
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