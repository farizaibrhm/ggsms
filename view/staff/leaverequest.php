<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
include('../../controller/staff/StaffController.php');
$sql="SELECT * FROM staffregistration";
$staffname= $row['staffname'];
$staffemail= $row['staffemail'];
$staffdeptname= $row['staffdeptname'];
$sql = "SELECT * FROM leaverequest where staffname='$staffname'";
$result = $database->select($sql);
?>
<!doctype html>
<html lang="en">
  <head>

         <!-- Required meta tags -->
         <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assets/img/companylogo.jpg" type="image/icon type">
    <title>Dashboard HR</title>
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
    

    <title>Leave Request History</title>
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

  <li class="menu-item">
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

  <li class="menu-item active">
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

  <li class="menu-item">
    <a href="../staff/account.php" class="menu-link ">
      <i class="menu-icon bi bi-person-circle"></i>
      <div data-i18n="Form Elements">Account </div>
    </a>
  </li>


</aside>
      <!-- / Menu -->
      <!-- Layout container -->
      <div class="layout-page" style="background-color: white;">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                      <script>
                    // Real time and date
          function display_ct5() {
          var x = new Date()
          var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

          var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
          x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
          document.getElementById('ct5').innerHTML = x1;
          display_c5();
          }
          function display_c5(){
          var refresh=1000; // Refresh rate in milli seconds
          mytime=setTimeout('display_ct5()',refresh)
          }
          display_c5()
          </script>
          <span id='ct5'></span>
          <br>
          <br>
        <!-- Real time and date -->
                        <h4><b>Leave Requests Details</b></h4><br>
                        <table class="table-light">
                          <tr>
                        <td><h6 >Name: <?php echo $staffname?></h6>
                        <h6 >Email: <?php echo $staffemail?></h6>
                        <h6 >Department Name: <?php echo $staffdeptname?></h6></td>
                          </tr>
                        </table>
                    </div>
                    <br>
                    <div class="phppot-container">
		<form method="post" action="">
			<div id="message"><?php if(isset($message)) { echo $message; } ?></div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Leave Reason</th>
						<th>Leave Notes</th>
						<th>Leave Status</th>
            <th>Actions</th>
					</tr>
				</thead>
<?php
$did=0;
if (is_array($result) || is_object($result)) {
    foreach ($result as $key => $value) {
		$did++;
        ?>
		
	         <tr>
					<td><?php echo  $did ;?></td>
					<td><?php echo $result[$key]["leavestartdate"];?></td>
					<td><?php echo $result[$key]["leaveenddate"];?></td>
					<td><?php echo $result[$key]["leavereason"];?></td>
					<td><?php echo $result[$key]["leavenotes"];?></td>
					<td><?php echo $result[$key]["leavestatus"];?></td>
          <td><a href="../staff/updateleaverequest.php?leaveid=<?php echo $result[$key]["leaveid"]; ?>"
						class="mr-20">Update</a> &nbsp;
            <a href="../../controller/staff/DeleteLeaveRequestController.php?leaveid=<?php echo $result[$key]["leaveid"]; ?>">Delete</a></td>
				</tr>
 <?php
    }
}
?>
			</table>
		</form>
	</div>
                </div>
            </div>        
        </div>
    </div>
  <!-- / Layout wrapper -->

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