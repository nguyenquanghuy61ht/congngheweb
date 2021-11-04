<?php session_start()?>
<?php include('../header_admin.php') 
?>
<div class="container ">
    <div class="row " class="boder boder-primary">
        <div class="col-md-6">
            <form action="processer_thongbao.php" method="POST">
                <div class="form-outline">
                    <h1 class="text-warning m-2">Viết thông báo cho sinh viên</h1>
                    <?php
               
                    if (isset( $_SESSION['emty_mes'])) {
                        echo  $_SESSION['emty_mes'];
                        unset( $_SESSION['emty_mes']);
                    }
                    if (isset($_SESSION['succ'])) {
                        echo $_SESSION['succ'];
                        unset($_SESSION['succ']);
                    }
                    if (isset($_SESSION['err'])) {
                        echo $_SESSION['err'];
                        unset($_SESSION['err']);
                    }

                    ?>
                    <textarea class="form-control" id="textAreaExample2" rows="8" name="messenger"></textarea>
                </div>
                <label for="basic-url">thêm địa chỉ URL</label>
                <div class="input-group mb-3">
                    <input type="url" placeholder="http://www.example.com" class="form-control" id="basic-url" aria-describedby="basic-addon3" name='url'>
                </div>



                <div class="form-group row mb-3">
                    <label for="inputPassword3" class="col-md-2 col-form-label">Môn học</label>
                    <div class="col-md-5">
                        <select name="sltmh" class="form-select  mb-3">
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
                <div class="input-group">

                 <button type="submit" name="submit"  class="btn btn-warning mt-3 ">Thêm thông báo </button>
                </div>

            </form>

        </div>
    </div>
</div>
<?php include('../footer_admin.php') ?>