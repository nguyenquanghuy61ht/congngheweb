<?php
    session_start();
    if(!isset($_SESSION['login_ok_gv'])){
        header("Location:http://localhost:7855/BTL/login_first.php");
    }
    
?>