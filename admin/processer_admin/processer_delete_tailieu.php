<?php
    if(isset($_GET['id_tl'])){
        $id=$_GET['id_tl'];
        $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
        if (!$conn) {
            die("Không thể kết nối");
        }
        $sql_delete= "DELETE FROM tailieu WHERE id_tl='$id'";
        mysqli_query($conn,$sql_delete);
            header('Location:http://localhost:7855/BTL/admin/QLMonHoc.php');
    }
?>