<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
$id = $_GET["id"];
$sql = $conexion->prepare("SELECT * FROM rutas where idRuta =:id");
$ruta = null;
$sql->bindParam(":id",$id);
$sql->execute();
if ($sql->rowCount()>=1) {
  $fila = $sql-> fetch();
  $ruta=$fila;
}else{
  echo "Ocurrio un error";
}



?>

<?php if($ruta!=null):?>

<form role="form" method="post" action="../modelo/actualizarRuta.php">
  <div class="form-group">
    <label for="name">Trayecto</label>
    <input type="text" class="form-control" value="<?php echo $fila["idTrayecto"]; ?>" name="trayecto" required>
  </div>
  <div class="form-group">
    <label for="lastname">Estado</label>
    <input type="text" class="form-control" value="<?php echo $fila["idEstado"]; ?>" name="estado" required>
  </div>
  
  <div class="form-group">
    <label for="email">Vehículo</label>
    <input type="text" class="form-control" value="<?php echo $fila["idVehiculo"]; ?>" name="vehiculo" >
  </div>
  <div class="form-group">
    <label for="phone">Vigas de Acero</label>
    <input type="text" class="form-control" value="<?php echo $fila["VigasAcero"]; ?>" name="vigas" >
  </div>
  <div class="form-group">
    <label for="phone">Arena</label>
    <input type="text" class="form-control" value="<?php echo $fila["Arena"]; ?>" name="arena" >
  </div>
  <div class="form-group">
    <label for="phone">Cemento</label>
    <input type="text" class="form-control" value="<?php echo $fila["Cemento"]; ?>" name="cemento" >
  </div>
  <div class="form-group">
    <label for="phone">Ladrillo</label>
    <input type="text" class="form-control" value="<?php echo $fila["Ladrillo"]; ?>" name="ladrillo" >
  </div>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>