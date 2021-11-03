<?php
include('../login_check.php')
?>
<?php
include('../config/db_conect.php');
$sql_masv = "SELECT masv from sinhvien where email_sv='$_SESSION[login_ok]'";
$res = mysqli_query($conn, $sql_masv);
$row = mysqli_fetch_assoc($res);
$masv = $row['masv'];
if (isset($_POST['submit'])) {
    $content = $_POST['content'];
    if (empty($content)) {
        $_SESSION['rong_com'] = '<p class="text-danger">chưa nhập nôi dung</p>';
    } else {
        $sql_comment = "INSERT INTO comment (content,masv,mamh)
            VALUES ('$content', $masv,16)";
        if (mysqli_query($conn, $sql_comment) == true) {
            $_SESSION['com_succ'] = '<p class="text-success">Thành công</p>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>C++</title>
</head>

<body>
    <?php
    include("header_lesson.php")
    ?>
    <div class="wrapper mt-4 ">
        <div class="container  bg-light pt-3">
            <div class="row ">
                <div class="col-md-3">
                    <h5 style="color: #8DA1AD;">Home</h5>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Môn học
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body1">
                                    <a href="#">Ngôn ngữ lập trình K61</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Thông báo

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body accordion-body1">
                                    <a href="#">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Điểm quá trình
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    61HT
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 position-relative">
                    <div class="box-info show">
                        <p><a href='../index.php'>Các khóa học</a> ></p>
                        <?php

                        $sql_info_sub = "SELECT * from monhoc where mamh=16";
                        $res = mysqli_query($conn, $sql_info_sub);
                        $row = mysqli_fetch_assoc($res);
                        ?>
                        <h1 style="color: #8DA1AD;"><?php echo $row['tenmh'] ?></h1>
                        <p><b>Mã môn:</b>CSE_<?php echo $row['mamh'] ?></p>

                        <p><b>Thời lượng:</b> <?php echo $row['thoiluong'] ?></p>

                        <p class="m-0"><b>Giáo trình:</b></p>
                        <p class="m-0" style="text-indent: 20px;">C++ toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013</p>
                        <p class="m-0"><b> Tài liệu tham khảo:</b></p>
                        <p class="m-0" style="text-indent: 20px;"><a href='https://tailieu.vn/doc/tai-lieu-ve-he-dieu-hanh-886815.html'>tài liệu hệ điều hành </a></p>
                        <p class="m-0" style="text-indent: 20px;"> <a href='https://tailieu.vn/doc/tai-lieu-ve-he-dieu-hanh-886815.html'>tài liệu hệ điều hành </a></p>
                        <p class="m-0" style="text-indent: 20px;"><a href='https://tailieu.vn/doc/tai-lieu-ve-he-dieu-hanh-886815.html'>tài liệu hệ điều hành </a></p>


                    </div><br>
                    <div class="table-subject show">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Ngày</th>
                                    <th scope="col">Tên chương </th>
                                    <th scope="col">Bài giảng</th>
                                    <th scope="col">Bài tập</th>
                                    <th scope="col">Ghi chú</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $sql = "SELECT * From baigiang where mamh=16";
                                $result = (mysqli_query($conn, $sql));
                                // Bước 3 trả về két quả 
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;

                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['ngay'];  ?></td>
                                            <td><?php echo $row['ten_bg'];   ?></td>
                                            <td><a href="<?php echo '../admin/' . substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                            <td><a href="<?php echo '../admin/' . substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
                                            <td><?php echo $row['ghichu'];  ?></td>

                                        </tr>
                                <?php

                                        $i++;
                                    }
                                }

                                ?>

                            </tbody>
                        </table>

                    </div>

                    <div class=" position-absolute top-0 start-0 end-0 bottom-0 about-page hide mb-4">
                        <h3 style="margin-left:10% ;color:#8DA1AD">Thông báo</h3>
                        <div class="rounded-3  border border-info mb-3 " style="padding:4px 6px ; width: 50%;margin-left:10%">
                            <p class="m-0">Đây là thông báo</p>
                            <a href="#">
                                <p class="m-0">LINK</p>
                            </a>
                            <p class="m-0">Ngày 22/4/2021</p>
                        </div>
                        <div class="rounded-3  border border-info mb-3 " style="padding:4px 6px ; width: 50%;margin-left:10%">
                            <p class="m-0">Đây là thông báo</p>
                            <a href="#">
                                <p class="m-0">LINK</p>
                            </a>
                            <p class="m-0">Ngày 22/4/2021</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container mt-1 border-top border-dark">
            <div class="row">
                <form action="" method="POST">
                    <div class="col-md-12">
                        <h4>Bình luận</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="content"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div class="co-md-12">
                        <button type="submit" name="submit" class="btn btn-primary">Bình luận</button>
                    </div>
                </form>

            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <h5 class="text-info"><u>Nội dung</u></h5>
                </div>
                <div class="col-md-12">
                    <?php
                    if (isset($_SESSION['rong_com'])) {
                        echo  $_SESSION['rong_com'];
                        unset($_SESSION['rong_com']);
                    }
                    if (isset($_SESSION['com_succ'])) {
                        echo  $_SESSION['com_succ'];
                        unset($_SESSION['com_succ']);
                    }
                    ?>
                </div>
            </div>
            <?php
            $sql_select = "SELECT tensv,content,date_com from comment,sinhvien where mamh=16  and comment.masv=sinhvien.masv ";
            $res = mysqli_query($conn, $sql_select);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {

            ?>
                    <div class="row mt-3 mb-3">
                        <div class="col-md-12">
                            <p class="text-danger"><?php echo $row['tensv'] ?></p>
                        </div>
                        <div class="col-md-4 rounded-3  border shadow mb-3" style="background-color:#E8F1FB;margin-left:3%;word-wrap:break-word">
                            <p class="m-0" style="padding:4px 6px"><?php echo $row['content'] ?></p>
                        </div>
                        <div class="col-md-12" style="margin-left:2%">
                            <p class="m-0"><b>Ngày: <?php echo $row['date_com'] ?></b></p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>


        </div>
    </div>
    <?php include "../partials/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/home.js"></script>
    <script type="text/javascript" src="../assets/js/lesson.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>