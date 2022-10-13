<?php
require '../common/dbconnect.php';
$qry = "select * from state_tbl WHERE isactive=1";
$rs=mysqli_query($conn,$qry);
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
                    <h4 class="tittle-w3-agileits mb-4">ADD AREA</h4>
                    <form action="addarea.php" method="get" class="form-inline">

                        <label 
                        class="col-sm-2 col-form-label" for="inlineFormInputName2">Select State:</label>
                        <select name="sid">
                            <?php
                            if(mysqli_num_rows($rs)>0)
                            {
                                while($row=mysqli_fetch_assoc($rs))
                                {
                                    
                            ?>

                                <option value="<?php echo $row['id']; ?>"><?php 
                                    $stid=$row['id'];
                                    //echo $stid;
                                    echo $row['sname']; ?></option>
                            <?php
                                }
                            }
                            else
                            {
                                echo "0 Row Found";
                                exit();
                            }
                            ?>
                        </select>
    <?php
        $qry1 = "select * from city_tbl WHERE isactive=1";
        $rs1=mysqli_query($conn,$qry1);
    ?>

                        <label 
                        class="col-sm-2 col-form-label" for="inlineFormInputName2">Select City:</label>
                        <select name="cid">
                            <?php
                            if(mysqli_num_rows($rs1)>0)
                            {
                                while($row1=mysqli_fetch_assoc($rs1))
                                {


                            ?>
                                <option value="<?php echo $row1['id']; ?>"><?php echo $row1['cityname']; ?></option>
                            <?php
                                }
                            }
                            else
                            {
                                echo "0 Row Found";
                                exit();
                            }
                            ?>
                        </select>

                        
                        <label 
                        class="col-sm-2 col-form-label" for="inlineFormInputName2">Area Name:</label>
                        <input type="text" class="form-control mb-2 mr-sm-4" id="inlineFormInputName2" name="txt_area" required="">
                        <input type="submit" name="btn_sb" class="btn btn-primary mb-2"></button>
                    </form>
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

    <!-- Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';

            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');

                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!--// Validation Script -->

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