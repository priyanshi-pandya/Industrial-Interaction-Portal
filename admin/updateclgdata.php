<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$email=$_GET['txt_em'];
$qry="UPDATE clg_tbl SET clg_name='".$fn."', email='".$email."' WHERE clg_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewclg.php");
	exit();
}
else
{
	echo "Update Error";
}
?>