<?php
  session_start();
  //var_dump($_SESSION);
  //echo "<br><br>";
  if (!isset($_SESSION['college']))
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
  <?php require 'headerclg.php'?>
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
          <li class="active"><a href="dashboardclg.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
          <li><a href="profileclg.php"><i class="fa fa-desktop" aria-hidden="true"></i>Edit Profile</a></li>
          <li><a href="notificationclg.php"><i class="fa fa-desktop" aria-hidden="true"></i>Notification</a></li>
          <li><a href="pendingpost.php"><i class="fa fa-desktop" aria-hidden="true"></i>Latest Jobs</a></li>
          <li><a href="approvedpostclg.php"><i class="fa fa-eye" aria-hidden="true"></i>Available jobs</a></li>
          <li><a href="viewcmppro.php"><i class="fa fa-eye" aria-hidden="true"></i>View Companies</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-8">
        
          
        <div class="myads">
          <h3>All Companies</h3>
          <ul class="searchList">
            <!-- start -->
            <?php
            $qry="SELECT * FROM cmp_tbl WHERE isactive=1";
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
                  <h3><a href="#"><?php echo $row['cmp_name']; ?></a></h3>
                  <div class="companyName"><a href="#."><h6><?php echo $row['email']; ?></h6></a></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
              <!--<form action="" method="post">
                <input type="hidden" name="cid" value="<?php //echo $row['cmp_id'];?>">-->
                <div class="listbtn"><a href="expert_lect_req.php?id=<?php echo $row['cmp_id'].'&name='.$row['cmp_name'];?>">Request</a></div>
                <div class="listbtn"></div>
              <!--</form>-->
              </div>
            </div>
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