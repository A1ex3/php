<?php
    session_start();
    unset($_SESSION[$dee]);
    session_destroy();
    header('Location:login.php');
?>