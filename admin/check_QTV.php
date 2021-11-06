<?php include('login_check_2.php') ?>
<?php
if (isset($_POST['submit'])) {
    $pass_admin = $_POST['pass_admin'];
    $email_admin = $_POST['email_admin'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $sql = "SELECT * from giaovien where email_gv='$email_admin' and level=1";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $pass = $row['pass_gv'];
    if (password_verify($pass_admin, $pass)) {
        $_SESSION['login_suc'] = "phuc@gmail.com";
        header('Location:http://localhost:7855/BTL/admin/add_QTV.php');
    } else {
        $_SESSION['error_check'] = '<p class="text-danger">bạn không phải là quản trị viên</p>';
    }
}

?>
<?php include('./header_admin.php') ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form class="mx-1 mx-md-4 " method="post" action="">
                <?php
                if (isset($_SESSION['error_check'])) {
                    echo $_SESSION['error_check'];
                    unset($_SESSION['error_check']);
                }
                ?>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="email" id="email_admin" name="email_admin" class="form-control" placeholder="Nhập email quản trị viên hiện tại" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="password" id="name" name="pass_admin" class="form-control" placeholder="Nhập mật khẩu quản trị viên hiện tại" />
                    </div>
                </div>




                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Xác nhận</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php include('./footer_admin.php') ?>