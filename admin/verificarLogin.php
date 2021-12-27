<?php
    // Hago la conexión con la base de datos
    require("../database.php");
    // echo password_hash($_POST['contra'],  PASSWORD_BCRYPT);
    if(isset($_POST['correo']) && isset($_POST['contra'])){
        $correo = $_POST['correo'];
        $contra = $_POST['contra'];

        $usuarioBD = "SELECT * FROM administrador WHERE administrador.correo = '$correo'";
        $consulta = mysqli_query($_SESSION['connection'], $usuarioBD);
        if($registroExtraido = mysqli_fetch_array($consulta)){
            //Si la contraseña es igual a la extraída desde la base de datos
            if (password_verify($contra, $registroExtraido['password'])) {
                $_SESSION['admin']['id'] = $registroExtraido['id'];	    
                $_SESSION['admin']['correo'] = $registroExtraido['correo'];
                header("Location: crud.php");
            }else{
                $_SESSION['fail'] = "Credenciales incorrectas";
                header("Location: index.php");	
            }
        }
    }
    
?>