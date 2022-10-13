<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['sid'];
$cid=$_GET['cid'];
$area=$_GET['txt_area'];
$isactive=1;
$qry="INSERT into area_tbl(sid,cid,areaname,isactive) VALUES($sid,$cid,'".$area."',$isactive)";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewarea.php");
	exit();
}
else
{
	die("insert error");
}
?>