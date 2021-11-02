<?php
include('../login_check.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>PHP</title>
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
                                <div class="accordion-body">
                                    Công nghệ web
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
                                <div class="accordion-body">
                                    Chi tiết
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
                <div class="col-md-9">
                    <div class="box-info">
                        <p><a href='../index.php'>Các khóa học</a> ></p>
                        <?php
                        include('../config/db_conect.php');
                        $sql_info_sub = "SELECT * from monhoc where mamh=14";
                        $res = mysqli_query($conn, $sql_info_sub);
                        $row = mysqli_fetch_assoc($res);
                        ?>
                        <h1 style="color: #8DA1AD;"><?php echo $row['tenmh'] ?></h1>
                        <p><b>Mã môn:</b> CSE_<?php echo $row['mamh']?></p>

                        <p><b>Thời lượng:</b> <?php echo $row['thoiluong'] ?></p>

                        <p class="m-0"><b>Giáo trình:</b></p>
                        <p class="m-0" style="text-indent: 20px;">C++ toàn tập (Phạm Văn Tùng dịch), NXB Khoa học tự nhiên và công nghệ, 2013</p>
                        <p class="m-0"><b> Tài liệu tham khảo:</b></p>
                        <p class="m-0" style="text-indent: 20px;"><a href='https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxhZ3Vjb245MTB8Z3g6NDkzZWUzNWI2YTkyMDUxYg'>PHP 7 Program Bluepriints</a></p>
                        <p class="m-0" style="text-indent: 20px;"> <a href='https://drive.google.com/drive/folders/11eKzSctUiiVsDk9BmevL-3XyyJoNoGlP'>link google dirve chứa ajax , javascript</a></p>
                        <p class="m-0" style="text-indent: 20px;"> <a href='https://drive.google.com/drive/folders/1CxIhO99G_KptEEetBxhJiE1-GRv2iDHG'>link google drive chứa php,css,javascript</a></p>


                    </div><br>
                    <div class="table-subject">
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

                                $sql = "SELECT * From baigiang where mamh=14";
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


                </div>
            </div>
        </div>
    </div>
    <?php include "../partials/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/myscript.js"></script>
    <script type="text/javascript" src="assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>