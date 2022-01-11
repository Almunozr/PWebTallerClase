<?php
    require("../database.php");
    if(isset($_POST['correo']) && isset($_POST['contra']) && isset($_POST['confirmarContra'])){
        if($_POST['contra'] != $_POST['confirmarContra']){
            $_SESSION['fail'] = "Las contraseñas ingresadas no coinciden";
            header("Location: registrarAdmin.php");
        }else{
            $correo = $_POST['correo'];
            $contra = password_hash($_POST['contra'], PASSWORD_BCRYPT);
            $consulta = "INSERT INTO administrador(correo, password) VALUES ('$correo', '$contra')";
            $consulta = mysqli_query($_SESSION['connection'], $consulta);
            if($consulta){
                $_SESSION['success'] = "El nuevo administrador ha sido registrado satisfactoriamente";
                header("Location: registrarAdmin.php");
            }else{
                $_SESSION['fail'] = "Ha ocurrido un error intentando registrar al administrador";
                header("Location: registrarAdmin.php");
            }
        }
    }
?>