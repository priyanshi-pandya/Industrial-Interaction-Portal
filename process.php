<?php
	require 'common/dbconnect.php';
	// var_dump($_FILES);
	// echo "<br><br>";
	$fn=$_POST['txt_fn'];
	$em=$_POST['txt_em'];
	$ps=$_POST['txt_ps'];
	$cp=$_POST['txt_cp'];
	$isact=1;
	$utype=1;
	$doi=date("d-m-y H:m:s");
	//$_FILES['fileToUpload']['name'];
	// exit();
	// $profilepic="";
	if (!$ps==$cp)
	{
		echo "Password and Confirm password do not match";
		exit();
	}
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
	$qry1="SELECT * FROM user_tbl WHERE email='".$email."'";
	$rs1=mysqli_query($conn,$qry1);

	if(mysqli_num_rows($rs1)>0)
	{
		echo "email already exist!";
		exit();
	}
	$qry="INSERT INTO user_tbl(firstname, email, password, user_type, isactive, doi, profilepic,resume) VALUES('".$fn."','".$em."','".$ps."',$utype,$isact,'".$doi."','".$profilepic."','".$cv."')";
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