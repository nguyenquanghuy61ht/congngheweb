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
    <title>Học Mãi</title>
</head>

<body>
    <div class="warpper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light bgroud-orange fw-bolder fs-6 ">
                        <div class="container ">

                            <a class="navbar-brand " href="#">
                                <img src="http://thptthanglonghp.edu.vn/uploads/images/logo_Thang_Long.jpg" alt="logo" class="img-fluid logo-img rounded-circle">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-house-user"></i> Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Về chúng tôi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Liên hê</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item  nav-logout1">
                                        <a class="nav-link" href="#" tabindex="-1">Đăng xuất</a>
                                    </li>
                                </ul>
                                <form class="d-flex ">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Tài liệu, môn học,..." aria-label="Search">
                                    <button class="btn btn-outline-success rounded-pill  " type="submit" style="margin-right: 19px; background-color:orange;">Tìm</button>

                                </form>
                                <div class="dropdown text-end mr-4 drop-logout">
                                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://cdn4.iconfinder.com/data/icons/avatars-xmas-giveaway/128/batman_hero_avatar_comics-512.png" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu  " style=" min-width: 8rem;" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="#">Trang cá nhân</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 mb-3 text-center  ">
                    <ul class="list-group shadow-sm list-responsive  ">
                        <li class="list-group-item  bg-info  disabled" aria-current="true">Danh sách</li>
                        <li class="list-group-item cur-point active subject">Môn học</li>
                        <li class="list-group-item cur-point info-person">Thông tin</li>
                        <li class="list-group-item cur-point document ">Tài liệu</li>
                        <li class="list-group-item cur-point">And a fifth one</li>
                    </ul>
                    <div class="  btn-group-responsive">
                        <p class="btn btn-primary btn_smart   active subject" aria-current="page">Môn học</p>
                        <p class="btn btn-primary btn_smart  info-person">Thông tin</p>
                        <p class="btn btn-primary btn_smart document ">Tài liệu </p>
                        <p class="btn btn-primary btn_smart ">Link</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12  ">
                    <div class="row " id="tab-dieuhuong">
                        <div class="col-md-4 col-sm-6  mb-3  ">
                            <div class="card shadow-sm  ">
                                <img src="https://phanmemcntt.com/wp-content/uploads/2020/08/download-dev-c-5.9.2-moi-nhat.png" style="width: 80%;" class="card-img-top card-img-top m-auto mt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Ngôn ngữ lập trình</h5>
                                    <p class="card-text  m-0"><b>Bộ môn:</b> kỹ thuật phần mền. </p>
                                    <p class="card-text">Trường đại học thủy lợi </p>
                                    <a href="congngheweb.php" class="btn btn-primary">Vào học</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  mb-3 ">
                            <div class="card shadow-sm ">
                                <img src="https://v1study.com/public/images/article/1547524099_php-laravel.png" style="width: 80%;" class="card-img-top m-auto mt-3" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Công nghệ web</h5>
                                    <p class="card-text  m-0"><b>Bộ môn:</b> hệ thống thông tin.</p>
                                    <p class="card-text">Trường đại học thủy lợi </p>
                                    <a href="#" class="btn btn-primary">vào học</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  mb-3 ">
                            <div class="card shadow-sm ">
                                <img src="https://cinnamon.is/en/wp-content/themes/Cinnamon-2017-en/images/ai.png" style="width: 80%;padding-top:38px" class="card-img-top card-img-top m-auto " alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Trí tuệ nhân tạo</h5>
                                    <p class="card-text m-0"><b>Bộ môn:</b> Hệ thống thông tin.</p>
                                    <p class="card-text">Trường đại học thủy lợi </p>
                                    <a href="#" class="btn btn-primary">Vào học</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  mb-1 " style="margin-top: 17%;">
            <div class="row">
                <div class="col-md-12">
                    <footer class="new_footer_area bg_color">
                        <div class="new_footer_top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                            <h3 class="f-title f_600 t_color f_size_18">Liên hệ</h3>
                                            <p>Điền email phía dưới để nhận thông báo khi có môn học mới !</p>
                                            <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                                <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                                <button class="btn btn_get btn_get_two" type="submit">Đăng ký</button>
                                                <p class="mchimp-errmessage" style="display: none;"></p>
                                                <p class="mchimp-sucmessage" style="display: none;"></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                            <h3 class="f-title f_600 t_color f_size_18">Tải xuống</h3>
                                            <ul class="list-unstyled f_list">
                                                <li><a href="#">Công ty</a></li>
                                                <li><a href="#">Ứng dụng Android</a></li>
                                                <li><a href="#">Ứng dụng IOS</a></li>
                                                <li><a href="#">Máy tính</a></li>
                                                <li><a href="#">Dự án</a></li>
                                                <li><a href="#">Nhiệm vụ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                            <h3 class="f-title f_600 t_color f_size_18">Trợ giúp</h3>
                                            <ul class="list-unstyled f_list">
                                                <li><a href="#">Các câu hỏi thường gặp</a></li>
                                                <li><a href="#">Chính sách và bảo mật</a></li>
                                                <li><a href="#">Báo cáo</a></li>
                                                <li><a href="#">Tài Liệu</a></li>
                                                <li><a href="#">Chính sách hỗ trợ</a></li>
                                                <li><a href="#">Quyền riêng tư</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                            <h3 class="f-title f_600 t_color f_size_18">Giải pháp nhóm</h3>
                                            <div class="f_social_icon">
                                                <a href="#" class="fab fa-facebook"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-linkedin"></a>
                                                <a href="#" class="fab fa-pinterest"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_bg">
                                <div class="footer_bg_one"></div>
                                <div class="footer_bg_two"></div>
                            </div>
                        </div>
                        <div class="footer_bottom">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-7">
                                        <p class="mb-0 f_400">©2021 Tất cả quyền được bảo lưu </p>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>