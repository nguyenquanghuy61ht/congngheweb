<!DOCTYPE html>
<html lang="en">
<?php
    session_start()
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="page_lesson.css">
</head>

<body>
    <div class="contener-fluid">
        <div class="contener">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light  ">

                        <a class="navbar-brand" href="#">Thêm </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </nav>


                </div>
            </div>
        </div>

    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <form id="form_update" method="POST" action="proceser_page_lesson.php" enctype="multipart/form-data">
                    <div class="form-group row mb-3">
                        <div class="col-sm-9 img-fluid box ">

                            <?php
                            if (isset($_SESSION['check_empty'])) {
                                echo  $_SESSION['check_empty'];
                                unset($_SESSION['check_empty']);
                            }
                            if (isset($_SESSION['file_empty'])) {
                                echo  $_SESSION['file_empty'];
                                unset($_SESSION['file_empty']);
                            }
                            if (isset($_SESSION['type_file'])) {
                                echo  $_SESSION['type_file'];
                                unset($_SESSION['type_file']);
                            }
                            if (isset($_SESSION['success'])) {
                                echo   $_SESSION['success'];
                                unset($_SESSION['success']);
                            }

                            ?>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" id="day" name="day">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tên bài giảng</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="name_baigiang" name="name_baigiang">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tải tài liệu buổi học</label>
                        <div class="col-sm-7 img-fluid box ">
                            <div class="mt-3">
                                <input id='empty_res' class="form-control" type="file" id="fileToUpload_document" name="fileToUpload_document">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label"> Bài tập</label>
                        <div class="col-sm-7">
                            <div class="mt-3">
                                <input id='empty_res' class="form-control" type="file" id="fileToUpload_Exercise" name="fileToUpload_Exercise">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">ghi chú</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control " id="note" name="note">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Môn học</label>
                        <div class="col-sm-3">
                            <select name="sltmh" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <?php

                                $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                                if (!$conn) {
                                    die("Không thể kết nối");
                                }
                                $sql_monhoc = 'SELECT tenmh,mamh from monhoc;';
                                $result = mysqli_query($conn, $sql_monhoc);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        echo "<option value=" . $row['mamh'] . ">" . $row['tenmh'] . "</option>";
                                    }
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </form>
                <div id="succ"></div>
                <div id="err"></div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>