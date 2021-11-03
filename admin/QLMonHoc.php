<?php include('./header_admin.php') ?>





<section class="container">
  <div class="col-md-6 mb-4">
    <h5 class="text-success mb-4">Tải lên file điểm </h5>
    <div class="  bg-light rounded p-1">
      <input type="file" class="custom-file-input" id="inputGroupFile01">
      <label class="custom-file-label" for="inputGroupFile01">Nhập File Excel </label>
    </div>
  </div>

  <div class="col-md-12">
    <h5 class="text-success">Quản lý môn học</h5>
    <table class="table table-success table-hover mt-3">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Tên môn học</th>
          <th scope="col">Bộ môn</th>
          <th scope="col">Thời lượng</th>
          <th scope="col">Giáo trình</th>
          <th scope="col">sửa</th>
          <th scope="col">xóa</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include("../config/db_conect.php");
        $sql1 = "SELECT mamh,avatar_mh, tenmh, bomon, thoiluong, giaotrinh From monhoc";
        $result = (mysqli_query($conn, $sql1));
        // Bước 3 trả về két quả 
        if (mysqli_num_rows($result) > 0) {

          $i = 1;
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><img class="img-thumbnail" width="50px" height="80px" src="<?php echo '../' . $row['avatar_mh'];  ?>" alt=""></td>
              <td><?php echo $row['tenmh'];  ?></td>
              <td><?php echo $row['bomon'];   ?></td>
              <td><?php echo $row['thoiluong'];  ?></td>
              <td><?php echo $row['giaotrinh'];   ?></td>
              <td><a href="../admin/processer_admin/edit_monhoc.php?mamh=<?php echo $row['mamh']; ?>"><i class="fas fa-edit"></i></a></td>
              <td><a href="#" class="btn-monhoc"><i class="far fa-trash-alt text-danger"></i></a></td>
            </tr>
        <?php

            $i++;
          }
        }

        ?>
      </tbody>
    </table>
  </div>
  <div class="col-md-12">
    <h5 class="text-success mt-5">Tài liệu tham khảo</h5>
  </div>
  <div class="col-md-12">
    <a href="processer_admin/page_add_document.php"><button type="button" class="btn btn-primary mt-3 ">Thêm tài liệu</button></a>
  </div>

  </div>
  <div class="col-md-12">
    <table class="table table-success table-hover mt-3">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Ảnh</th>
          <th scope="col">Tên tài liệu</th>
          <th scope="col">Môn học</th>
          <th scope="col">tài liệu pdf</th>
          <th scope="col">sửa</th>
          <th scope="col">xóa</th>

        </tr>
      </thead>
      <tbody>
        <?php
        include('../config/db_conect.php');
        $sql = "select id_tl,avatar_tl,ten_tl,tenmh,link_tailieu from tailieu tl,monhoc mh where tl.mamh=mh.mamh";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $i = 1;
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <th scope="row"> <?php echo $i; ?></th>
              <td class="img-fluid">
                <img style="width: 70px;height:60px" src="<?php echo 'admin/' . $row['avatar_tl'] ?>" alt="img">
              </td>
              <td> <?php echo $row['ten_tl'] ?> </td>
              <td> <?php echo $row['tenmh'] ?> </td>
              <td> <?php echo 'admin/' . $row['link_tailieu'] ?> </td>
              <td><a href="../admin/processer_admin/edit_tailieu.php?id_tl=<?php echo $row['id_tl']; ?>"><i class="fas fa-edit"></i></a></td>
              <td><a href="#" class="btn-tailieu"><i class="far fa-trash-alt text-danger"></i></a></td>
            </tr>
        <?php
            $i++;
          }
        }

        ?>

      </tbody>
    </table>
  </div>
</section>




<?php include('./footer_admin.php') ?>