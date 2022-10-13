<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['id'];
$qry="UPDATE user_tbl SET isactive=2 WHERE id=$sid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewuser.php");
}
else
{
	echo "Fail";
}
?>