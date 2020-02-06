<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();

if(!empty($_POST)){
	if(isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["tipoDocumento"]) && isset($_POST["documento"]) &&isset($_POST["licencia"])){
	
			$sentenciasql = $conexion->prepare("INSERT INTO personas (Nombre,Apellidos,tipoDocumento,Identificacion,Licencia) values (:nombre, :apellidos, :tipDoc, :ident, :Lic)");

			$sentenciasql->bindParam(':nombre', $nombre);
			$sentenciasql->bindParam(':apellidos', $apellidos);
			$sentenciasql->bindParam(':tipDoc', $tipoDoc);
			$sentenciasql->bindParam(':ident', $identif);
			$sentenciasql->bindParam(':Lic', $licencia);

			$nombre = $_POST["nombre"];
			$apellidos = $_POST["apellido"];
			$tipoDoc = $_POST["tipoDocumento"];
			$identif = $_POST["documento"];
			$licencia = $_POST["licencia"];

			$sentenciasql->execute();
			if($sentenciasql!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../personas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../personas.php';</script>";

			}
		
	}
}



?>