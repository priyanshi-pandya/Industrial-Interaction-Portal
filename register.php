<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:19 GMT -->
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
<!-- Header end --> <!-- Page Title start -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Register</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Register</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
          <div class="socialLogin">
            <h5> Register </h5>
          </div>
          <!--<div class="alert alert-success" role="alert"><strong>Well done!</strong> Your account successfully created.</div>
          <div class="alert alert-warning" role="alert"><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>
          <div class="alert alert-danger" role="alert"><strong>Oh snap!</strong> Change a few things up and try submitting again.</div>-->
          <div class="userbtns">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#student">Student</a></li>
              <li><a data-toggle="tab" href="#college">College</a></li>
              <li><a data-toggle="tab" href="#company">Company</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div id="student" class="formpanel tab-pane fade in active">
              <form action="process.php" method="post" enctype="multipart/form-data">
              <div class="formrow">
                <input type="text" name="txt_fn" class="form-control" placeholder="Full Name">
              </div>
              <!--<div class="formrow">
                <input type="text" name="txt_ln" class="form-control" placeholder="Last Name">
              </div>
              <div class="formrow">
                <input type="text" name="txt_un" class="form-control" placeholder="Username">
              </div>
              <div class="formrow">
                <input type="text" name="txt_cn" class="form-control" placeholder="Contact">
              </div>
              <div class="formrow">
                <label class="form-control">Select Gender:&nbsp&nbsp
                <input type="radio" name="gender" value="Male" >Male &nbsp&nbsp
                <input type="radio" name="gender" value="Female">Female
                </label>
              </div>-->
              <div class="formrow">
                <input type="text" name="txt_em" class="form-control" placeholder="Email">
              </div>
              <div class="formrow">
                <input type="text" name="txt_ps" class="form-control" placeholder="Password">
              </div>
              <div class="formrow">
                <input type="text" name="txt_cp" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="formrow">
                <input type="file" name="fileToUpload" placeholder="Choose Profile Photo" class="form-control">Choose Profile Photo
              </div>
              <div class="formrow">
                <input type="file" name="resumeToUpload" class="form-control">Choose Resume
              </div>
              <div class="formrow">
                </div>
              <input type="submit" name="submit" class="btn" value="Register">
            </div>
          </form>
            <div id="college" class="formpanel tab-pane fade in">
              <form action=processclg.php method="post">
              <div class="formrow">
                <input type="text" name="txt_fn1" class="form-control" placeholder="College Name">
              </div>
              <!--<div class="formrow">
                <input type="text" name="txt_ln1" class="form-control" placeholder="Username">
              </div>-->
              <div class="formrow">
                <input type="text" name="txt_em1" class="form-control" placeholder="Email">
              </div>
              <div class="formrow">
                <input type="text" name="txt_ps1" class="form-control" placeholder="Password">
              </div>
              <div class="formrow">
                <input type="text" name="txt_cp1" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="formrow">
                </div>
              <input type="submit" name="submit1" class="btn" value="Register">
              </form>
            </div>
            <div id="company" class="formpanel tab-pane fade in">
              <form action="processcmp.php" method="post">
              <div class="formrow">
                <input type="text" name="txt_fn2" class="form-control" placeholder="Company Name">
              </div>
              <!--<div class="formrow">
                <input type="text" name="txt_ln1" class="form-control" placeholder="Username">
              </div>-->
              <div class="formrow">
                <input type="text" name="txt_em2" class="form-control" placeholder="Email">
              </div>
              <div class="formrow">
                <input type="text" name="txt_ps2" class="form-control" placeholder="Password">
              </div>
              <div class="formrow">
                <input type="text" name="txt_cp2" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="formrow">
                </div>
              <input type="submit" name="submit2" class="btn" value="Register">
              </form>
            </div>
          </div>
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="login.php">Login Here</a></div>
        </div>
      </div>
    </form>
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

<!-- Mirrored from www.sharjeelanjum.com/html/jobs-portal/demo/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2019 09:06:19 GMT -->
</html>