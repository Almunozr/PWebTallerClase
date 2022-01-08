<?php require("database.php"); ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Catálogo</title>
	<!-- Añadimos íconos de bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

	<link href="style1.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-primary">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php"><i class="bi bi-pc-display-horizontal"></i> Catálogo</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="estilosNavbar navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="#catalogo_"><i class="bi bi-tags"></i> Catálogo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin/index.php"><i class="bi bi-pencil-square"></i> CRUD</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container" id="catalogo_">
		<?php
			$numeroColumnaActual = 1;
			$consulta = "SELECT * FROM producto";
			$consulta = mysqli_query($_SESSION['connection'], $consulta);
			while($productoActual = mysqli_fetch_array($consulta)){
				if($numeroColumnaActual == 1){
					?>
					<div class="row">
				<?php
				}
				?>
						<div class="col">
							<div class="card">
								<img class="imagenes_catalogo_" src="<?php echo "admin/img/".$productoActual['imagen']; ?>" class="card-img-top" alt="...">
								<div class="card-body border-top">
									<h5 class="card-title"><?php echo $productoActual['nombre']; ?></h5>
									<p class="card-text">Precio: <?php echo $productoActual['precio']; ?></p>
									<a href="#" class="btn btn-success"><i class="bi bi-cart-plus-fill"></i> Agregar al carrito</a>
								</div>
							</div>
						</div>
				<?php
				$numeroColumnaActual += 1;
				if($numeroColumnaActual > 4){
					// Vuelvo a la columna 1
					$numeroColumnaActual = 1
					?>
					<!-- Cierro el div de row -->
					</div>
				<?php
				}
			}
		?>
	</div>

	<footer>
		<div class="footer-top bg-primary">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 mx-auto ">
						<br>
						<h4><i class="bi bi-people"></i> Team:</h4>
						<br>
						<p><i class="bi bi-person-check"></i> Paula Andrea Taborda Montes</p>
						<p><i class="bi bi-person-check"></i> Alex Orlando Muñoz</p>
						<p><i class="bi bi-person-check"></i> Julián Pachón Castrillón</p>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bot">
			<div class="container text-center">
				<p>Programación con tecnologías web - 2021-2</p>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		-->
</body>

</html>