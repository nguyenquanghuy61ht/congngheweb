<?php
include('login_check.php');
?>
<?php
include("config/db_conect.php");
if (isset($_POST["submit"])) {
    $password_old = $_POST['pass_old'];
    $password1 = $_POST['pass_new1'];
    $password_new = password_hash($password1, PASSWORD_DEFAULT);
    $password_new2 = $_POST['pass_new2'];
    $sql_checkpass = "SELECT pass_sv from sinhvien where email_sv='$_SESSION[login_ok]'";
    $result = mysqli_query($conn, $sql_checkpass);
    $row = mysqli_fetch_assoc($result);
    $pass_db = $row['pass_sv'];
    if (empty($password_old) || empty($password1) || empty($password_new2)) {
        $_SESSION['empty_pass'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Vui lòng nhập tất cả các trường</strong> 
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
    } else {
        if (password_verify($password_old, $pass_db)) {
            if ($password1 == $password_new2) {
                $sql_password = "UPDATE sinhvien SET pass_sv='$password_new' where  email_sv='$_SESSION[login_ok]' ";
                $res = mysqli_query($conn, $sql_password);
                if ($res == true) {

                    $_SESSION['change_pass'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong>Thay đổi mật khẩu thành công</strong> 
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>';
                } else {
                    $_SESSION['change_pass'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>thay đổi mật khẩu thất bại</strong> 
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>';
                }
            } else {
                $_SESSION['pass_incorect'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Mật khẩu không đúng</strong> 
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>';
            }
        } else {
            $_SESSION['pass_false'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Sai mật khẩu</strong> 
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>';
        }
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
    <title>Học Mãi Mãi </title>

</head>

<body>
    <div class="warpper">
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
                                        <a class="nav-link text-dark " aria-current="page" href="http://localhost:7855/BTL/index.php"> Trang chủ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Về Chúng Tôi</a>

                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="#">Liên hệ</a>
                                    </li>

                                    <li class="nav-item  nav-logout1">
                                        <a class="nav-link text-dark" href="logout.php" tabindex="-1">Đăng Xuất</a>
                                    </li>
                                </ul>
                                <form class="d-flex ">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Tài liệu, môn học,..." aria-label="Search">
                                    <button class="btn btn-outline-success rounded-pill bg-light " type="submit" style="margin-right: 19px; background-color:orange;"><i class="fas fa-search "></i></button>

                                </form>
                                <div class="dropdown text-end mr-4 drop-logout">
                                    <?php

                                    $sql = "SELECT tensv,email_sv,sodt_sv,pass_sv,registration_date_sv,tenlop from sinhvien,lop where email_sv='$_SESSION[login_ok]' and sinhvien.malop=lop.malop";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($res);
                                    ?>
                                    <div href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <a class="text-danger" href=""><?php echo $row['tensv'] ?></a>
                                    </div>
                                    <ul class="dropdown-menu  " style=" min-width: 6rem;" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="acout_sv.php">Tài khoản</a></li>

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
        <div class="container mt-5 " style="margin:auto ;width:50%">
            <div class="row ">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <?php
                        if (isset( $_SESSION['empty_pass'] )) {
                            echo   $_SESSION['empty_pass'] ;
                            unset( $_SESSION['empty_pass'] );
                        }
                        if (isset($_SESSION['change_pass'])) {
                            echo  $_SESSION['change_pass'];
                            unset($_SESSION['change_pass']);
                        }

                        if (isset($_SESSION['pass_incorect'])) {
                            echo   $_SESSION['pass_incorect'];
                            unset($_SESSION['pass_incorect']);
                        }
                        if (isset($_SESSION['pass_false'])) {
                            echo   $_SESSION['pass_false'];
                            unset($_SESSION['pass_false']);
                        }


                        ?>
                    </div>
                    <form class="row g-3" method="POST" action="">
                        <div class="col-12 text-center">
                            <h4 class=" text-danger">Đổi mật khẩu</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Nhập mật khẩu hện tại</label>
                            <input type="password" class="form-control " id="pass_old" name="pass_old" ">
                        </div>
                        <div class=" col-md-12">
                            <label for="inputEmail4" class="form-label">Nhập mật khẩu mới</label>
                            <input type="password" class="form-control " id="pass_new1" name="pass_new1" ">
                        </div>
                         <div class=" col-md-12">
                            <label for="inputEmail4" class="form-label">Nhập lại mật khẩu </label>
                            <input type="password" class="form-control " id="pass_new2" name="pass_new2" ">
                        </div>
                             <div class=" col-3 mt-4">
                            <a href="index.php"><button type="button" class="btn btn-danger">Quay lại</button></a>

                        </div>
                        <div class=" col-3 mt-4">
                            <button type="submit" name="submit" class="btn btn-primary">Xác nhận </button>
                        </div>

                    </form>


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