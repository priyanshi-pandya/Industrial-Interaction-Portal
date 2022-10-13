<!DOCTYPE html>
<html>
<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | 404 Error Page :: w3layouts</title>
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
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="index.php">Admin</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>


            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="far fa-file"></i>
                        Manage User
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="viewuser.php">View User</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage College
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="viewclg.php">View College</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage Company
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="viewcmp.php">View Company</a>
                        </li>
                    </ul>
                </li>

                    
                <li>
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage Post
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu4">
                        <li>
                            <a href="viewpost.php">View Post</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage Alumni Section
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu5">
                        <li>
                            <a href="viewalumni.php">View Alumni Requests</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu9" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage Feedback
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu9">
                        <li>
                            <a href="viewfeedback.php">View Feedback</a>
                        </li>
                    </ul>
                </li>
                


                <li>
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage State
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu6">
                        <li>
                            <a href="state.php">Add State</a>
                        </li>
                        <li>
                            <a href="viewstate.php">View State</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage City
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu7">
                        <li>
                            <a href="city.php">Add City</a>
                        </li>
                        <li>
                            <a href="viewcity.php">View City</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu8" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        Manage Area
                        <i class="fas fa-angle-down fa-pull-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu8">
                        <li>
                            <a href="area.php">Add Area</a>
                        </li>
                        <li>
                            <a href="viewarea.php">View Area</a>
                        </li>
                    </ul>
                </li>
                    <ul>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>   
            </ul>
        </nav>
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