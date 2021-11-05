<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:7855/BTL/assets/css/responsive.css">
    <link rel="stylesheet" href="http://localhost:7855/BTL/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost:7855/BTL/admin/css/delete.css">

    <title>Admin</title>

</head>

<body>
    <div class="warpper mb-5">
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
                                        <a class="nav-link text-dark " aria-current="page" href="http://localhost:7855/BTL/admin/index.php"> Admin</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="http://localhost:7855/BTL/admin/user.php">Quản lý Bài Giảng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-dark" aria-current="page" href="http://localhost:7855/BTL/admin/QLMonHoc.php">Quản lý môn học</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-dark" href="http://localhost:7855/BTL/admin/QLsinhvien.php">Quản lý học sinh</a>
                                    </li>
                                </ul>
                                <form class="d-flex ">
                                    <input class="form-control me-2 rounded-pill" type="search" placeholder="Tài liệu, môn học,..." aria-label="Search">
                                    <button class="btn btn-outline-success rounded-pill bg-light " type="submit" style="margin-right: 19px; background-color:orange;"><i class="fas fa-search "></i></button>

                                </form>
                                <div class="dropdown text-end mr-4 drop-logout">
                                    <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                                    if (!$conn) {
                                        die("Không thể kết nối");
                                    }
                                    $sql = "SELECT tengv from giaovien where email_gv='$_SESSION[login_ok_gv]'";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($res);
                                    ?>
                                    <div href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <a class="text-danger" href=""><?php echo $row['tengv'] ?></a>
                                    </div>

                                    <ul class="dropdown-menu  " style=" min-width: 6rem;" aria-labelledby="dropdownUser1">

                                     
                                        <li><a class="dropdown-item" href="http://localhost:7855/BTL/logout.php">Đăng xuất</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>