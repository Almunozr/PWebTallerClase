<?php
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $base_datos = "catalogo";

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Crear conexión a la base de datos
    $_SESSION['connection'] = mysqli_connect($host, $usuario, $clave, $base_datos);
    if (!$_SESSION['connection']) {
        die("Conexión fallida: " . mysqli_connect_error());
    } else {
        // echo "Conexión exitosa";
    }
?>