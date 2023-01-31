<?php
include('../../controller/hr/HRController.php');
require '../../model/db_connect.php';
$sql= "select * from attendance";
	$sql="SELECT * FROM hrlogin";
$sendsql=mysqli_query($connection,$sql);
if(isset($_POST["submit"])){
	$latitude = $_POST["latitude"];
	$longitude = $_POST["longitude"];
  
	$query = "INSERT INTO attendance VALUES('', '', '', '', '', '','$longitude', '$latitude')";
	mysqli_query($con, $query);
  




$employeename= $row["hrname"];
$employeeemail= $row["hremail"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockintime= date("h:i:s");
$clockouttime= date("0:0:0");
$longitude =$_POST["longitude"];
$latitude =$_POST["latitude"];


$sql = "INSERT INTO attendance(employeename,employeeemail,date,clockintime,clockouttime,longitude,latitude)
VALUES ('$employeename','$employeeemail','$date','$clockintime','$clockouttime','$longitude','$latitude')";

$sendsql = mysqli_query($connection, $sql);
$link="../hr/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo "<script>alert('Clocked In Successfully');document.location='../../view/hr/attendance.php'</script>";

  }

else   
  {
   echo"Query failed";
  }


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Attendance</title>

	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../assets/fonts/login/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/css/login/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/login/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../../assets/css/login/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/main.css" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/libs/apex-charts/apex-charts.css" />

    <script src="../../assets/assetsdashboard/js/config.js"></script>
    <link rel="icon" href="../../assets/img/companylogo.jpg" type="image/icon type">
  </head>
  <body>
  
  <!-- ======= Header ======= -->
<section id="topbar" class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
	<div class="contact-info d-flex align-items-center">
	  <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:operationsales.globalgrandeur@gmail.com ">operationsales.globalgrandeur@gmail.com </a></i>
	  <i class="bi bi-phone d-flex align-items-center ms-4"><span>+018 3177519 </span></i>
	</div>
  </div>
</section><!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
	<a href="index.html" class="logo d-flex align-items-center">
	  <!-- Uncomment the line below if you also wish to use an image logo -->
	  <img src="../../assets/img/companylogo.jpg" alt="">
	</a>
	<nav id="navbar" class="navbar">
	  <ul>

		<li><a href="logoutstaff.php">Sign Out</a></li>
		
	  </ul>
	</nav><!-- .navbar -->

  </div>

</header><!-- End Header -->
<!-- End Header -->

 <!-- Layout wrapper -->
 <div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
	<!-- Menu -->

	<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

<div class="menu-inner-shadow"></div>

<ul class="menu-inner py-1">
  <!-- Dashboard -->
  <li class="menu-item ">
	<a href="dashboardhr.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-home-circle"></i>
	  <div data-i18n="Analytics">Dashboard</div>
	</a>
  </li>

  <!-- Layouts -->
  <li class="menu-item active">
	<a href="hrattendanceform.php" class="menu-link ">
	  <i class="menu-icon tf-icons bx bx-layout"></i>
	  <div data-i18n="Layouts">Attendance</div>
	</a>
  </li>
  <li class="menu-item">
	<a href="hrviewattendance.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-dock-top"></i>
	  <div data-i18n="Account Settings">Attendance History</div>
	</a>
  </li>
  <li class="menu-item">
	<a href="hrleaverequestform.php" class="menu-link ">
	  <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
	  <div data-i18n="Basic">Leave Request</div>
	</a>
  </li>
  <li class="menu-item ">
	<a href="hrviewleaverequest.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
	  <div data-i18n="Basic">Leave Request History</div>
	</a>
  </li>
  <li class="menu-item ">
	<a href="hrviewstaffleaverequest.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-cube-alt"></i>
	  <div data-i18n="Basic">Staff's Leave Request</div>
	</a>
  </li>

  <!-- Cards -->
  <li class="menu-item">
	<a href="hrdailyactivityreportform.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-collection"></i>
	  <div data-i18n="Basic">Daily Activity Reports</div>
	</a>
  </li>
  <!-- User interface -->
  <li class="menu-item">
	<a href="hrviewdailyactivityreport.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-box"></i>
	  <div data-i18n="Basic">Daily Activity Reports History</div>
	</a>
  </li>

  <li class="menu-item ">
	<a href="hrviewstaffdailyactivityreport.php" class="menu-link">
	  <i class="menu-icon tf-icons bx bx-box"></i>
	  <div data-i18n="Basic">Staff Activity Reports</div>
	</a>
  </li>



  <li class="menu-item">
	<a href="javascript:void(0);" class="menu-link ">
	  <i class="menu-icon tf-icons bx bx-detail"></i>
	  <div data-i18n="Form Elements">Account </div>
	</a>
  </li>

  <li class="menu-item">
	<a href="staffchangepassword.php" class="menu-link ">
	  <i class="menu-icon tf-icons bx bx-detail"></i>
	  <div data-i18n="Form Elements">Change Password</div>
	</a>
  </li>

  <li class="menu-item">
	<a href="hrregisterstaff.php" class="menu-link ">
	  <i class="menu-icon tf-icons bx bx-detail"></i>
	  <div data-i18n="Form Elements">Register Staff</div>
	</a>
  </li>
  

</aside>

	<!-- / Menu -->

	<!-- Layout container -->
  <div class="container">
	<div class="row">
	<div id="main" >
		<br>
		<br>
		<br>
				<div class="col-md-4 offset-md-4">
					<div class="card">
						
						<div class="card-body">
							<div class="text-center">
								<h4><?php echo date('F d,Y') ?> <span id="now"></span></h4>
							</div>
						
							<div class="col-md-12">
								
								<body onload = "getLocation();">
								<form class="myForm" method = "POST"  autocomplete="off">  
										<center>
										<input type="hidden" name="latitude" value="">
                                        <input type="hidden" name="longitude" value="">
										<button  type="submit" name="submit"  class='btn btn-sm btn-primary log_now col-sm-5'>CLOCK IN</button>
										</center>
										<br>
								</form>
									<script>
                            function getLocation(){
                            if(navigator.geolocation){
                            navigator.geolocation.getCurrentPosition(showPosition,showError);
                            }
                          }
                           function showPosition(position){
                           document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
                           document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
                           }
                           function showError(error){
                           switch(error.code){
                           case error.PERMISSION_DENIED:
                           alert("You Must Allow The Request For Geolocation To Fill Out The Form");
                           location.reload();
                          break;
                           }
                          }
                               </script> 
									
							</div>
							
							<form action = "../../controller/hr/SubmitAttendanceClockOutController.php" method = "POST">  
									<center>
											<button type="submit" class='btn btn-sm btn-primary log_now col-sm-5' data-id="2">CLOCK OUT</button>
										</center>
										<div class="loading" style="display: none"><center>Please wait...</center></div>
									</form>

						
						</div>
					</div>
				</div>

		
	</body>  
		  </div>
	  </div>
  </div>
<!-- / Layout wrapper -->
<script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../../assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../../assets/js/dashboards-analytics.js"></script>

</body>
</html>
