<?php
session_start();
  //var_dump($_SESSION);
  //echo "<br><br>";
if (!isset($_SESSION['company']))
{
  header("location:login.php");
  exit();
}
$fn=$_SESSION['fname'];
require 'common/dbconnect.php';
  //echo "Welcome $fn $ln<br><br>";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:07:15 GMT -->
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
</head>
<body>
  <!-- Header start -->
    <?php require 'headercmp.php';?>
  <!-- Header container end --> 
</div>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Dashboard</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><span>Welcome <?php echo $fn; ?></span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
      	


        <ul class="usernavdash">
          <li class="active"><a href="dashboard.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          <li><a href="approvedpost.php"><i class="fa fa-desktop" aria-hidden="true"></i>All Jobs</a></li>
          <!-- <li><a href="notification.php"><i class="fa fa-desktop" aria-hidden="true"></i>Notification</a></li> -->
          <li><a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i>Edit Profile</a></li>
          <li><a href="viewcmpstu.php"><i class="fa fa-desktop" aria-hidden="true"></i>View Companies</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
    <?php
      $qry = "SELECT * FROM `cmp_tbl` WHERE cmp_name='$fn'";
      $rs = mysqli_query($conn, $qry);
      $row = mysqli_fetch_assoc($rs);
       ?>

      <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="email-process.php" method="GET" name="contactform" id="contactform">
              <div class="row">
                <div class="col-md-6">
                  <input name="fromemail" type="email" id="name" placeholder="From" value="<?php echo $row['email']; ?>">
                </div>
                <div class="col-md-6">
                  <input type="email" name="toemail" placeholder="To: email id">
                </div>
                <div class="col-md-12">
                  <input name="subject" type="text" id="subject" placeholder="Subject">
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="body" id="comments" placeholder="Body"></textarea>
                </div>
                <div class="col-md-12">
                  <input type="submit" name="submit">
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
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

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:07:15 GMT -->
</html>