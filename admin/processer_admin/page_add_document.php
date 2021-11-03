<?php include('../header_admin.php') ?>
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form_update" method="POST" action="proceser_add_document.php" enctype="multipart/form-data">
                <div class="form-group row mb-3">
                    <div class="col-sm-7 img-fluid box ">

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

                    <label for="inputPassword3" class="col-sm-2 col-form-label"> Ảnh tài liệu</label>
                    <div class="col-sm-5 img-fluid box ">
                        <div class="mt-3">
                            <input id='empty_res' class="form-control" type="file" id="fileToUpload_img" name="fileToUpload_img">

                        </div>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tên tài liệu </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="txt_name" name="txt_name">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">file tài liệu</label>
                    <div class="col-sm-5 img-fluid box ">
                        <div class="mt-3">
                            <input id='empty_res' class="form-control" type="file" id="fileToUpload_pdf" name="fileToUpload_pdf">
                        </div>
                    </div>
                </div>


                <div class="form-group row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Môn học</label>
                    <div class="col-sm-3">
                        <select name="slt_tailieu" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                        <button type="submit" name="submit" class="btn btn-primary">Thêm tài liệu</button>
                    </div>
                </div>
            </form>

            <div id="succ"></div>
            <div id="err"></div>
        </div>
    </div>
</div>


<?php include('../footer_admin.php') ?>
    