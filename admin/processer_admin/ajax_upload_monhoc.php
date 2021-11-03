 <?php

    $string = '';
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $target_file != "../images/") {
        $_SESSION['error-fomat'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là JPG, JPEG, PNG & GIF .</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-success'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $name = $_POST['txtname'];
    $thoiluong = $_POST['txtthoiluong'];
    $giaotrinh = $_POST['txt_giaotrinh'];
    $id = $_POST['txt_id'];
    if ($target_file == "../images/" || ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")) {
        $sql_edit = "UPDATE monhoc
        SET tenmh ='$name' , thoiluong ='$thoiluong', giaotrinh='$giaotrinh'
        WHERE mamh=$id;";
    } else {
        $sql_edit = "UPDATE monhoc
       SET tenmh ='$name' , thoiluong ='$thoiluong', giaotrinh='$giaotrinh',avatar_mh='$target_file'
        WHERE mamh=$id;";
    }
    if (mysqli_query($conn, $sql_edit) == TRUE) {
        $sql_select = "select avatar_mh from monhoc where mamh=$id";
        $res = mysqli_query($conn, $sql_select);
        while ($row = mysqli_fetch_assoc($res)) {
            echo $row['avatar_mh'];
        }
    } else {
        echo 'That bai';
    }






    ?>