<?php
  session_start();
  $target_dir = "../file/";
  $target_file = $target_dir .basename($_FILES["fileToUpload_diem"]["name"]);
  $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  if ($FileType != "csv"  && $FileType != "xlsx" && $target_file != "../file/") {
    $_SESSION['error-fomat'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là csv và xlsx .</p>";
  header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');
  } else {

    if (move_uploaded_file($_FILES["fileToUpload_diem"]["tmp_name"], $target_file)) {
      $_SESSION['up-file-success'] = '<p class=" text-success"> file được tải lên thành công</p>';
    header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');
    }
  }

  $malop = $_POST['sltlop'];
  $mamh = $_POST['sltmh'];
  if ($target_file == "../file/") {
    $_SESSION['empty_file'] = "<p class='text-danger'>vui lòng chọn file.</p>";
  header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');
  } else {
    if($FileType != "csv"  && $FileType != "xlsx" && $target_file != "../file/")
    {
    $_SESSION['error-fomat'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là csv và xlsx .</p>";
    header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');

    }
    else{
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
      die("Không thể kết nối");
    }
    $sql = "INSERT INTO diem(mamh,malop,file_diem)
        VALUES ('$mamh','$malop','$target_file')";
    if (mysqli_query($conn, $sql) == true) {
      $_SESSION['success_diem'] = '<p class=" text-success"> Bạn đã tải lên thành công</p>';
      header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');
    } else {
      echo "Thất bại";
    }
    }
   
  }

