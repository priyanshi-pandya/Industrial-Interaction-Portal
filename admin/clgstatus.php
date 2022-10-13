<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="SELECT * FROM clg_tbl WHERE clg_id=$cid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE clg_tbl SET isactive=0 WHERE clg_id=$cid";
}
else
{
	$qry="UPDATE clg_tbl SET isactive=1 WHERE clg_id=$cid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewclg.php");
}
else
{
	die(mysqli_error($conn));
}
?>
