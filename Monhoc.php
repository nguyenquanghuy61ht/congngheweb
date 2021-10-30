         <?php
            include "./config/db_conect.php";

            //truy vấn cơ sở dữ liệu môn học
            $sql = "SELECT avatar_mh, tenmh, bomon, thoiluong, giaotrinh From monhoc";
            $result = (mysqli_query($conn, $sql));
            if (mysqli_num_rows($result) > 0) {

                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
        ?>
                 <div class="col-md-3 col-sm-6  mb-3 p-2   ">
                     <div class="card  card-trantion  ">
                         <div width="80px" height="100px" class="" ><img class="" src="<?php echo './' . $row['avatar_mh'];  ?>" alt=""></div>
                         <div class="card-body"></div>
                         <h5 class="card-title"><?php echo $row['tenmh'];  ?></h5>
                         <span class="card-text  m-0"><b>Bộ môn:</b>
                             <p><?php echo $row['bomon'];   ?></p>
                         </span>
                         <p class="card-text"><?php echo $row['thoiluong'];  ?></p>
                         <a href="page-subject/LT_php.php" class="btn btn-primary">vào học</a>
                     </div>
                 </div>


         <?php
                    $i++;
                }
            }

        ?>


         <!-- <div class="col-md-3 col-sm-6  mb-3  ">
             <div class="card  card-trantion  ">
                 <img src="https://phanmemcntt.com/wp-content/uploads/2020/08/download-dev-c-5.9.2-moi-nhat.png" class="card-img-top  m-auto mt-3 " alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Ngôn ngữ lập trình</h5>
                     <p class="card-text  m-0"><b>Bộ môn:</b> hệ thống thông tin. </p>
                     <p class="card-text">Trường đại học thủy lợi </p>
                     <a href="page-subject/NGLT.php" class="btn btn-primary">Vào học</a>
                 </div>
             </div>
         </div>


         <div class="col-md-3 col-sm-6  mb-3 ">
             <div class="card  card-trantion">
                 <img src="https://v1study.com/public/images/article/1547524099_php-laravel.png" class="card-img-top m-auto mt-3" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Công nghệ web</h5>
                     <p class="card-text  m-0"><b>Bộ môn:</b> hệ thống thông tin.</p>
                     <p class="card-text">Trường đại học thủy lợi </p>
                     <a href="page-subject/LT_php.php" class="btn btn-primary">vào học</a>
                 </div>
             </div>
         </div>
         <div class="col-md-3 col-sm-6  mb-3 ">
             <div class="card  card-trantion">
                 <img src="https://cinnamon.is/en/wp-content/themes/Cinnamon-2017-en/images/ai.png" style="padding-top:38px" class="card-img-top card-img-top m-auto   " alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Trí tuệ nhân tạo</h5>
                     <p class="card-text m-0"><b>Bộ môn:</b> Hệ thống thông tin.</p>
                     <p class="card-text">Trường đại học thủy lợi </p>
                     <a href="page-subject/Ai.php" class="btn btn-primary">Vào học</a>
                 </div>
             </div>
         </div>
         <div class="col-md-3 col-sm-6  mb-3 ">
             <div class="card  card-trantion">
                 <img src="https://cinnamon.is/en/wp-content/themes/Cinnamon-2017-en/images/ai.png" style="padding-top:38px" class="card-img-top card-img-top m-auto" alt="...">
                 <div class="card-body">
                     <h5 class="card-title">Trí tuệ nhân tạo</h5>
                     <p class="card-text m-0"><b>Bộ môn:</b> Hệ thống thông tin.</p>
                     <p class="card-text">Trường đại học thủy lợi </p>
                     <a href="page-subject/Ai.php" class="btn btn-primary">Vào học</a>
                 </div>
             </div>
         </div> -->