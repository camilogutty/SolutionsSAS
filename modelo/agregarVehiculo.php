<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();

if(!empty($_POST)){
	if(isset($_POST["personaCargo"]) && isset($_POST["capacidad"]) && isset($_POST["fechaSoat"]) && isset($_POST["fechaTecno"])){
			if ($_POST["capacidad"] > 1000) {
				print "<script>alert(\"La capacidad no puede ser mayor a 1000 Kg.\");window.location='../vehiculos.php';</script>";
			}else{
				$sentenciasql = $conexion->prepare("INSERT INTO vehiculos (idPersonaCargo,capacidad,fechaVenSoat,fechaVenTecno) values (:personaCargo, :capacidad, :fechaSoat, :fechaTecno)");

				$sentenciasql->bindParam(':personaCargo', $personaCargo);
				$sentenciasql->bindParam(':capacidad', $capacidad);
				$sentenciasql->bindParam(':fechaSoat', $fechaSoat);
				$sentenciasql->bindParam(':fechaTecno', $fechaTecno);

				$personaCargo = $_POST["personaCargo"];
				$capacidad = $_POST["capacidad"];
				$fechaSoat = $_POST["fechaSoat"];
				$fechaTecno = $_POST["fechaTecno"];

				$sentenciasql->execute();
				if($sentenciasql!=null){
					print "<script>alert(\"Agregado exitosamente.\");window.location='../vehiculos.php';</script>";
				}else{
					print "<script>alert(\"No se pudo agregar.\");window.location='../vehiculos.php';</script>";

				}
			}
	
			
		
	}
}



?>