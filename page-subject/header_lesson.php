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
                                    <a class="nav-link text-dark" href="../aboutus.php">Về Chúng Tôi</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="../contact.php">Liên hệ</a>
                                </li>

                                <li class="nav-item  nav-logout1">
                                    <a class="nav-link text-dark" href="../logout.php" tabindex="-1">Đăng Xuất</a>
                                </li>
                            </ul>
                            <form class="d-flex ">
                                <input class="form-control me-2 rounded-pill" type="search" placeholder="Tài liệu, môn học,..." aria-label="Search">
                                <button class="btn btn-outline-success rounded-pill bg-light " type="submit" style="margin-right: 19px; background-color:orange;"><i class="fas fa-search "></i></button>

                            </form>
                            <div class="dropdown text-end mr-4 drop-logout">
                                <?php
                                include("../config/db_conect.php");
                                $sql = "SELECT tensv from sinhvien where email_sv='$_SESSION[login_ok]'";
                                $res = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($res);
                                ?>
                                <div href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <a class="text-danger" href=""><?php echo $row['tensv'] ?></a>
                                </div>
                                <ul class="dropdown-menu  " style=" min-width: 6rem;" aria-labelledby="dropdownUser1">

                                    <li><a class="dropdown-item" href="../acout_sv.php">Tài khoản</a></li>
                                    <li><a class="dropdown-item" href="../change_pass_sv.php">Đổi mật khẩu</a></li>


                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../logout.php">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>