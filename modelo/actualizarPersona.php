<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["documento"]) &&isset($_POST["identificacion"]) &&isset($_POST["licencia"])){
		
			include "conexion.php";
			$con=new Conectar();
			$conexion = $con->conexion();
			
			$sentenciasql = $conexion->prepare("UPDATE personas SET Nombre=:nombre, Apellidos=:apellidos, tipoDocumento=:tipDoc, Identificacion=:ident, Licencia=:Lic where idPersona =:id");

			$sentenciasql->bindParam(':nombre', $nombre);
			$sentenciasql->bindParam(':apellidos', $apellidos);
			$sentenciasql->bindParam(':tipDoc', $tipoDoc);
			$sentenciasql->bindParam(':ident', $identif);
			$sentenciasql->bindParam(':Lic', $licencia);
			$sentenciasql->bindParam(':id', $id);

			$nombre = $_POST["nombre"];
			$apellidos = $_POST["apellido"];
			$tipoDoc = $_POST["documento"];
			$identif = $_POST["identificacion"];
			$licencia = $_POST["licencia"];
			$id = $_POST["id"];

			$sentenciasql->execute();	



			
			if($sentenciasql!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../personas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../personas.php';</script>";

			}
		
	}
}



?>