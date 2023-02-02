<?php include '../../controller/staff/PasswordGeneratorController.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" href="assets/img/companylogo.jpg" type="image/icon type">
  <title>Global Grandeur Sdn Bhd Staff Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/companylogo.jpg" rel="icon">
  <link href="../../assets/img/companylogo.jpg" >

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
  <link href="../../assets/css/main.css" rel="stylesheet">

<title>PHP Forgot Password</title>
<link href="css/password.css" rel="stylesheet">
</head>
<body>


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
      <a href="../../index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../../assets/img/companylogo.jpg" alt="">
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Sign In</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="../hr/login.php">HR</a></li>
              <li><a href="../staff/login.php">Staff</a></li>
              <li><a href="view/manager/login.php">Manager</a></li>

            </ul>
            
          </li>
          
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container main" >
<h2>Forgot Password</h2>
<form action="../staff/forgotpassword.php" method="post">
<label class="heading">Email :</label>
<input name="staffemail" type="text">
<input name="submit" type="submit" value="Resend Password">
<br>
<span class="error"><?php echo $Error;?></span>
<span class="success"><?php echo $successMessage;?></span>
</form>
<p><b>Note :</b> Enter your email, password will be send to your email address.</p>
<a class="login" href="../staff/login.php">SignIn</a>
</div>
</body>
</html>
