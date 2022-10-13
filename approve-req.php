<?php
require 'common/dbconnect.php';
//var_dump($_POST);
$id=$_POST['id'];
$qry="UPDATE alumni SET isactive=1 WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewrequest.php");
}
else
{
	echo "Fail";
}
?>