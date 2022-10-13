<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="UPDATE clg_tbl SET isactive=2 WHERE clg_id=$cid";
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