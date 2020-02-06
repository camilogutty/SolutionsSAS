<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SOLUTIONS S.A</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>SOLUTIONS SA</h1>
		<div class="row">
			<div class="col">
				<a href="personas.php" class="btn btn-default">PERSONAS</a>
				<a href="ciudades.php" class="btn btn-default">CIUDADES</a>
				<a href="vehiculos.php" class="btn btn-default">VEHÍCULOS</a>
				<a href="rutas.php" class="btn btn-default">RUTAS</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<?php
					require_once("controlador/reporte1-controlador.php");
					require_once("controlador/reporte2-controlador.php");
					require_once("controlador/reporte3-controlador.php");
				?>
			</div>
		</div>

	</div>
	
</body>
</html>