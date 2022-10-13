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
<style type="text/css">
  .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>

<script type="text/javascript">
  $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>
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
          <!-- <li><a href="notification.php"><i class="fa fa-desktop" aria-hidden="true"></i>Notification</a></li> -->
          <li><a href="profile.php"><i class="fa fa-desktop" aria-hidden="true"></i>Edit Profile</a></li>
          <li><a href="viewcmpstu.php"><i class="fa fa-desktop" aria-hidden="true"></i>View Companies</a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-8">
        
        
        
          
        <div class="myads">
          <h3>My Profile</h3>

         <div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0  toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $fn; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">

                <img  src="upload/<?php echo $row1['profilepic'];?>" alt="user Pic" class="img-circle img-responsive" /> </div>
                <form method="post" enctype="multipart/form-data" action="edit_profile.php">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value="<?php echo $fn;?>"></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td><input type="Password" name="pwd" value="<?php echo $row1['password'];?>"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="<?php echo $row1['email'];?>"></td>
                      </tr>
                      <tr>
                        <td>Profile Picture</td>
                        <td><input type="file" name="fileToUpload" value="<?php echo $row1['profilepic'];?>"></td>
                      </tr>
                        <td>Resume</td>
                        <td><input type="file" name="resumeToUpload" value="<?php echo $row1['resume'];?>"><br></td>        
                      </tr>

                      <input type="hidden" name="uid" value="<?php echo $row1['id'];?>">
                      <input type="hidden" name="utype" value="1">
                    </tbody>
                  </table>
                  <div class="col-md-4" ></div>
                <input type="submit" name="submit" value="Edit">

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