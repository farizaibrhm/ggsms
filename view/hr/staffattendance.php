<?php
require_once '../../model/DataSource.php';
$database = new DataSource();
include('../../controller/hr/HRController.php');
$sql="SELECT * FROM staff";
$employee_name= $row['hr_name'];
$sql = "SELECT * FROM attendance where employee_name!='$employee_name' order by att_date desc";
$sendsql=mysqli_query($connection,$sql);
$result = $database->select($sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Staff Attendance</title>

	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../assets/fonts/login/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/css/login/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/login/bootstrap.min.css">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    
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
          <li><a href="../../controller/hr/LogoutController.php">Sign Out</a></li>
          
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
            <a href="../hr/dashboard.php" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <!-- Attendance  -->

          <li class="menu-item">
            <a href="../hr/attendanceform.php" class="menu-link ">
              <i class="menu-icon tf-icons bi bi-card-checklist"></i> 
              <div data-i18n="Layouts">Attendance</div>
            </a>
          </li>

          <li class="menu-item ">
            <a href="../hr/attendance.php" class="menu-link">
              <i class="menu-icon tf-icons bi bi-clock-history"></i>
              <div data-i18n="Account Settings">Attendance History</div>
            </a>
          </li>

          <li class="menu-item active">
            <a href="../hr/staffattendance.php" class="menu-link">
              <i class="menu-icon tf-icons bi bi-calendar-check-fill"></i>
              <div data-i18n="Account Settings">Staff's Attendance</div>
            </a>
          </li>

          <!-- Leave Request -->

          <li class="menu-item">
            <a href="../hr/leaverequestform.php" class="menu-link ">
              <i class="menu-icon tf-icons bi bi-calendar-week"></i>
              <div data-i18n="Basic">Leave Request</div>
            </a>
          </li>

          <li class="menu-item ">
            <a href="../hr/leaverequest.php" class="menu-link">
              <i class="menu-icon tf-icons bi bi-card-list"></i>
              <div data-i18n="Basic">Leave Request History</div>
            </a>
          </li>

          <li class="menu-item ">
            <a href="../hr/staffleaverequest.php" class="menu-link">
              <i class="menu-icon tf-icons bi bi-stickies"></i>
              <div data-i18n="Basic">Staff's Leave Request</div>
            </a>
          </li>

         <!-- Daily Activity Reports -->

          <li class="menu-item">
            <a href="../hr/reportform.php" class="menu-link">
              <i class="menu-icon tf-icons bi bi-pencil-square"></i>
              <div data-i18n="Basic">Daily Activity Reports</div>
            </a>
          </li>

          <li class="menu-item">
            <a href="../hr/report.php" class="menu-link">
              <i class="menu-icon bi bi-list-columns-reverse"></i>
              <div data-i18n="Basic">Daily Activity Reports History</div>
            </a>
          </li>

          <li class="menu-item ">
            <a href="../hr/staffreport.php" class="menu-link">
              <i class="menu-icon bi bi-person-lines-fill"></i>
              <div data-i18n="Basic">Staff Activity Reports</div>
            </a>
          </li>
      
          <li class="menu-item">
            <a href="../hr/account.php" class="menu-link ">
              <i class="menu-icon bi bi-person-circle"></i>
              <div data-i18n="Form Elements">Account </div>
            </a>
          </li>

          <li class="menu-item">
            <a href="../hr/liststaff.php" class="menu-link ">
              <i class="menu-icon bi bi-people-fill"></i>
              <div data-i18n="Form Elements">Staffs </div>
            </a>
          </li>

          <li class="menu-item">
            <a href="../hr/registerstaff.php" class="menu-link ">
              <i class="menu-icon bi bi-person-plus"></i>
              <div data-i18n="Form Elements">Register Staff</div>
            </a>
          </li>
          

      
      </aside>
	<!-- / Menu -->

	<!-- Layout container -->

  
  <div class="container"  style="background-image: url('../../assets/img/bgreport.jpg');" >
	<div class="row">
	<div id="main" >
	  <br>
	  <br>
	  <center>
        <h4><b> Attendance History </b></h4>
        
        <table class="table table-bordered-20" cellspacing = 0 cellpadding = 40 style="background-color: white;" id="myTable">
      <tr  style="background-color:#008d7d;">
        <td style="color: white;"><b>#</b></td>
        <td  style="color: white;"><b>Name</b></td>
        <!-- <td><b>Email</b></td> -->
        <td  style="color: white;"><b>Date </b></td>
        <td  style="color: white;"><b>Clock In Time </b></td>
        <td  style="color: white;"><b>Clock Out Time </b></td>
        <td  style="color: white;"><b>Maps</b></td>
      </tr>
      <hr>

      <?php
$did=0;
if (is_array($result) || is_object($result)) {
    foreach ($result as $key => $value) {
		$did++;
        ?>
		
	         <tr>
					<td><?php echo  $did ;?></td>
					<td><?php echo $result[$key]["employee_name"];?></td>
					<!-- <td><?php echo $result[$key]["employee_email"];?></td> -->
					<td><?php echo $result[$key]["att_date"];?></td>
					<td><?php echo $result[$key]["att_clockintime"];?></td>
          <td><?php echo $result[$key]["att_clockouttime"];?></td>
          <td style = "width: 300px; height: 300px;"><iframe style = "width: 100%; height: 100%;" src="https://www.google.com/maps?q=<?php echo $result[$key]["att_latitude"];?>,<?php echo $result[$key]["att_longitude"];?>&hl=es;z=14&output=embed"></iframe></td>
				</tr>
 <?php
    }
}
?>
    </table>
    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("staff_name")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    <br>
  <br>
					  
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
