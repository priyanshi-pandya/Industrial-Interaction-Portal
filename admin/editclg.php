<?php
require '../common/dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];
$qry="SELECT * FROM clg_tbl WHERE clg_id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Forms :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
	<div class="wrapper">
        <!-- Sidebar Holder -->
        <?php require 'sidebar.php'; ?>
    <div id="content">
        <div class="outer-w3-agile mt-1 col-12">
                    <h4 class="tittle-w3-agileits mb-4">EDIT COLLEGE</h4>

					<form action="updateclgdata.php" method="get" class="form-inline">
							<input type="hidden" name="id" value="<?php echo $row['clg_id']; ?>">
							<label 
                        class="col-md-2 col-form-label" for="inlineFormInputName2">First Name:</label>
						<input type="text" class="form-control mb-2 mr-sm-4" id="inlineFormInputName2" name="txt_fn" value="<?php echo $row['clg_name']; ?>"><br>
						<label 
                        class="col-md-2 col-form-label" for="inlineFormInputName2">Email:</label>
						 <input type="email" class="form-control mb-2 mr-sm-4" id="inlineFormInputName2" name="txt_em" value="<?php echo $row['email']; ?>"><br>
                         <!--<a href="changepassword.php?id=$id">Change Password</a>-->
							<input type="submit" name="btn_sb" class="btn btn-primary mb-2">
					</form>
					
</body>
</html>