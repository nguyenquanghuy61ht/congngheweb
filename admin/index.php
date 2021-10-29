<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Trang chủ</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper pb-0">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="https://i.pinimg.com/736x/34/d6/f4/34d6f424bedf3dbc00ad054aec65a28b.jpg" alt="Hocmai" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="#"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="btn_GV" href="#">
                                <i class="fas fa-user"></i>Admin</a>
                        </li>
                        <li>
                            <a class="btn_subject" href="#">
                                <i class="fas fa-book"></i>Môn học</a>
                        </li>

                        <li>
                            <a class="btn_SV" href="#">
                                <i class="fas fa-graduation-cap"></i>Sinh viên</a>
                        </li>
                        <li class="has-sub">

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Tìm kiếm ..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="https://i.pinimg.com/736x/34/d6/f4/34d6f424bedf3dbc00ad054aec65a28b.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Lò Thị Huy </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">

                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Tài Khoản</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid ">

                        <div class="row m-t-25 wrapp_content">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>items solid</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row m-t-80 ">
                            <div class="col-md-12 p-0">
                                <footer class="text-center text-white " style="background-color: #caced1;">
                                    <!-- Grid container -->
                                    <div class="container p-4">
                                        <!-- Section: Images -->
                                        <section class="">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/113.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/111.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/112.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/114.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/115.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                                                        <img src="https://mdbootstrap.com/img/new/fluid/city/116.jpg" class="w-100" />
                                                        <a href="#!">
                                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Section: Images -->
                                    </div>
                                    <!-- Grid container -->

                                    <!-- Copyright -->
                                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                                        © 2020 Copyright:
                                        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                                    </div>
                                    <!-- Copyright -->
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/page-ajax.js"></script>

</body>

<!--  --> -->