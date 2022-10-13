<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="SELECT * FROM cmp_tbl WHERE cmp_id=$cid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE cmp_tbl SET isactive=0 WHERE cmp_id=$cid";
}
else
{
	$qry="UPDATE cmp_tbl SET isactive=1 WHERE cmp_id=$cid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewcmp.php");
}
else
{
	die(mysqli_error($conn));
}
?>
