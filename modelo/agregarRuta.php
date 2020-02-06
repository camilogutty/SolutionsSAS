<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();

if(!empty($_POST)){
	if(isset($_POST["trayecto"]) && isset($_POST["estado"]) && isset($_POST["idVehiculo"]) && isset($_POST["acero"]) &&isset($_POST["arena"]) && isset($_POST["cemento"]) &&isset($_POST["ladrillo"])){

			$totalCarga = $_POST["acero"] + $_POST["arena"] + $_POST["cemento"] + $_POST["ladrillo"];
			
			$sql = $conexion->prepare("SELECT * FROM rutas WHERE idVehiculo = :vehiculo AND idEstado = 2");

			$sql->bindParam(':vehiculo', $vehiculo);

			$vehiculo = $_POST["idVehiculo"];

			$sql->execute();
			

			$sql2 = $conexion->prepare("SELECT capacidad, fechaVenSoat, fechaVenTecno FROM vehiculos WHERE idVehiculo = :vehiculo");
			$sql2->bindParam(':vehiculo', $idVehiculo);
			$idVehiculo = $_POST["idVehiculo"];
			$sql2->execute();
			$fila = $sql2-> fetch();
			$capacidad = $fila["capacidad"];
			$fechaSoat = $fila["fechaVenSoat"];
			$fechaTecno = $fila["fechaVenTecno"];

			$fechaactual = Date("Y-m-d");
			

			if ($sql->rowCount()>=1) {
  				print "<script>alert(\"El Vehículo ya tiene una ruta iniciada.\");window.location='../rutas.php';</script>";
			}else if($totalCarga > $capacidad){
				print "<script>alert(\"La carga es mayor a la permitida por el Vehículo.\");window.location='../rutas.php';</script>";
			}else if($fechaSoat < $fechaactual){
				print "<script>alert(\"El Vehículo tiene vencido el SOAT.\");window.location='../rutas.php';</script>";
			}else if ($fechaTecno < $fechaactual){
				print "<script>alert(\"El Vehículo tiene vencida la revisión tecnicomecánica.\");window.location='../rutas.php';</script>";
			}else{
  				$sentenciasql = $conexion->prepare("INSERT INTO rutas (idTrayecto,idEstado,idVehiculo,VigasAcero,Arena,Cemento, Ladrillo) values (:trayecto, :estado, :vehiculo, :vigas, :arena, :cemento, :ladrillo)");

				$sentenciasql->bindParam(':trayecto', $trayecto);
				$sentenciasql->bindParam(':estado', $estado);
				$sentenciasql->bindParam(':vehiculo', $vehiculo);
				$sentenciasql->bindParam(':vigas', $acero);
				$sentenciasql->bindParam(':arena', $arena);
				$sentenciasql->bindParam(':cemento', $cemento);
				$sentenciasql->bindParam(':ladrillo', $ladrillo);

				$trayecto = $_POST["trayecto"];
				$estado = $_POST["estado"];
				$vehiculo = $_POST["idVehiculo"];
				$acero = $_POST["acero"];
				$arena = $_POST["arena"];
				$cemento = $_POST["cemento"];
				$ladrillo = $_POST["ladrillo"];

				$sentenciasql->execute();
				if($sentenciasql!=null){
					print "<script>alert(\"Agregado exitosamente.\");window.location='../rutas.php';</script>";
				}else{
					print "<script>alert(\"No se pudo agregar.\");window.location='../rutas.php';</script>";

				}
			}	
			
	
			
		
	}
}



?>