<?php include('./header_admin.php') ?>


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
            <table class="table table-bordered mt-3">
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
                    $sql = "SELECT ngay,ten_bg,slide,bai_tap,ghichu,tenmh From baigiang,monhoc where baigiang.mamh=monhoc.mamh  ";
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



<?php include('./footer_admin.php') ?>

