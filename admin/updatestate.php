<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['sid'];
$sname=$_GET['sname'];

$qry="UPDATE state_tbl SET sname='".$sname."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Success ";
	header("location:viewstate.php");

}
else
{
	echo "Fail";
}
?>