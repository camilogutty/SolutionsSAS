<?php

if(!empty($_POST)){
	if(isset($_POST["trayecto"]) &&isset($_POST["estado"]) &&isset($_POST["vehiculo"]) &&isset($_POST["vigas"]) &&isset($_POST["arena"]) &&isset($_POST["cemento"]) &&isset($_POST["ladrillo"])){
		
			include "conexion.php";
			$con=new Conectar();
			$conexion = $con->conexion();

			$totalCarga = $_POST["vigas"] + $_POST["arena"] + $_POST["cemento"] + $_POST["ladrillo"];
			
			$sql = $conexion->prepare("SELECT * FROM rutas WHERE idVehiculo = :vehiculo AND idEstado = 2");

			$sql->bindParam(':vehiculo', $vehiculo);

			$vehiculo = $_POST["vehiculo"];

			$sql->execute();
			

			$sql2 = $conexion->prepare("SELECT capacidad, fechaVenSoat, fechaVenTecno FROM vehiculos WHERE idVehiculo = :vehiculo");
			$sql2->bindParam(':vehiculo', $idVehiculo);
			$idVehiculo = $_POST["vehiculo"];
			$sql2->execute();
			$fila = $sql2-> fetch();
			$capacidad = $fila["capacidad"];
			$fechaSoat = $fila["fechaVenSoat"];
			$fechaTecno = $fila["fechaVenTecno"];

			$fechaactual = Date("Y-m-d");
		
			if($totalCarga > $capacidad){
				print "<script>alert(\"La carga es mayor a la permitida por el Vehículo.\");window.location='../rutas.php';</script>";
			}else if($fechaSoat < $fechaactual){
				print "<script>alert(\"El Vehículo tiene vencido el SOAT.\");window.location='../rutas.php';</script>";
			}else if ($fechaTecno < $fechaactual){
				print "<script>alert(\"El Vehículo tiene vencida la revisión tecnicomecánica.\");window.location='../rutas.php';</script>";
			}else{
				$sentenciasql = $conexion->prepare("UPDATE rutas SET idTrayecto=:trayecto, idEstado=:estado, idVehiculo=:vehiculo, VigasAcero=:acero, Arena=:arena, Cemento=:cemento, Ladrillo =:ladrillo where idRuta =:id");

			$sentenciasql->bindParam(':trayecto', $trayecto);
			$sentenciasql->bindParam(':estado', $estado);
			$sentenciasql->bindParam(':vehiculo', $vehiculo);
			$sentenciasql->bindParam(':acero', $acero);
			$sentenciasql->bindParam(':arena', $arena);
			$sentenciasql->bindParam(':cemento', $cemento);
			$sentenciasql->bindParam(':ladrillo', $ladrillo);
			$sentenciasql->bindParam(':id', $id);

			$trayecto = $_POST["trayecto"];
			$estado = $_POST["estado"];
			$vehiculo = $_POST["vehiculo"];
			$acero = $_POST["vigas"];
			$arena = $_POST["arena"];
			$cemento = $_POST["cemento"];
			$ladrillo = $_POST["ladrillo"];
			$id = $_POST["id"];

			$sentenciasql->execute();	



			
			if($sentenciasql!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../rutas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../rutas.php';</script>";

			}
			}
			
			
		
	}
}