<?php
include('../../controller/hr/HRController.php');
$sql="SELECT * FROM hrlogin";
$staffname= $row['hrname'];
$sendsql=mysqli_query($connection,$sql);

?>
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/fonts/login/icomoon/style.css">

    <link rel="stylesheet" href="assets/css/login/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/login/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/login/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/main.css" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/assetsdashboard/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/assetsdashboard/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../assets/assetsdashboard/vendor/libs/apex-charts/apex-charts.css" />

    <script src="../../assets/assetsdashboard/js/config.js"></script>
    <link rel="icon" href="../../assets/img/companylogo.jpg" type="image/icon type">
    <title>HR Daily Activity Report History</title>
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
  <li class="menu-item ">
    <a href="dashboardhr.php" class="menu-link">
      <i class="menu-icon tf-icons bx bx-home-circle"></i>
      <div data-i18n="Analytics">Dashboard</div>
    </a>
  </li>

  <!-- Layouts -->
  <li class="menu-item">
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

  <li class="menu-item active ">
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 mb-3 clearfix">
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
                        <h3 class="pull-left">Staff Daily Activity Reports</h3>
                    </div>
                    <br>
                    <?php
                    // Include config file
                    require_once "../../model/db_connect.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM report where staffname!='$staffname'";
                    if($con = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($con) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>No</th>";
                                        echo "<th>Staff Name</th>";
                                        echo "<th>Date</th>";
                                        echo "<th size='5'>Ongoing Task</th>";
                                        echo "<th size='5'>Done Task</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $did=0;
                                while($row = mysqli_fetch_array($con)){
                                    $did++;
                                    echo "<tr>";
                                        echo "<td>" . $did . "</td>";
                                        echo "<td>" . $row['staffname'] . "</td>";
                                        echo "<td>" . $row['reportdate'] . "</td>";
                                        echo "<td>" . $row['reportongoingtask'] . "</td>";
                                        echo "<td>" . $row['reportdonetask'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($con);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    ?>
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