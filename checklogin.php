<?php
require 'common/dbconnect.php';
session_start();
var_dump($_POST);
echo "<br><br>";
	// if (!isset($_POST['submit']))
	// {
	// 	header("location:login.php");
	// 	exit();
	// }
$us=$_POST['txt_un'];
$ps=$_POST['txt_ps'];

if($_POST['usertype'] == 1){


	$qry="SELECT * FROM user_tbl WHERE email='".$us."' AND password='".$ps."' AND user_type=1 AND isactive=1";
	echo $qry."<br><br>";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['id'];
		$fn=$row['firstname'];
		$_SESSION['id']=$id;
		$_SESSION['fname']=$fn;
		$_SESSION['user']=1;
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
		die("login error".mysqli_error($conn));
		exit();
	}	
}
if($_POST['usertype']==2){
	$qry="SELECT * FROM clg_tbl WHERE email='".$us."' AND password='".$ps."' AND isactive=1";
	echo $qry."<br><br>";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['clg_id'];
		$fn=$row['clg_name'];
		$_SESSION['id']=$id;
		$_SESSION['fname']=$fn;
		$_SESSION['college']=2;
		if (isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400*30),"/");
			setcookie("pass",$ps,time()+(86400*30),"/");
		}
		header("location:dashboardclg.php");
		exit();
	}
	else
	{
		echo "login error<br>";
		exit();
	}
}
if($_POST['usertype']==3){

	$qry="SELECT * FROM cmp_tbl WHERE email='".$us."' AND password='".$ps."' AND isactive=1";
	echo $qry."<br><br>";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0)
	{
		$row=mysqli_fetch_assoc($rs);
		$id=$row['cmp_id'];
		$fn=$row['cmp_name'];
		$_SESSION['id']=$id;
		$_SESSION['fname']=$fn;
		$_SESSION['company']=3;
		if (isset($_POST['remember']))
		{
			setcookie("user",$us,time()+(86400*30),"/");
			setcookie("pass",$ps,time()+(86400*30),"/");
		}
		header("location:dashboardcmp.php");
		exit();
	}
	else
	{
		die("Login Error".mysqli_error($conn));
		exit();
	}
}
?>