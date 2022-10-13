<?php
require 'common/dbconnect.php';
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
  body
  {
    overflow-x: hidden;
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
          <h3>Available Jobs</h3>




          <div class="container">
            <div class="row">
              <div class="col-lg-8">
            <table class="table table-bordered">
              <tr style="font-weight: bold;">
                <th>Company Name</th>
                <th>Task</th>
                <th>Date of Approval</th>
              </tr>
              <?php
              $qry="SELECT * FROM `alumni` WHERE `isactive` = 1";
              $rs = mysqli_query($conn,$qry);
              if(mysqli_num_rows($rs)>0){
                while($row = mysqli_fetch_assoc($rs)){
              ?>
              <tr>
                <td><?php echo $row["cmp_name"]; ?></td>
                <td>Expert Session Request Approved</td>
                <td><?php echo $row["doi"]; ?></td>
              </tr>
              <?php
                }
              }
            ?>
            </table>
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