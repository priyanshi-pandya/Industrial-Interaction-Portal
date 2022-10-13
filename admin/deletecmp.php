<?php
require '../common/dbconnect.php';
var_dump($_GET);
$cid=$_GET['id'];
$qry="UPDATE cmp_tbl SET isactive=2 WHERE cmp_id=$cid";
$rs=mysqli_query($conn,$qry);
if($rs)
{

}
else
{
	die(mysqli_error($conn));
}
?>