<?php
session_start();
if (isset($_SESSION['user']))
{
  header("location:dashboard.php");
  exit();
}
if (isset($_COOKIE['user']))
{
  $un=$_COOKIE['user'];
  $ps=$_COOKIE['pass'];
}
else
{
  $un="";
  $ps="";
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:19 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Job Portal HTML</title>
  <!-- Fav Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Owl carousel -->
  <link href="css/owl.carousel.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">

  <!-- Custom Style -->
  <link href="css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .userbtns .nav-tabs>li {
    width: 30% !important; 
    
  }
</style>
</head>
<body>
  <!-- Header start -->
    <?php require 'header.php';?>
  <!-- Header end --> 

  <!-- Page Title start -->
  <div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Login</h1>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="breadCrumb"><a href="#">Home</a> / <span>Job Name</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

  <div class="listpgWraper">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="userccount">
            <div class="socialLogin">
              <h5>Login</h5>
            </div>
              <div class="userbtns">
                <ul class="nav nav-tabs ">
                  <li class="active btn-sm"><a data-toggle="tab" href="#student">Login as Student</a></li>
                  <li class="btn-sm"><a data-toggle="tab" href="#company">Login as Company</a></li>
                  <li class="btn-sm"><a data-toggle="tab" href="#college">Login as College</a></li>
                  
                </ul>
              </div>
              <div class="tab-content">
                <!--student login form -->
                <div id="student" class="formpanel tab-pane fade in active">
                  <form action="checklogin.php" method="post">
                    <div class="formrow">
                      <input type="text" name="txt_un" value="<?php echo $un; ?>" class="form-control" placeholder="Username">
                    </div>
                    <div class="formrow">
                      <input type="text" name="txt_ps" value="<?php echo $ps; ?>" class="form-control" placeholder="Password">
                    </div>
                    <input type="hidden" name="usertype" value="1">
                    <div class="formrow">
                      <input type="checkbox" name="remember" class="form-check-input">
                      <label class="form-check-label">Remember me</label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Login">
                  </form>
                </div>

                <!--student login form  end--> 
                <!--college login form -->
                <div id="college" class="formpanel tab-pane fade in">
                  <form action="checklogin.php" method="post">
                    <div class="formrow">
                      <input type="text" name="txt_un" value="<?php echo $un; ?>" class="form-control" placeholder="Username">
                    </div>
                    <div class="formrow">
                      <input type="text" name="txt_ps" value="<?php echo $ps; ?>" class="form-control" placeholder="Password">
                    </div>
                    <input type="hidden" name="usertype" value="2">
                    <div class="formrow">
                      <input type="checkbox" name="remember" class="form-check-input">
                      <label class="form-check-label">Remember me</label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Login">
                  </form>
                </div>

                <!--college login form  end--> 
                <!--comapny login form -->
                 <div id="company" class="formpanel tab-pane fade in">
                  <form action="checklogin.php" method="post">
                    <div class="formrow">
                      <input type="text" name="txt_un" value="<?php echo $un; ?>" class="form-control" placeholder="Username">
                    </div>
                    <div class="formrow">
                      <input type="text" name="txt_ps" value="<?php echo $ps; ?>" class="form-control" placeholder="Password">
                    </div>
                    <input type="hidden" name="usertype" value="3">
                    <div class="formrow">
                      <input type="checkbox" name="remember" class="form-check-input">
                      <label class="form-check-label">Remember me</label>
                    </div>
                    <input type="submit" name="submit" class="btn" value="Login">
                  </form>
                </div>
              
              <!--company login form  end--> 
            </div>
            <!-- sign up form -->
            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
            <!-- sign up form end--> 

          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
    <?php require 'footer.php';?>
  <!--Footer end--> 

  <!-- Bootstrap's JavaScript --> 
  <script src="js/jquery-2.1.4.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 

  <!-- Owl carousel --> 
  <script src="js/owl.carousel.js"></script> 

  <!-- Custom js --> 
  <script src="js/script.js"></script>
</body>

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:19 GMT -->
</html>