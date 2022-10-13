<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['id'];
$qry="UPDATE feedback SET isactive=2 WHERE id=$sid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewfeedback.php");
}
else
{
	echo "Fail";
}
?>