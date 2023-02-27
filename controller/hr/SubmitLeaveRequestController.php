<?php
include('../../controller/hr/HRController.php');
$sql="SELECT hr_name FROM hr";
$sendsql=mysqli_query($connection,$sql);

$employee_name= $row["hr_name"];
$leave_startdate= $_POST["leave_startdate"];
$leave_enddate= $_POST["leave_enddate"];
$department_name= $row["hr_deptName"];
$leave_reason =$_POST["leave_reason"];
$leave_notes =$_POST["leave_notes"];
$leave_status =$_POST["leave_status"];


$sql = "INSERT INTO leaverequest(employee_name,leave_startdate,leave_enddate,department_name,leave_reason,leave_notes,leave_status)
VALUES ('$employee_name','$leave_startdate','$leave_enddate','$department_name','$leave_reason','$leave_notes','$leave_status')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/leaverequest.php";
if($sendsql) 
{
   echo"<br>";
   echo" <script>alert('Leave Request Submitted Successfully');document.location='../../view/hr/leaverequest.php'</script>";
}
else   
  {
   echo"Query failed";
  }
 ?>
