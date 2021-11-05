 <?php
    $target_dir = "../slide_lesson/";
    $target_file_slide = $target_dir . basename($_FILES["fileToUpload_slide"]["name"]);
    $target_file_bt = $target_dir . basename($_FILES["fileToUpload_bt"]["name"]);
    $slideFileType = strtolower(pathinfo($target_file_slide, PATHINFO_EXTENSION));
    $btFileType = strtolower(pathinfo($target_file_bt, PATHINFO_EXTENSION));

    if ($slideFileType != "pdf" && $target_file_slide != "../slide_lesson/") {
         $_SESSION['error']="Xin lỗi, chỉ chấp nhận file là PDF .";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload_slide"]["tmp_name"], $target_file_slide)) {
            $_SESSION['success_up_file']= ' file đã được tải lên thành công';
        }
    }
    if ($btFileType != "pdf"  && $target_file_bt != "../slide_lesson/") {
        $_SESSION['erro_bt']= "Xin lỗi, chỉ chấp nhận file là pdf ";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_bt"]["tmp_name"], $target_file_bt)) {
             $_SESSION['success_up']="file được tải lên thành công";
        }
    }

    $ngay = $_POST['day'];
    $name_bg = $_POST['name_bg'];
    $ghichu = $_POST['ghichu'];
    $mamh = $_POST['sltmh'];
    $id = $_POST['txt_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    if ($target_file_slide == "../slide_lesson/" || $target_file_bt == "../slide_lesson/") {
        $_SESSION['empty_input'] = "Vui lòng chọn file";
    } else {
        if ($slideFileType != "pdf"  || $btFileType != "pdf") {
            $_SESSION['fomat_pdf'] = 'chỉ chấp nhận file  pdf';
        } else {
            $sql_update_bg = "UPDATE baigiang
            SET  ngay ='$ngay', ten_bg='$name_bg',slide='$target_file_slide',bai_tap='$target_file_bt',ghichu='$ghichu',mamh='$mamh'
            WHERE id_baigiang=$id;";
            if (mysqli_query($conn, $sql_update_bg) == true) {
               echo '<p class="text-success"> chỉnh sửa thành công</p>';
            } else {
                echo "that bai";
            }
        }
    }


    ?>