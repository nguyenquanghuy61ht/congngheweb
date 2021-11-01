 <div class="col-md-12">
   <h5 class="text-success">Quản lý Sinh viên</h5>
 </div>

 <div class="col-md-12">
   <table class="table table-bordered mt-3 ">
     <thead class="thead-dark ">
       <tr>
         <th scope="col">STT</th>
         <th scope="col">Tên sinh viên</th>
         <th scope="col">Lớp</th>
         <th scope="col">Số điện thoại </th>
         <th scope="col">email</th>
         <th scope="col">Ngày đăng ký</th>
         <th scope="col">Trạng thái</th>
       </tr>
     </thead>
     <tbody>
       <?php
        include("../config/db_conect.php");
        $sql_sv = "SELECT tensv,tenlop,sodt_sv,email_sv,registration_date_sv,status_sv from sinhvien,lop where sinhvien.malop=lop.malop";
        $res = mysqli_query($conn, $sql_sv);
        if (mysqli_num_rows($res) > 0) {
          $i = 1;
          while ($row = mysqli_fetch_assoc($res)) {
        ?>
           <tr>
             <th><?php echo $i++ ?></th>
             <td><?php echo $row['tensv'] ?></td>
             <td><?php echo $row['tenlop'] ?></td>
             <td><?php echo $row['sodt_sv'] ?></td>
             <td><?php echo $row['email_sv'] ?></td>
             <td><?php echo $row['registration_date_sv'] ?></td>
             <td><?php echo $row['status_sv'] ?></td>
           </tr>
       <?php
          }
        }
        ?>
     </tbody>
   </table>
 </div>