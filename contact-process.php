<?php
	require 'common/dbconnect.php';

	$fname=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$comments=$_POST['comments'];
	$isact=1;
	$utype=1;
	$doi=date("d-m-y H:m:s");
	$qry = "INSERT INTO `contact_tbl`(`fname`, `contact`, `email`, `details`, `isactive`, `utype`, `doi`) VALUES ('".$fname."',$phone,'".$email."','".$comments."', $isact, $utype,'".$doi."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header('location:index.php');
		exit();
	}
	else
	{
		die("insert error".mysqli_error($conn));
	}


?>