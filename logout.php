<?php 
    session_start();
    if(isset($_SESSION['login_ok'])){
        unset($_SESSION['login_ok']);
        header("Location:http://localhost:7855/BTL/login_first.php");
    }
    if(isset($_SESSION['login_ok_gv'])){
        unset($_SESSION['login_ok_gv']);
        header("Location:http://localhost:7855/BTL/login_first.php");
    }

?>