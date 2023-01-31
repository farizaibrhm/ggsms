<?php
require_once '../../model/DataSource.php';
$database = new DataSource();

if (count($_POST) > 0) {
    $sql = "UPDATE leaverequest set leavestartdate=?,leaveenddate=? ,leavereason=?,leavenotes=?  WHERE leaveid=?";
    $paramType = 'ssssi';
    $paramValue = array(
        $_POST["leavestartdate"],
        $_POST["leaveenddate"],
        $_POST["leavereason"],
        $_POST["leavenotes"],
        $_GET["leaveid"]
    );
    $database->execute($sql, $paramType, $paramValue);
    $message = "Leave status updated successfully";
}
$sql = "select * from leaverequest where leaveid=? ";
$paramType = 'i';
$paramValue = array(
    $_GET["leaveid"]
);
$result = $database->select($sql, $paramType, $paramValue);
?>
<!doctype html>
<html lang="en">
  <head>

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

    <link rel="stylesheet" type="text/css" href="../../assets/css/table.css" />

    <title>Dashboard Staff</title>

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
      <a href="../hr/dashboard.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../../assets/img/companylogo.jpg" alt="">
      </a>
      <nav id="navbar" class="navbar">
        <ul>

          <li><a href="../../controller/hr/LogoutController.php">Sign Out</a></li>
          
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
  <li class="menu-item">
    <a href="../hr/dashboard.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Layouts -->
  <li class="menu-item">
    <a href="../hr/attendanceform.php" class="menu-link ">
      <i class="menu-icon tf-icons bx bx-layout"></i>
      <div data-i18n="Layouts">Attendance</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="../hr/attendance.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-dock-top"></i>
      <div data-i18n="Account Settings">Attendance History</div>
    </a>
  </li>
  <li class="menu-item">
    <a href="../hr/leaverequestform.php" class="menu-link ">
      <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
      <div data-i18n="Basic">Leave Request</div>
    </a>
  </li>
  <li class="menu-item active ">
    <a href="../hr/leaverequest.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-cube-alt"></i>
      <div data-i18n="Basic">Leave Request History</div>
    </a>
  </li>
  <li class="menu-item ">
    <a href="../hr/staffleaverequest.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-cube-alt"></i>
      <div data-i18n="Basic">Staff's Leave Request</div>
    </a>
  </li>

  <!-- Cards -->
  <li class="menu-item">
    <a href="../hr/reportform.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-collection"></i>
      <div data-i18n="Basic">Daily Activity Reports</div>
    </a>
  </li>
  <!-- User interface -->
  <li class="menu-item">
    <a href="../hr/report.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-box"></i>
      <div data-i18n="Basic">Daily Activity Reports History</div>
    </a>
  </li>

  <li class="menu-item ">
    <a href="../hr/staffreport.php" class="menu-link">
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
    <a href="" class="menu-link ">
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
      <div class="layout-page">
 
    <div class="wrapper">
   
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h3 class="pull-left">Update Leave Request </h3>
                    </div>
                    <div class="phppot-container">
        <form name="frmUser" method="post" action="">
           
            <div>
                <div class="row">
                    <label for="leavestartdate">Leave Start Date <span
                        class="error-color" id="leavestartdate_error"></span>
                    </label>
                    <input type="date" name="leavestartdate" id="leavestartdate" value="<?php echo $result[0]['leavestartdate']; ?>">
                </div>
            </div>
            <div>
            <div>
                <div class="row">
                    <label for="leaveenddate">Leave End Date<span
                        class="error-color" id="leaveend_error"></span>
                    </label>
                    <input type="date" name="leaveenddate" id="leaveenddate" value="<?php echo $result[0]['leaveenddate']; ?>">
                </div>
            </div>
            <div>
                <div class="row">
                    <label for="leavenotes">Leave Reason <span
                        class="error-color" id="leavereason_error"></span>
                    </label>
                    <select name="leavereason" id="leavereason"  class="form-control" value="<?php echo $result[0]['leavereason']; ?>" >
                     <option value="Public Holidays">Public Holidays</option>
                     <option value="Annual Leave">Annual Leave</option>
                     <option value="Sick Leave">Sick Leave</option>
                     <option value="Maternity Leave">Maternity Leave</option>
                     <option value="Bereavement Leave">Bereavement Leave</option>
                     <option value="Others">Others</option>
                     </select>
                </div>
            </div>
            <div>
                <div class="row">
                    <label for="leavenotes">Leave Notes <span
                        class="error-color" id="leavenotes_error"></span>
                    </label>
                    <input type="text" name="leavenotes" id="leavenotes" value="<?php echo $result[0]['leavenotes']; ?>">
                </div>
            </div>
          <br>
            <div class="row">
                <input type="submit" name="submit" value="Save" class="btn btn-block btn-success">
            </div>
            <br>
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <p>
                <a href="../hr/leaverequest.php" class="font-bold"> View Leave Requests</a>
            </p>
        </form>
    </div>
<br>
<br>


  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  </body>
  </html>