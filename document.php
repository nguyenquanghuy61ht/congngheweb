<?php
include('login_check.php')
?>
<h3 class="mb-3 text-primary">Tài Liệu Tham Khảo </h3>
<div class="col-md-12 border-bottom mb-3">
    <ol class="list-group">
        <?php
        include "./config/db_conect.php";
        $sql_monhoc = 'SELECT avatar_tl,ten_tl,link_tailieu from tailieu';
        $result = mysqli_query($conn, $sql_monhoc);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="d-flex">
                        <img class="img-thumbnail" style="margin-right:7px" width=70px height=100px src="<?php echo 'admin/' . substr($row['avatar_tl'], 3) ?>" alt="">
                        <b class="m-auto "><?php echo $row['ten_tl'] ?> </b>
                    </div>
                    <a href="<?php echo 'admin/' . substr($row['link_tailieu'], 3) ?>" class="badge bg-success ">Tải Xuống</a>
                </li>
        <?php
            }
        }
        ?>

    </ol>


</div>