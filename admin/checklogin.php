<?php
	require '../common/dbconnect.php';
	session_start();
	var_dump($_POST);
	echo "<br><br>";
	if (!isset($_POST['submit']))
	{
		header("location:index.php");
		exit();
	}
	$us=$_POST['txt_un'];
	$ps=$_POST['txt_ps'];
	$qry="SELECT * FROM user_tbl WHERE email='".$us."' AND password='".$ps."' AND user_type=2 AND isactive=1";
	echo "$qry<br><br>";
	$rs=mysqli_query($conn,$qry);
	if (mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['id'];
		$fn=$row['fname'];
		$ln=$row['lname'];
		$_SESSION['id']=$id;
		$_SESSION['fname']=$fn;
		$_SESSION['lname']=$ln;
		$_SESSION['admin']=1;
		if (isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400*30),"/");
			setcookie("pass",$ps,time()+(86400*30),"/");
		}
		header("location:dashboard.php");
		exit();
	}
	else
	{
		die("Login error".mysqli_error($conn));
		exit();
	}
?>