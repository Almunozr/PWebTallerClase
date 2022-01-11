<!-- Hay que incluirlo para que la sesión funcione -->
<?php

require("../database.php");
require("validarSesion.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "SELECT * FROM producto WHERE idProducto = $id";
    $result = mysqli_query($_SESSION['connection'],$query);
    if (mysqli_num_rows($result)==1) {
        $row= mysqli_fetch_array($result);
        $id = $row['idProducto'];
        $nom = $row['nombre'];
        $precio = $row['precio'];
        $imagen = $row['imagen'];
       
    }
  
}




if(isset($_POST['edit'])){
    $id = $_POST['identificador'];
    $nom = $_POST['nombre'];
    $precio = $_POST['precio'];
    $imagen = $_FILES['imagen']['name'];

	// Si hay una imagen, es decir, el usuario quiere cambiar la imagen del producto actual...
	if (isset($imagen) && $imagen != "") {
		// Subo la imagen
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];
        $temp = $_FILES['imagen']['tmp_name'];
        move_uploaded_file($temp, 'img/'.$imagen);
		// Actualizo la ruta de la imagen y los demás datos
		$query = "UPDATE producto SET idProducto=$id, nombre='$nom', precio=$precio, imagen='$imagen' WHERE idProducto = $id";
    }else{
		// Hago el query sin hacer update a la imagen, es decir, queda la anterior
		$query = "UPDATE producto SET nombre='$nom', precio=$precio WHERE idProducto = $id";
	}

    
    $result = mysqli_query($_SESSION['connection'],$query);
    if (!$result) {
        $_SESSION['mensaje'] = "No se pudo editar";
        $_SESSION['tipo_mensaje'] = "danger";
        //die("Falló consulta.");
    }
    else{
        $_SESSION['mensaje'] = "producto editado";
        $_SESSION['tipo_mensaje'] = "success";
    }
    
    header("Location: crud.php");
}
?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Para iconos -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../style2.css">
	<link rel="stylesheet" href="../style1.css">

	<title>Editar</title>
</head>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="crud.php"><i class="bi bi-pc-display-horizontal"></i> Catálogo - Admin</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="estilosNavbar navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="../index.php"><i class="bi bi-tags"></i> Catálogo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="crud.php"><i class="bi bi-pencil-square"></i> CRUD</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="registrarAdmin.php"><i class="bi bi-pencil-square"></i> Registrar nuevo administrador</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php echo $_SESSION['admin']['correo']; ?>
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="cerrarSesion.php">Cerrar Sesión</a></li>
						</ul>
					</li>
				</ul>

			</div>

		</div>
	</nav>
</header>

<body>
	<div class="container" id="formularioAgregar">
		<h2 class="text-center"><i class="bi bi-pencil-fill"></i> Edita los campos que desees</h2>

		<form class="row g-4" id="formularioOpiniones" action="editar.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
			<div class="col-md-4">
				<label for="validationCustom01" class="form-label">Identificador</label>
				<input type="text" class="form-control" id="validationCustom01" name="identificador" value="<?php echo $id; ?>" placeholder="Ingrese ID aquí" required readonly>
			</div>
			<div class="col-md-8">
				<label for="validationCustom02" class="form-label">Nombre del Producto</label>
				<input type="text" class="form-control" id="validationCustom02" name="nombre" value="<?php echo $nom; ?>"placeholder="Nombre" required>
			</div>

			<div class="col-md-4">
				<label for="validationCustomUsername" class="form-label">Precio</label>
				<input type="number" class="form-control" id="validationCustomUsername" name="precio" value="<?php echo $precio; ?>"placeholder="Su precio aquí" required>
			</div>
			<div class="col-md-8">
				<label for="ArchivoIMG" class="form-label">Archivo de Imagen</label>
				<input type="file" class="form-control" id="ArchivoIMG" name="imagen" required value="<?php echo $imagen; ?>"placeholder="img/mouse.png">
			</div>

			<div class="col-md-12" id="B_Agregar">
				<input type="submit" class="btn btn-success" value="Editar" name="edit"><!--<i class="bi bi-pencil-fill"></i> -->
			</div>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		-->
</body>
<link rel="stylesheet" href="styleFormulario.css">
<link href="style1.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">

</html>