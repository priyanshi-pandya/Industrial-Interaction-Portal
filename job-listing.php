<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/job-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:19 GMT -->
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
  <?php require 'header.php';?>
<!-- Header end --> 

<!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Job Listing</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <a href="#.">Job Search</a> / <span>Job Name</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 col-sm-12"> 
        <!-- Search List -->
        <ul class="searchList">
          <!-- job start -->
          <?php
          require 'common/dbconnect.php';
          $qry="SELECT * FROM recruitment_post WHERE isactive=1";
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
              <div class="col-md-4 col-sm-4">
              <!-- <form action="" method="post"> -->
                <!--<input type="hidden" name="pid" value="<?php //echo $row['post_id'];?>">-->
                <div class="listbtn"><a href="login.php?pid=<?php echo $row['post_id'];?>">Apply Now</a></div>
                
              <!-- </form> -->
              </div>
            
              </div>

            <p style="font-weight: bold; font-size: 16px">Description:</p><?php echo $row['post_description']; ?>

          </li>
                     
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

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/job-listing.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:22 GMT -->
</html>