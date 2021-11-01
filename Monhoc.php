
<?php
include "./config/db_conect.php";

//truy vấn cơ sở dữ liệu môn học
$sql = "SELECT avatar_mh, tenmh, bomon,page_link From monhoc";
$result = (mysqli_query($conn, $sql));
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="col-md-3 col-sm-6  mb-3 ">
            <div class="card  card-trantion">
                <img src="<?php echo './' . $row['avatar_mh'] ?>" class=" card-img-top m-auto mt-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['tenmh'] ?></h5>
                    <p class="card-text  m-0"><b>Bộ Môn:</b><?php echo $row['bomon'] ?></p>
                    <p class="card-text">Trường Đại Học Thủy Lợi  </p>
                    <a href="<?php echo $row['page_link'] ?>" class="btn btn-primary">Vào Học</a>
                </div>
            </div>
        </div>


<?php

    }
}

?>