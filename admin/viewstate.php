<?php
require '../common/dbconnect.php';

$qry="SELECT * FROM state_tbl WHERE isactive!=2";
$rs = mysqli_query($conn,$qry);
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
                    <h4 class="tittle-w3-agileits mb-4">States</h4>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">State Name</th>
                                <th scope="col">Active </th>
                                <th scope="col">Edit</th>
                                <th scope="col">Block</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                            <?php
								if(mysqli_num_rows($rs)>0)
								{
									//echo "True";
									while($row=mysqli_fetch_assoc($rs))
									{
							?>
                        
                        <tbody>
                        	<tr>
								<th scope="row"><?php echo $row['id']?></th>
								<td><?php echo $row['sname']?></td>
								<td><?php $ia=$row['isactive']; echo $ia;?></td>
								<td><a href="editstate.php?id=<?php echo $row['id'];?>"
								>Edit</a></td>
								<td><a href="statestatus.php?id=<?php echo $row['id'];?>"
								>
							<?php
								if($ia==1)
								{
							?>
							Block
							<?php
								}
							else
								{
							?>
							Active
								<?php
								}
								?>
							</a></td>
								<td><a href="deletestate.php?id=<?php echo $row['id']; ?>">Delete</a></td>
								
							</tr>
								<?php
								}
								}
							else
							{
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