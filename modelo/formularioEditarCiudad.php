<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
$id = $_GET["id"];
$sql = $conexion->prepare("SELECT * FROM ciudades where idCiudad =:id");
$ciudad = null;
$sql->bindParam(":id",$id);
$sql->execute();
if ($sql->rowCount()>=1) {
  $fila = $sql-> fetch();
  $ciudad=$fila;
}else{
  echo "Ocurrio un error";
}



?>

<?php if($ciudad!=null):?>

<form role="form" method="post" action="../modelo/actualizarCiudad.php">
  <div class="form-group">
    <label for="name">Ciudad</label>
    <input type="text" class="form-control" value="<?php echo $fila["ciudad"]; ?>" name="ciudad" required>
  </div>
  
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>