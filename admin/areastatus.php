<?php
require '../common/dbconnect.php';
var_dump($_GET);
$aid=$_GET['id'];
$qry="SELECT * FROM area_tbl WHERE id=$aid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE area_tbl SET isactive=0 WHERE id=$aid";
}
else
{
	$qry="UPDATE area_tbl SET isactive=1 WHERE id=aid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewarea.php");
}
else
{
	echo "Fail";
}
?>
