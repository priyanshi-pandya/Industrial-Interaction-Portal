<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="UPDATE city_tbl SET isactive=2 WHERE id=$cid";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcity.php");
}
else
{
	echo "Fail";
}
?>