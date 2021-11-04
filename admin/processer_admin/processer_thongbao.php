<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $mes=$_POST['messenger'];
        $link=$_POST['url'];
        $mamh=$_POST['sltmh'];
        if(empty($mes)){
            $_SESSION['emty_mes']="<p class='text-danger'>vui lòng nhập thông báo</p>";
        header('Location:http://localhost:7855/BTL/admin/processer_admin/page_noti.php');
        }
        else{
        $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
        if (!$conn) {
            die("Không thể kết nối");
        }
        $sql_insert= "INSERT INTO thongbao(noi_dung,mamh,link)
        VALUES ('$mes', '$mamh', '$link')";
        if(mysqli_query($conn,$sql_insert)==true)
        {
            $_SESSION['succ'] = "<p class='text-success'>Tải lên thành công</p>";
            header('Location:http://localhost:7855/BTL/admin/processer_admin/page_noti.php');
        }
        else{
            $_SESSION['err'] = "<p class='text-danger'>Tải lên thất bại</p>";
            header('Location:http://localhost:7855/BTL/admin/processer_admin/page_noti.php');
        }
        }
    }

?>