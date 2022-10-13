<?php
  session_start();
  //var_dump($_SESSION);
  //echo "<br><br>";
  if (!isset($_SESSION['college']))
  {
    header("location:login.php");
    exit();
  }
  $cgid=$_SESSION['id'];
  require 'common/dbconnect.php';
  //echo "Welcome $fn $ln<br><br>";
  $cpid=$_POST['cmpid'];
  $cpname=$_POST['cmpname'];
  $me=$_POST['msg'];
  $isact=0;
  $date=date("d-m-y");
  $qry="INSERT INTO alumni(clg_id,cmp_id,cmp_name,message,isactive,doi) VALUES('".$cgid."','".$cpid."','".$cpname."','".$me."',$isact,'".$date."')";
  $rs=mysqli_query($conn,$qry);
  if($rs)
  {
    echo "<script>alert('Request has been send');</script>";
    echo "<script>window.location='dashboardclg.php';</script>";
    exit();
  }
  else
  {
    die(mysqli_error($conn));
    exit();
  }
?>