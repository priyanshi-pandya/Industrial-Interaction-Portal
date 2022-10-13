<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$em=$_GET['txt_em'];
$qry="UPDATE cmp_tbl SET cmp_name='".$fn."',email='".$em."' WHERE cmp_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcmp.php");
	exit();
}
else
{
	echo "Update Error";
}
?>