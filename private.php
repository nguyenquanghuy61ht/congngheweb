<?php
include('login_check.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Học Mãi Mãi </title>

</head>
<body>
    <?php
    include("./page-subject/header_lesson.php")
    ?>
    <div class="container">
        <div class="row">
        <div class="col-md-12">
   <h5 class="text-success">Thông Tin Cá Nhân Sinh Viên  </h5>
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
        include("./config/db_conect.php");
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
        </div>
    </div>

    <?php include "./partials/footer.php" ?>
</body>
<html>



