<?php
	require_once("conexion.php");
	$base = Conectar::conexion();
	$numeroPaginas = 3;
	if (isset($_GET["pagina"])) {
		if ($_GET["pagina == 1"]) {
			header("location:index.php");
		}else{
			$pagina = $_GET["pagina"];
		}
	}else{
		$pagina = 1;
	}

	$empezarPagina = ($pagina - 1) * $numeroPaginas;
	$sqlTotal = "select * from personas";
	$resultado = $base->prepare($sqlTotal);
	$resultado -> execute(array());
	$numFilas = $resultado->rowCount();
	$totalPaginas = ceil($numFilas/$numeroPaginas);


?>