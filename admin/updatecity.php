<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$cname=$_GET['cityname'];

$qry="UPDATE city_tbl SET cityname='".$cname."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Success ";
	header("location:viewcity.php");

}
else
{
	echo "Fail";
}
?>