<?php include('../header_admin.php') ?>
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
    <?php include('../footer_admin.php') ?>