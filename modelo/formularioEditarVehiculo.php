<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
$id = $_GET["id"];
$sql = $conexion->prepare("SELECT * FROM vehiculos where idVehiculo =:id");
$vehiculo = null;
$sql->bindParam(":id",$id);
$sql->execute();
if ($sql->rowCount()>=1) {
  $fila = $sql-> fetch();
  $vehiculo=$fila;
}else{
  echo "Ocurrio un error";
}



?>

<?php if($vehiculo!=null):?>

<form role="form" method="post" action="../modelo/actualizarVehiculo.php">
  <div class="form-group">
    <label for="name">Persona a Cargo</label>
    <input type="text" class="form-control" value="<?php echo $fila["idPersonaCargo"]; ?>" name="personaCargo" required>
  </div>
  <div class="form-group">
    <label for="lastname">Capacidad</label>
    <input type="text" class="form-control" value="<?php echo $fila["capacidad"]; ?>" name="capacidad" required>
  </div>
  
  <div class="form-group">
    <label for="email">Fecha Vencimiento SOAT</label>
    <input type="date" class="form-control" value="<?php echo $fila["fechaVenSoat"]; ?>" name="fechaSoat" >
  </div>
  <div class="form-group">
    <label for="phone">Fecha Vencimiento Tecnicomecánica</label>
    <input type="date" class="form-control" value="<?php echo $fila["fechaVenTecno"]; ?>" name="fechaTecno" >
  </div>
  
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>