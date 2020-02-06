<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER VEHÍCULOS</h2>
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
<form role="form" method="post" action="modelo/agregarVehiculo.php">
  <div class="form-group">
    <label for="name">Persona a Cargo</label>
    <input type="text" class="form-control" name="personaCargo" required>
  </div>
  <div class="form-group">
    <label for="lastname">Capacidad</label>
    <input type="text" class="form-control" name="capacidad" required>
  </div>
  <div class="form-group">
    <label for="address">Fecha Vencimiento Soat</label>
    <input type="date" class="form-control" name="fechaSoat" required>
  </div>
  <div class="form-group">
    <label for="email">Fecha Vencimiento Tecnomecánica</label>
    <input type="date" class="form-control" name="fechaTecno" >
  </div>
  

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->



<table class="table table-bordered table-hover">
		<thead>
			<tr>
        <th>Id Vehículo</th>
				<th>Persona a Cargo</th>
				<th>Capacidad</th>
				<th>Fecha Vencimiento SOAT</th>
				<th>Fecha Vencimiento Tecnicomecánica</th>
			</tr>
		</thead>

		<?php
			
			foreach ($matrizVehiculo as $registro) {
				echo "<tr><td>" . $registro["idVehiculo"] . "</td>";
        echo "<td>" . $registro["Identificacion"] . "</td>";
				echo "<td>" . $registro["capacidad"] . "</td>";
				echo "<td>" . $registro["fechaVenSoat"] . "</td>";
				echo "<td>" . $registro["fechaVenTecno"] . "</td>";
			?>
			<td style="width:150px;">
			<a href="vista/editarVehiculo.php?id=<?php echo $registro["idVehiculo"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $registro["idVehiculo"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $registro["idVehiculo"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="modelo/eliminarVehiculo.php?id="+<?php echo $registro["idVehiculo"];?>;

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