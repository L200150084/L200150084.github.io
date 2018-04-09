
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <title>Upcube - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="./assets/images/favicon.ico" />

        <!-- App css -->
        <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <!--<a href="index.html" class="logo">-->
                        <!--Upcube-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="#" class="logo">
                            SISTEM INFORMASI GEOGRAFIS
                        </a>

                    </div>
                    <!-- End Logo container-->



                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid"
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="#" target=""><i class="ti-home"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-light-bulb"></i>Tugas Individu</a>
                                <ul class="submenu">
                                    <li><a href="pages/home.php" target="content">Tugas Marker, Cluster, Heatmap</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="ti-crown"></i>Tugas Kelompok</a>
                                <ul class="submenu">
                                    <li><a href="pages/cek.html" target="content">Tugas 1 Peta Provinsi Jawa Barat</a></li>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                           
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div id="gmaps-markers" class="gmaps"><iframe name="content" style="width: 100%;height: 100%;border: none;" src="pages/load.html"></iframe></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    
                </div> <!-- end row -->



            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2018 Upcube - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/modernizr.min.js"></script>
        <script src="./assets/js/waves.js"></script>
        <script src="./assets/js/jquery.slimscroll.js"></script>
        <script src="./assets/js/jquery.nicescroll.js"></script>
        <script src="./assets/js/jquery.scrollTo.min.js"></script>

        <!-- google maps api -->
        <script src="maps.google.com/maps/api/js_34c1e778.js"></script>
        <!-- Gmaps file -->
        <script src="./assets/plugins/gmaps/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="./assets/pages/gmaps.js"></script>

        <!-- App js -->
        <script src="./assets/js/app.js"></script>

    </body>
</html>