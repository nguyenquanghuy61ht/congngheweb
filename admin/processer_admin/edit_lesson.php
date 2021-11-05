<?php include('../login_check_2.php') ?>
<?php include("../header_admin.php") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form_update_lesson" method="POST" enctype="multipart/form-data">
                <?php
                $id = $_GET['id_baigiang'];
                $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                if (!$conn) {
                    die("Không thể kết nối");
                };
                $sql = "SELECT * from baigiang  where id_baigiang=$id ";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <div class="suc"></div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Ngày</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" id="inputEmail3" name="day" value="<?php echo $row['ngay'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên bài giảng</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputEmail3" name="name_bg" value="<?php echo $row['ten_bg'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Slide</label>
                            <div class="col-sm-5 img-fluid box ">
                                <div class="mt-3">
                                    <input id='empty_res_slide' class="form-control" type="file" name="fileToUpload_slide">
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Bài tập </label>
                            <div class="col-sm-5 img-fluid box ">
                                <div class="mt-3">
                                    <input id='empty_res_bt' class="form-control" type="file" name="fileToUpload_bt">
                                </div>
                            </div>
                        </div>
                        <div class=" form-group row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Ghi chú</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputEmail3" name="ghichu" value="<?php echo $row['ghichu'] ?>">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Môn học</label>
                            <div class="col-sm-3">
                                <select name="sltmh" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <?php

                                    $sql = "SELECT * from monhoc";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row1 = mysqli_fetch_assoc($result)) {
                                        if ($row1['mamh'] == $row['mamh']) {
                                            echo "<option value=" . $row1['mamh'] . " selected>" . $row1['tenmh'] . "</option>";
                                        } else {
                                            echo "<option value=" . $row1['mamh'] . " >" . $row1['tenmh'] . "</option>";
                                        }
                                    }


                                    ?>


                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3 d-none">

                            <div class="col-sm-7">
                                <input type="number" class="form-control " id="txt_id" name="txt_id" value="<?php echo $_GET['id_baigiang'] ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                <?php


                    }
                }

                ?>

            </form>

        </div>
    </div>
</div>
<?php include("../footer_admin.php") ?>