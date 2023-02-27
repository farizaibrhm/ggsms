<?php
include('../../controller/staff/StaffController.php');
require_once '../../model/DataSource.php';
$database = new DataSource();
if (count($_POST) > 0) {
    $sql = "UPDATE staff set staff_phoneNum=?, staff_deptName=? WHERE staff_ID=?";
    $paramType = 'ssi';
    $paramValue = array(
        $_POST["staff_phoneNum"],
        $_POST["staff_deptName"],
        $_GET["staff_ID"]
    );
    $database->execute($sql, $paramType, $paramValue);
    $message = "<script>alert('Account Updated Successfully');document.location='../../view/staff/account.php'</script>";
}
$sql = "select * from staff where staff_ID=?";
$paramType = 'i';
$paramValue = array(
    $_GET["staff_ID"]
);
$result = $database->select($sql, $paramType, $paramValue);
?>
<!doctype html>
<html lang="en">
  <head>

     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../assets/img/companylogo.jpg" type="image/icon type">
    <title>Update Account</title>
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

  <li class="menu-item">
    <a href="../staff/report.php" class="menu-link">
      <i class="menu-icon bi bi-list-columns-reverse"></i>
      <div data-i18n="Basic">Daily Activity Reports History</div>
    </a>
  </li>

  <li class="menu-item active">
    <a href="../staff/account.php" class="menu-link ">
      <i class="menu-icon bi bi-person-circle"></i>
      <div data-i18n="Form Elements">Account </div>
    </a>
  </li>


</aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Content wrapper -->
        <div class="content-wrapper">
          
  <div class="container-xxl flex-grow-1 container-p-y">
  <h6><b> Dashboard: Human Resources Officer</b> </h6>
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
          <!-- Content -->
    <div class="row">
    <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">

<img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $staff_name?></h5>
            <p class="text-muted mb-1"><?php echo $staff_deptName?></p>
            <div>
              <br>
  
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
          <form name="frmUser" method="post" action="">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Name</p>
              </div>
              <div class="col-sm-9">
              <?php echo $staff_name; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
              <?php echo $staff_email; ?>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
              <input type="text" name="staff_phoneNum" id="staff_phoneNum"  class="form-control" value="<?php echo $result[0]['staff_phoneNum']; ?>">
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Department Name</p>
              </div>
              <div class="col-sm-9">
              <select name="staff_deptName" id="staff_deptName"  class="form-control" value="<?php echo $result[0]['staff_deptName']; ?>" >
                     <option value="Manager">Manager</option>
                     <option value="Human Resources">Human Resources</option>
                     <option value="Operation and Sales">Operation and Sales</option>
                     <option value="Marketing and Business Development">Marketing and Business Development</option>
                     <option value="Product Development">Product Development</option>
                     <option value="Operation Executive"> Operation Executive</option>
                     <option value="Marketing Executive">Marketing Executive</option>
                     <option value="Information Technology">Information Technology</option>
                     <option value="Others">Others</option>
                     </select>
              </div>
           
              </div>
              <br>
              <br>

              <div class="row">
                <input type="submit" name="submit" value="Save" class="btn btn-primary">
            </div>
            <br>
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            </form>
          </div>
         
          
        </div>
      </div>
  </div>
</section>


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