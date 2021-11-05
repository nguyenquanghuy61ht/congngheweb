<?php
session_start();
//CHeck whether the Submit Button is Clicked or NOt
if (isset($_POST['submit'])) {
    $email      = $_POST['email'];
    $password       = $_POST['pass'];
    include('config/db_conect.php');
    //2. SQL to check whether the user with username and password exists or not
    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM giaovien WHERE email_gv='$email'";
    $result = mysqli_query($conn, $sql);
        
    if (mysqli_num_rows($result) > 0) {
        // Lấy mật khẩu ra
        $row = mysqli_fetch_assoc($result);
        $pass = $row['pass_gv'];
        $status = $row['status_gv'];
        if (password_verify($password, $pass) and $status == 1) {

            $_SESSION['login_ok_gv'] = $email;
            header('Location:http://localhost:7855/BTL/admin/QLmonhoc.php');
        } else {
            $_SESSION['check_password'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>mật khẩu không đúng hoặc tài khoản chưa kích hoạt!</strong> vui lòng kiểm tra và thử lại.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
        }
    } else {
        $_SESSION['email_no_exists'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>email không tồn tại!</strong> vui lòng kiểm tra và thử lại.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="outline:none">
                                                <span aria-hidden="true" >&times;</span>
                                            </button>
                                        </div>';
    }
    

    


}

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
    <title>Đăng Nhập</title>

</head>

<body>


<div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-light bgroud-orange fw-bolder fs-6 ">
                        <div class="container  ">

                            <a class="navbar-brand " href="http://localhost:7855/BTL/index.php">
                                <img src="https://hocmai.vn/img/hocmai/logo_b_1200x630.png" alt="logo" class="img-fluid logo-img rounded-circle">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                                   
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="aboutus.php">Về Chúng Tôi</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="contact.php">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    <section class="p-5" style="background-color: #eee;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h2 fw-bold mb-4 mx-1 mx-md-4 mt-4">Đăng nhập giáo viên</p>
                                    <form class="mx-1 mx-md-4 " method="post" action="">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <?php
                                            if (isset($_SESSION['check_password'])) {
                                                echo $_SESSION['check_password'];
                                                unset($_SESSION['check_password']);
                                            }
                                            if (isset($_SESSION['email_no_exists'])) {
                                                echo  $_SESSION['email_no_exists'];
                                                unset($_SESSION['email_no_exists']);
                                            }
                                            ?>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-success btn-lg">Đăng nhập</button>
                                        </div>
                                        <p class="text-center text-muted mt-5 mb-0">Bạn Chua Có Tài Khoản ? <a href="register_gv.php" class="fw-bold text-danger"><u>Đăng ký</u></a></p>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2  d-flex justify-content-center ">
                                    <img src="https://agentpekka.com/wp-content/uploads/2018/08/AP_Justyna_Stasik_TDF_02_2x.jpg" class="img-fluid rounded" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="new_footer_area bg_color">
        <div class="new_footer_top border-top border-success"">
        <div class=" container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Liên Hệ</h3>
                        <p>Điền email phía dưới để nhận thông báo khi có môn học mới !</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Đăng ký</button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Tải Xuống</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Máy Tính</a></li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#">Nhiệm Vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Trợ Giúp</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="question.php">Các câu hỏi thường gặp</a></li>
                            <li><a href="personal_opinion.php">Y Kiến Cá Nhân </a></li>
                            <li><a href="#">Quyền Cá Nhân </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Giải Pháp Nhóm</h3>
                        <div class="f_social_icon">
                            <a href="https://www.facebook.com/huy.huyt.7" class="fab fa-facebook"></a>
                            <a href="https://www.facebook.com/daoquyenminh" class="fab fa-twitter"></a>
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
                        <p class="mb-0 f_400">©2021 Tất cả quyền được bảo lưu</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <style>
        a {

            text-decoration: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>