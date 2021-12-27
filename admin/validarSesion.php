<?php
    require("../database.php");
    // Si ya hay una sesión y el usuario quiere volver al index, no lo dejo y lo redirijo al crud
    // if(basename($_SERVER["REQUEST_URI"], ".php") == "index"){
    //     if(isset($_SESSION['admin']['id']) && isset($_SESSION['admin']['correo'])){
    //         header("location: crud.php");
    //     }
    // }

    if(!isset($_SESSION['admin']['id']) || !isset($_SESSION['admin']['correo'])){
        $_SESSION['fail'] = "Debe ingresar con sus credenciales para poder acceder a esta vista.";
        header("location: index.php");
    }

?>