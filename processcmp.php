<?php
	require 'common/dbconnect.php';
	$fn=$_POST['txt_fn2'];
	$em=$_POST['txt_em2'];
	$ps=$_POST['txt_ps2'];
	$cp=$_POST['txt_cp2'];
	$isact=1;
	$doi=date("d-m-y H:m:s");
	if (!$ps==$cp)
	{
		echo "Password and Confirm password do not match";
		exit();
	}
	$qry1="SELECT * FROM cmp_tbl WHERE email='".$em."'";
	$rs1=mysqli_query($conn,$qry1);
	if(mysqli_num_rows($rs1)>0)
	{
		echo "email already exist!";
		exit();
	}
	$qry="INSERT INTO cmp_tbl(cmp_name, email, password, doi, isactive) VALUES('".$fn."','".$em."','".$ps."','".$doi."',$isact)";
	echo $qry."<br><br>";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:login.php");
		exit();
	}
	else
	{
		die("Insert Error".mysqli_error($conn));
		exit();
	}
?>