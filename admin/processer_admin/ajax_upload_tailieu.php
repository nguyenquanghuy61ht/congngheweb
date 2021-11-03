 <?php

    $target_dir = "../images/";
    $target_file_img = $target_dir . basename($_FILES["fileToUpload_img"]["name"]);
    $target_file_pdf = $target_dir . basename($_FILES["fileToUpload_pdf"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    $pdfFileType = strtolower(pathinfo($target_file_pdf, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $target_file_img != "../images/") {
        $_SESSION['error-img'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là JPG, JPEG, PNG & GIF .</p>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-img-success'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }
    if ($pdfFileType != "jpg"  && $target_file_pdf != "../images/") {
        $_SESSION['error-pdf'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là pdf .</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-pdf-success'] = '<p class=" text-success"> file được tải lên thành công</p>';
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $name = $_POST['name_tailieu'];
    $mamh = $_POST['slttl'];
    $id1=$_POST['txt_id'];
    if ($target_file_img == "../images/" || $target_file_pdf == "../images/") {
        $_SESSION['empty'] ="Vui lòng chọn file";
    } else {
        if (($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") || $pdfFileType != "pdf") {
              $_SESSION['fomat_img']='chỉ chấp nhận file ảnh và pdf';
        } else {
            $sql_edit_tl = "UPDATE tailieu
            SET  ten_tl ='$name', mamh='$mamh',avatar_tl=' $target_file_img',link_tailieu=' $target_file_pdf';
            WHERE id_tl=$id1;";

            if (mysqli_query($conn, $sql_edit_tl) == TRUE) {
                $sql_select = "select avatar_tl from tailieu where id_tl=$id1";
                $res = mysqli_query($conn, $sql_select);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo $row['avatar_tl'];
                }
            } else {
                echo 'update that bai';
            }
        }
    }


    ?>