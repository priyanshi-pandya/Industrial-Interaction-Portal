<?php
session_start();
require 'common/dbconnect.php';
$iact=1;
$date=date("d-m-y");
$qry="INSERT INTO apply(cmp_id,post_id,uid,isactive,doi) values('".$_GET['id']."','".$_GET['post_id']."','".$_SESSION['id']."',$iact,'".$date."')";
$rs=mysqli_query($conn,$qry);

$qry1 = "UPDATE `recruitment_post` SET  `isactive`=3 WHERE post_id='".$_GET['post_id']."'";
$rs1=mysqli_query($conn, $qry1);
if($rs1){
	echo "Successfully updated";
}
if($rs)
{
	echo "<script>alert('You have successfully applied');</script>";
	echo "<script>window.location='dashboard.php';</script>";
	exit();
}
else
{
	echo "Fail";
	exit();
}
?>