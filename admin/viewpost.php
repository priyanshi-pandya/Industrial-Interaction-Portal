<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM recruitment_post WHERE isactive != 2";

$rs=mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Tables :: w3layouts</title>
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
        <!-- Page Content Holder -->
        <div id="content">

			<div class="outer-w3-agile mt-3">
                <h4 class="tittle-w3-agileits mb-4">Post</h4>
					<table class="table">
                        <thead class="thead-dark">
    						<tr>
                                <th scope="col">Post ID</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Post Description</th>
                                <th scope="col">Company Type</th>
                                <th scope="col">Job Type</th>
 
                                <th scope="col">Vacancy</th>
                                <th scope="col">DOI</th>
                                <th scope="col">DOU</th>
                                <th scope="col">Isactive</th>
                            </tr>
                        </thead>
                        <?php
						if(mysqli_num_rows($rs) > 0)
						{
							while($row=mysqli_fetch_assoc($rs))
							{	
							
						?>
						<tbody>
							<tr>
                                <td><?php echo $row['post_id']; ?></td>
								<td><?php echo $row['cmp_name']; ?></td>
								<td><?php echo $row['post_description']; ?></td>
								<td><?php echo $row['company_type']; ?></td>
								<td><?php echo $row['job_type']; ?></td>
								<td><?php echo $row['vacancy']; ?></td>
								<td><?php echo $row['doi']; ?></td>
								<td><?php echo $row['dou']; ?></td>
                                <td><?php echo $row['isactive']; ?></td>
							</tr>
						<?php
							}
						}
						else{
							echo "0 Row Found";
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		 <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>
</html>