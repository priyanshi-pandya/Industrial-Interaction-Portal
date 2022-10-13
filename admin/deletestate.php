<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['id'];
$qry="UPDATE state_tbl SET isactive=2 WHERE id=$sid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewstate.php");
}
else
{
	echo "Fail";
}
?>