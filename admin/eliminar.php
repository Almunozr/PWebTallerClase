<?php

require("../database.php");
require("validarSesion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "DELETE FROM producto WHERE idProducto = $id";
    $result = mysqli_query($_SESSION['connection'],$query);
    if (!$result) {
        $_SESSION['mensaje'] = "No se pudo eliminar";
        $_SESSION['tipo_mensaje'] = "danger";
        die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "Producto eliminado";
        $_SESSION['tipo_mensaje'] = "info";
    }
    header("Location: crud.php");
}

?>