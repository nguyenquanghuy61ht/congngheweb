<?php
if(isset($_GET['id_baigiang'])){
    $conn = mysqli_connect('localhost', 'root', '', 'db_btl');
    if (!$conn) {
        die("Không thể kết nối");
    }
    $id=$_GET['id_baigiang'];
    $sql="DELETE FROM baigiang WHERE id_baigiang=$id ;";
    if(mysqli_query($conn,$sql)==TRUE){
            header('Location:http://localhost:7855/BTL/admin/user.php');
    }
    else{
        echo 'that bai';
    }
}
