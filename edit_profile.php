<?php
  session_start();
  //var_dump($_SESSION);
  //echo "<br><br>";
  if($_POST['utype']==1)
  {
      if (!isset($_SESSION['user']))
      {
        header("location:login.php");
        exit();
      }
      $fn=$_SESSION['fname'];

    require 'common/dbconnect.php';
    var_dump($_POST);
    $id=$_POST['uid'];
    $sname=$_POST['name'];
    $password=$_POST['pwd'];
    $email=$_POST['email'];
    $profilepic=$_FILES['fileToUpload']['name'];
    $resume=$_FILES['resumeToUpload']['name'];
    if($_FILES['fileToUpload']['name']!="")
    { 
    require 'finalupload.php';
    $profilepic=$_FILES['fileToUpload']['name'];
    //echo "File uploaded";
    }
  else
    { 
    $profilepic="avatar.png";
    }
  if($_FILES['resumeToUpload']['name']!="")
    { 
    require 'resumeupload.php';
    $cv=$_FILES['resumeToUpload']['name'];
    //echo "File uploaded";
    }
  else
  { 
    $cv="";
  }
  $qry="UPDATE user_tbl SET firstname='".$sname."',password='".$password."',email='".$email."',profilepic='".$profilepic."',resume='".$resume."' WHERE id=$id";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
      echo "Success ";
      header("location:dashboardcmp.php");

    }
    else
    {
      die("fail".mysqli_error($conn));
    }

}
  if($_POST['utype']==2)
  {
   if (!isset($_SESSION['company']))
      {
        header("location:login.php");
        exit();
      }
      $fn=$_SESSION['fname'];

    require 'common/dbconnect.php';
    var_dump($_POST);
    $id=$_POST['uid'];
    $sname=$_POST['name'];
    $password=$_POST['pwd'];
    $email=$_POST['email'];
    $qry="UPDATE cmp_tbl SET cmp_name='".$sname."',password='".$password."',email='".$email."'WHERE cmp_id=$id";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
      echo "Success ";
      header("location:dashboardcmp.php");

    }
    else
    {
      die("fail".mysqli_error($conn));
    } 
}

 if($_POST['utype']==3)
  {
   if (!isset($_SESSION['college']))
      {
        header("location:login.php");
        exit();
      }
      $fn=$_SESSION['fname'];

    require 'common/dbconnect.php';
    var_dump($_POST);
    $id=$_POST['uid'];
    $sname=$_POST['name'];
    $password=$_POST['pwd'];
    $email=$_POST['email'];
    $qry="UPDATE clg_tbl SET clg_name='".$sname."',password='".$password."',email='".$email."'WHERE clg_id=$id";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
      echo "Success ";
      header("location:dashboardclg.php");

    }
    else
    {
      die("fail".mysqli_error($conn));
    } 
}
?>