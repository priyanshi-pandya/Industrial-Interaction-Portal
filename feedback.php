<?php
  session_start();
  //var_dump($_SESSION);
  //echo "<br><br>";
  if (!isset($_SESSION['user']))
  {
    header("location:login.php");
    exit();
  }
  $fn=$_SESSION['fname'];
  $id=$_SESSION['id'];
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
  <?php require 'headerstu.php';?>
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
          <li><a href="notification.php"><i class="fa fa-desktop" aria-hidden="true"></i>Notification</a></li>
          <li><a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i>Edit Profile</a></li>
          <li><a href="viewcmpstu.php"><i class="fa fa-desktop" aria-hidden="true"></i>View Companies</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
      <div class="col-md-8">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Job Information -->
            <h4>Feedback</h4>
            <div class="row">
             <div class="col-md-12">
                <form method="post" action="processfeedback.php">
                <div class="formrow">
                  <input type="hidden" name="cmpid" class="form-control" value="<?php echo $_GET['id']; ?>" placeholder="Company Name">
                  <input type="text" name="cmpname" class="form-control" value="<?php echo $_GET['name']; ?>" placeholder="Company Name">
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="comment"  placeholder="Comments"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <ul class="row featchoose">
                      <li class="col-md-2"><h6>Remarks</h6></li>  
                      <li class="col-md-2"><input type="radio" name="feedback" value="Poor">Poor</li>
                      <li class="col-md-2"><input type="radio" name="feedback" value="Average">Average</li>
                      <li class="col-md-2"><input type="radio" name="feedback" value="Good">Good</li>
                      <li class="col-md-2"><input type="radio" name="feedback" value="Excellent">Excellent</li>
                    </ul>
                </div>
              </div>
            </div>
            <br>
            <input type="hidden" name="uid" value="<?php echo $id;?>">
            <input type="submit" class="btn" value="SEND FEEDBACK">
          </div>
        </form>
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

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/post-job.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:57 GMT -->
</html>