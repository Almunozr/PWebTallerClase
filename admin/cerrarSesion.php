<?php
    session_start();
    if(isset($_SESSION['admin']['id']) && isset($_SESSION['admin']['correo'])){
        unset($_SESSION['admin']['id']);
        unset($_SESSION['admin']['correo']);
        session_destroy();
    }
    header("Location: index.php");
?>