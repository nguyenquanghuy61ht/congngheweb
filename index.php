<?php
include('login_check.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Học Mãi Mãi </title>

</head>

<body>
    <div class="warpper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light bgroud-orange fw-bolder fs-6 ">
                        <div class="container  ">

                            <a class="navbar-brand " href="#">
                                <img src="http://thptthanglonghp.edu.vn/uploads/images/logo_Thang_Long.jpg" alt="logo" class="img-fluid logo-img rounded-circle">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="#"> Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Về Chúng Tôi</a>
                                        `
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Liên Hê</a>
                                    </li>

                                    <li class="nav-item  nav-logout1">
                                        <a class="nav-link" href="logout.php" tabindex="-1">Đăng Xuất</a>
                                    </li>
                                </ul>
                                <form class="d-flex ">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Tài liệu, môn học,..." aria-label="Search">
                                    <button class="btn btn-outline-success rounded-pill  " type="submit" style="margin-right: 19px; background-color:orange;"><i class="fas fa-search"></i></button>

                                </form>
                                <div class="dropdown text-end mr-4 drop-logout">
                                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-girl-xinh-toc-ngan-de-thuong.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu  " style=" min-width: 6rem;" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="private.php">Trang Cá Nhân</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 mb-3 text-center  ">
                    <ul class="list-group shadow-sm list-responsive  ">
                        <li class="list-group-item  bg-info  disabled" aria-current="true">Danh Sách</li>
                        <li class="list-group-item cur-point active subject">Môn Học</li>
                        <li class="list-group-item cur-point info-person">Thông Tin</li>
                        <li class="list-group-item cur-point document ">Tài Liệu</li>
                        <li class="list-group-item cur-point">Chúng Mày Thích Gì HaHa</li>
                    </ul>
                    <div class="  btn-group-responsive">
                        <p class="btn btn-primary btn_smart   active subject" aria-current="page">Môn Học</p>
                        <p class="btn btn-primary btn_smart  info-person">Thông Tin</p>
                        <p class="btn btn-primary btn_smart document ">Tài Liệu </p>
                        <p class="btn btn-primary btn_smart ">Link</p>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12  ">
                    <div class="row " id="tab-dieuhuong">
                        <?php include('Monhoc.php') ?>


                    </div>
                </div>
            </div>
        </div>

        <?php include "./partials/footer.php" ?>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</body>

</html>