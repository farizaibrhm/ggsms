<?php
require_once '../../model/DataSource.php';
$database = new DataSource();

if (count($_POST) > 0) {
    $sql = "UPDATE report set report_date=?, report_ongoingtask=?, report_donetask=? WHERE report_ID=?";
    $paramType = 'sssi';
    $paramValue = array(
        $_POST["report_date"],
        $_POST["report_ongoingtask"],
        $_POST["report_donetask"],
        $_GET["report_ID"]
    );
    $database->execute($sql, $paramType, $paramValue);
    $message = "Report updated successfully";
}
$sql = "select * from report where report_ID=? ";
$paramType = 'i';
$paramValue = array(
    $_GET["report_ID"]
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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/login/bootstrap.min.css">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
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

    <title>Update Report</title>

  </head>
  <body style="background-color: white;">
  
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
      <a href="../hr/dashboard.php" class="logo d-flex align-items-left">
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

  <li class="menu-item activity">
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
      <div class="layout-page">
 
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
                        <h3><b>Update Daily Activity Report</b> </h3>
                    </div>
                    <div class="phppot-container">
        <form name="frmUser" method="post" action="">
           
            <div>
                <div class="row">
                    <label for="report_date">Report Date <span
                        class="error-color" id="reportdate_error"></span>
                    </label>
                    <input type="date" name="report_date" id="report_date" class="form-control"  value="<?php echo $result[0]['report_date']; ?>">
                </div>
            </div>
            <div><br>
                <div class="row">
                    <label for="report_ongoingtask">Ongoing Task<span
                        class="error-color" id="report_ongoingtask_error"></span>
                    </label>
                    <textarea id="report_ongoingtask" name="report_ongoingtask" class="form-control" rows="5" cols="20"><?php echo $result[0]['report_ongoingtask']; ?></textarea>
                </div>
            </div>
            <div><br>
                <div class="row">
                    <label for="report_donetask">Done Task <span
                        class="error-color" id="reportdonetask_error"></span>
                    </label>
                    <textarea id="report_donetask" name="report_donetask" class="form-control" rows="5" cols="20"><?php echo $result[0]['report_donetask']; ?></textarea>
                </div>
            </div>
          <br>
            <div class="row">
                <input type="submit" name="submit" value="Save" class="btn btn-block btn-primary">
            </div>
            <br>
            <div class="message"><?php if(isset($message)) { echo "<script>alert('Report Updated Successfully');document.location='../../view/staff/report.php'</script>"; } ?></div>
          
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