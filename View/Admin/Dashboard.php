<?php
// session_start();
// error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location: index.php?c=Admin&a=LoginPage');
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Hung Dinh">
    <!-- App title -->
    <title>Dashboard | Trang chủ</title>
    <link rel="stylesheet" href="plugins/morris/morris.css">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo"><span>NP<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <?php include('includes/topheader.php'); ?>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php include('includes/leftsidebar.php'); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Điều khiển</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Bảng điều khiển</a>
                                    </li>
                                    <li class="active">
                                        Bảng điều khiển
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <a href="index.php?c=Category&a=Manage">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Tổng danh mục</p>
                                        <h2><?=$countcat?> <small></small></h2>

                                    </div>
                                </div>
                            </div>
                        </a><!-- end col -->

                        <a href="index.php?c=Post&a=Manage">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-layers widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Tổng bài viết</p>
                                        <h2><?=$countposts?> <small></small></h2>

                                    </div>
                                </div>
                            </div><!-- end col -->
                        </a>

                    </div>
                    <!-- end row -->

                    <div class="row">

                        <a href="index.php?c=Post&a=Trash">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="card-box widget-box-one">
                                    <i class="mdi mdi-delete widget-one-icon"></i>
                                    <div class="wigdet-one-content">
                                        <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Tổng bài viết bị xóa</p>
                                        <h2><?=$countpostsdel?> <small></small></h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div> <!-- container -->

            </div> <!-- content -->
            <?php include('includes/footer.php'); ?>

        </div>

    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="plugins/switchery/switchery.min.js"></script>

    <!-- Counter js  -->
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>

    <!--Morris Chart-->
    <script src="plugins/morris/morris.min.js"></script>
    <script src="plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>
<?php } ?>