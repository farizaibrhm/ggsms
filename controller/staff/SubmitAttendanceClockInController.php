<html>
<body>

<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT * FROM staff";
$sendsql=mysqli_query($connection,$sql);


$employee_name= $row["staff_name"];
$employee_email= $row["staff_email"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$att_date= date("y-m-d");
$att_clockintime= date("h:i:s");
$att_clockouttime= date("0:0:0");
$att_longitude =$_POST["att_longitude"];
$att_latitude =$_POST["att_latitude"];


$sql = "INSERT INTO attendance(employee_name,employee_email,att_date,att_clockintime,att_clockouttime,att_longitude,att_latitude)
VALUES ('$employee_name','$employee_email','$att_date','$att_clockintime','$att_clockouttime','$att_longitude','$att_latitude')";

$sendsql = mysqli_query($connection, $sql);
$link="../staff/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo "<script>alert('Clocked In Successfully');document.location='../../view/staff/attendance.php'</script>";

  }

else   
  {
   echo"Query failed";
  }


 ?>
	  
</body>
</html>