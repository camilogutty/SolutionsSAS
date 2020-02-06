<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER PERSONAS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">AGREGAR</a>
  <a href="index.php" class="btn btn-default">VOLVER</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="modelo/agregarPersona.php">
  <div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" name="apellido" required>
  </div>
  <div class="form-group">
    <label for="address">Domicilio</label>
    <input type="text" class="form-control" name="address" required>
  </div>
  <div class="form-group">
    <label for="email">Tipo Documento</label>
    <input type="text" class="form-control" name="tipoDocumento" >
  </div>
  <div class="form-group">
    <label for="phone">Documento</label>
    <input type="text" class="form-control" name="documento" >
  </div>
  <div class="form-group">
    <label for="phone">Licencia</label>
    <input type="text" class="form-control" name="licencia" >
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php //include "php/tabla.php"; ?>

<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>NOMBRE</th>
				<th>Apellidos</th>
				<th>TIPO DOCUMENTO</th>
				<th>DOCUMENTO</th>
				<th>LICENCIA</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizPersona as $registro) {
				echo "<tr><td>" . $registro["Nombre"] . "</td>";
				echo "<td>" . $registro["Apellidos"] . "</td>";
				echo "<td>" . $registro["tipoDocumento"] . "</td>";
				echo "<td>" . $registro["Identificacion"] . "</td>";
				echo "<td>" . $registro["Licencia"] . "</td>";
			?>
			<td style="width:150px;">
			<a href="vista/editarPersona.php?id=<?php echo $registro["idPersona"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $registro["idPersona"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $registro["idPersona"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="modelo/eliminarPersona.php?id="+<?php echo $registro["idPersona"];?>;

			}

		});
		</script>
	</td>
</tr>

<?php
			}
			

		?>
	</table>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>


	
