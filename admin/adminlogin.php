
<?php
include('../includes/connect.php');
@session_start();
if (isset($_POST['admin_login'])) {
    
    $username =$_POST['username'];
    $password =$_POST['password'];

  

    if( $username == '' or $password =='')
    {
        echo "<script>alert('Please enter the value')</script>" ;
        exit();
    }else{      
      $select_user = "select * from admin where adminname ='$username'" ;
      $result_select1 = mysqli_query($con,$select_user);
      $rows_count = mysqli_num_rows($result_select1);
      $row = mysqli_fetch_assoc($result_select1);

        if( $rows_count> 0 )
        {
           if(password_verify($password, $row['password']))
           {
           // echo "<script>alert('Login Successful')</script>";
           if( $rows_count ==1)
           {
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
           }else
           {
             echo "<script>alert('Invalid Credentialsssss')</script>";
           }
           }
        }
        
    
    }
    //selecting card items

    if($rows_count> 0)
    {
      $_SESSION['username'] = $username ;
      echo "<script>alert('Login Successful')</script>";
      echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
      echo "<script>window.open('../index.php','_self')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KSS Task</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Bocor
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
      <h1><a href="index.php">Home</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="../index.php">Home</a></li>
    
        <?php
          if (isset($_SESSION['username'])) {
            echo  "<li><a href=''>My Account</a></li>";
             }
             else{
              echo  "";
            
            }
                   
?>    
          <?php
 if (!isset($_SESSION['username'])) {
echo  "  <li><a class='nav-link scrollto getstarted' href='users/user_login.php'>Login</a></li>";
 }
 else{
  echo "<li><a class='nav-link scrollto' href='./users/logout.php'>Logout</a></li>";

}
?>  
      
 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
      
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
      

        <div class="row ">
        <form action="" method="post">
               <div class="row ">
               <div class="col-md-4"> 
						<p>Username:-admin<p>
						<p>Password:-admin<p>
			   </div>
                    <div class="col-md-4">
					  <div class="card">
					
						<div class="card-header">
			   <h1 style="font-size:20px;">Admin Login</h1>
			</div>
           <div class="card-body">        
                <div class="form-outline mb-3">
                    <label for="Username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username"
                     placeholder="User Name" autocomplete="off" required="required">
                </div>

                <div class="form-outline mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" id="password"
                     placeholder="Enter password" autocomplete="off" required="required">
                </div>
            

                <input type="submit" class="btn btn-warning" name="admin_login" value="Login"  style="float: right;">
				</div>
				
              </div>
                </div>
                <div class="col-md-4">  </div>
                </div>
            
          
            </form>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>