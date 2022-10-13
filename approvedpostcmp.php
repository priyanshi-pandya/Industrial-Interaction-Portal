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
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Dashboard</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><span>Welcome <?php echo $fn;?></span></div>
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
        <ul class="row profilestat">
        </ul>
        <div class="myads">
          <h3>All Jobs</h3>
          <ul class="searchList">
            <!-- start -->
            <?php
            $qry="SELECT * FROM recruitment_post WHERE isactive!=2 && cmp_name='".$fn."'";
            $rs=mysqli_query($conn,$qry);
            if(mysqli_num_rows($rs)>0)
            {
              while($row=mysqli_fetch_assoc($rs))
              {
            ?>
            
            <li>
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="jobinfo">
                  <h3><a href="#"><?php echo $row['job_type']; ?></a></h3>
                  <div class="companyName"><a href="#."><h6><?php echo $row['cmp_name']; ?></h6></a></div>
                </div>
                <div>
                  <p style="font-weight: bold; font-size: 16px">No. of Vacancies:</p> <?php echo $row['vacancy']; ?>
                </div>
              </div>
              
            </div>
            <p style="font-weight: bold; font-size: 16px">Description:</p><?php echo $row['post_description']; ?>
          </li>
            <!-- end --> 
            <?php
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