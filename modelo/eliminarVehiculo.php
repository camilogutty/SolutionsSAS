<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
if(!empty($_GET)){
			
			$sql = $conexion->prepare("DELETE FROM vehiculos WHERE idVehiculo=:id");
			$sql->bindParam(':id', $id);
			$id = $_GET["id"];
			$sql->execute();
			if($sql!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../vehiculos.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../vehiculos.php';</script>";

			}
}

?>

<input type = "submit" value = "Eliminar" id = "elim" name =  <?php echo $id ?>">