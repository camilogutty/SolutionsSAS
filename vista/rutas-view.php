<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER RUTAS</h2>
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
<form role="form" method="post" action="modelo/agregarRuta.php">
  <div class="form-group">
    <label for="name">Trayeco</label>
    <input type="text" class="form-control" name="trayecto" required>
  </div>
  <div class="form-group">
    <label for="lastname">Estado</label>
    <input type="text" class="form-control" name="estado" required>
  </div>
  <div class="form-group">
    <label for="address">Id Vehículo</label>
    <input type="text" class="form-control" name="idVehiculo" required>
  </div>
  <div class="form-group">
    <label for="email">Vigas de Acero (Kg)</label>
    <input type="text" class="form-control" name="acero" >
  </div>
  <div class="form-group">
    <label for="phone">Arena (Kg)</label>
    <input type="text" class="form-control" name="arena" >
  </div>
  <div class="form-group">
    <label for="phone">Cemento (Kg)</label>
    <input type="text" class="form-control" name="cemento" >
  </div>
  <div class="form-group">
    <label for="phone">Ladrillo (Kg)</label>
    <input type="text" class="form-control" name="ladrillo" >
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
				<th>Trayeco</th>
				<th>Estado</th>
				<th>Id Vehículo</th>
				<th>Vigas de Acero (Kg)</th>
				<th>Arena (Kg)</th>
        <th>Cemento (Kg)</th>
        <th>Ladrillo (Kg)</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizRuta as $registro) {
				echo "<tr><td>" . $registro["idTrayecto"] . "</td>";
				echo "<td>" . $registro["idEstado"] . "</td>";
				echo "<td>" . $registro["idVehiculo"] . "</td>";
				echo "<td>" . $registro["VigasAcero"] . "</td>";
				echo "<td>" . $registro["Arena"] . "</td>";
        echo "<td>" . $registro["Cemento"] . "</td>";
        echo "<td>" . $registro["Ladrillo"] . "</td>";
			?>
			<td style="width:150px;">
			<a href="vista/editarRutas.php?id=<?php echo $registro["idRuta"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $registro["idRuta"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $registro["idRuta"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="modelo/eliminarRuta.php?id="+<?php echo $registro["idRuta"];?>;

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