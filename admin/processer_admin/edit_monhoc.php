<?php include('../login_check_2.php') ?>
<?php include("../header_admin.php") ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form id="form_update" method="POST" enctype="multipart/form-data">
                <?php
                $id = $_GET['mamh'];
                $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
                if (!$conn) {
                    die("Không thể kết nối");
                }
                $sql = "SELECT * from monhoc where mamh=$id ";
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                ?>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Thay đổi ảnh </label>
                            <div class="col-sm-5 img-fluid box ">

                                <img id="preview" src="<?php echo  $row['avatar_mh'] ?>" alt="avatar" style='width:100px' class="img-thumbnail">
                                <div class="mt-3">
                                    <input id='empty_res' class="form-control" type="file" id="fileToUpload" name="fileToUpload">

                                </div>

                            </div>

                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tên môn học</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputEmail3" name="txtname" value="<?php echo $row['tenmh'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label"> Thời lượng</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword3" name="txtthoiluong" value="<?php echo $row['thoiluong'] ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label"> Giáo trình</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="inputPassword3" name="txt_giaotrinh" value="<?php echo $row['giaotrinh'] ?>">
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