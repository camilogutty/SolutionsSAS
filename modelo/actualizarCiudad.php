<?php
if(!empty($_POST)){
	if(isset($_POST["ciudad"])){
		
			include "conexion.php";
			$con=new Conectar();
			$conexion = $con->conexion();
			
			$sentenciasql = $conexion->prepare("UPDATE ciudades SET ciudad=:ciudad where idCiudad =:id");

			$sentenciasql->bindParam(':ciudad', $ciudad);
			$sentenciasql->bindParam(':id', $id);

			$ciudad = $_POST["ciudad"];
			$id = $_POST["id"];

			$sentenciasql->execute();	



			
			if($sentenciasql!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ciudades.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ciudades.php';</script>";

			}
		
	}
}

?>