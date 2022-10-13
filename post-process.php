<?php
	require 'common/dbconnect.php';
	// var_dump($_FILES);
	// echo "<br><br>";
	$jobtitle=$_POST['jobtitle'];
	$jobdetail=$_POST['jobdetail'];
	$indus=$_POST['indus'];
	$msalary=$_POST['msalary'];
	$location=$_POST['location'];
	$empstatus=$_POST['empstatus'];
	$emptype=$_POST['emptype'];
	$experience=$_POST['experience'];
	$gender=$_POST['gender'];
	$no_of_vacancy=$_POST['no_of_vacancy'];

	$isact=0;
	$utype=1;
	$doi=date("d-m-y");

	$qry="select cmp_id from cmp_tbl where cmp_name='".$jobtitle."' and isactive=1";
	$rs1=mysqli_query($conn,$qry);
	$cp_id=0;
	if(mysqli_num_rows($rs1)>0)
						{
							$row=mysqli_fetch_assoc($rs1);	
								$cp_id=$row['cmp_id'];
						}
								//$row1=mysqli_fetch_assoc($rs1);
						
	$query="INSERT INTO `recruitment_post`(`post_description`, `cmp_id`, `cmp_name`, `company_type`, `job_type`,`vacancy`, `doi`, `isactive`) VALUES ('".$jobdetail."',$cp_id, '".$jobtitle."', '".$indus."', '".$emptype."', $no_of_vacancy,'".$doi."', $isact)";
	echo $query."<br><br>";
						
	$rs=mysqli_query($conn,$query);
	if ($rs)
	{
		header("location:dashboardcmp.php");
		exit();
	}
	else
	{
		die("Insert Error".mysqli_error($conn));
		exit();
	}

?>