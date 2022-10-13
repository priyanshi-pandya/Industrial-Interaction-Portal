<?php
require '../common/dbconnect.php';
var_dump($_POST);
var_dump($_FILES);
$id=$_POST['id'];
if($_FILES["fileToUpload"]["name"]=="")
{
	header("location:viewuser.php");
	exit();
}
else
{
	require 'finalupload.php';
	$prp=$_FILES["fileToUpload"]["name"];
	$qry="UPDATE user_tbl SET profilepic='".$prp."' WHERE id=$id";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:viewuser.php");
		exit();
	}
	else{
		echo "Some Error";
	}
}
?>