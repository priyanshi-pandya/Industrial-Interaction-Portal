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
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/post-job.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:57 GMT -->
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
        <h1 class="page-heading">Post Job</h1>
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
          <!-- <li><a href="notification.php"><i class="fa fa-desktop" aria-hidden="true"></i>Notification</a></li> -->
          <li><a href="post-job.php"><i class="fa fa-desktop" aria-hidden="true"></i>Post a Job</a></li>
          <li><a href="viewrequest.php"><i class="fa fa-desktop" aria-hidden="true"></i>View College Requests</a></li>
          <li><a href="approvedpostcmp.php"><i class="fa fa-desktop" aria-hidden="true"></i>My Jobs</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
      

      <div class="col-md-8">
        <div class="userccount">
          <div class="formpanel"> 
            
            <!-- Job Information -->
            <h5>Job Information</h5>
            <div class="row">
              <div class="col-md-12">
                <form method="post" action="post-process.php">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Company Name" value="<?php echo $fn; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="jobdetail"  placeholder="Job Detail"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="indus">
                    <option>Industry Area</option>
                    <option>IT</option>
                    <option>Accounts</option>
                    <option>Marketing</option>
                    <option>Manager</option>
                    <option>Banking</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                    <option>Monthly Salary</option>
                    <option>$500 - $999</option>
                    <option>$999 - $1499</option>
                    <option>$1500 - $1999</option>
                    <option>$2000 - $3000</option>
                    <option>$3000+</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="location">
                    <option>Location</option>
                    <option>New York</option>
                    <option>Atlanta</option>
                    <option>California</option>
                    <option>Verginia</option>
                    <option>San Joes</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="empstatus">
                    <option>Employment Status</option>
                    <option>Permanent</option>
                    <option>Contract</option>
                    <option>Freelance</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="emptype">
                    <option>Employment Type</option>
                    <option>Manager</option>
                    <option>Junior Designer</option>
                    <option>Senior Developer</option>
                    <option>Mid Level Designer</option>
                    <option>Frontend Developer</option>
                  </select>
                </div>
              </div>
              
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="experience">
                    <option>Experience</option>
                    <option>Fresh</option>
                    <option>1 Year</option>
                    <option>2 Years</option>
                    <option>3 Years</option>
                    <option>4 Years</option>
                    <option>5 Years</option>
                    <option>6 Years</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="formrow">
                  <select class="form-control" name="gender">
                    <option>Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Any</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input class="form-control" type="number" name="no_of_vacancy" placeholder="No of Vacancies">
                </div>
              </div>
              
              <!--<div class="col-md-12">
                <div class="formrow">
                	<ul class="row featchoose">
                    	<li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="checkbox" name=""> Your Info</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                        <li class="col-md-4"><input type="radio" name=""> Your radio Label</li>
                    </ul>
                </div>
              </div>-->
            </div>
            <br>
            <input type="submit" class="btn" value="Post Job">
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