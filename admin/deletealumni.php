<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['id'];
$qry="UPDATE alumni SET isactive=2 WHERE id=$sid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewalumni.php");
}
else
{
	echo "Fail";
}
?>