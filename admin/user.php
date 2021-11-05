<?php include('login_check_2.php') ?>
<?php include('./header_admin.php') ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container position-relative">
    <div class="backgroud__screen ">
        <div class="backgroud__screen-form shadow ">
            <p style="font-weight: 500;">Bạn chắc chắn muốn xóa bài giảng này?</p>
            <div class="backgroud__screen-form-button">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                if (!$conn) {
                    die("Không thể kết nối");
                }
                $sql = "SELECT id_baigiang,ngay,ten_bg,slide,bai_tap,ghichu,tenmh,baigiang.mamh From baigiang,monhoc where baigiang.mamh=monhoc.mamh";
                $result1 = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result1) > 0) {
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                ?>
                        <button class=" hidebt bg-cache">Hủy</button>
                        <a href="processer_admin/processer_delete_baigiang.php?id_baigiang=<?php echo $row1['id_baigiang']; ?>" class="btn_ok hidebt"><button type="button" class="btn btn-danger">Xác nhận</button></a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row" >
        <section class="col-md-12">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Tất cả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">Công nghệ web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">Ngôn ngữ lập trình</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu3">Trí tuệ nhân tạo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu4">Hệ điều hành</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane container active" id="home">
                    <a href="processer_admin/page_add_lesson.php"><button type="button" class="btn btn-primary mt-3 ">Thêm bài giảng</button></a>
                    <table class="table table-bordered mt-3 ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Ngày</th>
                                <th scope="col">Tên chương </th>
                                <th scope="col">Bài giảng</th>
                                <th scope="col">Bài tập</th>
                                <th scope="col">Ghi chú</th>
                                <th scope="col">Môn học</th>
                                <th scope="col">Sửa</th>
                                <th scope="col">Xóa</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include("../config/db_conect.php");
                            $sql = "SELECT id_baigiang,ngay,ten_bg,slide,bai_tap,ghichu,tenmh,baigiang.mamh From baigiang,monhoc where baigiang.mamh=monhoc.mamh  ";
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
                                        <td><a href="<?php echo substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                        <td><a href="<?php echo substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
                                        <td><?php echo $row['ghichu'];  ?></td>
                                        <td><?php echo $row['tenmh'];  ?></td>
                                        <td><a href="processer_admin/edit_lesson.php?id_baigiang=<?php echo $row['id_baigiang'] ?>"><i class="fas fa-edit"></i></a></td>
                                        <td><a class="btn-delete"><i class="far fa-trash-alt text-danger"></i></a></td>

                                    </tr>
                            <?php

                                    $i++;
                                }
                            }

                            ?>

                        </tbody>
                    </table>
                    <a href="processer_admin/page_noti.php"><button type="button" class="btn btn-success" style="margin-top:10%">Viết thông báo</button></a>
                </div>
                <div class="tab-pane container fade" id="menu1">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
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
                                        <td><a href="<?php echo substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                        <td><a href="<?php echo substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
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
                <div class="tab-pane container fade" id="menu2">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
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

                            $sql = "SELECT * From baigiang where mamh=13";
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
                                        <td><a href="<?php echo substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                        <td><a href="<?php echo substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
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
                <div class="tab-pane container fade" id="menu3">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
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

                            $sql = "SELECT * From baigiang where mamh=15";
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
                                        <td><a href="<?php echo substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                        <td><a href="<?php echo substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
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
                <div class="tab-pane container fade" id="menu4">
                    <table class="table table-bordered mt-3">
                        <thead class="thead-dark">
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
                                        <td><a href="<?php echo substr($row['slide'], 3);  ?>" class="text-danger"><?php echo substr($row['slide'], 16);  ?></a></td>
                                        <td><a href="<?php echo substr($row['bai_tap'], 3);   ?>" class="text-danger"><?php echo substr($row['bai_tap'], 16);   ?></a></td>
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
        </section>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include('./footer_admin.php') ?>