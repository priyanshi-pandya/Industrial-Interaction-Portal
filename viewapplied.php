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


</head>
<body>
<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.php" class="logo"><img src="images/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        <!-- Nav start -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
            
              <li><a href="about-us.php">About us</a></li>
              <li class="dropdown active"><a href="#.">Pages <span class="caret"></span></a> 
                <!-- dropdown start -->
                <ul class="dropdown-menu">
                  <li><a href="about-us.php">About Us</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
                  </ul>
                <!-- dropdown end --> 
              </li>
              <li><a href="contact-us.php">Contact</a></li>
              <li class="postjob"><a href="post-job.php">Post a job</a></li>
              <li class="dropdown userbtn"><a href="#"><img src="images/candidates/01.jpg" alt="" class="userimg" /></a>
              	 <ul class="dropdown-menu">
                    <li><a href="dashboardcmp.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                    <li><a href="approvedpostcmp.php"><i class="fa fa-briefcase" aria-hidden="true"></i>All jobs</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                  </ul>
              </li>
            </ul>
            <!-- Nav collapes end --> 
          </div>
          <div class="clearfix"></div>
        </div>
        <!-- Nav end --> 
      </div>
    </div>
    <!-- row end --> 
  </div>
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
          <li class="active"><a href="dashboardcmp.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          <li><a href="profilecmp.php"><i class="fa fa-desktop" aria-hidden="true"></i>Edit Profile</a></li>
          <li><a href="post-job.php"><i class="fa fa-desktop" aria-hidden="true"></i>Post a Job</a></li>
          <li><a href="viewrequest.php"><i class="fa fa-desktop" aria-hidden="true"></i>View College Requests</a></li>
          <li><a href="approvedpostcmp.php"><i class="fa fa-desktop" aria-hidden="true"></i>My Jobs</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-8">
        <ul class="searchList">
          <!-- Candidate -->
          <?php
            $qry="SELECT * FROM apply WHERE post_id='".$_GET['pid']."'";
            $rs=mysqli_query($conn,$qry);
            if(mysqli_num_rows($rs)>0)
            {
              while($row=mysqli_fetch_assoc($rs))
              {
                $rid=$row['post_id'];
                $qry1="SELECT * FROM recruitment_post WHERE isactive=3 AND post_id=$rid";
                $rs1=mysqli_query($conn,$qry1);
                $stid=$row['uid'];
                $qry2="SELECT * FROM user_tbl WHERE id=$stid AND isactive!=2";
                $rs2=mysqli_query($conn,$qry2);
                if(mysqli_num_rows($rs2)>0 && mysqli_num_rows($rs2)>0)
                {
                $row1=mysqli_fetch_assoc($rs1);
                $row2=mysqli_fetch_assoc($rs2);
            ?>
          <li>
            <div class="row">
              <div class="col-md-5 col-sm-5"> 
                <div class="jobimg"><img src="upload/<?php echo $row2['profilepic'];?>" /></div>
                <div class="jobinfo">
                  <h3><a href="#"><?php echo $row2['firstname']; ?></a></h3>
                  <div class="cateinfo"><h6>Has applied for <?php echo $row1['job_type']; ?></h6></div>
                  <div class="location"><!--location of student--></div>
                </div>
                <div class="clearfix"></div>
              </div>
              
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="email.php">Send Email</a></div>
              </div> 
              <div class="col-md-3 col-sm-3">
                <div class="listbtn"><a href="upload/<?php echo $row2['resume'];?>">Download Resume</a></div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu nulla eget nisl dapibus finibus. Maecenas quis sem vel neque rhoncus dignissim. Ut et eros rhoncus, gravida tellus auctor,</p>
          </li>
          <?php
                                }
                            }
                        }
            else{
              echo "0 Row Found";
              exit();
            }
            ?>
        </ul>
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