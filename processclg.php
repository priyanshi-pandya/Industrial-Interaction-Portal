<?php
	require 'common/dbconnect.php';
	$fn=$_POST['txt_fn1'];
	$em=$_POST['txt_em1'];
	$ps=$_POST['txt_ps1'];
	$cp=$_POST['txt_cp1'];
	$isact=1;
	$doi=date("d-m-y H:m:s");
	if (!$ps==$cp)
	{
		echo "Password and Confirm password do not match";
		exit();
	}
	$qry1="SELECT * FROM clg_tbl WHERE email='".$em."'";
	$rs1=mysqli_query($conn,$qry1);
	if(mysqli_num_rows($rs1)>0)
	{
		echo "email already exist!";
		exit();
	}
	$qry="INSERT INTO clg_tbl(clg_name, email, password, doi, isactive) VALUES('".$fn."','".$em."','".$ps."','".$doi."',$isact)";
	echo $qry."<br><br>";
	$rs=mysqli_query($conn,$qry);
	if ($rs)
	{
		header("location:login.php");
		exit();
	}
	else
	{
		echo "Insert Error";
		exit();
	}
?>