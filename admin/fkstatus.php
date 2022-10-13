<?php
require '../common/dbconnect.php';
var_dump($_GET);
$aid=$_GET['id'];
$qry="SELECT * FROM feedback WHERE id=$aid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
$ia=$row['isactive'];
if($ia==1)
{
	$qry="UPDATE feedback SET isactive=0 WHERE id=$aid";
}
else
{
	$qry="UPDATE feedback SET isactive=1 WHERE id=$aid";

}
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewfeedback.php");
	exit();
}
else
{
	echo "Fail";
}
?>
