<?php
include('../../controller/staff/StaffController.php');
require '../../model/db_connect.php';
$sql="SELECT * from attendance";
$sql="SELECT * FROM staffregistration";
$sendsql=mysqli_query($connection,$sql);
$date= date("y-m-d");
if(isset($_POST["submit"])){

$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
  
$employeename= $row["staffname"];
$employeeemail= $row["staffemail"];
date_default_timezone_set("Asia/Kuala_Lumpur");
$date= date("y-m-d");
$clockintime= date("h:i:s");
$clockouttime= date("0:0:0");
$longitude =$_POST["longitude"];
$latitude =$_POST["latitude"];

$sql = "INSERT IGNORE INTO attendance(employeename,employeeemail,date,clockintime,clockouttime,longitude,latitude)
VALUES ('$employeename','$employeeemail','$date','$clockintime','$clockouttime','$longitude','$latitude')";


$sendsql = mysqli_query($connection, $sql);
$link="../staff/attendance.php";
if($sendsql) 
{
   echo"<br>";
   echo "<script>alert('Clocked In Successfully');document.location='../../view/staff/attendance.php'</script>";

  }

else   
  {
    echo "<script>alert('You have clocked in your time.');document.location='../../view/staff/attendance.php'</script>";

  }


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assets/img/companylogo.jpg" type="image/icon type">
    <title>Attendance</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/fonts/login/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/css/login/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/login/bootstrap.min.css">
    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/assetsdashboard/vendor/staff/main.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/assetsdashboard/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/staff/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/staff/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/assetsdashboard/vendor/js/helpers.js"></script>

    <script src="../../assets/assetsdashboard/js/config.js"></script>
  </head>
  <body>
  
  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:operationsales.globalgrandeur@gmail.com ">operationsales.globalgrandeur@gmail.com </a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+018 3177519 </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="../staff/dashboard.php" class="logo d-flex align-items-left">
        <img src="../../assets/img/companylogo.jpg" alt="Company's Logo">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../controller/staff/LogoutController.php">Sign Out</a></li>
          
        </ul>
      </nav>

    </div>

  </header>
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
    <a href="../staff/dashboard.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Attendance  -->

  <li class="menu-item active">
    <a href="../staff/attendanceform.php" class="menu-link ">
      <i class="menu-icon tf-icons bi bi-card-checklist"></i> 
      <div data-i18n="Layouts">Attendance</div>
    </a>
  </li>

  <li class="menu-item">
    <a href="../staff/attendance.php" class="menu-link">
      <i class="menu-icon tf-icons bi bi-clock-history"></i>
      <div data-i18n="Account Settings">Attendance History</div>
    </a>
  </li>

  <!-- Leave Request -->

  <li class="menu-item">
    <a href="../staff/leaverequestform.php" class="menu-link ">
      <i class="menu-icon tf-icons bi bi-calendar-week"></i>
      <div data-i18n="Basic">Leave Request</div>
    </a>
  </li>

  <li class="menu-item ">
    <a href="../staff/leaverequest.php" class="menu-link">
      <i class="menu-icon tf-icons bi bi-card-list"></i>
      <div data-i18n="Basic">Leave Request History</div>
    </a>
  </li>

 <!-- Daily Activity Reports -->

  <li class="menu-item">
    <a href="../staff/reportform.php" class="menu-link">
      <i class="menu-icon tf-icons bi bi-pencil-square"></i>
      <div data-i18n="Basic">Daily Activity Reports</div>
    </a>
  </li>

  <li class="menu-item">
    <a href="../staff/report.php" class="menu-link">
      <i class="menu-icon bi bi-list-columns-reverse"></i>
      <div data-i18n="Basic">Daily Activity Reports History</div>
    </a>
  </li>

  <li class="menu-item ">
    <a href="../staff/account.php" class="menu-link ">
      <i class="menu-icon bi bi-person-circle"></i>
      <div data-i18n="Form Elements">Account </div>
    </a>
  </li>


</aside>

	<!-- / Menu -->

	<!-- Layout container -->
  <div class="container" style="background-image: url('../../assets/img/bgstaff.png');" >
	<div class="row">
	<div id="main" >
		<br><br><br><br>
					<center><div class="card" style="width:15cm;">
						<div class="card-body">
							<div class="text-center">
                <img src="../../assets/img/companylogo.jpg">
              <h3><b>Take Attendance</b><h3>
              <iframe src="https://free.timeanddate.com/clock/i8pa0rrx/n1228/fn7/fs20/tct/pct/ftb/th2" frameborder="0" width="128" height="30" allowtransparency="true"></iframe>
<br>
              <iframe src="https://free.timeanddate.com/clock/i8pa0oy2/n1228/tt1/tw0" frameborder="0" width="129" height="19"></iframe>
								<br><br>
							</div>
						
							<div class="col-md-20">
			      <body onload="getLocation()">
								<form class="myForm" method = "POST"  autocomplete="off">  
										
                    <input type="hidden" name="longitude" value="">
										<input type="hidden" name="latitude" value="">
                    <center>
										<button  type="submit" name="submit"  class='btn btn-sm btn-primary'>CLOCK IN</button>
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
							
							<form action = "../../controller/staff/SubmitAttendanceClockOutController.php" method = "POST">  
									<center>
											<button type="submit" class='btn btn-sm btn-primary'>CLOCK OUT</button>
										</center>
										<div class="loading" style="display: none"><center>Please wait...</center></div>
									</form>

						
						</div>
					</div>
				</div>
  </div>
  </div>
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
