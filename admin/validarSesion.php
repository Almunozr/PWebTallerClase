<?php
    require("../database.php");

    if(!isset($_SESSION['admin']['id']) || !isset($_SESSION['admin']['correo'])){
        $_SESSION['fail'] = "Debe ingresar con sus credenciales para poder acceder a esta vista.";
        header("location: index.php");
    }

?>