<?php include("../header_admin.php") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form_update_tailieu" method="POST" enctype="multipart/form-data">
                <?php
                $id = $_GET['id_tl'];
                $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                if (!$conn) {
                    die("Không thể kết nối");
                }
                $sql = "SELECT * from tailieu  where id_tl=$id ";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Thay đổi ảnh </label>
                            <div class="col-sm-5 img-fluid box ">

                                <img id="preview1" src="<?php echo  $row['avatar_tl'] ?>" alt="avatar" style='width:100px' class="img-thumbnail">
                                <div class="mt-3">
                                    <input id='empty_res' class="form-control" type="file" id="fileToUpload_img" name="fileToUpload_img">

                                </div>

                            </div>

                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên tài liệu</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputEmail3" name="name_tailieu" value="<?php echo $row['ten_tl'] ?>">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Môn học</label>
                            <div class="col-sm-3">
                                <select name="slttl" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <?php
                                 
                                    $sql = "SELECT * from monhoc";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row1 = mysqli_fetch_assoc($result)) {
                                        if ( $row1['mamh']==$row['mamh'] ) {
                                            echo "<option value=" . $row1['mamh'] . " selected>" . $row1['tenmh'] . "</option>";
                                        } else {
                                            echo "<option value=" . $row1['mamh'] . " >" . $row1['tenmh'] . "</option>";
                                        }
                                    }


                                    ?>


                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">tài liệu </label>
                            <div class="col-sm-5 img-fluid box ">
                                <div class="mt-3">
                                    <input id='empty_res_pdf' class="form-control" type="file" id="fileToUpload_pdf" name="fileToUpload_pdf">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3 d-none">

                            <div class="col-sm-7">
                                <input type="number" class="form-control " id="inputPassword3" name="txt_id" value="<?php echo $_GET['mamh'] ?>">
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
            <div id="succ"></div>
            <div id="err"></div>
        </div>
    </div>
</div>
<?php include("../footer_admin.php") ?>