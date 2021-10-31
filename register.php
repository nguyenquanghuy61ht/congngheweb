<!DOCTYPE html>
<html lang="en">
<?php
session_start()
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>register</title>
</head>

<body>
    <section class="p-5" style="background-color: #eee;">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Đăng ký</p>
                                    <?php
                                    if (isset($_SESSION['check_empty'])) {
                                        echo $_SESSION['check_empty'];
                                        unset($_SESSION['check_empty']);
                                    }


                                    if (isset($_SESSION['success'])) {
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    }

                                    if (isset($_SESSION['error'])) {
                                        echo  $_SESSION['error'];
                                        unset($_SESSION['error']);
                                    }
                                    if (isset($_SESSION['email_error'])) {
                                        echo  $_SESSION['email_error'];
                                        unset($_SESSION['email_error']);
                                    }

                                    if (isset($_SESSION['password2_error'])) {
                                        echo $_SESSION['password2_error'];
                                        unset($_SESSION['password2_error']);
                                    }


                                    ?>
                                    <form class="mx-1 mx-md-4 " method="post" action="../BTL/proceser_register_login/proceser_register.php">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Họ và tên" />
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <select name="lop" class="browser-default custom-select" aria-label=".form-select-lg example">
                                                    <?php

                                                    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                                                    if (!$conn) {
                                                        die("Không thể kết nối");
                                                    }
                                                    $sql_lop = 'SELECT tenlop,malop from lop;';
                                                    $result = mysqli_query($conn, $sql_lop);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                            echo "<option value=" . $row['malop'] . ">" . $row['tenlop'] . "</option>";
                                                        }
                                                    }

                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="tel" id="sdt" name="sdt" class="form-control" placeholder="Số điện thoại" />
                                            </div>
                                        </div>


                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="pass1" name="password1" class="form-control" placeholder="Mật khẩu" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="pass2" name="password2" class="form-control" placeholder="Nhập lại mật khẩu" />

                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" name="submit" class="btn btn-success btn-lg" style=>Đăng ký</button>
                                        </div>
                                        <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="login.php" class="fw-bold text-danger"><u>Đăng nhập</u></a></p>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 d-flex justify-content-center">
                                    <img src="assets/images/logo_TLU.png" class="img-fluid " alt="Sample image">
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

</body>

</html>