<?php
require 'common/dbconnect.php';
//var_dump($_POST);
$id=$_POST['pid'];
$qry="UPDATE recruitment_post SET isactive=1 WHERE post_id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:approvedpostclg.php");
}
else
{
	echo "Fail";
}
?>