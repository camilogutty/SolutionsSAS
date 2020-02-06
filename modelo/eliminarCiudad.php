<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
if(!empty($_GET)){
			
			$sql = $conexion->prepare("DELETE FROM ciudades WHERE idCiudad=:id");
			$sql->bindParam(':id', $id);
			$id = $_GET["id"];
			$sql->execute();
			if($sql!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../ciudades.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../ciudades.php';</script>";

			}
}

?>

<input type = "submit" value = "Eliminar" id = "elim" name =  <?php echo $id ?>">