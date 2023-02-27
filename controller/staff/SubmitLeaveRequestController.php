<html>
<body>
<?php
include('../../controller/staff/StaffController.php');
$sql="SELECT staff_name FROM staff";
$sendsql=mysqli_query($connection,$sql);

$employee_name= $row["staff_name"];
$leave_startdate= $_POST["leave_startdate"];
$leave_enddate= $_POST["leave_enddate"];
$department_name= $row["staff_deptName"];
$leave_reason =$_POST["leave_reason"];
$leave_notes =$_POST["leave_notes"];
$leave_status =$_POST["leave_status"];


$sql = "INSERT INTO leaverequest(employee_name,leave_startdate,leave_enddate,department_name,leave_reason,leave_notes,leave_status)
VALUES ('$employee_name','$leave_startdate','$leave_enddate','$department_name','$leave_reason','$leave_notes','$leave_status')";

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