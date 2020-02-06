<?php
include "conexion.php";
$con=new Conectar();
$conexion = $con->conexion();
$id = $_GET["id"];
$sql = $conexion->prepare("SELECT * FROM personas where idPersona =:id");
$persona = null;
$sql->bindParam(":id",$id);
$sql->execute();
if ($sql->rowCount()>=1) {
  $fila = $sql-> fetch();
  $persona=$fila;
}else{
  echo "Ocurrio un error";
}



?>

<?php if($persona!=null):?>

<form role="form" method="post" action="../modelo/actualizarPersona.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $fila["Nombre"]; ?>" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" value="<?php echo $fila["Apellidos"]; ?>" name="apellido" required>
  </div>
  
  <div class="form-group">
    <label for="email">Tipo Documento</label>
    <input type="text" class="form-control" value="<?php echo $fila["tipoDocumento"]; ?>" name="documento" >
  </div>
  <div class="form-group">
    <label for="phone">Identificación</label>
    <input type="text" class="form-control" value="<?php echo $fila["Identificacion"]; ?>" name="identificacion" >
  </div>
  <div class="form-group">
    <label for="phone">Licencia</label>
    <input type="text" class="form-control" value="<?php echo $fila["Licencia"]; ?>" name="licencia" >
  </div>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>