<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['id'];
$qry="SELECT * FROM state_tbl WHERE id=$sid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE state_tbl SET isactive=0 WHERE id=$sid";
}
else
{
	$qry="UPDATE state_tbl SET isactive=1 WHERE id=$sid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewstate.php");
	exit();
}
else
{
	echo "Fail";
}
?>
