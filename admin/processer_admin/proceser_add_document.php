 <?php
    session_start();
    $target_img = "../images/";
    $target_pdf = "../images/";
    $target_file_img = $target_img . basename($_FILES["fileToUpload_img"]["name"]);
    $target_file = $target_pdf . basename($_FILES["fileToUpload_pdf"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    $FilePdfType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $target_file_img != "../images/") {
        $_SESSION['error-fomat'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là JPG, JPEG, PNG & GIF .</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_img"]["tmp_name"], $target_file_img)) {
            $_SESSION['up-file-success'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }
    if($FilePdfType != "pdf"  && $target_file != "../images/") {
        $_SESSION['error-fomat'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là PDF.</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_pdf"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-success'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $txt_tailieu = $_POST['txt_name'];
    $MonHoc = $_POST['slt_tailieu'];
    if(empty($txt_tailieu) || empty($MonHoc)){
        $_SESSION['check_empty'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Vui lòng nhập tất cả các trường!</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
        header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_document.php');
        echo $_SESSION['check_empty'];

    }
    else{
        if ($target_file_img == "../images/" || $target_file == "../images/") {
            $_SESSION['file_empty'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Vui lòng nhập file!</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
            header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_document.php'); 
        } else {
            if (($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") || $FilePdfType != "pdf") {
                $_SESSION['type_file'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Chỉ chấp nhận file ảnh và pdf</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_document.php');  
            } else {
                $sql_insert = "INSERT INTO tailieu (ten_tl,avatar_tl, mamh, link_tailieu)
            VALUES (' $txt_tailieu', '$target_file_img', '$MonHoc', '$target_file');";

                if (mysqli_query($conn, $sql_insert) == TRUE) {
                    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Thêm thành công</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                    header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_document.php');
                } else {
                    echo 'chen that bai';
                }
            }
        }
    }
    

    ?>

