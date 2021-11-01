<?php
session_start();
//CHeck whether the Submit Button is Clicked or NOt
if (isset($_POST['submit'])) {
    $email      = $_POST['email'];
    $password       = $_POST['pass'];
    include('config/db_conect.php');
    //2. SQL to check whether the user with username and password exists or not
    // Bước 02: Xử lý truy vấn
    $sql = "SELECT * FROM sinhvien WHERE email_sv='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Lấy mật khẩu ra
        $row = mysqli_fetch_assoc($result);
        $pass = $row['pass_sv'];
        $status = $row['status_sv'];
        if (password_verify($password,$pass) and $status == 1) {
            $_SESSION['login_ok'] = $email;
            header('Location:http://localhost:7855/BTL');
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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Đăng Nhập</title>

</head>

<body>
    <section class="p-5" style="background-color: #eee;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng Nhập</p>
                                    <form class="mx-1 mx-md-4 " method="post" action="">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                             <?php
                                            if (isset($_SESSION['check_password'])) {
                                                echo $_SESSION['check_password'];
                                                unset($_SESSION['check_password']);
                                            }
                                                if (isset( $_SESSION['email_no_exists'])) {
                                                    echo  $_SESSION['email_no_exists'];
                                                    unset( $_SESSION['email_no_exists']);
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
                                        <p class="text-center text-muted mt-5 mb-0">Bạn Chua Có Tài Khoản ? <a href="register.php" class="fw-bold text-danger"><u>Đăng ký</u></a></p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>