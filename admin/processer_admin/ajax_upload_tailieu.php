 <?php
    $target_dir = "../images/";
    $target_file_img = $target_dir . basename($_FILES["fileToUpload_img"]["name"]);
    $target_file_pdf = $target_dir . basename($_FILES["fileToUpload_pdf"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    $pdfFileType = strtolower(pathinfo($target_file_pdf, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $target_file_img != "../images/") {
        $_SESSION['error-img'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là JPG, JPEG, PNG & GIF .</p>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload_img"]["tmp_name"], $target_file_img)) {
            $_SESSION['up-file-img-success'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }
    if ($pdfFileType != "pdf"  && $target_file_pdf != "../images/") {
        $_SESSION['error-pdf'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là pdf .</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_pdf"]["tmp_name"], $target_file_pdf)) {
            $_SESSION['up-file-pdf-success'] = '<p class=" text-success"> file được tải lên thành công</p>';
        }
    }

    $name = $_POST['name_tailieu'];
    $mamh = $_POST['slttl'];
    $id = $_POST['txt_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    if ($target_file_img == "../images/" || $target_file_pdf == "../images/") {
        $_SESSION['empty'] = "Vui lòng chọn file";
    } else {
        if (($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") || $pdfFileType != "pdf") {
            $_SESSION['fomat_img'] = 'chỉ chấp nhận file ảnh và pdf';
        } else {
            $sql_update_tl = "UPDATE tailieu
            SET  ten_tl ='$name', avatar_tl='$target_file_img',mamh='$mamh',link_tailieu='$target_file_pdf'
            WHERE id_tl=$id;";
            if(mysqli_query($conn, $sql_update_tl)==true)
            {
                $sql_select="SELECT avatar_tl from tailieu where id_tl=$id";
                $res = mysqli_query($conn, $sql_select);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo $row['avatar_tl'];
                }

            }
            else {
                echo "that bai";
            }
           
        }
    }


    ?>