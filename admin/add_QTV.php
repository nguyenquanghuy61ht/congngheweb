<?php
session_start();
if (!isset($_SESSION['login_suc']) ) {
    header("Location:http://localhost:7855/BTL/admin/check_QTV.php");
}

?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $chucvu = $_POST['chucvu'];
    $khoa = $_POST['khoa'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email_gv'];
    $password = $_POST['pass_gv'];
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $sql_insert = "INSERT INTO giaovien(tengv,chucvu,khoa,sdt_gv, email_gv, pass_gv,status_gv) VALUES ('$name','$chucvu','$khoa','$sdt','$email','$pass_hash',1)";
    if (mysqli_query($conn, $sql_insert) == true) {
        $_SESSION['add_suc'] = '<p class="text-success">Thêm thành công</p>';
    } else {
        echo 'that bai';
    }
}
?>

<?php include('./header_admin.php') ?>
<div class="container">
    <div class="row ">
        <div class="col-md-6 m-auto">

            <form class="mx-1 mx-md-4 " method="post" action="">
                <h3 class="text-center">Thêm giáo viên</h3>
                <?php
                if (isset($_SESSION['add_suc'])) {
                    echo $_SESSION['add_suc'];
                    unset($_SESSION['add_suc']);
                }
                ?>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nhập tên quản trị viên mới" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="text" id="chucvu" name="chucvu" class="form-control" placeholder="Chức vụ" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="text" id="khoa" name="khoa" class="form-control" placeholder="khoa" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="tel" id="sdt" name="sdt" class="form-control" placeholder="Số điện thoại" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="email" id="email_gv" name="email_gv" class="form-control" placeholder="Nhập email mới" />
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <input type="password" id="pass_gv" name="pass_gv" class="form-control" placeholder="Nhập mật khẩu mới" />
                    </div>
                </div>




                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="submit" class="btn btn-success btn-lg">Thêm </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('./footer_admin.php') ?>