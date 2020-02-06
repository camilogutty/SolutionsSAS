<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
if(!empty($_GET)){
			
			$sql = $conexion->prepare("DELETE FROM personas WHERE idPersona=:id");
			$sql->bindParam(':id', $id);
			$id = $_GET["id"];
			$sql->execute();
			if($sql!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../personas.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../personas.php';</script>";

			}
}

?>

<input type = "submit" value = "Eliminar" id = "elim" name =  <?php echo $id ?>">