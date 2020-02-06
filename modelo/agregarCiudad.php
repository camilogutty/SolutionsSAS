<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();

if(!empty($_POST)){
	if(isset($_POST["ciudad"])){
	
			$sentenciasql = $conexion->prepare("INSERT INTO ciudades (ciudad) values (:ciudad)");

			$sentenciasql->bindParam(':ciudad', $ciudad);
			

			$ciudad = $_POST["ciudad"];
		

			$sentenciasql->execute();
			if($sentenciasql!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ciudades.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ciudades.php';</script>";

			}
		
	}
}



?>