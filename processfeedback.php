<?php
	require 'common/dbconnect.php';
	$cpid=$_POST['cmpid'];
	$cmt=$_POST['comment'];
	$rmk=$_POST['feedback'];
	$sid=$_POST['uid'];
	$isact=1;
	$date=date("d-m-y");
	$qry="INSERT INTO feedback(s_id,cmp_id,comment,remarks,isactive,doi) VALUES($sid,$cpid,'".$cmt."','".$rmk."',$isact,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo "<script>alert('Feedback submitted successfully');</script>";
		echo "<script>window.location='dashboard.php';</script>";
		exit();
	}
	else
	{
		die(mysqli_error($conn));
		exit();
	}