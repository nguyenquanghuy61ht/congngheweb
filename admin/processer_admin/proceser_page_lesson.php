 <?php
    session_start();
    $target_slide = "../slide_lesson/";
    $target_exercise = "../slide_lesson/";
    $target_file_slide = $target_slide . basename($_FILES["fileToUpload_document"]["name"]);
    $target_file_exercise = $target_exercise . basename($_FILES["fileToUpload_Exercise"]["name"]);
    $slideFileType = strtolower(pathinfo($target_file_slide, PATHINFO_EXTENSION));
    $exerciseFileType = strtolower(pathinfo($target_file_exercise, PATHINFO_EXTENSION));

    if($slideFileType != "pdf"  && $target_file_slide != "../slide_lesson/") {
        $_SESSION['error-fomat1'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là PDF.</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_pdf"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-success1'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }
    if ($exerciseFileType != "pdf"  && $target_file_exercise != "../slide_lesson/") {
        $_SESSION['error-fomat2'] = "<p class='text-danger'>Xin lỗi, chỉ chấp nhận file là PDF.</p>";
    } else {

        if (move_uploaded_file($_FILES["fileToUpload_pdf"]["tmp_name"], $target_file)) {
            $_SESSION['up-file-success2'] = '<p class=" text-success"> ảnh đã được tải lên thành công</p>';
        }
    }

    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $day = $_POST['day'];
    $baigiang = $_POST['name_baigiang'];
    $ghichu=$_POST['note'];
    $monhoc=$_POST['sltmh'];
    if (empty($day) || empty($baigiang)) {
        $_SESSION['check_empty'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Vui lòng nhập tất cả các trường!</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
        header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_lesson.php');
    } else {
        if ($target_file_slide == "../slide_lesson/" || $target_file_exercise == "../slide_lesson/") {
            $_SESSION['file_empty'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Vui lòng nhập file!</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
            header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_lesson.php');
        } else {
            if ($slideFileType != "pdf"  || $exerciseFileType != "pdf") {
                $_SESSION['type_file'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Chỉ chấp nhận file  pdf</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_lesson.php');
            } else {
                $sql_insert = "INSERT INTO baigiang (ngay,ten_bg,slide, bai_tap,ghichu,mamh)
            VALUES (' $day', '$baigiang', '$target_file_slide', '$target_file_exercise','$ghichu',$monhoc);";

                if (mysqli_query($conn, $sql_insert) == TRUE) {
                    $_SESSION['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>Thêm thành công</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>';
                    header('Location:http://localhost:7855/BTL/admin/processer_admin/page_add_lesson.php');
                } else {
                    echo 'chen that bai';
                }
            }
        }
    }


    ?>

