<?php
if(!empty($_POST)){
	if(isset($_POST["personaCargo"]) &&isset($_POST["capacidad"]) &&isset($_POST["fechaSoat"]) &&isset($_POST["fechaTecno"])){
		
			include "conexion.php";
			$con=new Conectar();
			$conexion = $con->conexion();
			if ($_POST["capacidad"] > 1000) {
				print "<script>alert(\"La capacidad no puede ser mayor a 1000 Kg.\");window.location='../vehiculos.php';</script>";
			}else{
				$sentenciasql = $conexion->prepare("UPDATE vehiculos SET idPersonaCargo=:personaCargo, capacidad=:capacidad, fechaVenSoat=:fechaSoat, fechaVenTecno=:fechaTecno where idVehiculo =:id");

			$sentenciasql->bindParam(':personaCargo', $nombre);
			$sentenciasql->bindParam(':capacidad', $apellidos);
			$sentenciasql->bindParam(':fechaSoat', $tipoDoc);
			$sentenciasql->bindParam(':fechaTecno', $identif);
			$sentenciasql->bindParam(':id', $id);

			$nombre = $_POST["personaCargo"];
			$apellidos = $_POST["capacidad"];
			$tipoDoc = $_POST["fechaSoat"];
			$identif = $_POST["fechaTecno"];
			$id = $_POST["id"];

			$sentenciasql->execute();	



			
			if($sentenciasql!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../vehiculos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../vehiculos.php';</script>";

			}
			}
			
		
	}
}



?>