<?php

require("../database.php");
require("validarSesion.php"); 

if(isset($_POST['save'])){
    $iden = $_POST['identificador'];
    $nom = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen']['name'];
    if (isset($imagen) && $imagen != "") {
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        $temp = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($temp, 'img/'.$imagen);
    }

    $query = "INSERT INTO producto(idProducto,nombre,precio,imagen)
     VALUES($iden,'$nom', $precio,'$imagen')";
    $result = mysqli_query($_SESSION['connection'],$query);
    if (!$result) {
        $_SESSION['mensaje'] = "No se pudo guardar";
        $_SESSION['tipo_mensaje'] = "danger";
        die("Falló consulta.");
    }
    else{
        echo "Conectó";
        $_SESSION['mensaje'] = "Producto guardado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    header("Location: crud.php");
}
