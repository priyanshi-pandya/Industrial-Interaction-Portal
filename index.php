<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/index3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:05 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Job Portal HTML</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Slider -->
<link href="js/revolution-slider/css/settings.css" rel="stylesheet">

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
  <?php require 'header.php'?>
<!-- Header end --> 

<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner" >
    <ul>
      <!--Slide-->
      <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="Your alt text" src="images/slider/dummy.png" data-lazyload="images/slider/banner.jpg">
        <div class="caption lfl large-title tp-resizeme slidertext1" data-x="left" data-y="100" data-speed="600" data-start="1600">Search Your Job<br />
          In your Area</div>
        <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="200" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />
          Lorem Ipsum has been the industry's standard dummy text ever since.</div>
        <div class="caption lfl large-title tp-resizeme slidertext5" data-x="left" data-y="280" data-speed="600" data-start="3500"><a href="#.">Contact Us</a></div>
      </li>
      <!--Slide end--> 
      <!--Slide-->
      <li data-slotamount="7" data-transition="3dcurtain-vertical" data-masterspeed="1000" data-saveperformance="on"> <img alt="Your alt text" src="images/slider/dummy.png" data-lazyload="images/slider/banner2.jpg">
        <div class="caption lfl large-title tp-resizeme slidertext1" data-x="left" data-y="100" data-speed="600" data-start="1600">Search Your Job<br />
          Around The World</div>
        <div class="caption lfb large-title tp-resizeme sliderpara" data-x="left" data-y="200" data-speed="600" data-start="2800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />
          Lorem Ipsum has been the industry's standard dummy text ever since.</div>
        <div class="caption lfl large-title tp-resizeme slidertext5" data-x="left" data-y="280" data-speed="600" data-start="3500"><a href="#.">Contact Us</a></div>
      </li>
      <!--Slide end-->
      
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!--Search Bar start-->
<!-- Search End --> 

<!-- How it Works start -->
<div class="section howitwrap">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>How It <span>Works?</span></h3>
    </div>
    <!-- title end -->
    <ul class="howlist row">
      <!--step 1-->
      <li class="col-md-6 col-sm-6">
        <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
        <a href="register.php"><h4>Create An Account</h4></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 1 end--> 
      
      <!--step 2-->
      <li class="col-md-6 col-sm-6">
        <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
        <a href="approvedpost.php"><h4>Search Desired Job</h4></a>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et dolore magna aliqua.</p>
      </li>
      <!--step 2 end--> 
      
      
    </ul>
  </div>
</div>
<!-- How it Works Ends --> 


<!-- Popular Searches start -->
<!-- Popular Searches ends --> 



<!-- Video start -->
<div class="videowraper section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Watch Our <span>Video</span></h3>
    </div>
    <!-- title end -->
    
    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
    <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a> </div>
</div>
<!-- Video end --> 

<!-- Latest Jobs start -->
<div class="section greybg">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Latest <span>Jobs</span></h3>
    </div>
    <!-- title end -->
    
    <div class="myads">
         
          <ul class="searchList">
            <!-- start -->
            <?php
            require 'common/dbconnect.php';
            $qry="SELECT * FROM recruitment_post WHERE isactive=1";
            $rs=mysqli_query($conn,$qry);
            if(mysqli_num_rows($rs)>0)
            {
              while($row=mysqli_fetch_assoc($rs))
              {
            ?>
            <li class="col-md-6 col-sm-6">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="jobinfo">
                  <h6><a href="#"><?php echo $row['job_type']; ?></a></h6>
                  <div class="companyName"><a href="#."><h6><?php echo $row['cmp_name']; ?></h6></a></div>
                </div>
                <div>
                  <p style="font-weight: bold; font-size: 16px">No. of Vacancies:</p> <?php echo $row['vacancy']; ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
              <form action="approve-post.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $row['post_id'];?>">
                <div class="listbtn" id="b1"><a href="login.php">Apply Now</a></div>
                
              </form>
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
    <!--view button-->
    <div class="viewallbtn"><a href="#.">View All Latest Jobs</a></div>
    <!--view button end--> 
  </div>
</div>
<!-- Latest Jobs ends --> 

<!-- Testimonials start -->
<div class="section">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">Here You Can See</div>
      <h3>Success <span>Stories</span></h3>
    </div>
    <!-- title end -->
    
    <ul class="testimonialsList">
      <!--user 1 Start-->
      <li class="item">
        <div class="testimg"><img src="images/userimg.jpg" alt="Your alt text here" /></div>
        <div class="clientname">Garry Miller Jr</div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientinfo">CEO - Gates Inc</div>
      </li>
      <!--user 1 end--> 
      
      <!--user 2 Start-->
      <li class="item">
        <div class="testimg"><img src="images/userimg.jpg" alt="Your alt text here" /></div>
        <div class="clientname">Garry Miller Jr</div>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus. Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue nec aliquet aliquet."</p>
        <div class="clientinfo">CEO - Gates Inc</div>
      </li>
      <!--user 2 end-->
    </ul>
  </div>
</div>
<!-- Testimonials End --> 

<!-- App Start -->

<!-- App End --> 

<!--Footer-->
  <?php require 'footer.php';?>
<!--Footer end--> 

<!-- Bootstrap's JavaScript --> 
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- map with geo locations --> 

<!-- Owl carousel --> 
<script src="js/owl.carousel.js"></script> 

<!-- Custom js --> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/index3.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:17 GMT -->
</html>