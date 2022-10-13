<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="SELECT * FROM city_tbl WHERE id=$cid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE city_tbl SET isactive=0 WHERE id=$cid";
}
else
{
	$qry="UPDATE city_tbl SET isactive=1 WHERE id=$cid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcity.php");
	exit();
}
else
{
	echo "Fail";
}
?>
